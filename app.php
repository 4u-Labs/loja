<?php
/**
 * 4u.ia.br — App landing page (SEO friendly)
 * Versão: 2.1.0 (SQLite Support)
 */

declare(strict_types=1);

function h($s){
  return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function is_abs_url($url){
  return is_string($url) && preg_match('~^https?://~i', $url);
}

function base_host(){
  $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
  $scheme = $https ? 'https' : 'http';
  $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
  return $scheme . '://' . $host;
}

function base_path(){
  $script = $_SERVER['SCRIPT_NAME'] ?? '';
  $dir = str_replace('\\', '/', dirname($script));
  return ($dir === '/' || $dir === '.' || $dir === '\\') ? '' : rtrim($dir, '/');
}

function base_url(){
  return base_host() . base_path();
}

function normalize_image_url($url){
  $url = trim((string)$url);
  if ($url === '') return '';
  if (str_starts_with($url, 'data:image')) return $url;
  if (is_abs_url($url)) return $url;
  $bp = base_path();
  if (str_starts_with($url, '/')) {
    if ($bp && !str_starts_with($url, $bp . '/')) $url = $bp . $url;
    return base_host() . $url;
  }
  return base_host() . ($bp ? $bp . '/' : '/') . $url;
}

$dbPath = __DIR__ . '/data/dados.db';
$id = isset($_GET['id']) ? trim((string)$_GET['id']) : '';

$app = null;
if ($id !== '' && file_exists($dbPath)) {
    try {
        $db = new PDO('sqlite:' . $dbPath);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $db->prepare("SELECT * FROM apps WHERE id = ?");
        $stmt->execute([$id]);
        $app = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($app) {
            $app['tags'] = $app['tags'] ? explode(',', $app['tags']) : [];
        }
    } catch (Exception $e) { }
}

if (!$app) {
  if ($id === '') {
    http_response_code(400);
    $title = 'App não informado — 4u.ia.br';
    $desc = 'Informe um ID válido.';
  } else {
    http_response_code(404);
    $title = 'App não encontrado — 4u.ia.br';
    $desc = 'Este app não existe ou foi removido.';
  }
  $canonical = base_url() . ($id ? '/app.php?id=' . rawurlencode($id) : '/');
  $ogImage = '';
} else {
    $appTitle = trim((string)($app['title'] ?? ''));
    $short = trim((string)($app['shortDescription'] ?? ''));
    $category = trim((string)($app['category'] ?? ''));
    $title = ($appTitle !== '' ? $appTitle . ' — 4u.ia.br' : '4u.ia.br');
    $desc = $short !== '' ? $short : 'Conheça este webapp na vitrine 4u.ia.br.';
    $canonical = base_url() . '/app.php?id=' . rawurlencode($id);
    $ogImage = normalize_image_url($app['heroImageUrl'] ?: $app['iconUrl']);
    
    $jsonLd = [
      '@context' => 'https://schema.org',
      '@type' => 'SoftwareApplication',
      'name' => $appTitle,
      'applicationCategory' => $category ?: 'WebApplication',
      'operatingSystem' => 'Web',
      'description' => $desc,
      'url' => $canonical,
    ];
    if ($ogImage) $jsonLd['image'] = $ogImage;
    if ($app['link']) $jsonLd['sameAs'] = $app['link'];
}

$home = (base_path() ?: '') . '/';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= h($title) ?></title>
  <meta name="description" content="<?= h($desc) ?>" />
  <link rel="canonical" href="<?= h($canonical) ?>" />
  <link rel="icon" type="image/png" href="icon-192.png" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="4u.ia.br" />
  <meta property="og:title" content="<?= h($title) ?>" />
  <meta property="og:description" content="<?= h($desc) ?>" />
  <meta property="og:url" content="<?= h($canonical) ?>" />
  <?php if (!empty($ogImage)): ?><meta property="og:image" content="<?= h($ogImage) ?>" /><?php endif; ?>
  <meta name="twitter:card" content="summary_large_image" />
  <?php if (isset($jsonLd)): ?><script type="application/ld+json"><?= json_encode($jsonLd, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script><?php endif; ?>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
    body { background: #090a12; color: #f4f4f5; font-family: 'Inter', sans-serif; }
    .glass { backdrop-filter: blur(20px) saturate(180%); -webkit-backdrop-filter: blur(20px) saturate(180%); }
    .mesh-gradient { position: fixed; inset: 0; z-index: -1; overflow: hidden; pointer-events: none; }
    .mesh-gradient::before { content: ''; position: absolute; width: 150%; height: 150%; top: -25%; left: -25%; background: radial-gradient(ellipse 80% 50% at 20% 40%, rgba(16, 185, 129, 0.15), transparent 50%), radial-gradient(ellipse 60% 50% at 80% 20%, rgba(6, 182, 212, 0.12), transparent 50%), radial-gradient(ellipse 50% 40% at 50% 80%, rgba(20, 184, 166, 0.10), transparent 50%); filter: blur(40px); opacity: 0.5; }
  </style>
</head>
<body class="antialiased">
  <div class="mesh-gradient"></div>
  <div class="mx-auto max-w-4xl px-4 py-10">
    <a href="<?= h($home) ?>" class="glass inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm text-zinc-300 hover:text-white transition-all shadow-lg">← Voltar para a loja</a>
    <div class="mt-6 rounded-3xl border border-white/10 bg-white/5 p-6 sm:p-8">
      <?php if (!$app): ?>
        <h1 class="text-2xl font-bold"><?= h($title) ?></h1>
        <p class="mt-3 text-zinc-300"><?= h($desc) ?></p>
      <?php else: ?>
        <?php if ($app['heroImageUrl']): ?>
          <?php $hero_url = h(normalize_image_url($app['heroImageUrl'])); ?>
          <div class="relative overflow-hidden rounded-2xl border border-white/10 aspect-video w-full flex items-center justify-center mb-6 bg-cover bg-center" style="background-image: url('<?= $hero_url ?>');">
            <!-- Background Glow -->
            <div class="absolute inset-0 backdrop-blur-xl bg-[#090a12]/40"></div>
            <!-- Centered Image -->
            <img src="<?= $hero_url ?>" alt="" class="relative z-10 max-h-full max-w-full object-contain rounded-2xl" />
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#090a12]/80 via-transparent to-transparent pointer-events-none"></div>
          </div>
        <?php endif; ?>
        <div class="flex flex-col gap-5 sm:flex-row sm:items-start">
          <img src="<?= h(normalize_image_url($app['iconUrl'] ?: '')) ?>" alt="" class="h-20 w-20 rounded-2xl border border-white/10 object-cover" />
          <div class="min-w-0 flex-1">
            <h1 class="text-2xl sm:text-3xl font-bold text-white"><?= h($app['title']) ?></h1>
            <p class="mt-2 text-zinc-400"><?= h($app['shortDescription']) ?></p>
            <div class="mt-6 flex flex-wrap gap-3">
              <a href="<?= h($app['link']) ?>" target="_blank" class="rounded-xl bg-white px-6 py-3 text-sm font-semibold text-black">Abrir app</a>
              <a href="<?= h($home . '#/app/' . rawurlencode($id)) ?>" class="rounded-xl border border-white/10 bg-white/5 px-6 py-3 text-sm font-semibold text-white">Ver detalhes</a>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
