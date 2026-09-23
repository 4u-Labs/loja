<?php
/**
 * 4u.ia.br — Dynamic sitemap with Google Images support based on SQLite dados.db
 * Versão: 2.2.0 (SEO Enhanced)
 */

declare(strict_types=1);

header('Content-Type: application/xml; charset=UTF-8');

function base_host(){
  $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
  $scheme = $https ? 'https' : 'http';
  $host = $_SERVER['HTTP_HOST'] ?? '4u.ia.br';
  return $scheme . '://' . $host;
}

function base_path(){
  $script = $_SERVER['SCRIPT_NAME'] ?? '';
  $dir = str_replace('\\', '/', dirname($script));
  if ($dir === '/' || $dir === '.' || $dir === '\\' || $dir === '') {
    return (basename(__DIR__) === 'loja') ? '/loja' : '';
  }
  return rtrim($dir, '/');
}

function base_url(){
  return base_host() . base_path();
}

function xml_esc($s){
  return htmlspecialchars((string)$s, ENT_XML1 | ENT_QUOTES, 'UTF-8');
}

function normalize_img_url($url, $base){
  $url = trim((string)$url);
  if ($url === '' || str_starts_with($url, 'data:image')) return '';
  if (preg_match('~^https?://~i', $url)) return $url;
  if (str_starts_with($url, '/')) return base_host() . $url;
  return $base . '/' . ltrim($url, '/');
}

$dbPath = __DIR__ . '/data/dados.db';
$apps = [];

if (file_exists($dbPath)) {
    try {
        $db = new PDO('sqlite:' . $dbPath);
        $apps = $db->query("SELECT id, title, iconUrl, heroImageUrl, updatedAt, createdAt FROM apps ORDER BY updatedAt DESC")->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {}
}

$base = base_url();

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\">\n";

// Home da Vitrine
$now = gmdate('c');
echo "  <url>\n";
echo "    <loc>" . xml_esc($base . '/') . "</loc>\n";
echo "    <lastmod>{$now}</lastmod>\n";
echo "    <changefreq>daily</changefreq>\n";
echo "    <priority>1.0</priority>\n";
echo "    <image:image>\n";
echo "      <image:loc>" . xml_esc($base . '/icon-512.png') . "</image:loc>\n";
echo "      <image:title>4u.ia.br — App Store</image:title>\n";
echo "    </image:image>\n";
echo "  </url>\n";

foreach ($apps as $a) {
  $id = trim((string)$a['id']);
  if ($id === '') continue;

  $title = trim((string)($a['title'] ?? 'Aplicativo'));
  $ts = (int)($a['updatedAt'] ?? $a['createdAt'] ?? time());
  $timeSec = ($ts > 100000000000) ? (int)floor($ts / 1000) : $ts;
  if ($timeSec < 946684800) $timeSec = time();
  $lastmod = gmdate('c', $timeSec);
  $loc = $base . '/app.php?id=' . rawurlencode($id);
  $imgUrl = normalize_img_url($a['heroImageUrl'] ?: $a['iconUrl'], $base);

  echo "  <url>\n";
  echo "    <loc>" . xml_esc($loc) . "</loc>\n";
  echo "    <lastmod>{$lastmod}</lastmod>\n";
  echo "    <changefreq>weekly</changefreq>\n";
  echo "    <priority>0.8</priority>\n";
  if ($imgUrl) {
    echo "    <image:image>\n";
    echo "      <image:loc>" . xml_esc($imgUrl) . "</image:loc>\n";
    echo "      <image:title>" . xml_esc($title) . "</image:title>\n";
    echo "    </image:image>\n";
  }
  echo "  </url>\n";
}

echo "</urlset>\n";
