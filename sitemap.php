<?php
/**
 * 4u.ia.br — Dynamic sitemap based on SQLite dados.db
 */

declare(strict_types=1);

header('Content-Type: application/xml; charset=UTF-8');

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

$dbPath = __DIR__ . '/data/dados.db';
$apps = [];

if (file_exists($dbPath)) {
    try {
        $db = new PDO('sqlite:' . $dbPath);
        $apps = $db->query("SELECT id, updatedAt, createdAt FROM apps")->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        // Fallback or log error
    }
}

$base = base_url();

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

// Home
$now = gmdate('c');
echo "  <url>\n";
echo "    <loc>{$base}/</loc>\n";
echo "    <lastmod>{$now}</lastmod>\n";
echo "    <changefreq>daily</changefreq>\n";
echo "    <priority>1.0</priority>\n";
echo "  </url>\n";

foreach ($apps as $a) {
  $id = trim((string)$a['id']);
  if ($id === '') continue;

  $ts = (int)($a['updatedAt'] ?? $a['createdAt'] ?? time());
  $lastmod = gmdate('c', (int)floor($ts / 1000));

  $loc = $base . '/app.php?id=' . rawurlencode($id);

  echo "  <url>\n";
  echo "    <loc>{$loc}</loc>\n";
  echo "    <lastmod>{$lastmod}</lastmod>\n";
  echo "    <changefreq>weekly</changefreq>\n";
  echo "    <priority>0.7</priority>\n";
  echo "  </url>\n";
}

echo "</urlset>\n";
