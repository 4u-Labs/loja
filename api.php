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

define('ADMIN_PASSWORD', $_ENV['ADMIN_PASSWORD'] ?? 'Fbr4g4@'); 
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

    case 'click':
        $body = getRequestBodyJson();
        $id = trim($_GET['id'] ?? $body['id'] ?? '');
        if ($id) {
            $stmt = $db->prepare("UPDATE apps SET clicks = COALESCE(clicks, 0) + 1 WHERE id = ?");
            $stmt->execute([$id]);
            $stmt2 = $db->prepare("SELECT clicks FROM apps WHERE id = ?");
            $stmt2->execute([$id]);
            $clicks = (int)($stmt2->fetchColumn() ?: 0);
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
