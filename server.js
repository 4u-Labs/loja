/**
 * 4u.ia.br — Backend Server
 * 
 * Servidor Node.js/Express para persistência automática do catálogo.
 * Salva dados e imagens diretamente no servidor.
 * 
 * Para executar:
 *   npm install
 *   npm start
 * 
 * O servidor roda na porta 3000 por padrão.
 */

const express = require('express');
const multer = require('multer');
const cors = require('cors');
const fs = require('fs');
const path = require('path');

const app = express();
const PORT = process.env.PORT || 3000;

// Diretórios
const DATA_DIR = path.join(__dirname, 'data');
const UPLOADS_DIR = path.join(__dirname, 'uploads');
const CATALOG_FILE = path.join(DATA_DIR, 'catalog.json');

// Criar diretórios se não existirem
[DATA_DIR, UPLOADS_DIR].forEach(dir => {
  if (!fs.existsSync(dir)) {
    fs.mkdirSync(dir, { recursive: true });
    console.log(`📁 Diretório criado: ${dir}`);
  }
});

// Criar catalog.json inicial se não existir
if (!fs.existsSync(CATALOG_FILE)) {
  const initialCatalog = {
    version: 1,
    exportedAt: new Date().toISOString(),
    prefs: {
      storeLogoDataUrl: '',
      heroAppId: ''
    },
    apps: []
  };
  fs.writeFileSync(CATALOG_FILE, JSON.stringify(initialCatalog, null, 2));
  console.log('📄 catalog.json inicial criado');
}

// Middleware
app.use(cors());
app.use(express.json({ limit: '50mb' }));
app.use(express.urlencoded({ extended: true, limit: '50mb' }));

// Servir arquivos estáticos
app.use(express.static(__dirname));
app.use('/uploads', express.static(UPLOADS_DIR));

// Configuração do Multer para upload de imagens
const storage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, UPLOADS_DIR);
  },
  filename: (req, file, cb) => {
    const uniqueSuffix = Date.now() + '-' + Math.round(Math.random() * 1E9);
    const ext = path.extname(file.originalname) || '.png';
    cb(null, `img-${uniqueSuffix}${ext}`);
  }
});

const upload = multer({
  storage,
  limits: { fileSize: 10 * 1024 * 1024 }, // 10MB max
  fileFilter: (req, file, cb) => {
    const allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/svg+xml'];
    if (allowed.includes(file.mimetype)) {
      cb(null, true);
    } else {
      cb(new Error('Tipo de arquivo não permitido'), false);
    }
  }
});

// ========== API ENDPOINTS ==========

// GET /api/catalog - Retorna o catálogo atual
app.get('/api/catalog', (req, res) => {
  try {
    if (!fs.existsSync(CATALOG_FILE)) {
      return res.json({ apps: [], prefs: { storeLogoDataUrl: '', heroAppId: '' } });
    }
    const data = fs.readFileSync(CATALOG_FILE, 'utf8');
    const catalog = JSON.parse(data);
    res.json(catalog);
  } catch (err) {
    console.error('Erro ao ler catálogo:', err);
    res.status(500).json({ error: 'Erro ao ler catálogo', details: err.message });
  }
});

// POST /api/catalog - Salva o catálogo completo
app.post('/api/catalog', (req, res) => {
  try {
    const catalog = req.body;
    
    // Validação básica
    if (!catalog || typeof catalog !== 'object') {
      return res.status(400).json({ error: 'Dados inválidos' });
    }

    // Garantir estrutura mínima
    const toSave = {
      version: catalog.version || 1,
      exportedAt: new Date().toISOString(),
      savedAt: new Date().toISOString(),
      prefs: catalog.prefs || { storeLogoDataUrl: '', heroAppId: '' },
      apps: Array.isArray(catalog.apps) ? catalog.apps : []
    };

    fs.writeFileSync(CATALOG_FILE, JSON.stringify(toSave, null, 2));
    console.log(`✅ Catálogo salvo: ${toSave.apps.length} apps`);
    
    res.json({ 
      success: true, 
      message: 'Catálogo salvo com sucesso',
      savedAt: toSave.savedAt,
      appsCount: toSave.apps.length
    });
  } catch (err) {
    console.error('Erro ao salvar catálogo:', err);
    res.status(500).json({ error: 'Erro ao salvar catálogo', details: err.message });
  }
});

// POST /api/upload - Upload de imagem (retorna URL)
app.post('/api/upload', upload.single('image'), (req, res) => {
  try {
    if (!req.file) {
      return res.status(400).json({ error: 'Nenhuma imagem enviada' });
    }

    const imageUrl = `/uploads/${req.file.filename}`;
    console.log(`📷 Imagem salva: ${imageUrl}`);

    res.json({
      success: true,
      url: imageUrl,
      filename: req.file.filename,
      size: req.file.size
    });
  } catch (err) {
    console.error('Erro no upload:', err);
    res.status(500).json({ error: 'Erro no upload', details: err.message });
  }
});

// POST /api/upload-base64 - Upload de imagem via base64 (converte para arquivo)
app.post('/api/upload-base64', (req, res) => {
  try {
    const { dataUrl, filename } = req.body;

    if (!dataUrl || !dataUrl.startsWith('data:image')) {
      return res.status(400).json({ error: 'Data URL inválida' });
    }

    // Extrair base64 e tipo
    const matches = dataUrl.match(/^data:image\/(\w+);base64,(.+)$/);
    if (!matches) {
      return res.status(400).json({ error: 'Formato de imagem inválido' });
    }

    const ext = matches[1] === 'svg+xml' ? 'svg' : matches[1];
    const base64Data = matches[2];
    const buffer = Buffer.from(base64Data, 'base64');

    // Gerar nome único
    const uniqueSuffix = Date.now() + '-' + Math.round(Math.random() * 1E9);
    const newFilename = `img-${uniqueSuffix}.${ext}`;
    const filepath = path.join(UPLOADS_DIR, newFilename);

    fs.writeFileSync(filepath, buffer);

    const imageUrl = `/uploads/${newFilename}`;
    console.log(`📷 Imagem base64 salva: ${imageUrl}`);

    res.json({
      success: true,
      url: imageUrl,
      filename: newFilename,
      size: buffer.length
    });
  } catch (err) {
    console.error('Erro ao salvar base64:', err);
    res.status(500).json({ error: 'Erro ao salvar imagem', details: err.message });
  }
});

// DELETE /api/upload/:filename - Remove uma imagem
app.delete('/api/upload/:filename', (req, res) => {
  try {
    const filename = req.params.filename;
    const filepath = path.join(UPLOADS_DIR, filename);

    // Verificar se arquivo existe e está no diretório correto (segurança)
    if (!filepath.startsWith(UPLOADS_DIR)) {
      return res.status(403).json({ error: 'Acesso negado' });
    }

    if (fs.existsSync(filepath)) {
      fs.unlinkSync(filepath);
      console.log(`🗑️ Imagem removida: ${filename}`);
      res.json({ success: true, message: 'Imagem removida' });
    } else {
      res.status(404).json({ error: 'Imagem não encontrada' });
    }
  } catch (err) {
    console.error('Erro ao remover imagem:', err);
    res.status(500).json({ error: 'Erro ao remover imagem', details: err.message });
  }
});

// GET /api/status - Status do servidor
app.get('/api/status', (req, res) => {
  try {
    const catalogExists = fs.existsSync(CATALOG_FILE);
    let appsCount = 0;
    
    if (catalogExists) {
      const data = JSON.parse(fs.readFileSync(CATALOG_FILE, 'utf8'));
      appsCount = Array.isArray(data.apps) ? data.apps.length : 0;
    }

    // Contar imagens
    const images = fs.existsSync(UPLOADS_DIR) 
      ? fs.readdirSync(UPLOADS_DIR).filter(f => /\.(jpg|jpeg|png|gif|webp|svg)$/i.test(f))
      : [];

    res.json({
      status: 'online',
      serverTime: new Date().toISOString(),
      catalog: {
        exists: catalogExists,
        appsCount
      },
      uploads: {
        count: images.length,
        files: images
      }
    });
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
});

// Fallback para SPA - serve index.html para rotas não encontradas
app.get('*', (req, res) => {
  res.sendFile(path.join(__dirname, 'index.html'));
});

// Error handler
app.use((err, req, res, next) => {
  console.error('Erro:', err);
  res.status(500).json({ error: err.message });
});

// Iniciar servidor
app.listen(PORT, () => {
  console.log('');
  console.log('╔═══════════════════════════════════════════════════════════╗');
  console.log('║                                                           ║');
  console.log('║   🚀 4u.ia.br — App Store Server                          ║');
  console.log('║                                                           ║');
  console.log(`║   📡 Servidor rodando em: http://localhost:${PORT}            ║`);
  console.log('║                                                           ║');
  console.log('║   📁 Arquivos:                                            ║');
  console.log(`║      • Catálogo: ${CATALOG_FILE.replace(__dirname, '.')}                    ║`);
  console.log(`║      • Uploads:  ${UPLOADS_DIR.replace(__dirname, '.')}/                           ║`);
  console.log('║                                                           ║');
  console.log('║   📌 Endpoints:                                           ║');
  console.log('║      GET  /api/catalog      - Ler catálogo                ║');
  console.log('║      POST /api/catalog      - Salvar catálogo             ║');
  console.log('║      POST /api/upload       - Upload de imagem            ║');
  console.log('║      POST /api/upload-base64 - Upload base64              ║');
  console.log('║      GET  /api/status       - Status do servidor          ║');
  console.log('║                                                           ║');
  console.log('╚═══════════════════════════════════════════════════════════╝');
  console.log('');
});
