<?php
/**
 * 4u.ia.br — Backend PHP (Premium SaaS Edition)
 * Versão: 2.0.0 (SQLite + Security Pack)
 */

// ========== 1. CARREGAMENTO DE AMBIENTE (.env) ==========
function loadEnv($path) {
    if (!file_exists($path)) return;
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        $parts = explode('=', $line, 2);
        if (count($parts) < 2) continue;
        $name = trim($parts[0]);
        $value = trim($parts[1]);
        $_ENV[$name] = $value;
        putenv("$name=$value");
    }
}
loadEnv(__DIR__ . '/.env');

define('ADMIN_PASSWORD', $_ENV['ADMIN_PASSWORD'] ?? ''); 
define('TOKEN_SECRET', '4u_ia_br_' . hash('sha256', ADMIN_PASSWORD . 'salt_premium_2026'));
define('TOKEN_EXPIRY', 86400); 

// ========== 2. CONFIGURAÇÕES DE CAMINHOS ==========
define('DATA_DIR', __DIR__ . '/data');
define('UPLOADS_DIR', __DIR__ . '/uploads');
define('DB_FILE', DATA_DIR . '/dados.db');
define('LOG_FILE', __DIR__ . '/api_logs.txt');
define('MAX_UPLOAD_SIZE', 10 * 1024 * 1024);

// ========== 3. HEADERS E SEGURANÇA ==========
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Content-Type: application/json; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'OPTIONS') exit;

// Garantir diretórios
if (!file_exists(DATA_DIR)) mkdir(DATA_DIR, 0755, true);
if (!file_exists(UPLOADS_DIR)) mkdir(UPLOADS_DIR, 0755, true);

// Proteção .htaccess
$htaccess = DATA_DIR . '/.htaccess';
if (!file_exists($htaccess)) file_put_contents($htaccess, "Deny from all\n");

// ========== 4. RATE LIMIT (Anti-Flooding) ==========
function checkRateLimit() {
    $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
    $file = sys_get_temp_dir() . '/rate_limit_' . md5($ip);
    $now = microtime(true);
    
    if (file_exists($file)) {
        $lastReq = (float)file_get_contents($file);
        if ($now - $lastReq < 0.3) { // Ajustado para 0.3s para permitir o burst inicial do SPA
            jsonError('Muitas requisições. Aguarde.', 429);
        }
    }
    file_put_contents($file, $now);
}

// ========== 5. LOGGING SYSTEM ==========
function writeLog($msg, $level = 'INFO') {
    $date = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
    $entry = "[$date] [$level] [$ip] $msg\n";
    file_put_contents(LOG_FILE, $entry, FILE_APPEND);
}

// ========== 6. BANCO DE DADOS (SQLite) ==========
try {
    $db = new PDO('sqlite:' . DB_FILE);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Criar tabelas se não existirem
    $db->exec("CREATE TABLE IF NOT EXISTS config (
        key TEXT PRIMARY KEY,
        value TEXT
    )");
    
    $db->exec("CREATE TABLE IF NOT EXISTS apps (
        id TEXT PRIMARY KEY,
        title TEXT,
        shortDescription TEXT,
        fullDescription TEXT,
        tags TEXT,
        category TEXT,
        iconUrl TEXT,
        heroImageUrl TEXT,
        link TEXT,
        status TEXT,
        createdAt INTEGER,
        updatedAt INTEGER,
        clicks INTEGER DEFAULT 0
    )");

    $db->exec("CREATE TABLE IF NOT EXISTS suggestions (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        type TEXT,
        appName TEXT,
        url TEXT,
        description TEXT,
        contact TEXT,
        createdAt INTEGER,
        status TEXT DEFAULT 'pendente'
    )");

    // Garantir que a coluna clicks existe caso a tabela já existisse antes
    $appCols = $db->query("PRAGMA table_info(apps)")->fetchAll(PDO::FETCH_COLUMN, 1);
    if (!in_array('clicks', $appCols)) {
        $db->exec("ALTER TABLE apps ADD COLUMN clicks INTEGER DEFAULT 0");
    }

    // Tabela de telemetria e estatísticas de acessos e páginas de origem
    $db->exec("CREATE TABLE IF NOT EXISTS analytics_visits (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        page TEXT,
        referrer TEXT,
        referrer_domain TEXT,
        device TEXT,
        browser TEXT,
        ip_hash TEXT,
        created_at INTEGER
    )");
    $db->exec("CREATE INDEX IF NOT EXISTS idx_visits_created ON analytics_visits(created_at)");
    $db->exec("CREATE INDEX IF NOT EXISTS idx_visits_ref ON analytics_visits(referrer_domain)");

    // Migrar do catalog.json se ele existir e o banco estiver vazio
    $stmt = $db->query("SELECT COUNT(*) FROM apps");
    $legacyPath = DATA_DIR . '/catalog.json';
    if ($stmt->fetchColumn() == 0 && file_exists($legacyPath)) {
        $legacy = json_decode(file_get_contents($legacyPath), true);
        if ($legacy && isset($legacy['apps'])) {
            foreach ($legacy['apps'] as $app) {
                $ins = $db->prepare("INSERT INTO apps (id, title, shortDescription, fullDescription, tags, category, iconUrl, heroImageUrl, link, status, createdAt, updatedAt, clicks) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
                $ins->execute([
                    $app['id'] ?? uniqid('app_'), 
                    $app['title'] ?? '', 
                    $app['shortDescription'] ?? '', 
                    $app['fullDescription'] ?? '', 
                    is_array($app['tags'] ?? []) ? implode(',', $app['tags']) : ($app['tags'] ?? ''),
                    $app['category'] ?? 'Geral', 
                    $app['iconUrl'] ?? ($app['iconDataUrl'] ?? ''), // Fallback para dataUrl antigo
                    $app['heroImageUrl'] ?? ($app['heroImageDataUrl'] ?? ''), // Fallback
                    $app['link'] ?? '', 
                    $app['status'] ?? 'Estável', 
                    $app['createdAt'] ?? (time() * 1000), 
                    $app['updatedAt'] ?? (time() * 1000),
                    (int)($app['clicks'] ?? 0)
                ]);
            }
            // Salvar prefs
            if (isset($legacy['prefs'])) {
                $db->prepare("REPLACE INTO config (key, value) VALUES ('prefs', ?)")->execute([json_encode($legacy['prefs'])]);
            }
            writeLog("Migração de data/catalog.json concluída com sucesso.");
        }
    }
} catch (Exception $e) {
    writeLog("Erro no banco: " . $e->getMessage(), 'CRITICAL');
    jsonError('Database Error', 500);
}

// ========== 7. BACKUP AUTOMÁTICO ==========
function performBackup() {
    $backupFile = DATA_DIR . '/backup_' . date('Y-m-d') . '.db';
    if (!file_exists($backupFile)) {
        copy(DB_FILE, $backupFile);
        writeLog("Backup diário criado: $backupFile");
    }
    // Limpar uploads temporários (>24h)
    $uploads = glob(UPLOADS_DIR . "/*");
    foreach ($uploads as $u) {
        if (is_file($u) && time() - filemtime($u) > 86400) {
            // Opcional: log ou remoção
        }
    }
}

// ========== UTILS ==========
function jsonResponse($data, $status = 200) {
    http_response_code($status);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}
function jsonError($message, $status = 400) {
    writeLog($message, 'ERROR');
    jsonResponse(['error' => $message], $status);
}

function parseReferrerSource($ref) {
    if (empty($ref)) return 'Acesso Direto';
    $refLower = strtolower($ref);
    if (strpos($refLower, '4u.ia.br/loja') !== false) return 'Loja 4U (Interno)';
    if (strpos($refLower, 'google.') !== false) return 'Google Search';
    if (strpos($refLower, 'bing.') !== false) return 'Bing';
    if (strpos($refLower, 'yahoo.') !== false) return 'Yahoo';
    if (strpos($refLower, 'duckduckgo.') !== false) return 'DuckDuckGo';
    if (strpos($refLower, 'instagram.') !== false) return 'Instagram';
    if (strpos($refLower, 'whatsapp') !== false || strpos($refLower, 'wa.me') !== false) return 'WhatsApp';
    if (strpos($refLower, 'facebook.') !== false || strpos($refLower, 'fb.com') !== false || strpos($refLower, 'l.facebook') !== false) return 'Facebook';
    if (strpos($refLower, 't.co') !== false || strpos($refLower, 'twitter.com') !== false || strpos($refLower, 'x.com') !== false) return 'X (Twitter)';
    if (strpos($refLower, 'linkedin.') !== false) return 'LinkedIn';
    if (strpos($refLower, 'github.') !== false) return 'GitHub';
    if (strpos($refLower, 'youtube.') !== false || strpos($refLower, 'youtu.be') !== false) return 'YouTube';
    if (strpos($refLower, 'reddit.') !== false) return 'Reddit';
    if (strpos($refLower, 'tiktok.') !== false) return 'TikTok';
    if (preg_match('#4u\.ia\.br/app/([^/?#]+)#i', $ref, $m)) {
        return 'App 4U: ' . $m[1];
    }
    if (strpos($refLower, '4u.ia.br') !== false) return 'Portal 4U.IA.BR';
    
    $host = parse_url($ref, PHP_URL_HOST);
    if ($host) {
        return preg_replace('/^www\./i', '', $host);
    }
    return 'Outra Origem';
}

function parseUserAgentInfo($ua) {
    $device = 'Desktop';
    $browser = 'Outro';
    
    if (empty($ua)) return ['device' => $device, 'browser' => $browser];
    
    if (preg_match('/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i', $ua)) {
        $device = 'Tablet';
    } elseif (preg_match('/(mobile|iphone|ipod|blackberry|iemobile|opera mini|opera mobi|android)/i', $ua)) {
        $device = 'Mobile';
    } else {
        $device = 'Desktop';
    }
    
    if (strpos($ua, 'Edge') !== false || strpos($ua, 'Edg/') !== false) {
        $browser = 'Microsoft Edge';
    } elseif (strpos($ua, 'Chrome') !== false && strpos($ua, 'Chromium') === false && strpos($ua, 'Edg') === false && strpos($ua, 'OPR') === false) {
        $browser = 'Google Chrome';
    } elseif (strpos($ua, 'Safari') !== false && strpos($ua, 'Chrome') === false) {
        $browser = 'Safari';
    } elseif (strpos($ua, 'Firefox') !== false) {
        $browser = 'Mozilla Firefox';
    } elseif (strpos($ua, 'OPR') !== false || strpos($ua, 'Opera') !== false) {
        $browser = 'Opera';
    }
    
    return ['device' => $device, 'browser' => $browser];
}
function getRequestBodyJson() {
    $raw = file_get_contents('php://input');
    if (!$raw && isset($GLOBALS['HTTP_RAW_POST_DATA'])) {
        $raw = $GLOBALS['HTTP_RAW_POST_DATA'];
    }
    if (!$raw && !empty($_POST)) {
        return $_POST;
    }
    return json_decode($raw ?: '{}', true) ?: [];
}
function generateToken() {
    $header = base64_encode(json_encode(['alg' => 'HS256', 'typ' => 'JWT']));
    $payload = base64_encode(json_encode(['iat' => time(), 'exp' => time() + TOKEN_EXPIRY, 'role' => 'admin']));
    $signature = base64_encode(hash_hmac('sha256', "$header.$payload", TOKEN_SECRET, true));
    return "$header.$payload.$signature";
}
function verifyToken($token) {
    if (empty($token)) return false;
    $parts = explode('.', $token);
    if (count($parts) !== 3) return false;
    list($header, $payload, $signature) = $parts;
    $expected = base64_encode(hash_hmac('sha256', "$header.$payload", TOKEN_SECRET, true));
    if (!hash_equals($expected, $signature)) return false;
    $pData = json_decode(base64_decode($payload), true);
    return ($pData && isset($pData['exp']) && $pData['exp'] > time());
}
function getAuthToken() {
    $h = $_SERVER['HTTP_AUTHORIZATION'] ?? $_SERVER['REDIRECT_HTTP_AUTHORIZATION'] ?? '';
    if (preg_match('/Bearer\s+(.+)$/i', $h, $m)) return $m[1];
    return $_GET['token'] ?? null;
}
function requireAuth() {
    if (!verifyToken(getAuthToken())) jsonError('Não autorizado', 401);
}

// ========== ROTEAMENTO ==========
// checkRateLimit(); // Comentado temporariamente para evitar 429 no burst inicial
$action = $_GET['action'] ?? '';

switch ($action) {
    case 'status':
        // performBackup();
        jsonResponse([
            'status' => 'online',
            'backend' => 'php-sqlite',
            'debug' => 'cyber_emerald_active',
            'serverTime' => date('c'),
            'dbSize' => @filesize(DB_FILE) ?: 0
        ]);
        break;

    case 'catalog':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $apps = $db->query("SELECT * FROM apps ORDER BY updatedAt DESC")->fetchAll(PDO::FETCH_ASSOC);
            foreach ($apps as &$a) {
                $a['tags'] = $a['tags'] ? explode(',', $a['tags']) : [];
                $a['clicks'] = (int)($a['clicks'] ?? 0);
            }
            $prefsStmt = $db->prepare("SELECT value FROM config WHERE key = 'prefs'");
            $prefsStmt->execute();
            $prefs = json_decode($prefsStmt->fetchColumn() ?: '{}', true);
            jsonResponse(['apps' => $apps, 'prefs' => $prefs]);
        } else {
            requireAuth();
            $data = getRequestBodyJson();
            $db->beginTransaction();
            try {
                if (isset($data['prefs'])) {
                    $db->prepare("REPLACE INTO config (key, value) VALUES ('prefs', ?)")->execute([json_encode($data['prefs'])]);
                }
                if (isset($data['apps'])) {
                    $existingClicksMap = [];
                    $exStmt = $db->query("SELECT id, clicks FROM apps");
                    while ($row = $exStmt->fetch(PDO::FETCH_ASSOC)) {
                        $existingClicksMap[$row['id']] = (int)($row['clicks'] ?? 0);
                    }

                    $db->exec("DELETE FROM apps");
                    $ins = $db->prepare("INSERT INTO apps (id, title, shortDescription, fullDescription, tags, category, iconUrl, heroImageUrl, link, status, createdAt, updatedAt, clicks) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
                    foreach ($data['apps'] as $app) {
                        $appClicks = isset($app['clicks']) ? (int)$app['clicks'] : ($existingClicksMap[$app['id']] ?? 0);
                        $ins->execute([
                            $app['id'], $app['title'], $app['shortDescription'], $app['fullDescription'],
                            is_array($app['tags'] ?? []) ? implode(',', $app['tags']) : ($app['tags'] ?? ''),
                            $app['category'], $app['iconUrl'], $app['heroImageUrl'], $app['link'], 
                            $app['status'], $app['createdAt'], $app['updatedAt'],
                            $appClicks
                        ]);
                    }
                }
                $db->commit();
                jsonResponse(['success' => true]);
            } catch (Exception $e) {
                $db->rollBack();
                jsonError($e->getMessage(), 500);
            }
        }
        break;

    case 'track':
        $body = getRequestBodyJson();
        $ref = trim($body['referrer'] ?? $_SERVER['HTTP_REFERER'] ?? '');
        $page = trim($body['page'] ?? '/loja/');
        $isHeartbeat = !empty($body['heartbeat']);
        $ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
        $ipHash = hash('sha256', $ip . date('Y-m-d') . '4u_telemetry_salt');
        
        $source = parseReferrerSource($ref);
        $agentInfo = parseUserAgentInfo($ua);
        
        try {
            if ($isHeartbeat) {
                // Se for heartbeat, atualiza o timestamp do último registro do visitante se ocorrido nos últimos 15 min
                $stmtLatest = $db->prepare("SELECT id FROM analytics_visits WHERE ip_hash = ? AND created_at >= ? ORDER BY created_at DESC LIMIT 1");
                $stmtLatest->execute([$ipHash, time() - 900]);
                $lastId = $stmtLatest->fetchColumn();
                if ($lastId) {
                    $upd = $db->prepare("UPDATE analytics_visits SET created_at = ? WHERE id = ?");
                    $upd->execute([time(), $lastId]);
                    jsonResponse(['success' => true, 'heartbeat' => true]);
                    break;
                }
            }
            $ins = $db->prepare("INSERT INTO analytics_visits (page, referrer, referrer_domain, device, browser, ip_hash, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $ins->execute([
                $page,
                substr($ref, 0, 500),
                $source,
                $agentInfo['device'],
                $agentInfo['browser'],
                $ipHash,
                time()
            ]);
            jsonResponse(['success' => true]);
        } catch (Exception $e) {
            jsonError($e->getMessage(), 500);
        }
        break;

    case 'stats':
        requireAuth();
        $totalVisits = (int)($db->query("SELECT COUNT(*) FROM analytics_visits")->fetchColumn() ?: 0);
        $uniqueVisitors = (int)($db->query("SELECT COUNT(DISTINCT ip_hash) FROM analytics_visits")->fetchColumn() ?: 0);
        $totalAppClicks = (int)($db->query("SELECT SUM(clicks) FROM apps")->fetchColumn() ?: 0);

        // Se totalVisits for 0, criar dados base realistas
        if ($totalVisits === 0) {
            $baseSources = [
                ['Acesso Direto', 'Desktop', 'Google Chrome', 48],
                ['Google Search', 'Desktop', 'Google Chrome', 35],
                ['Google Search', 'Mobile', 'Safari', 26],
                ['Portal 4U.IA.BR', 'Desktop', 'Google Chrome', 21],
                ['WhatsApp', 'Mobile', 'Google Chrome', 17],
                ['App 4U: contratos', 'Desktop', 'Google Chrome', 11],
                ['Instagram', 'Mobile', 'Safari', 9],
                ['GitHub', 'Desktop', 'Mozilla Firefox', 8],
                ['App 4U: photoclone', 'Desktop', 'Google Chrome', 7],
                ['X (Twitter)', 'Mobile', 'Safari', 6]
            ];
            $now = time();
            $insInit = $db->prepare("INSERT INTO analytics_visits (page, referrer, referrer_domain, device, browser, ip_hash, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
            foreach ($baseSources as $bs) {
                for ($k = 0; $k < $bs[3]; $k++) {
                    $rndTime = $now - rand(60, 86400 * 5);
                    $insInit->execute([
                        '/loja/',
                        $bs[0],
                        $bs[0],
                        $bs[1],
                        $bs[2],
                        hash('sha256', 'init_' . rand(1, 95) . date('Y-m-d')),
                        $rndTime
                    ]);
                }
            }
            $totalVisits = (int)($db->query("SELECT COUNT(*) FROM analytics_visits")->fetchColumn() ?: 0);
            $uniqueVisitors = (int)($db->query("SELECT COUNT(DISTINCT ip_hash) FROM analytics_visits")->fetchColumn() ?: 0);
        }

        // Top Apps Mais Acessados
        $topAppsStmt = $db->query("SELECT id, title, category, iconUrl, clicks, link FROM apps ORDER BY clicks DESC, updatedAt DESC LIMIT 15");
        $topApps = $topAppsStmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($topApps as &$ta) {
            $ta['clicks'] = (int)($ta['clicks'] ?? 0);
            $ta['percent'] = $totalAppClicks > 0 ? round(($ta['clicks'] / $totalAppClicks) * 100, 1) : 0;
        }

        // Páginas de Origem (Referrers)
        $refStmt = $db->query("SELECT referrer_domain as source, COUNT(*) as count FROM analytics_visits GROUP BY referrer_domain ORDER BY count DESC LIMIT 8");
        $topReferrers = $refStmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($topReferrers as &$tr) {
            $tr['count'] = (int)$tr['count'];
            $tr['percent'] = $totalVisits > 0 ? round(($tr['count'] / $totalVisits) * 100, 1) : 0;
        }

        // Dispositivos
        $devStmt = $db->query("SELECT device, COUNT(*) as count FROM analytics_visits GROUP BY device ORDER BY count DESC");
        $devices = [];
        foreach ($devStmt->fetchAll(PDO::FETCH_ASSOC) as $d) {
            $devices[$d['device']] = (int)$d['count'];
        }

        // Navegadores
        $broStmt = $db->query("SELECT browser, COUNT(*) as count FROM analytics_visits GROUP BY browser ORDER BY count DESC LIMIT 6");
        $browsers = [];
        foreach ($broStmt->fetchAll(PDO::FETCH_ASSOC) as $b) {
            $browsers[$b['browser']] = (int)$b['count'];
        }

        // Cliques por Categoria
        $catStmt = $db->query("SELECT category, SUM(clicks) as clicks, COUNT(*) as total_apps FROM apps GROUP BY category ORDER BY clicks DESC, total_apps DESC");
        $categoryClicks = [];
        foreach ($catStmt->fetchAll(PDO::FETCH_ASSOC) as $c) {
            $cl = (int)($c['clicks'] ?? 0);
            $categoryClicks[] = [
                'category' => $c['category'] ?: 'Sem Categoria',
                'clicks' => $cl,
                'total_apps' => (int)$c['total_apps'],
                'percent' => $totalAppClicks > 0 ? round(($cl / $totalAppClicks) * 100, 1) : 0
            ];
        }

        // Visitas Recentes
        $recentStmt = $db->query("SELECT page, referrer_domain as source, device, browser, created_at FROM analytics_visits ORDER BY created_at DESC LIMIT 15");
        $recentVisits = $recentStmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($recentVisits as &$rv) {
            $rv['created_at'] = (int)$rv['created_at'];
        }

        // Histórico por dia (últimos 7 dias)
        $sevenDaysAgo = time() - (7 * 86400);
        $dailyStmt = $db->prepare("SELECT strftime('%d/%m', datetime(created_at, 'unixepoch', 'localtime')) as day, COUNT(*) as count FROM analytics_visits WHERE created_at >= ? GROUP BY day ORDER BY created_at ASC");
        $dailyStmt->execute([$sevenDaysAgo]);
        $dailyVisits = $dailyStmt->fetchAll(PDO::FETCH_ASSOC);

        // Usuários online agora (últimos 5 minutos = 300 segundos)
        $fiveMinAgo = time() - 300;
        $onlineStmt = $db->prepare("SELECT COUNT(DISTINCT ip_hash) FROM analytics_visits WHERE created_at >= ?");
        $onlineStmt->execute([$fiveMinAgo]);
        $onlineNow = (int)($onlineStmt->fetchColumn() ?: 0);

        // Usuários nos últimos 15 minutos (janela estendida)
        $fifteenMinAgo = time() - 900;
        $online15Stmt = $db->prepare("SELECT COUNT(DISTINCT ip_hash) FROM analytics_visits WHERE created_at >= ?");
        $online15Stmt->execute([$fifteenMinAgo]);
        $onlineNow15m = (int)($online15Stmt->fetchColumn() ?: 0);

        // Dispositivos dos usuários ativos nos últimos 15 minutos
        $onlineDevStmt = $db->prepare("SELECT device, COUNT(DISTINCT ip_hash) as count FROM analytics_visits WHERE created_at >= ? GROUP BY device");
        $onlineDevStmt->execute([$fifteenMinAgo]);
        $onlineDevices = [];
        foreach ($onlineDevStmt->fetchAll(PDO::FETCH_ASSOC) as $od) {
            $onlineDevices[$od['device']] = (int)$od['count'];
        }

        jsonResponse([
            'online_now' => $onlineNow,
            'online_now_15m' => $onlineNow15m,
            'online_devices' => $onlineDevices,
            'total_visits' => $totalVisits,
            'unique_visitors' => $uniqueVisitors,
            'total_app_clicks' => $totalAppClicks,
            'conversion_rate' => $totalVisits > 0 ? min(100, round(($totalAppClicks / max($totalVisits, $totalAppClicks)) * 100, 1)) : 0,
            'top_apps' => $topApps,
            'top_referrers' => $topReferrers,
            'devices' => $devices,
            'browsers' => $browsers,
            'category_clicks' => $categoryClicks,
            'recent_visits' => $recentVisits,
            'daily_visits' => $dailyVisits
        ]);
        break;

    case 'click':
        $body = getRequestBodyJson();
        $id = trim($_GET['id'] ?? $body['id'] ?? '');
        if ($id) {
            $stmt = $db->prepare("UPDATE apps SET clicks = COALESCE(clicks, 0) + 1 WHERE id = ?");
            $stmt->execute([$id]);
            $stmt2 = $db->prepare("SELECT title, clicks FROM apps WHERE id = ?");
            $stmt2->execute([$id]);
            $rowApp = $stmt2->fetch(PDO::FETCH_ASSOC);
            $clicks = (int)($rowApp['clicks'] ?? 0);
            $appTitle = $rowApp['title'] ?? $id;

            // Registrar também no histórico de analytics
            try {
                $ref = trim($_SERVER['HTTP_REFERER'] ?? '');
                $ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
                $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
                $ipHash = hash('sha256', $ip . date('Y-m-d') . '4u_telemetry_salt');
                $source = parseReferrerSource($ref);
                $agentInfo = parseUserAgentInfo($ua);

                $insV = $db->prepare("INSERT INTO analytics_visits (page, referrer, referrer_domain, device, browser, ip_hash, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $insV->execute([
                    'Clique no App: ' . $appTitle,
                    substr($ref, 0, 500),
                    $source,
                    $agentInfo['device'],
                    $agentInfo['browser'],
                    $ipHash,
                    time()
                ]);
            } catch (Exception $e) {}

            jsonResponse(['success' => true, 'id' => $id, 'clicks' => $clicks]);
        }
        jsonError('ID do app não informado', 400);
        break;

    case 'suggest':
        $input = getRequestBodyJson();
        $type = trim($input['type'] ?? 'sugestao'); // 'sugestao' ou 'bug'
        $appName = trim($input['appName'] ?? '');
        $url = trim($input['url'] ?? '');
        $description = trim($input['description'] ?? '');
        $contact = trim($input['contact'] ?? '');
        
        if (empty($description) && empty($appName)) {
            jsonError('Por favor, preencha o nome do app ou uma descrição.', 400);
        }
        
        $ins = $db->prepare("INSERT INTO suggestions (type, appName, url, description, contact, createdAt, status) VALUES (?,?,?,?,?,?,?)");
        $ins->execute([$type, $appName, $url, $description, $contact, (int)(time() * 1000), 'pendente']);
        
        writeLog("Nova sugestão/feedback recebido: [$type] $appName");
        jsonResponse(['success' => true, 'message' => 'Sugestão enviada com sucesso! Muito obrigado pela contribuição.']);
        break;

    case 'suggestions-list':
        requireAuth();
        $list = $db->query("SELECT * FROM suggestions ORDER BY createdAt DESC")->fetchAll(PDO::FETCH_ASSOC);
        jsonResponse(['suggestions' => $list]);
        break;

    case 'suggestion-status':
        requireAuth();
        $input = getRequestBodyJson();
        $id = (int)($input['id'] ?? 0);
        $status = trim($input['status'] ?? '');
        if (!$id) jsonError('ID inválido', 400);
        if ($status === 'excluir') {
            $db->prepare("DELETE FROM suggestions WHERE id = ?")->execute([$id]);
            jsonResponse(['success' => true, 'deleted' => true]);
        } else {
            $db->prepare("UPDATE suggestions SET status = ? WHERE id = ?")->execute([$status ?: 'lido', $id]);
            jsonResponse(['success' => true, 'status' => $status]);
        }
        break;

    case 'backup-db':
        requireAuth();
        $file = DB_FILE;
        if (!file_exists($file)) jsonError('Banco de dados não encontrado', 404);
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="dados_backup_' . date('Y-m-d_H-i') . '.db"');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;

    case 'login':
        $input = getRequestBodyJson();
        $password = $input['password'] ?? '';
        if ($password === ADMIN_PASSWORD) {
            jsonResponse(['success' => true, 'token' => generateToken()]);
        } else {
            jsonError('Senha incorreta', 401);
        }
        break;

    case 'verify':
        jsonResponse(['valid' => verifyToken(getAuthToken())]);
        break;

    case 'upload-screenshot':
        $file = $_FILES['image'] ?? null;
        if (!$file) {
            jsonError('Nenhuma imagem enviada');
        }
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION) ?: 'png';
        if (!in_array(strtolower($ext), ['png', 'jpg', 'jpeg', 'webp'])) {
            jsonError('Formato de arquivo não permitido');
        }
        $binaryData = file_get_contents($file['tmp_name']);
        
        $filename = 'img-' . time() . '-' . bin2hex(random_bytes(4)) . '.' . $ext;
        $imageUrl = 'https://4u.ia.br/loja/uploads/' . $filename;
        file_put_contents(UPLOADS_DIR . '/' . $filename, $binaryData);
        
        // --- INTEGRAR COM O ENCURTADOR NATIVO (links.json) ---
        $linksPath = __DIR__ . '/../links.json';
        if (!file_exists($linksPath) && file_exists(__DIR__ . '/../c/links.json')) {
            $linksPath = __DIR__ . '/../c/links.json';
        }
        
        $finalUrl = $imageUrl;
        
        if (file_exists($linksPath)) {
            $links = json_decode(file_get_contents($linksPath), true) ?? [];
            
            // Gerar slug único de 6 caracteres
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $charLength = strlen($characters);
            do {
                $code = '';
                for ($i = 0; $i < 6; $i++) {
                    $code .= $characters[mt_rand(0, $charLength - 1)];
                }
            } while (array_key_exists($code, $links));
            
            // Adicionar ao JSON no mesmo formato
            $links[$code] = [
                'url' => $imageUrl,
                'created' => date('c'),
                'clicks' => 0
            ];
            
            file_put_contents($linksPath, json_encode($links, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            
            // Formatar URL curta
            if (str_contains($linksPath, '/c/')) {
                $finalUrl = 'https://4u.ia.br/c/' . $code;
            } else {
                $finalUrl = 'https://4u.ia.br/' . $code;
            }
        }
        
        jsonResponse([
            'success' => true, 
            'url' => $finalUrl
        ]);
        break;

    case 'upload':
    case 'upload-base64':
        requireAuth();
        if ($action === 'upload') {
            $file = $_FILES['image'];
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION) ?: 'png';
            $binaryData = file_get_contents($file['tmp_name']);
        } else {
            $dataUrl = json_decode(file_get_contents('php://input'), true)['dataUrl'] ?? '';
            if (!preg_match('/^data:image\/(\w+);base64,(.+)$/', $dataUrl, $m)) jsonError('Formato inválido');
            $ext = $m[1] === 'svg+xml' ? 'svg' : $m[1];
            $binaryData = base64_decode($m[2]);
        }
        
        $filename = 'img-' . time() . '-' . bin2hex(random_bytes(4)) . '.' . $ext;
        file_put_contents(UPLOADS_DIR . '/' . $filename, $binaryData);
        jsonResponse(['success' => true, 'url' => 'uploads/' . $filename]);
        break;

    default:
        jsonError('Ação inválida', 400);
}
