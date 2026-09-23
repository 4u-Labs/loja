const CACHE_NAME = '4u-loja-v2.1';
const ASSETS = [
  './',
  './index.php',
  './manifest.json',
  './favicon-32x32.png',
  './icon-192.png'
];

self.addEventListener('install', (event) => {
  self.skipWaiting();
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => cache.addAll(ASSETS))
  );
});

self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((keys) => {
      return Promise.all(
        keys.map((key) => {
          if (key !== CACHE_NAME) {
            return caches.delete(key);
          }
        })
      );
    }).then(() => self.clients.claim())
  );
});

self.addEventListener('fetch', (event) => {
  const url = new URL(event.request.url);

  // Não cacheia requisições da API para manter catálogo e cliques sempre em tempo real
  if (url.pathname.includes('api.php') || url.pathname.includes('/api/')) {
    event.respondWith(fetch(event.request));
    return;
  }

  // Network first para o index.php / página inicial para sempre receber a versão mais recente
  if (event.request.mode === 'navigate' || url.pathname.endsWith('index.php') || url.pathname.endsWith('/loja/')) {
    event.respondWith(
      fetch(event.request)
        .then((response) => {
          const resClone = response.clone();
          caches.open(CACHE_NAME).then((cache) => cache.put(event.request, resClone));
          return response;
        })
        .catch(() => caches.match(event.request).then((res) => res || caches.match('./index.php')))
    );
    return;
  }

  // Cache first para assets estáticos
  event.respondWith(
    caches.match(event.request).then((cachedResponse) => {
      return cachedResponse || fetch(event.request);
    })
  );
});
