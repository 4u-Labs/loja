<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>4u.ia.br — App Store</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png?v=<?php echo file_exists('apple-touch-icon.png') ? filemtime('apple-touch-icon.png') : time(); ?>" />
    <link rel="manifest" href="manifest.json?v=<?php echo file_exists('manifest.json') ? filemtime('manifest.json') : time(); ?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#10b981">
    <link rel="canonical" href="https://4u.ia.br/loja/">

    <meta name="description" content="4u.ia.br App Store — Plataforma de alta performance para descoberta e uso de aplicativos modulares, ferramentas com inteligência artificial e soluções de produtividade." />
    <meta name="keywords" content="aplicativos, webapps, inteligência artificial, IA, produtividade, ferramentas online, app store, utilitários, automação, 4u.ia.br" />
    <meta name="author" content="4u.ia.br" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

    <!-- Meta Tags OG (Premium Finish) -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://4u.ia.br/loja/" />
    <meta property="og:site_name" content="4u.ia.br — App Store" />
    <meta property="og:title" content="4u.ia.br — Loja de Aplicativos & Inteligência Artificial" />
    <meta property="og:description" content="Plataforma de alta performance para descoberta e uso de aplicativos modulares e IA." />
    <meta property="og:image" content="https://4u.ia.br/loja/icon-512.png" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta property="og:image:alt" content="4u.ia.br App Store" />
    <meta property="og:locale" content="pt_BR" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="https://4u.ia.br/loja/" />
    <meta name="twitter:title" content="4u.ia.br — Loja de Aplicativos & Inteligência Artificial" />
    <meta name="twitter:description" content="Descubra aplicativos modulares, ferramentas com IA e utilitários de alta performance." />
    <meta name="twitter:image" content="https://4u.ia.br/loja/icon-512.png" />

    <!-- Schema.org JSON-LD Structured Data for Google Search -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "@id": "https://4u.ia.br/loja/#website",
          "url": "https://4u.ia.br/loja/",
          "name": "4u.ia.br App Store",
          "description": "Loja de aplicativos web, ferramentas com inteligência artificial e soluções de alta produtividade.",
          "inLanguage": "pt-BR",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://4u.ia.br/loja/#/?q={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        },
        {
          "@type": "Organization",
          "@id": "https://4u.ia.br/#organization",
          "name": "4u.ia.br",
          "url": "https://4u.ia.br",
          "logo": "https://4u.ia.br/loja/icon-512.png"
        },
        {
          "@type": "CollectionPage",
          "@id": "https://4u.ia.br/loja/#webpage",
          "url": "https://4u.ia.br/loja/",
          "name": "4u.ia.br — Catálogo de Aplicativos & IA",
          "isPartOf": {
            "@id": "https://4u.ia.br/loja/#website"
          },
          "about": {
            "@id": "https://4u.ia.br/#organization"
          },
          "description": "Catálogo completo de aplicativos web e ferramentas modulares 4u.ia.br."
        }
      ]
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        :root {
            --gradient-1: #10b981;
            --gradient-2: #06b6d4;
            --gradient-3: #14b8a6;
            --gradient-4: #22d3ee;
        }

        body {
            background: #090a12;
            color: #f4f4f5;
            font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif;
        }

        /* Animated background mesh */
        .mesh-gradient {
            position: fixed;
            inset: 0;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }

        .mesh-gradient::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            top: -25%;
            left: -25%;
            background: radial-gradient(ellipse 80% 50% at 20% 40%, rgba(16, 185, 129, 0.15), transparent 50%), radial-gradient(ellipse 60% 50% at 80% 20%, rgba(6, 182, 212, 0.12), transparent 50%), radial-gradient(ellipse 50% 40% at 50% 80%, rgba(20, 184, 166, 0.10), transparent 50%);
            animation: meshMove 20s ease-in-out infinite;
            pointer-events: none;
        }

        /* Cyber Layer Overlay */
        .mesh-gradient::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image: 
                linear-gradient(rgba(16, 185, 129, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(16, 185, 129, 0.05) 1px, transparent 1px),
                url("data:image/svg+xml,%3Csvg width='200' height='200' viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 40 L60 40 L80 60 L140 60 L160 80 L200 80' stroke='rgba(16, 185, 129, 0.08)' fill='none' stroke-width='1'/%3E%3Ccircle cx='80' cy='60' r='2' fill='rgba(16, 185, 129, 0.12)'/%3E%3Cpath d='M40 200 L40 160 L60 140 L60 100 L80 80' stroke='rgba(6, 182, 212, 0.06)' fill='none' stroke-width='1'/%3E%3C/svg%3E");
            background-size: 60px 60px, 60px 60px, 400px 400px;
            opacity: 1;
            pointer-events: none;
        }

        .cyber-corner {
            position: relative;
        }
        .cyber-corner::before, .cyber-corner::after {
            content: '';
            position: absolute;
            width: 12px;
            height: 12px;
            border: 2px solid rgba(16, 185, 129, 0.5);
            pointer-events: none;
            z-index: 10;
        }
        .cyber-corner::before {
            top: 10px; left: 10px;
            border-right: none; border-bottom: none;
        }
        .cyber-corner::after {
            bottom: 10px; right: 10px;
            border-left: none; border-top: none;
        }

        @keyframes meshMove {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            25% {
                transform: translate(2%, 2%) rotate(1deg);
            }

            50% {
                transform: translate(-1%, 3%) rotate(-1deg);
            }

            75% {
                transform: translate(3%, -2%) rotate(2deg);
            }
        }

        /* Glass effect */
        .glass {
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
        }

        .glow-sm {
            box-shadow: 0 0 20px -5px rgba(16, 185, 129, 0.3);
        }

        /* Cards */
        .card-3d {
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .card-3d:hover {
            transform: translateY(-4px) rotateX(2deg);
        }

        .card-shine {
            position: relative;
            overflow: hidden;
        }

        .card-shine::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(105deg, transparent 40%, rgba(255, 255, 255, 0.03) 45%, rgba(255, 255, 255, 0.05) 50%, rgba(255, 255, 255, 0.03) 55%, transparent 60%);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
            pointer-events: none;
        }

        .card-shine:hover::before {
            transform: translateX(100%);
        }

        /* Text & Borders */
        .gradient-text {
            background: linear-gradient(135deg, #fff 0%, #a7f3d0 50%, #67e8f9 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text-vibrant {
            background: linear-gradient(135deg, #10b981 0%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .border-gradient {
            position: relative;
            background: linear-gradient(#0a0c14, #0a0c14) padding-box, linear-gradient(135deg, rgba(16, 185, 129, 0.5), rgba(6, 182, 212, 0.3), rgba(20, 184, 166, 0.5)) border-box;
            border: 1px solid transparent;
        }

        .border-gradient-animated {
            position: relative;
            background: #0a0c14;
            border: 1px solid transparent;
        }

        .border-gradient-animated::before {
            content: '';
            position: absolute;
            inset: -1px;
            border-radius: inherit;
            padding: 1px;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.6), rgba(6, 182, 212, 0.4), rgba(20, 184, 166, 0.6));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            animation: borderRotate 4s linear infinite;
            pointer-events: none;
        }

        @keyframes borderRotate {
            0% {
                filter: hue-rotate(0deg);
            }

            100% {
                filter: hue-rotate(360deg);
            }
        }

        /* Animation Utilities */
        .float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite;
        }

        @keyframes pulseGlow {

            0%,
            100% {
                box-shadow: 0 0 20px -5px rgba(16, 185, 129, 0.4);
            }

            50% {
                box-shadow: 0 0 30px -5px rgba(16, 185, 129, 0.6);
            }
        }

        .stat-number {
            font-variant-numeric: tabular-nums;
        }

        /* Bento grid */
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, auto);
            gap: 1rem;
        }

        .bento-large {
            grid-column: span 2;
            grid-row: span 2;
        }

        .bento-wide {
            grid-column: span 2;
        }

        .bento-tall {
            grid-row: span 2;
        }

        .bento-span-3 {
            grid-column: span 3;
        }

        .bento-full {
            grid-column: span 4;
        }

        @media (max-width: 1024px) {
            .bento-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .bento-large,
            .bento-wide {
                grid-column: span 2;
            }

            .bento-tall {
                grid-row: span 1;
            }

            .bento-span-3,
            .bento-full {
                grid-column: span 2;
            }
        }

        @media (max-width: 640px) {
            .bento-grid {
                display: flex !important;
                overflow-x: auto !important;
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
                gap: 0.85rem;
                padding-bottom: 0.75rem;
                scrollbar-width: none;
            }

            .bento-grid::-webkit-scrollbar {
                display: none;
            }

            .bento-grid > div {
                flex: 0 0 85% !important;
                max-width: 320px !important;
                min-width: 270px !important;
                scroll-snap-align: center;
            }

            .bento-large,
            .bento-wide,
            .bento-tall,
            .bento-span-3,
            .bento-full {
                grid-column: span 1 !important;
                grid-row: span 1 !important;
            }
        }

        /* Misc */
        .icon-bounce:hover svg {
            animation: iconBounce 0.5s ease;
        }

        @keyframes iconBounce {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }
        }

        .tag-hover {
            transition: all 0.2s ease;
        }

        .tag-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px -2px rgba(16, 185, 129, 0.3);
        }

        /* Scrollbar Cyberpunk */
        ::-webkit-scrollbar {
            width: 7px;
            height: 7px;
        }

        ::-webkit-scrollbar-track {
            background: #050709;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.2s ease;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(16, 185, 129, 0.6);
            box-shadow: 0 0 10px rgba(16, 185, 129, 0.5);
        }

        dialog::backdrop {
            background: rgba(5, 7, 9, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        dialog {
            background: transparent;
            border: none;
            padding: 0;
            max-width: 95vw;
            max-height: 90vh;
        }

        @keyframes pulse-save {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .saving-indicator {
            animation: pulse-save 1s ease-in-out infinite;
        }

        .noise-overlay {
            position: fixed;
            inset: 0;
            z-index: -1;
            opacity: 0.025;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Custom sleek scrollbar for horizontal scrollers on PC */
        .shelf-scroller {
            scrollbar-width: thin;
            scrollbar-color: rgba(255, 255, 255, 0.2) transparent;
            -webkit-overflow-scrolling: touch;
        }

        .shelf-scroller::-webkit-scrollbar {
            height: 5px;
        }

        .shelf-scroller::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.04);
            border-radius: 9999px;
        }

        .shelf-scroller::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 9999px;
        }

        .shelf-scroller:hover::-webkit-scrollbar-thumb {
            background: rgba(16, 185, 129, 0.5);
        }

        .cursor-grab {
            cursor: grab;
        }

        .cursor-grabbing {
            cursor: grabbing;
            user-select: none;
        }

        /* Spotlight with Linear-style Border Glow */
        .spotlight {
            position: relative;
        }

        .spotlight::before {
            content: '';
            position: absolute;
            inset: -1px;
            border-radius: inherit;
            padding: 1px;
            background: radial-gradient(350px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(16, 185, 129, 0.65), rgba(6, 182, 212, 0.35), transparent 70%);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
            z-index: 2;
        }

        .spotlight::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            opacity: 0;
            transition: opacity 0.3s ease;
            background: radial-gradient(600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(16, 185, 129, 0.08), rgba(6, 182, 212, 0.04), transparent 60%);
            pointer-events: none;
            z-index: 1;
        }

        .spotlight:hover::before,
        .spotlight:hover::after {
            opacity: 1;
        }

        /* Apple-style App Icon polish */
        .app-icon-squircle {
            position: relative;
            box-shadow: 0 8px 24px -4px rgba(0, 0, 0, 0.6), 0 2px 6px -1px rgba(0, 0, 0, 0.4), inset 0 1px 1px 0 rgba(255, 255, 255, 0.25);
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease, ring-color 0.3s ease;
        }
        .group:hover .app-icon-squircle,
        .app-icon-squircle:hover {
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 14px 28px -4px rgba(16, 185, 129, 0.25), 0 4px 12px -2px rgba(0, 0, 0, 0.5), inset 0 1px 1px 0 rgba(255, 255, 255, 0.4);
        }

        /* Ambient Aurora Mesh Blobs */
        .aurora-blob {
            position: fixed;
            border-radius: 9999px;
            filter: blur(130px);
            opacity: 0.16;
            pointer-events: none;
            z-index: -1;
            animation: auroraFloat 18s ease-in-out infinite alternate;
        }

        @keyframes auroraFloat {
            0% {
                transform: translate(0px, 0px) scale(1);
            }
            50% {
                transform: translate(50px, -60px) scale(1.15);
            }
            100% {
                transform: translate(-40px, 50px) scale(0.92);
            }
        }

        /* Glass Sweep on Hero Banner */
        @keyframes glassSweep {
            0% {
                transform: translateX(-150%) skewX(-25deg);
                opacity: 0;
            }
            20% {
                opacity: 0.7;
            }
            100% {
                transform: translateX(250%) skewX(-25deg);
                opacity: 0;
            }
        }

        .hero-glass-sweep {
            position: absolute;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 15;
        }

        .hero-glass-sweep::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.18), rgba(255, 255, 255, 0.05), transparent);
            animation: glassSweep 8s cubic-bezier(0.4, 0, 0.2, 1) infinite;
        }

        /* Skeleton Shimmer */
        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }

        .skeleton-shimmer {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.03) 25%, rgba(255, 255, 255, 0.08) 50%, rgba(255, 255, 255, 0.03) 75%);
            background-size: 200% 100%;
            animation: shimmer 2s infinite ease-in-out;
        }

        .btn-shine {
            position: relative;
            overflow: hidden;
        }

        .btn-shine::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
            pointer-events: none;
        }

        .btn-shine:hover::before {
            left: 100%;
        }

        @keyframes sliderProgress {
            from {
                width: 0%;
            }

            to {
                width: 100%;
            }
        }

        .slider-progress-animation {
            animation: sliderProgress 5s linear infinite;
        }

        #sliderContent {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
    </style>
</head>

<body class="antialiased bg-[#050709] text-zinc-100 selection:bg-emerald-500 selection:text-white">
    <!-- Top Scroll Progress Bar -->
    <div id="scrollProgressBar" class="fixed top-0 left-0 h-[3px] bg-gradient-to-r from-emerald-400 via-cyan-400 to-teal-300 z-50 transition-all duration-75 pointer-events-none shadow-[0_0_10px_rgba(16,185,129,0.7)]" style="width: 0%"></div>

    <!-- Ambient Aurora Mesh Blobs -->
    <div class="aurora-blob w-[500px] h-[500px] bg-gradient-to-br from-emerald-500 to-teal-700 top-[-10%] left-[-10%]"></div>
    <div class="aurora-blob w-[600px] h-[600px] bg-gradient-to-br from-cyan-500 to-blue-700 top-[30%] right-[-15%]" style="animation-delay: -5s; animation-duration: 22s;"></div>
    <div class="aurora-blob w-[450px] h-[450px] bg-gradient-to-br from-indigo-600 to-teal-800 bottom-[-10%] left-[20%]" style="animation-delay: -9s; animation-duration: 20s;"></div>

    <div class="mesh-gradient"></div>
    <div class="noise-overlay"></div>

    <!-- Cyber Decorations -->
    <div class="fixed top-0 left-0 w-64 h-64 pointer-events-none opacity-20 z-[-1] overflow-hidden">
        <svg width="100%" height="100%" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-20 20 L60 20 L80 40 L80 100 L100 120 L180 120" stroke="#10b981" stroke-width="0.5" />
            <circle cx="180" cy="120" r="2" fill="#10b981" />
            <path d="M20 -20 L20 40 L40 60 L100 60 L120 80 L120 160" stroke="#06b6d4" stroke-width="0.5" />
            <circle cx="120" cy="160" r="1.5" fill="#06b6d4" />
        </svg>
    </div>
    <div class="fixed bottom-0 right-0 w-96 h-96 pointer-events-none opacity-15 z-[-1] overflow-hidden translate-x-10 translate-y-10">
        <svg width="100%" height="100%" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M320 280 L240 280 L220 260 L140 260 L120 240 L40 240" stroke="#10b981" stroke-width="0.8" />
            <circle cx="40" cy="240" r="3" fill="#10b981" />
            <path d="M280 320 L280 240 L260 220 L200 220 L180 200 L180 120" stroke="#14b8a6" stroke-width="0.6" />
            <rect x="175" y="115" width="10" height="10" rx="2" fill="#14b8a6" fill-opacity="0.3" stroke="#14b8a6" stroke-width="0.5" />
        </svg>
    </div>

    <div id="app"></div>

    <div id="toasts"
        class="fixed bottom-4 right-4 z-50 grid gap-2 w-full max-w-sm pointer-events-none [&>*]:pointer-events-auto">
    </div>

    <button id="backToTop" type="button"
        class="hidden fixed bottom-4 left-4 z-50 glass rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-zinc-100 hover:bg-white/10 transition-all glow-sm">
        <span class="inline-flex items-center gap-2"><svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                <path d="M12 19V5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M5 12l7-7 7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg> Topo </span>
    </button>

    <div id="saveIndicator" class="fixed top-4 left-4 z-50 hidden">
        <div
            class="glass rounded-2xl border border-white/10 bg-white/5 px-4 py-2.5 text-xs text-zinc-300 flex items-center gap-2.5 glow-sm">
            <div id="saveIndicatorDot" class="h-2 w-2 rounded-full bg-emerald-400 saving-indicator"></div>
            <span id="saveIndicatorText">Salvando...</span>
        </div>
    </div>

    <dialog id="detailsDialog" class="w-full max-w-2xl">
        <div
            class="glass border-gradient rounded-3xl bg-[#0a0c14]/95 p-6 sm:p-8 overflow-auto max-h-[85vh] text-zinc-100">
            <div class="flex items-center justify-between mb-5">
                <div class="flex items-center gap-2">
                    <div class="h-1.5 w-1.5 rounded-full bg-indigo-400"></div>
                    <div class="text-sm font-semibold text-white">Detalhes do App</div>
                </div>
                <button id="detailsClose"
                    class="rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm text-zinc-100 hover:bg-white/10 transition-all hover:border-white/20">Fechar</button>
            </div>
            <div id="detailsBody"></div>
        </div>
    </dialog>

    <dialog id="confirmDialog" class="w-full max-w-sm">
        <div class="glass border-gradient rounded-3xl bg-[#0a0c14]/95 p-6">
            <div id="confirmTitle" class="text-lg font-semibold"></div>
            <div id="confirmText" class="mt-2 text-sm text-zinc-300"></div>
            <div class="mt-6 flex justify-end gap-3">
                <button id="confirmCancel"
                    class="rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm hover:bg-white/10 transition-all">Cancelar</button>
                <button id="confirmOk"
                    class="rounded-xl bg-rose-500 px-5 py-2.5 text-sm font-semibold text-white hover:bg-rose-400 transition-all">OK</button>
            </div>
        </div>
    </dialog>

    <dialog id="loginDialog" class="w-full max-w-sm">
        <div class="glass border-gradient-animated rounded-3xl bg-[#0a0c14]/95 p-7">
            <div class="flex items-center gap-4 mb-5">
                <div
                    class="grid h-12 w-12 place-items-center rounded-2xl bg-gradient-to-br from-indigo-500 via-purple-500 to-fuchsia-500 glow-sm">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="text-white">
                        <path
                            d="M12 2C9.24 2 7 4.24 7 7v2H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-9a2 2 0 0 0-2-2h-1V7c0-2.76-2.24-5-5-5zm0 2c1.66 0 3 1.34 3 3v2H9V7c0-1.66 1.34-3 3-3zm0 10c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"
                            fill="currentColor" />
                    </svg>
                </div>
                <div>
                    <div class="text-lg font-semibold gradient-text">Acesso ao Admin</div>
                    <div class="text-sm text-zinc-400">Digite a senha para continuar</div>
                </div>
            </div>
            <form id="loginForm">
                <label class="grid gap-2"><span class="text-xs text-zinc-400 font-medium">Senha</span><input
                        id="loginPassword" type="password" required placeholder="••••••••"
                        autocomplete="current-password"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3.5 text-sm text-zinc-100 placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-indigo-400/50 focus:border-indigo-400/50 transition-all" /></label>
                <div id="loginError"
                    class="mt-4 hidden rounded-xl border border-rose-400/20 bg-rose-500/10 p-3.5 text-sm text-rose-200">
                </div>
                <div class="mt-6 flex gap-3">
                    <button type="button" id="loginCancel"
                        class="flex-1 rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm hover:bg-white/10 transition-all">Voltar
                        à Loja</button>
                    <button type="submit" id="loginSubmit"
                        class="flex-1 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-500 px-4 py-3 text-sm font-semibold text-white hover:from-indigo-400 hover:to-purple-400 transition-all btn-shine">Entrar</button>
                </div>
            </form>
        </div>
    </dialog>

    <dialog id="privacyDialog" class="w-full max-w-2xl">
        <div class="glass border-gradient rounded-3xl bg-[#0a0c14]/95 p-6 sm:p-8 overflow-auto max-h-[85vh] text-zinc-100">
            <div class="flex items-center justify-between mb-5">
                <div class="flex items-center gap-2">
                    <div class="h-1.5 w-1.5 rounded-full bg-emerald-400"></div>
                    <div class="text-sm font-semibold text-white">Política de Privacidade</div>
                </div>
                <button onclick="this.closest('dialog').close()" class="rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm text-zinc-100 hover:bg-white/10 transition-all">Fechar</button>
            </div>
            <div class="prose prose-invert max-w-none text-sm text-zinc-300 leading-relaxed space-y-4">
                <p>A <strong>4u.ia.br</strong> valoriza a sua privacidade. Esta política descreve como tratamos as informações no contexto da nossa vitrine de aplicativos.</p>
                <h4 class="text-white font-medium">1. Coleta de Dados</h4>
                <p>Nossa plataforma funciona majoritariamente de forma estática ou via conexão direta com o seu backend configurado. Não coletamos dados pessoais de usuários finais em nossos servidores centrais.</p>
                <h4 class="text-white font-medium">2. Local Storage</h4>
                <p>Utilizamos o armazenamento local do seu navegador (LocalStorage) para salvar preferências de interface, favoritos e o estado da "Backdoor de Desenvolvedor". Esses dados permanecem exclusivamente no seu dispositivo.</p>
                <h4 class="text-white font-medium">3. Segurança</h4>
                <p>As senhas de acesso administrativo são processadas pelo backend configurado pelo proprietário da loja. Recomendamos o uso de senhas fortes e o protocolo HTTPS para garantir a integridade da comunicação.</p>
            </div>
        </div>
    </dialog>

    <dialog id="termsDialog" class="w-full max-w-2xl">
        <div class="glass border-gradient rounded-3xl bg-[#0a0c14]/95 p-6 sm:p-8 overflow-auto max-h-[85vh] text-zinc-100">
            <div class="flex items-center justify-between mb-5">
                <div class="flex items-center gap-2">
                    <div class="h-1.5 w-1.5 rounded-full bg-cyan-400"></div>
                    <div class="text-sm font-semibold text-white">Termos de Uso</div>
                </div>
                <button onclick="this.closest('dialog').close()" class="rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm text-zinc-100 hover:bg-white/10 transition-all">Fechar</button>
            </div>
            <div class="prose prose-invert max-w-none text-sm text-zinc-300 leading-relaxed space-y-4">
                <p>Ao utilizar a vitrine <strong>4u.ia.br</strong>, você concorda com os seguintes termos:</p>
                <h4 class="text-white font-medium">1. Uso da Plataforma</h4>
                <p>A 4u.ia.br é uma ferramenta de vitrine para Progressive Web Apps (PWAs). A responsabilidade pelo conteúdo e funcionamento dos aplicativos listados é inteiramente dos seus respectivos desenvolvedores/proprietários.</p>
                <h4 class="text-white font-medium">2. Backdoor e Admin</h4>
                <p>O acesso às áreas administrativas através da funcionalidade de cliques no logo é destinado apenas aos proprietários autorizados da loja.</p>
                <h4 class="text-white font-medium">3. Limitação de Responsabilidade</h4>
                <p>Não nos responsabilizamos por perdas de dados decorrentes de falhas no banco de dados local ou configurações incorretas de backend realizadas pelo usuário.</p>
            </div>
        </div>
    </dialog>

    <!-- Modal de Execução Iframe (Preview sem sair da loja) -->
    <dialog id="iframeDialog" class="w-full max-w-6xl h-[92vh]">
        <div class="glass border-gradient rounded-3xl bg-[#0a0c14]/98 p-4 sm:p-5 flex flex-col h-full text-zinc-100 shadow-2xl relative">
            <!-- Header do Modal de Iframe -->
            <div class="flex items-center justify-between gap-3 border-b border-white/10 pb-3 mb-3 shrink-0">
                <div class="flex items-center gap-3 min-w-0">
                    <img id="iframeAppIcon" src="" alt="" class="h-9 w-9 rounded-xl object-cover ring-1 ring-white/20 shrink-0" />
                    <div class="min-w-0">
                        <div class="flex items-center gap-2">
                            <h3 id="iframeAppTitle" class="text-base font-bold text-white truncate">App</h3>
                            <span id="iframeAppStatus"></span>
                        </div>
                        <div class="text-xs text-zinc-400 truncate" id="iframeAppUrl"></div>
                    </div>
                </div>
                <div class="flex items-center gap-2 shrink-0">
                    <button id="iframeFullscreenBtn" type="button" class="rounded-xl border border-white/10 bg-white/5 px-3 py-1.5 text-xs text-zinc-200 hover:bg-white/10 transition-all flex items-center gap-1.5 cursor-pointer" title="Tela cheia">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"/></svg>
                        <span class="hidden sm:inline">Tela Cheia</span>
                    </button>
                    <button id="iframeOpenExternalBtn" type="button" class="rounded-xl border border-white/10 bg-white/5 px-3 py-1.5 text-xs text-zinc-200 hover:bg-white/10 transition-all flex items-center gap-1.5 cursor-pointer" title="Abrir em nova aba">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        <span class="hidden sm:inline">Nova Aba</span>
                    </button>
                    <button id="iframeReloadBtn" type="button" class="rounded-xl border border-white/10 bg-white/5 p-2 text-xs text-zinc-200 hover:bg-white/10 transition-all cursor-pointer" title="Recarregar">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>
                    </button>
                    <button id="iframeCloseBtn" type="button" class="rounded-xl bg-white/10 border border-white/15 px-3 py-1.5 text-xs text-white hover:bg-white/20 transition-all cursor-pointer">✕ Fechar</button>
                </div>
            </div>
            <!-- Container do Iframe com loading -->
            <div class="relative flex-1 rounded-2xl overflow-hidden bg-[#050709] border border-white/10">
                <div id="iframeLoader" class="absolute inset-0 flex flex-col items-center justify-center gap-3 bg-[#0a0c14] z-10 transition-opacity duration-300">
                    <div class="h-10 w-10 border-3 border-emerald-400/30 border-t-emerald-400 rounded-full animate-spin"></div>
                    <span class="text-xs text-zinc-400 font-medium">Carregando aplicativo...</span>
                </div>
                <iframe id="appIframe" class="w-full h-full border-0" sandbox="allow-scripts allow-same-origin allow-forms allow-popups allow-modals allow-downloads" allow="camera; microphone; geolocation; clipboard-read; clipboard-write; fullscreen"></iframe>
            </div>
            <!-- Aviso de segurança / fallback -->
            <div class="mt-2 text-[11px] text-zinc-500 flex items-center justify-between">
                <span>💡 Se o aplicativo não carregar por restrição de segurança externa, use o botão <strong>Nova Aba</strong>.</span>
                <span id="iframeAppCategory" class="text-zinc-400"></span>
            </div>
        </div>
    </dialog>

    <!-- Modal de Sugestão de App / Feedback -->
    <dialog id="suggestDialog" class="w-full max-w-lg">
        <div class="glass border-gradient-animated rounded-3xl bg-[#0a0c14]/98 p-6 sm:p-7 text-zinc-100">
            <div class="flex items-center justify-between mb-5 border-b border-white/10 pb-4">
                <div class="flex items-center gap-3">
                    <div class="h-10 w-10 rounded-2xl bg-gradient-to-br from-emerald-500 via-cyan-500 to-teal-500 grid place-items-center glow-sm">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="text-white"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Sugerir App ou Feedback</h3>
                        <p class="text-xs text-zinc-400">Ajude a expandir a plataforma 4u.ia.br</p>
                    </div>
                </div>
                <button type="button" onclick="document.getElementById('suggestDialog')?.close()" class="rounded-xl border border-white/10 bg-white/5 px-3 py-1.5 text-xs text-zinc-300 hover:bg-white/10 transition-all cursor-pointer">✕</button>
            </div>

            <form id="suggestForm" class="grid gap-4">
                <div class="grid grid-cols-2 gap-3">
                    <label class="cursor-pointer rounded-xl border border-white/10 bg-white/5 p-3 flex items-center gap-2 hover:border-emerald-400/50 has-[:checked]:border-emerald-400 has-[:checked]:bg-emerald-500/10 transition-all">
                        <input type="radio" name="suggestType" value="sugestao" checked class="accent-emerald-400" />
                        <span class="text-xs font-semibold text-white">💡 Sugerir App</span>
                    </label>
                    <label class="cursor-pointer rounded-xl border border-white/10 bg-white/5 p-3 flex items-center gap-2 hover:border-rose-400/50 has-[:checked]:border-rose-400 has-[:checked]:bg-rose-500/10 transition-all">
                        <input type="radio" name="suggestType" value="bug" class="accent-rose-400" />
                        <span class="text-xs font-semibold text-white">🐛 Relatar Bug</span>
                    </label>
                </div>

                <label class="grid gap-1.5">
                    <span class="text-xs font-medium text-zinc-400">Nome do App / Ideia *</span>
                    <input id="suggestAppName" required placeholder="Ex: Stirling-PDF, Calculadora CLT, Gerador de Recibo..." class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 transition-all" />
                </label>

                <label class="grid gap-1.5">
                    <span class="text-xs font-medium text-zinc-400">Link ou Repositório GitHub (opcional)</span>
                    <input id="suggestUrl" placeholder="https://github.com/... ou https://app.com" class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 transition-all" />
                </label>

                <label class="grid gap-1.5">
                    <span class="text-xs font-medium text-zinc-400">Descrição / Detalhes *</span>
                    <textarea id="suggestDesc" required rows="3" placeholder="O que esta ferramenta faz? Como ela ajudaria os usuários?" class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 transition-all"></textarea>
                </label>

                <label class="grid gap-1.5">
                    <span class="text-xs font-medium text-zinc-400">Seu contato (E-mail ou WhatsApp - opcional)</span>
                    <input id="suggestContact" placeholder="email@exemplo.com ou (11) 99999-9999" class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 transition-all" />
                </label>

                <div class="mt-2 flex gap-3">
                    <button type="button" onclick="document.getElementById('suggestDialog')?.close()" class="flex-1 rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-zinc-300 hover:bg-white/10 transition-all cursor-pointer">Cancelar</button>
                    <button type="submit" id="suggestSubmitBtn" class="flex-1 rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 px-4 py-3 text-sm font-semibold text-white hover:from-emerald-400 hover:to-cyan-400 transition-all btn-shine flex items-center justify-center gap-2 cursor-pointer">
                        <span>Enviar</span>
                    </button>
                </div>
            </form>
        </div>
    </dialog>

    <!-- Command Palette (Ctrl+K / Cmd+K / Raycast style) -->
    <dialog id="cmdPaletteDialog" class="w-full max-w-2xl backdrop:bg-black/75">
        <div class="glass border-gradient-animated rounded-3xl bg-[#0a0c14]/98 p-4 sm:p-5 text-zinc-100 shadow-2xl">
            <div class="flex items-center gap-3 border-b border-white/10 pb-3 mb-3">
                <div class="text-emerald-400">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <input id="cmdPaletteInput" placeholder="Buscar apps, categorias ou atalhos..." class="w-full bg-transparent border-0 text-sm sm:text-base text-white placeholder:text-zinc-500 focus:outline-none" autocomplete="off" />
                <kbd class="hidden sm:inline-block rounded-lg bg-white/10 px-2 py-0.5 text-[10px] font-mono text-zinc-400">ESC</kbd>
                <button type="button" onclick="document.getElementById('cmdPaletteDialog')?.close()" class="text-zinc-400 hover:text-white sm:hidden text-lg">✕</button>
            </div>
            
            <div id="cmdPaletteResults" class="max-h-[60vh] overflow-y-auto space-y-1 pr-1 custom-scrollbar">
                <!-- Injected via JS -->
            </div>
            
            <div class="mt-3 pt-3 border-t border-white/5 flex items-center justify-between text-[11px] text-zinc-500">
                <div class="flex items-center gap-2 sm:gap-3">
                    <span><kbd class="bg-white/10 px-1.5 py-0.5 rounded text-[10px] text-zinc-400">Ctrl</kbd> + <kbd class="bg-white/10 px-1.5 py-0.5 rounded text-[10px] text-zinc-400">K</kbd> atalho</span>
                </div>
                <span>4u.ia.br Quick Launcher</span>
            </div>
        </div>
    </dialog>

    <!-- Modal QR Code Mobile -->
    <dialog id="qrDialog" class="w-full max-w-sm backdrop:bg-black/75">
        <div class="glass border-gradient rounded-3xl bg-[#0a0c14]/98 p-6 text-center text-zinc-100 shadow-2xl">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <span class="text-emerald-400">📱</span>
                    <h3 class="text-sm font-bold text-white">Escanear no Smartphone</h3>
                </div>
                <button type="button" onclick="document.getElementById('qrDialog')?.close()" class="rounded-xl border border-white/10 bg-white/5 px-2.5 py-1 text-xs text-zinc-400 hover:text-white cursor-pointer">✕</button>
            </div>
            <div class="p-4 bg-white rounded-2xl mx-auto w-48 h-48 flex items-center justify-center shadow-lg">
                <img id="qrImage" src="" alt="QR Code" class="w-40 h-40 object-contain" />
            </div>
            <div class="mt-4">
                <div id="qrAppTitle" class="text-sm font-bold text-white truncate">App</div>
                <p class="text-xs text-zinc-400 mt-1">Aponte a câmera do seu celular para abrir o WebApp instantaneamente.</p>
            </div>
        </div>
    </dialog>

    <script>
        /**********************
         * 4u.ia.br — SPA App Store
         * VERSÃO COM BENTO GRID COMPLETO
         **********************/

        // -------- Config --------
        const BASE_URL = window.location.pathname.replace(/\/[^/]*$/, '');
        let API = { catalog: '', upload: '', uploadBase64: '', status: '', login: '', verify: '', click: '', suggest: '', track: '', stats: '', backend: 'unknown' };

        // -------- Auth State --------
        const auth = {
            token: null,
            isLoggedIn: false,
            setToken(token) { this.token = token; this.isLoggedIn = !!token; if (token) { sessionStorage.setItem('admin_token', token); } else { sessionStorage.removeItem('admin_token'); } },
            getToken() { if (!this.token) { this.token = sessionStorage.getItem('admin_token'); this.isLoggedIn = !!this.token; } return this.token; },
            logout() { this.token = null; this.isLoggedIn = false; sessionStorage.removeItem('admin_token'); },
            getHeaders() { const headers = { 'Content-Type': 'application/json' }; const token = this.getToken(); if (token) { headers['Authorization'] = `Bearer ${token}`; } return headers; },
            getAuthHeader() { const headers = {}; const token = this.getToken(); if (token) { headers['Authorization'] = `Bearer ${token}`; } return headers; }
        };

        const STATUS = [{ value: 'Novo', tone: 'cyan' }, { value: 'Beta', tone: 'amber' }, { value: 'Estável', tone: 'emerald' }, { value: 'Destaque', tone: 'fuchsia' },];

        // -------- DOM utils --------
        const $ = (sel, el = document) => el.querySelector(sel);
        const $$ = (sel, el = document) => Array.from(el.querySelectorAll(sel));
        function escapeHtml(str) { return String(str ?? '').replaceAll('&', '&amp;').replaceAll('<', '&lt;').replaceAll('>', '&gt;').replaceAll('"', '&quot;').replaceAll("'", '&#039;'); }
        function safeText(s) { return String(s ?? '').trim(); }
        function normKey(s) { return safeText(s).normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase(); }
        function clampText(s, max = 160) { s = safeText(s); return s.length > max ? s.slice(0, max - 1) + '…' : s; }
        function normalizeTags(input) { if (Array.isArray(input)) return input.map(t => safeText(t)).filter(Boolean); const raw = safeText(input); if (!raw) return []; return raw.split(',').map(t => t.trim()).filter(Boolean).slice(0, 24); }
        function fmtDate(ts) { try { const d = new Date(ts); return d.toLocaleDateString('pt-BR', { year: 'numeric', month: 'short', day: '2-digit' }); } catch { return ''; } }
        function uid() { return 'app_' + Math.random().toString(16).slice(2) + '_' + Date.now().toString(16); }
        function toneClasses(tone) { const map = { indigo: 'bg-indigo-500/15 text-indigo-300 ring-indigo-400/30', cyan: 'bg-cyan-500/15 text-cyan-300 ring-cyan-400/30', amber: 'bg-amber-500/15 text-amber-300 ring-amber-400/30', emerald: 'bg-emerald-500/15 text-emerald-300 ring-emerald-400/30', fuchsia: 'bg-fuchsia-500/15 text-fuchsia-300 ring-fuchsia-400/30', zinc: 'bg-white/5 text-zinc-300 ring-white/10', rose: 'bg-rose-500/15 text-rose-300 ring-rose-400/30' }; return map[tone] || map.zinc; }
        function statusTone(status) { return (STATUS.find(s => s.value === status)?.tone) || 'zinc'; }
        function toast(message, kind = 'info') { const tones = { info: 'border-indigo-400/20 bg-indigo-500/10', ok: 'border-emerald-400/20 bg-emerald-500/10', warn: 'border-amber-400/20 bg-amber-500/10', err: 'border-rose-400/20 bg-rose-500/10', }; const dots = { info: 'bg-indigo-400', ok: 'bg-emerald-400', warn: 'bg-amber-400', err: 'bg-rose-400', }; const el = document.createElement('div'); el.className = `glass rounded-2xl border p-4 text-sm text-zinc-100 ${tones[kind] || tones.info} glow-sm`; el.innerHTML = ` <div class="flex items-start gap-3"><div class="mt-0.5 h-2.5 w-2.5 rounded-full ${dots[kind] || dots.info}"></div><div class="min-w-0 flex-1"><div class="font-medium">${escapeHtml(message)}</div></div><button class="rounded-lg border border-white/10 bg-white/5 px-2.5 py-1 text-xs hover:bg-white/10 transition-all">Fechar</button></div> `; el.querySelector('button')?.addEventListener('click', () => remove()); $('#toasts')?.appendChild(el); const t = setTimeout(() => remove(), 4000); function remove() { clearTimeout(t); el.style.opacity = '0'; el.style.transform = 'translateY(8px) scale(0.95)'; el.style.transition = 'all 0.3s ease'; setTimeout(() => el.remove(), 300); } }
        function isProbablyUrl(s) { try { new URL(s); return true; } catch { return false; } }
        function normalizeAppLink(url) { const raw = safeText(url); if (!raw) return ''; try { const u = new URL(raw); if (/\/index\.html?$/i.test(u.pathname)) { u.pathname = u.pathname.replace(/\/index\.html?$/i, '/'); } return u.toString(); } catch { return raw.replace(/\/index\.html?$/i, '/'); } }

        // -------- Haptic Feedback & Audio --------
        function triggerHaptic() {
            if ('vibrate' in navigator) {
                try { navigator.vibrate(12); } catch {}
            }
        }

        // -------- View Mode (Grid vs Compact List) --------
        const VIEW_MODE_KEY = '4uia_view_mode_v1';
        let currentViewMode = localStorage.getItem(VIEW_MODE_KEY) || 'grid';
        function setViewMode(mode) {
            triggerHaptic();
            currentViewMode = mode;
            try { localStorage.setItem(VIEW_MODE_KEY, mode); } catch {}
            renderStore();
        }

        // -------- Recent Apps (local) --------
        const RECENT_KEY = '4uia_recent_v1';
        function getRecentAppIds() {
            try {
                const raw = localStorage.getItem(RECENT_KEY);
                const arr = raw ? JSON.parse(raw) : [];
                return Array.isArray(arr) ? arr.map(safeText).filter(Boolean) : [];
            } catch { return []; }
        }
        function addRecentApp(id) {
            id = safeText(id);
            if (!id) return;
            try {
                let list = getRecentAppIds().filter(x => x !== id);
                list.unshift(id);
                list = list.slice(0, 6);
                localStorage.setItem(RECENT_KEY, JSON.stringify(list));
            } catch {}
        }

        // -------- Click Tracker --------
        async function recordAppClick(appId) {
            if (!appId) return;
            addRecentApp(appId);
            const app = state.apps.find(a => a.id === appId);
            if (app) {
                app.clicks = (app.clicks || 0) + 1;
            }
            if (API.backend === 'php' && API.click) {
                try {
                    fetch(`${API.click}&id=${encodeURIComponent(appId)}`, { method: 'POST' }).catch(() => {});
                } catch (e) {}
            }
        }

        // -------- QR Code Modal --------
        function openQrModal(app) {
            if (!app || !app.link) {
                toast('Sem link cadastrado para gerar QR Code.', 'warn');
                return;
            }
            const d = $('#qrDialog');
            if (!d) return;
            const url = normalizeAppLink(app.link);
            const qrImg = $('#qrImage');
            const qrTitle = $('#qrAppTitle');
            if (qrTitle) qrTitle.textContent = app.title || 'App';
            if (qrImg) qrImg.src = `https://api.qrserver.com/v1/create-qr-code/?size=220x220&margin=4&data=${encodeURIComponent(url)}`;
            if (!d.open) d.showModal();
        }

        // -------- WhatsApp Share --------
        function shareOnWhatsApp(app) {
            if (!app) return;
            const url = normalizeAppLink(app.link) || (location.origin + location.pathname + detailsHashFor(app.id));
            const msg = `Confira o WebApp *${app.title}* no 4u.ia.br:\n${app.shortDescription || ''}\n\n👉 Acessar: ${url}`;
            const waUrl = `https://api.whatsapp.com/send?text=${encodeURIComponent(msg)}`;
            window.open(waUrl, '_blank', 'noopener,noreferrer');
        }

        // -------- Command Palette (Ctrl+K) --------
        function openCmdPalette() {
            triggerHaptic();
            const d = $('#cmdPaletteDialog');
            const input = $('#cmdPaletteInput');
            if (!d || !input) return;
            input.value = '';
            renderCmdPaletteResults('');
            if (!d.open) d.showModal();
            setTimeout(() => input.focus(), 60);
        }

        function renderCmdPaletteResults(q) {
            const container = $('#cmdPaletteResults');
            if (!container) return;
            const query = q.trim().toLowerCase();
            
            let apps = state.apps;
            if (query) {
                apps = apps.map(a => ({ a, s: scoreMatches(a, query) }))
                           .filter(x => x.s > 0)
                           .sort((x, y) => y.s - x.s || (y.a.clicks || 0) - (x.a.clicks || 0))
                           .map(x => x.a)
                           .slice(0, 8);
            } else {
                apps = apps.slice(0, 6);
            }

            const categories = getCategories(state.apps);
            const matchedCategories = query 
                ? categories.filter(c => c.toLowerCase().includes(query)).slice(0, 3) 
                : categories.slice(0, 4);

            let html = '';

            if (!query) {
                html += `
                <div class="px-2 py-1.5 text-[11px] font-semibold text-zinc-500 uppercase tracking-wider">Ações Rápidas</div>
                <button type="button" class="cmd-action flex items-center gap-3 w-full p-2.5 rounded-xl hover:bg-white/10 transition-colors text-left text-sm text-zinc-200 cursor-pointer" data-action="favs">
                    <span class="text-amber-400">⭐</span>
                    <span class="flex-1 font-medium">Ver meus apps favoritos</span>
                    <kbd class="text-[10px] text-zinc-500 bg-white/5 px-1.5 py-0.5 rounded">Filtro</kbd>
                </button>
                <button type="button" class="cmd-action flex items-center gap-3 w-full p-2.5 rounded-xl hover:bg-white/10 transition-colors text-left text-sm text-zinc-200 cursor-pointer" data-action="trending">
                    <span class="text-rose-400">🔥</span>
                    <span class="flex-1 font-medium">Ver apps mais acessados</span>
                    <kbd class="text-[10px] text-zinc-500 bg-white/5 px-1.5 py-0.5 rounded">Ranking</kbd>
                </button>
                <button type="button" class="cmd-action flex items-center gap-3 w-full p-2.5 rounded-xl hover:bg-white/10 transition-colors text-left text-sm text-zinc-200 cursor-pointer" data-action="suggest">
                    <span class="text-emerald-400">💡</span>
                    <span class="flex-1 font-medium">Sugerir uma nova ferramenta</span>
                    <kbd class="text-[10px] text-zinc-500 bg-white/5 px-1.5 py-0.5 rounded">Comunidade</kbd>
                </button>
                `;
            }

            if (apps.length) {
                html += `<div class="px-2 pt-3 pb-1 text-[11px] font-semibold text-zinc-500 uppercase tracking-wider">Aplicativos (${apps.length})</div>`;
                html += apps.map(app => {
                    const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status));
                    return `
                    <div class="cmd-app-row flex items-center justify-between gap-3 p-2 rounded-xl hover:bg-white/10 transition-colors text-left text-sm text-zinc-200 cursor-pointer group" data-id="${escapeHtml(app.id)}">
                        <div class="flex items-center gap-3 min-w-0 flex-1">
                            <img src="${escapeHtml(icon)}" alt="" class="h-8 w-8 rounded-lg object-cover ring-1 ring-white/10 shrink-0" />
                            <div class="min-w-0 flex-1">
                                <div class="font-semibold text-white group-hover:text-emerald-300 transition-colors truncate">${escapeHtml(app.title)}</div>
                                <div class="text-xs text-zinc-400 truncate">${escapeHtml(app.category || 'Geral')} • ${escapeHtml(clampText(app.shortDescription || '', 45))}</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 shrink-0">
                            <button type="button" class="open-iframe rounded-lg bg-emerald-500/20 text-emerald-300 hover:bg-emerald-500 hover:text-white px-2.5 py-1 text-xs font-semibold transition-all" data-id="${escapeHtml(app.id)}">Testar</button>
                            <button type="button" class="open-details rounded-lg border border-white/10 bg-white/5 text-zinc-300 hover:bg-white/15 px-2 py-1 text-xs transition-all" data-id="${escapeHtml(app.id)}">Detalhes</button>
                        </div>
                    </div>
                    `;
                }).join('');
            } else {
                html += `<div class="p-6 text-center text-sm text-zinc-400">Nenhum aplicativo encontrado para "${escapeHtml(q)}"</div>`;
            }

            if (matchedCategories.length) {
                html += `<div class="px-2 pt-3 pb-1 text-[11px] font-semibold text-zinc-500 uppercase tracking-wider">Categorias</div>`;
                html += matchedCategories.map(cat => `
                    <button type="button" class="cmd-category flex items-center justify-between w-full p-2 rounded-xl hover:bg-white/10 transition-colors text-left text-sm text-zinc-300 cursor-pointer" data-category="${escapeHtml(cat)}">
                        <span class="font-medium text-white">📁 ${escapeHtml(cat)}</span>
                        <span class="text-xs text-zinc-500">Filtrar categoria →</span>
                    </button>
                `).join('');
            }

            container.innerHTML = html;
        }

        // -------- Fuzzy Search & Highlight --------
        function highlightMatches(text, query) {
            text = safeText(text);
            if (!query || !query.trim() || !text) return escapeHtml(text);
            const rawTerms = query.trim().split(/\s+/).filter(Boolean);
            if (!rawTerms.length) return escapeHtml(text);
            let escaped = escapeHtml(text);
            rawTerms.forEach(t => {
                const clean = t.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
                const regex = new RegExp(`(${clean})`, 'gi');
                escaped = escaped.replace(regex, '<mark class="bg-emerald-400/35 text-emerald-200 px-1 py-0.5 rounded font-medium shadow-sm shadow-emerald-500/20">$1</mark>');
            });
            return escaped;
        }

        // -------- Favorites (local) --------
        const FAVORITES_KEY = '4uia_favorites_v1';
        const favorites = new Set((() => { try { const raw = localStorage.getItem(FAVORITES_KEY); const arr = raw ? JSON.parse(raw) : []; return Array.isArray(arr) ? arr.map(safeText).filter(Boolean) : []; } catch { return []; } })());
        function persistFavorites() { try { localStorage.setItem(FAVORITES_KEY, JSON.stringify(Array.from(favorites))); } catch { } }
        function isFavorite(id) { return favorites.has(safeText(id)); }
        function toggleFavorite(id) { triggerHaptic(); id = safeText(id); if (!id) return; if (favorites.has(id)) favorites.delete(id); else favorites.add(id); persistFavorites(); }
        function heartSvg(filled = false) { return filled ? `<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="pointer-events-none text-emerald-400"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>` : `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="pointer-events-none text-zinc-300"><path d="M20.84 4.61c-1.83-1.65-4.65-1.47-6.37.34L12 7.33l-2.47-2.38c-1.72-1.81-4.54-1.99-6.37-.34-2.08 1.87-2.19 5.1-.33 7.11C5.2 15.1 12 20 12 20s6.8-4.9 9.17-8.28c1.86-2.01 1.75-5.24-.33-7.11z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>`; }
        function shareAppLink(app) {
            const url = normalizeAppLink(app?.link);
            const title = safeText(app?.title) || '4u.ia.br';
            const text = safeText(app?.shortDescription) || `Confira o app ${title} na loja 4u.ia.br`;
            if (!url) { toast('Sem link cadastrado.', 'warn'); return; }
            if (navigator.share) {
                navigator.share({ title, text, url }).catch(() => { });
                return;
            }
            navigator.clipboard?.writeText(url).then(() => toast('Link copiado para a área de transferência!', 'ok')).catch(() => toast('Não foi possível copiar o link.', 'warn'));
        }

        // -------- Save Indicator --------
        function showSaveIndicator(text = 'Salvando...') { const indicator = $('#saveIndicator'); const textEl = $('#saveIndicatorText'); const dot = $('#saveIndicatorDot'); if (indicator && textEl) { textEl.textContent = text; dot?.classList.add('saving-indicator'); indicator.classList.remove('hidden'); } }
        function hideSaveIndicator() { const indicator = $('#saveIndicator'); if (indicator) { indicator.classList.add('hidden'); } }
        function showSaveSuccess() { const indicator = $('#saveIndicator'); const textEl = $('#saveIndicatorText'); const dot = $('#saveIndicatorDot'); if (indicator && textEl) { textEl.textContent = '✓ Salvo'; dot?.classList.remove('saving-indicator'); setTimeout(() => hideSaveIndicator(), 1500); } }

        // -------- Default media generators --------
        function defaultIcon(initials = 'IA', tone = 'indigo') { const colors = { indigo: ['#6366f1', '#4f46e5'], cyan: ['#06b6d4', '#0891b2'], emerald: ['#10b981', '#059669'], fuchsia: ['#d946ef', '#c026d3'], amber: ['#f59e0b', '#d97706'], rose: ['#f43f5e', '#e11d48'], }; const [c1, c2] = colors[tone] || colors.indigo; const svg = ` <svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" viewBox="0 0 256 256"><defs><linearGradient id="g" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="${c1}"/><stop offset="1" stop-color="${c2}"/></linearGradient></defs><rect x="16" y="16" width="224" height="224" rx="56" fill="url(#g)"/><rect x="16" y="16" width="224" height="224" rx="56" fill="none" stroke="rgba(255,255,255,.25)" stroke-width="2"/><text x="50%" y="54%" text-anchor="middle" font-family="Inter, system-ui, sans-serif" font-size="76" font-weight="700" fill="rgba(255,255,255,.95)">${escapeHtml(initials).slice(0, 3)}</text></svg> `.trim(); return 'data:image/svg+xml;charset=utf-8,' + encodeURIComponent(svg); }
        function defaultHeroImage(title = 'Seu App', tone = 'indigo') { const colors = { indigo: '#6366f1', cyan: '#06b6d4', emerald: '#10b981', fuchsia: '#d946ef', amber: '#f59e0b', }; const c1 = colors[tone] || colors.indigo; const t = escapeHtml(title).slice(0, 28); const svg = ` <svg xmlns="http://www.w3.org/2000/svg" width="1600" height="900" viewBox="0 0 1600 900"><defs><linearGradient id="bg" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="${c1}" stop-opacity="0.4"/><stop offset="0.5" stop-color="#0a0c14" stop-opacity="0.95"/><stop offset="1" stop-color="#050709"/></linearGradient><radialGradient id="glow" cx="30%" cy="30%" r="60%"><stop offset="0" stop-color="rgba(255,255,255,0.15)"/><stop offset="1" stop-color="rgba(255,255,255,0)"/></radialGradient><pattern id="grid" width="60" height="60" patternUnits="userSpaceOnUse"><path d="M60 0H0V60" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="1"/></pattern></defs><rect width="1600" height="900" fill="url(#bg)"/><rect width="1600" height="900" fill="url(#glow)"/><rect width="1600" height="900" fill="url(#grid)"/><circle cx="1300" cy="150" r="300" fill="${c1}" opacity="0.15"/><circle cx="200" cy="750" r="350" fill="#06b6d4" opacity="0.08"/><text x="100" y="500" font-family="Inter, system-ui, sans-serif" font-size="56" font-weight="800" fill="rgba(255,255,255,0.9)">${t}</text><text x="100" y="560" font-family="Inter, system-ui, sans-serif" font-size="22" font-weight="400" fill="rgba(255,255,255,0.5)">Adicione uma imagem de destaque no Admin</text></svg> `.trim(); return 'data:image/svg+xml;charset=utf-8,' + encodeURIComponent(svg); }

        // -------- Backend Detection --------
        async function detectBackend() {
            console.log('🔍 Detectando backend...');
            API = { catalog: '', upload: '', uploadBase64: '', status: '', login: '', verify: '', click: '', suggest: '', track: '', stats: '', backend: 'unknown' };

            try {
                const phpRes = await fetch('api.php?action=status', { method: 'GET', cache: 'no-store' });
                if (phpRes.ok) {
                    const data = await phpRes.json();
                    console.log('✅ Backend PHP detectado:', data);
                    API = {
                        catalog: 'api.php?action=catalog',
                        upload: 'api.php?action=upload',
                        uploadBase64: 'api.php?action=upload-base64',
                        status: 'api.php?action=status',
                        login: 'api.php?action=login',
                        verify: 'api.php?action=verify',
                        click: 'api.php?action=click',
                        suggest: 'api.php?action=suggest',
                        track: 'api.php?action=track',
                        stats: 'api.php?action=stats',
                        backend: 'php'
                    };
                    return 'php';
                }
            } catch (e) {
                console.log('ℹ️ PHP não detectado ou erro na api.php');
            }

            try {
                const nodeRes = await fetch('/api/status', { method: 'GET', cache: 'no-store' });
                if (nodeRes.ok) {
                    const data = await nodeRes.json();
                    console.log('✅ Backend Node.js detectado:', data);
                    API = {
                        catalog: '/api/catalog',
                        upload: '/api/upload',
                        uploadBase64: '/api/upload-base64',
                        status: '/api/status',
                        login: '/api/login',
                        verify: '/api/verify',
                        click: '/api/click',
                        suggest: '/api/suggest',
                        track: '/api/track',
                        stats: '/api/stats',
                        backend: 'node'
                    };
                    return 'node';
                }
            } catch (e) {
                console.log('ℹ️ Node.js não detectado');
            }

            try {
                const staticRes = await fetch('catalog.json', { method: 'GET', cache: 'no-store' });
                if (staticRes.ok) {
                    console.log('⚠️ Modo estático: catalog.json encontrado');
                    API = {
                        catalog: 'catalog.json',
                        upload: null,
                        uploadBase64: null,
                        status: null,
                        login: null,
                        verify: null,
                        click: null,
                        suggest: null,
                        track: null,
                        stats: null,
                        backend: 'static'
                    };
                    return 'static';
                }
            } catch (e) {
                console.log('ℹ️ catalog.json não encontrado');
            }

            console.warn('❌ Nenhum backend funcional detectado');
            API.backend = 'none';
            return 'none';
        }

        // -------- API Functions --------
        async function fetchCatalog() { if (!API.catalog) throw new Error('Backend não configurado'); const res = await fetch(API.catalog, { cache: 'no-store' }); if (!res.ok) throw new Error(`Falha ao carregar (HTTP ${res.status})`); const parsed = await res.json(); return normalizeCatalogPayload(parsed); }
        async function saveCatalog() { if (API.backend === 'static' || API.backend === 'none') { toast('Backend não disponível. Baixe o catalog.json.', 'warn'); downloadJson('catalog.json', catalogDraftPayload()); return { success: true, manual: true }; } showSaveIndicator('Salvando...'); try { const payload = { version: 1, exportedAt: new Date().toISOString(), prefs: state.prefs, apps: state.apps }; const res = await fetch(API.catalog, { method: 'POST', headers: auth.getHeaders(), body: JSON.stringify(payload) }); if (res.status === 401) { hideSaveIndicator(); auth.logout(); toast('Sessão expirada.', 'warn'); showLoginDialog(); throw new Error('Não autorizado'); } if (!res.ok) throw new Error(`Erro ao salvar (HTTP ${res.status})`); const result = await res.json(); state.meta.lastSaved = Date.now(); state.meta.dirty = false; showSaveSuccess(); return result; } catch (err) { hideSaveIndicator(); toast('Erro ao salvar: ' + err.message, 'err'); throw err; } }
        async function uploadImage(file) { if (API.backend === 'static' || API.backend === 'none' || !API.upload) { return await fileToDataUrl(file); } showSaveIndicator('Enviando imagem...'); try { const formData = new FormData(); formData.append('image', file); const res = await fetch(API.upload, { method: 'POST', headers: auth.getAuthHeader(), body: formData }); if (res.status === 401) { hideSaveIndicator(); auth.logout(); toast('Sessão expirada.', 'warn'); showLoginDialog(); throw new Error('Não autorizado'); } if (!res.ok) throw new Error(`Erro no upload (HTTP ${res.status})`); const result = await res.json(); showSaveSuccess(); return result.url; } catch (err) { hideSaveIndicator(); toast('Erro ao enviar: ' + err.message, 'err'); throw err; } }
        async function uploadBase64Image(dataUrl, filename = 'image') { if (!dataUrl || !dataUrl.startsWith('data:image')) return dataUrl; if (API.backend === 'static' || API.backend === 'none' || !API.uploadBase64) return dataUrl; showSaveIndicator('Processando...'); try { const res = await fetch(API.uploadBase64, { method: 'POST', headers: auth.getHeaders(), body: JSON.stringify({ dataUrl, filename }) }); if (res.status === 401) { hideSaveIndicator(); auth.logout(); toast('Sessão expirada.', 'warn'); showLoginDialog(); throw new Error('Não autorizado'); } if (!res.ok) throw new Error(`Erro (HTTP ${res.status})`); const result = await res.json(); showSaveSuccess(); return result.url; } catch (err) { hideSaveIndicator(); return dataUrl; } }
        function fileToDataUrl(file) { return new Promise((resolve, reject) => { const fr = new FileReader(); fr.onload = () => resolve(fr.result); fr.onerror = reject; fr.readAsDataURL(file); }); }
        function normalizeCatalogPayload(parsed) {
            const obj = (parsed && typeof parsed === 'object') ? parsed : {};
            const apps = Array.isArray(parsed) ? parsed : (Array.isArray(obj.apps) ? obj.apps : []);
            const prefs = (obj.prefs && typeof obj.prefs === 'object') ? obj.prefs : {};
            const now = Date.now();
            const normalizedApps = apps.map(a => ({
                id: safeText(a.id) || uid(),
                title: safeText(a.title),
                shortDescription: safeText(a.shortDescription),
                fullDescription: safeText(a.fullDescription),
                tags: normalizeTags(a.tags),
                category: safeText(a.category),
                iconUrl: safeText(a.iconUrl) || safeText(a.iconDataUrl),
                heroImageUrl: safeText(a.heroImageUrl) || safeText(a.heroImageDataUrl),
                link: safeText(a.link),
                status: safeText(a.status) || 'Estável',
                createdAt: Number(a.createdAt) || now,
                updatedAt: Number(a.updatedAt) || now,
                clicks: Number(a.clicks) || 0
            })).filter(a => a.title && a.link);
            return {
                apps: normalizedApps,
                prefs: {
                    storeLogoUrl: safeText(prefs.storeLogoUrl),
                    heroAppId: safeText(prefs.heroAppId),
                    announcementActive: !!prefs.announcementActive,
                    announcementText: safeText(prefs.announcementText),
                    announcementType: safeText(prefs.announcementType) || 'emerald',
                    announcementLink: safeText(prefs.announcementLink),
                    storeTitle: safeText(prefs.storeTitle),
                    storeSlogan: safeText(prefs.storeSlogan),
                    storeDescription: safeText(prefs.storeDescription)
                }
            };
        }
        function downloadJson(filename, obj) { const blob = new Blob([JSON.stringify(obj, null, 2)], { type: 'application/json' }); const url = URL.createObjectURL(blob); const a = document.createElement('a'); a.href = url; a.download = filename; document.body.appendChild(a); a.click(); a.remove(); URL.revokeObjectURL(url); }
        function catalogDraftPayload() { return { version: 1, exportedAt: new Date().toISOString(), prefs: state.prefs, apps: state.apps }; }

        // -------- Business helpers --------
        function getCategories(apps) { const s = new Set(); apps.forEach(a => { if (safeText(a.category)) s.add(safeText(a.category)); }); return Array.from(s).sort((a, b) => a.localeCompare(b, 'pt-BR')); }
        function getCategoriesWithCount(apps) { const counts = {}; apps.forEach(a => { const cat = safeText(a.category); if (cat) counts[cat] = (counts[cat] || 0) + 1; }); return Object.entries(counts).map(([name, count]) => ({ name, count })).sort((a, b) => b.count - a.count); }
        function getAllTags(apps) { const s = new Set(); apps.forEach(a => (a.tags || []).forEach(t => s.add(safeText(t)))); return Array.from(s).filter(Boolean).sort((a, b) => a.localeCompare(b, 'pt-BR')); }
        
        function scoreMatches(app, q) {
            const query = q.trim().toLowerCase();
            if (!query) return 1;
            const words = query.split(/\s+/).filter(Boolean);
            const title = normKey(app.title || '');
            const tags = (app.tags || []).map(t => normKey(t)).join(' ');
            const cat = normKey(app.category || '');
            const shortDesc = normKey(app.shortDescription || '');
            const fullDesc = normKey(app.fullDescription || '');
            
            let score = 0;
            let matchesAll = true;

            for (const w of words) {
                let wScore = 0;
                if (title.includes(w)) {
                    wScore += title.startsWith(w) ? 25 : 15;
                }
                if (tags.includes(w)) wScore += 10;
                if (cat.includes(w)) wScore += 8;
                if (shortDesc.includes(w)) wScore += 5;
                if (fullDesc.includes(w)) wScore += 2;

                if (wScore === 0) {
                    matchesAll = false;
                } else {
                    score += wScore;
                }
            }
            if (matchesAll) score += 20; // Bônus de relevância
            return score;
        }

        function sortApps(apps, sortBy) {
            const arr = [...apps];
            if (sortBy === 'acessos' || sortBy === 'popular') {
                arr.sort((a, b) => (b.clicks || 0) - (a.clicks || 0) || (b.updatedAt || 0) - (a.updatedAt || 0));
            } else if (sortBy === 'destaque') {
                arr.sort((a, b) => {
                    const ad = a.status === 'Destaque' ? 1 : 0;
                    const bd = b.status === 'Destaque' ? 1 : 0;
                    if (ad !== bd) return bd - ad;
                    return (b.updatedAt || 0) - (a.updatedAt || 0);
                });
            } else if (sortBy === 'novos') {
                arr.sort((a, b) => (b.createdAt || 0) - (a.createdAt || 0));
            } else if (sortBy === 'nome') {
                arr.sort((a, b) => (a.title || '').localeCompare((b.title || ''), 'pt-BR'));
            } else {
                arr.sort((a, b) => (b.updatedAt || 0) - (a.updatedAt || 0));
            }
            return arr;
        }

        // -------- Global state --------
        const state = {
            apps: [],
            prefs: {
                storeLogoUrl: '',
                heroAppId: '',
                announcementActive: false,
                announcementText: '',
                announcementType: 'emerald',
                announcementLink: '',
                storeTitle: '',
                storeSlogan: '',
                storeDescription: ''
            },
            store: {
                q: '',
                category: 'Todas',
                sortBy: 'destaque',
                pageSize: 18,
                visible: 18,
                loadingMore: false,
                favoritesOnly: false
            },
            admin: {
                tab: 'stats',
                statsData: null,
                statsLoading: false,
                selectedId: null,
                listQ: '',
                categoryFilter: 'Todas',
                suggestions: [],
                suggestionsLoading: false,
                suggestionsLoaded: false
            },
            meta: {
                loaded: false,
                error: '',
                loadedAt: null,
                lastSaved: null,
                dirty: false,
                saving: false
            },
            slider: {
                currentIndex: 0,
                autoplayTimer: null,
                autoplayInterval: 5000
            }
        };

        // -------- Telemetria & Analytics --------
        async function trackVisit() {
            try {
                if (!API.track) return;
                const currentPath = window.location.pathname + (window.location.hash || '');
                if (currentPath.includes('/admin')) return;
                const ref = document.referrer || '';
                fetch(API.track, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        page: currentPath,
                        referrer: ref
                    })
                }).catch(() => {});
            } catch (e) {}
        }

        async function fetchStats(force = false) {
            if (!API.stats) return null;
            if (state.admin.statsData && !force) return state.admin.statsData;
            state.admin.statsLoading = true;
            try {
                const res = await fetch(API.stats, {
                    method: 'GET',
                    headers: auth.getHeaders()
                });
                if (res.ok) {
                    const data = await res.json();
                    state.admin.statsData = data;
                    return data;
                } else if (res.status === 401) {
                    auth.logout();
                    showLoginDialog();
                    return null;
                }
            } catch (e) {
                console.error('Erro ao buscar estatísticas:', e);
                toast('Erro ao buscar estatísticas: ' + e.message, 'err');
            } finally {
                state.admin.statsLoading = false;
            }
            return null;
        }

        async function fetchSuggestions(force = false) {
            if (API.backend !== 'php') return [];
            if (state.admin.suggestionsLoaded && !force) return state.admin.suggestions;
            state.admin.suggestionsLoading = true;
            try {
                const res = await fetch('api.php?action=suggestions-list', {
                    headers: auth.getHeaders()
                });
                if (res.ok) {
                    const data = await res.json();
                    state.admin.suggestions = data.suggestions || [];
                    state.admin.suggestionsLoaded = true;
                    return state.admin.suggestions;
                } else if (res.status === 401) {
                    auth.logout();
                    showLoginDialog();
                }
            } catch (e) {
                console.error('Erro ao buscar sugestões:', e);
                toast('Erro ao buscar sugestões: ' + e.message, 'err');
            } finally {
                state.admin.suggestionsLoading = false;
            }
            return state.admin.suggestions;
        }

        async function updateSuggestionStatus(id, status) {
            try {
                const res = await fetch('api.php?action=suggestion-status', {
                    method: 'POST',
                    headers: auth.getHeaders(),
                    body: JSON.stringify({ id, status })
                });
                if (!res.ok) throw new Error('Falha ao processar requisição');
                if (status === 'excluir') {
                    state.admin.suggestions = state.admin.suggestions.filter(s => Number(s.id) !== Number(id));
                    toast('Registro excluído!', 'ok');
                } else {
                    const s = state.admin.suggestions.find(item => Number(item.id) === Number(id));
                    if (s) s.status = status;
                    toast(`Status marcado como: ${status}`, 'ok');
                }
                renderAdmin();
            } catch (err) {
                toast('Erro: ' + err.message, 'err');
            }
        }
        let autoSaveTimer = null; let searchDebounceTimer = null;
        function markDirtyAndSave() { state.meta.dirty = true; if (API.backend === 'static' || API.backend === 'none') return; if (autoSaveTimer) clearTimeout(autoSaveTimer); autoSaveTimer = setTimeout(async () => { if (state.meta.dirty && !state.meta.saving) { state.meta.saving = true; try { await saveCatalog(); } finally { state.meta.saving = false; } } }, 1000); }
        function getHeroApp() { const heroId = safeText(state.prefs.heroAppId); if (heroId) { const byId = state.apps.find(a => a.id === heroId); if (byId) return byId; } return sortApps(state.apps, 'destaque').find(a => a.status === 'Destaque') || null; }
        function getFeaturedApps() { return sortApps(state.apps.filter(a => a.status === 'Destaque'), 'destaque'); }

        // Slider functions
        function startSliderAutoplay() {
            stopSliderAutoplay();
            const featuredApps = getFeaturedApps();
            if (featuredApps.length <= 1) { return; }
            const progressBar = $('#sliderProgress');
            if (progressBar) {
                progressBar.style.animation = 'none';
                progressBar.offsetHeight; // trigger reflow
                progressBar.style.animation = 'sliderProgress 5s linear infinite';
            }
            const timerId = setInterval(() => { sliderNext(); }, state.slider.autoplayInterval);
            state.slider.autoplayTimer = timerId;
        }
        function stopSliderAutoplay() { if (state.slider.autoplayTimer) { clearInterval(state.slider.autoplayTimer); state.slider.autoplayTimer = null; } }
        function sliderNext() { const featuredApps = getFeaturedApps(); if (featuredApps.length <= 1) return; state.slider.currentIndex = (state.slider.currentIndex + 1) % featuredApps.length; updateSliderUI(); }
        function sliderPrev() { const featuredApps = getFeaturedApps(); if (featuredApps.length <= 1) return; state.slider.currentIndex = (state.slider.currentIndex - 1 + featuredApps.length) % featuredApps.length; updateSliderUI(); }
        function sliderGoTo(index) { const featuredApps = getFeaturedApps(); if (index < 0 || index >= featuredApps.length) return; state.slider.currentIndex = index; updateSliderUI(); startSliderAutoplay(); }
        function updateSliderUI() { const featuredApps = getFeaturedApps(); if (featuredApps.length === 0) return; const app = featuredApps[state.slider.currentIndex]; if (!app) return; const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status)); const heroImg = safeText(app.heroImageUrl); const tags = (app.tags || []).slice(0, 5); const slideContent = $('#sliderContent'); if (slideContent) { slideContent.style.opacity = '0'; slideContent.style.transform = 'translateX(20px)'; setTimeout(() => { const heroImgEl = $('#sliderHeroImage'); const heroPlaceholder = $('#sliderHeroPlaceholder'); if (heroImgEl && heroPlaceholder) { if (heroImg) { heroImgEl.src = heroImg; heroImgEl.classList.remove('hidden'); heroPlaceholder.classList.add('hidden'); } else { heroImgEl.classList.add('hidden'); heroPlaceholder.classList.remove('hidden'); } } const iconEl = $('#sliderIcon'); if (iconEl) iconEl.src = icon; const titleEl = $('#sliderTitle'); if (titleEl) titleEl.textContent = app.title || 'Sem título'; const categoryEl = $('#sliderCategory'); if (categoryEl) categoryEl.textContent = app.category || 'App'; const descEl = $('#sliderDescription'); if (descEl) descEl.textContent = app.shortDescription || ''; const tagsEl = $('#sliderTags'); if (tagsEl) { tagsEl.innerHTML = tags.map(t => `<span class="rounded-full bg-white/10 px-3 py-1.5 text-xs font-medium text-zinc-200 ring-1 ring-white/10">#${escapeHtml(t)}</span>`).join(''); } const openAppBtn = $('#sliderOpenApp'); const detailsBtn = $('#sliderDetails'); if (openAppBtn) openAppBtn.setAttribute('data-id', app.id); if (detailsBtn) detailsBtn.setAttribute('data-id', app.id); const statusEl = $('#sliderStatus'); if (statusEl) statusEl.innerHTML = app.status ? statusPill(app.status) : ''; slideContent.style.opacity = '1'; slideContent.style.transform = 'translateX(0)'; }, 150); } $$('.slider-dot').forEach((dot, i) => { if (i === state.slider.currentIndex) { dot.classList.add('bg-white', 'w-6'); dot.classList.remove('bg-white/30', 'w-2'); } else { dot.classList.remove('bg-white', 'w-6'); dot.classList.add('bg-white/30', 'w-2'); } }); const counterEl = $('#sliderCounter'); if (counterEl) counterEl.textContent = `${state.slider.currentIndex + 1} / ${featuredApps.length}`; const progressBar = $('#sliderProgress'); if (progressBar) { progressBar.style.animation = 'none'; progressBar.offsetHeight; progressBar.style.animation = 'sliderProgress 5s linear infinite'; } }

        // -------- Router --------
        function currentRoute() { const h = location.hash || '#/'; if (h.startsWith('#/admin')) return 'admin'; return 'store'; }
        function detailsHashFor(id) { return '#/app/' + encodeURIComponent(safeText(id)); }
        function getDetailsIdFromHash() { const h = location.hash || ''; const m = h.match(/^#\/app\/([^/?#]+)/); return m ? decodeURIComponent(m[1]) : null; }
        function clearDetailsHash() { if ((location.hash || '').startsWith('#/app/')) { history.replaceState(null, '', '#/'); } }
        function seoUrlFor(id) { const cleanId = safeText(id); const base = location.origin + (BASE_URL || ''); return base + '/app.php?id=' + encodeURIComponent(cleanId); }
        window.addEventListener('hashchange', async () => { await render(); trackVisit(); });

        // -------- Login Functions --------
        function showLoginDialog() { const d = $('#loginDialog'); const form = $('#loginForm'); const passwordInput = $('#loginPassword'); const errorDiv = $('#loginError'); if (form) form.reset(); if (errorDiv) { errorDiv.classList.add('hidden'); errorDiv.textContent = ''; } if (d && !d.open) { d.showModal(); passwordInput?.focus(); } const newForm = form?.cloneNode(true); form?.parentNode?.replaceChild(newForm, form); newForm?.addEventListener('submit', async (e) => { e.preventDefault(); const passwordInput = newForm.querySelector('#loginPassword') || $('#loginPassword'); const password = passwordInput?.value || ''; const errorDiv = newForm.querySelector('#loginError') || $('#loginError'); const submitBtn = newForm.querySelector('#loginSubmit') || $('#loginSubmit'); if (!password) { if (errorDiv) { errorDiv.textContent = 'Digite a senha'; errorDiv.classList.remove('hidden'); } return; } if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = 'Entrando...'; } try { const success = await doLogin(password); if (success) { d.close(); toast('Login realizado!', 'ok'); render(); } else { if (errorDiv) { errorDiv.textContent = 'Senha incorreta'; errorDiv.classList.remove('hidden'); } } } catch (err) { if (errorDiv) { errorDiv.textContent = 'Erro: ' + err.message; errorDiv.classList.remove('hidden'); } } finally { if (submitBtn) { submitBtn.disabled = false; submitBtn.textContent = 'Entrar'; } } }); const cancelBtn = $('#loginCancel'); const newCancelBtn = cancelBtn?.cloneNode(true); cancelBtn?.parentNode?.replaceChild(newCancelBtn, cancelBtn); newCancelBtn?.addEventListener('click', () => { d.close(); location.hash = '#/'; }); }
        async function doLogin(password) {
            if ((API.backend === 'php' || API.backend === 'node') && API.login) {
                try {
                    const res = await fetch(API.login, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ password })
                    });
                    if (res.ok) {
                        const data = await res.json();
                        if (data.success && data.token) {
                            auth.setToken(data.token);
                            return true;
                        }
                    }
                    return false;
                } catch (err) {
                    console.error('Erro na autenticação:', err);
                    return false;
                }
            }

            // Sem backend ativo, impossível validar senha com segurança no client.
            // O login continuará falhando a menos que um backend real seja configurado.
            console.warn('Login local desativado por segurança. Configure um backend (PHP/Node).');
            return false;
        }
        async function checkAuth() { const token = auth.getToken(); if (!token) return false; if (API.backend === 'php' && API.verify) { try { const res = await fetch(API.verify, { method: 'POST', headers: auth.getHeaders() }); if (res.ok) { const data = await res.json(); return data.valid === true; } auth.logout(); return false; } catch (err) { return false; } } return token.startsWith('local_admin_'); }

        // -------- UI Components --------
        function storeLogoMarkup() { const logo = safeText(state.prefs.storeLogoUrl); if (logo) { return `<img id="storeLogoTrigger" src="${escapeHtml(logo)}" alt="Logo" class="h-12 w-12 rounded-2xl object-cover ring-2 ring-white/10 hover:ring-emerald-400/50 transition-all cursor-pointer" />`; } return ` <div id="storeLogoTrigger" class="grid h-12 w-12 place-items-center rounded-2xl bg-gradient-to-br from-emerald-500 via-cyan-500 to-teal-500 glow-sm ring-2 ring-white/10 cursor-pointer"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-white"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div> `; }
        function backendBadge() {
            return `<span class="inline-flex items-center gap-1.5 rounded-full bg-gradient-to-r from-emerald-500/15 to-cyan-500/15 px-2.5 py-0.5 text-[11px] font-semibold text-emerald-300 ring-1 ring-emerald-400/30 shadow-sm"><span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>v2.1</span>`;
        }
        function statusPill(status) {
            const t = statusTone(status);
            const dotColors = { emerald: 'bg-emerald-400', teal: 'bg-teal-400', cyan: 'bg-cyan-400', amber: 'bg-amber-400', rose: 'bg-rose-400' };
            const dotColor = dotColors[t] || 'bg-zinc-400';
            return `<span class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-0.5 text-[11px] font-semibold ring-1 backdrop-blur-sm shadow-sm ${toneClasses(t)}"><span class="relative flex h-2 w-2 items-center justify-center"><span class="animate-ping absolute inline-flex h-full w-full rounded-full ${dotColor} opacity-75"></span><span class="relative inline-flex rounded-full h-1.5 w-1.5 ${dotColor}"></span></span><span>${escapeHtml(status || '')}</span></span>`;
        }
        function appShell({ title, subtitle, right, main, footer }) {
            return `
            <div class="mx-auto flex min-h-screen max-w-[1280px] flex-col px-4 sm:px-6 pb-20 sm:pb-12">
                <header class="sticky top-0 z-40 pt-3 sm:pt-4 pb-2 bg-[#050709]/75 backdrop-blur-md transition-all">
                    <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/90 backdrop-blur-xl shadow-lg shadow-black/40">
                        <div class="relative flex flex-col gap-4 p-4 sm:flex-row sm:items-center sm:justify-between sm:gap-6">
                            <div class="flex items-center gap-4">
                                <a href="#/" class="group flex items-center gap-4 transition-transform hover:scale-[1.02]">
                                    ${storeLogoMarkup()}
                                    <div class="leading-tight">
                                        <div class="flex items-center gap-2.5">
                                            <span class="text-lg font-bold tracking-tight gradient-text">4u.ia.br</span>
                                            ${backendBadge()}
                                        </div>
                                        <div class="text-xs text-zinc-400 mt-0.5">Plataforma de Aplicativos & IA</div>
                                    </div>
                                </a>
                            </div>
                            <div class="flex flex-wrap items-center gap-2 sm:gap-3 justify-end">
                                <button type="button" id="pwaInstallHeaderBtn" class="hidden rounded-xl border border-cyan-400/30 bg-gradient-to-r from-cyan-500/20 to-emerald-500/20 px-3.5 py-2 text-xs font-semibold text-cyan-300 hover:from-cyan-500/30 hover:to-emerald-500/30 transition-all items-center gap-1.5 cursor-pointer shadow-sm animate-pulse" title="Instalar aplicativo no seu aparelho">
                                    <span>📲</span>
                                    <span class="hidden sm:inline font-medium">Instalar App</span>
                                </button>
                                <button type="button" class="open-cmd rounded-xl border border-white/10 bg-white/5 px-3 py-2 text-xs text-zinc-300 hover:bg-white/10 hover:text-white transition-all flex items-center gap-1.5 cursor-pointer" title="Busca rápida (Ctrl+K)">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                                    <span class="hidden sm:inline font-medium">Buscar</span>
                                    <kbd class="hidden sm:inline-block rounded bg-white/10 px-1 py-0.5 text-[9px] text-zinc-400 font-mono">Ctrl+K</kbd>
                                </button>
                                <button type="button" class="open-suggest rounded-xl border border-emerald-400/20 bg-emerald-500/10 px-3.5 py-2 text-xs font-semibold text-emerald-300 hover:bg-emerald-500/20 transition-all flex items-center gap-1.5 cursor-pointer glow-sm" title="Sugerir uma nova ferramenta ou relatar um bug">
                                    <span>💡</span>
                                    <span>Sugerir App</span>
                                </button>
                                ${right ? right : ''}
                            </div>
                        </div>
                    </div>
                </header>
                <main id="main" class="mt-6 flex-1">${main}</main>
                <footer class="mt-12">${footer || defaultFooter()}</footer>

                <!-- Barra Fixa Inferior no Mobile (Bottom Navigation) -->
                <nav class="sm:hidden fixed bottom-0 left-0 right-0 z-40 bg-[#0a0c14]/92 backdrop-blur-xl border-t border-white/10 px-4 py-2 flex items-center justify-around text-xs shadow-2xl">
                    <button type="button" id="mobNavHome" class="flex flex-col items-center gap-1 text-emerald-400 cursor-pointer">
                        <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span class="text-[10px] font-medium">Início</span>
                    </button>
                    <button type="button" class="open-cmd flex flex-col items-center gap-1 text-zinc-400 hover:text-white cursor-pointer">
                        <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        <span class="text-[10px] font-medium">Busca</span>
                    </button>
                    <button type="button" id="mobNavFavs" class="flex flex-col items-center gap-1 ${state.store.favoritesOnly ? 'text-emerald-400 font-bold' : 'text-zinc-400 hover:text-white'} cursor-pointer">
                        <svg width="19" height="19" viewBox="0 0 24 24" fill="${state.store.favoritesOnly ? 'currentColor' : 'none'}" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <span class="text-[10px] font-medium">Favoritos</span>
                    </button>
                    <button type="button" class="open-suggest flex flex-col items-center gap-1 text-zinc-400 hover:text-white cursor-pointer">
                        <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
                        <span class="text-[10px] font-medium">Sugerir</span>
                    </button>
                </nav>
            </div>
            `;
        }

        function defaultFooter() {
            const logo = safeText(state.prefs.storeLogoUrl);
            const showAdmin = localStorage.getItem('4uia_dev_mode') === 'true';
            return `
            <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-8">
                <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between border-b border-white/5 pb-6 mb-6">
                    <div class="flex items-center gap-4"> 
                        ${logo ? `<img src="${escapeHtml(logo)}" alt="Logo" class="h-10 w-10 rounded-xl object-cover ring-1 ring-white/10" />` : `<div class="h-10 w-10 rounded-xl bg-gradient-to-br from-emerald-500 to-cyan-500 grid place-items-center"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="text-white"><path d="M12 2L2 7l10 5 10-5-10-5z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>`} 
                        <div>
                            <span class="text-lg font-bold text-white tracking-tight">4u.ia.br</span>
                            <div class="text-xs text-zinc-500">Transformando ideias em apps</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-6 text-sm">
                        <a class="text-zinc-400 hover:text-white transition-colors" href="#/">Vitrine</a>
                        <button type="button" class="open-cmd text-zinc-400 hover:text-white transition-colors cursor-pointer flex items-center gap-1">🔍 Busca Rápida</button>
                        <button type="button" class="open-suggest text-emerald-400 hover:text-emerald-300 transition-colors cursor-pointer flex items-center gap-1">💡 Sugerir App / Feedback</button>
                        ${showAdmin ? `<a class="text-cyan-400 hover:text-cyan-300 font-medium transition-colors" href="#/admin">Painel Admin</a>` : ''}
                        <a class="text-zinc-400 hover:text-white transition-colors" href="https://4u.ia.br" target="_blank">4u.ia.br</a>
                    </div>
                </div>
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div class="text-xs text-zinc-500">
                        © ${new Date().getFullYear()} 4u.ia.br. Todos os direitos reservados.
                    </div>
                    <div class="flex gap-4 text-[10px] text-zinc-600 uppercase tracking-widest">
                        <button type="button" class="open-privacy hover:text-emerald-400 transition-colors cursor-pointer">Privacidade</button>
                        <button type="button" class="open-terms hover:text-cyan-400 transition-colors cursor-pointer">Termos</button>
                    </div>
                </div>
            </div>`;
        }

        function searchBox({ value = '', id = 'q', placeholder = 'Buscar por título, tag, descrição...' }) {
            return `
            <div class="relative flex-1 group">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-zinc-500 group-focus-within:text-emerald-400 transition-colors">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M21 21 15.8 15.8M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                </div>
                <input id="${escapeHtml(id)}" value="${escapeHtml(value)}" placeholder="${escapeHtml(placeholder)}" class="w-full rounded-xl border border-white/10 bg-white/5 py-3 pl-11 pr-4 text-sm text-zinc-100 placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 focus:border-emerald-400/30 transition-all" />
            </div>`;
        }

        function categorySelect({ id, value, categories }) {
            return `
            <select id="${escapeHtml(id)}" class="rounded-xl border border-white/10 bg-[#0a0c14]/80 px-4 py-3 text-sm text-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 sm:w-[200px] transition-all cursor-pointer">
                ${categories.map(c => `<option value="${escapeHtml(c)}" ${c === value ? 'selected' : ''}>${escapeHtml(c)}</option>`).join('')}
            </select>`;
        }

        function sortSelect({ id, value }) {
            const opts = [
                { v: 'destaque', label: '✨ Destaque' },
                { v: 'acessos', label: '🔥 Mais Acessados' },
                { v: 'novos', label: '🆕 Novos' },
                { v: 'nome', label: '🔤 Nome' }
            ];
            return `
            <select id="${escapeHtml(id)}" class="rounded-xl border border-white/10 bg-[#0a0c14]/80 px-4 py-3 text-sm text-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 sm:w-[180px] transition-all cursor-pointer">
                ${opts.map(o => `<option value="${escapeHtml(o.v)}" ${o.v === value ? 'selected' : ''}>${escapeHtml(o.label)}</option>`).join('')}
            </select>`;
        }

        function renderFilterPills(categoriesWithCount) {
            const activeCat = state.store.category;
            const isFavOnly = state.store.favoritesOnly;
            const isTopClicks = state.store.sortBy === 'acessos' && !isFavOnly && activeCat === 'Todas';
            const totalCount = state.apps.length;
            const favCount = favorites.size;

            const catIcons = {
                'jogos': '🎮',
                'editores': '🎨',
                'geradores': '⚡',
                'financas': '💰',
                'finanças': '💰',
                'clones': '🌀',
                'saas': '💼',
                'tecnico': '🛠️',
                'técnico': '🛠️',
                'premium': '💎',
                'ia': '🤖',
                'produtividade': '📊'
            };

            const isAllActive = !isFavOnly && !isTopClicks && activeCat === 'Todas';

            return `
            <div class="shelf-scroller flex items-center gap-2 overflow-x-auto pb-2 pt-1 -mx-1 px-1 cursor-grab">
                <button type="button" data-pill-type="all" class="filter-pill shrink-0 inline-flex items-center gap-1.5 rounded-xl px-3.5 py-2 text-xs font-semibold transition-all cursor-pointer ${isAllActive ? 'bg-gradient-to-r from-emerald-500 to-cyan-500 text-white shadow-lg shadow-emerald-500/20 ring-1 ring-white/20' : 'bg-white/5 text-zinc-300 hover:bg-white/10 ring-1 ring-white/10'}">
                    <span>🌟 Todos</span>
                    <span class="rounded-full ${isAllActive ? 'bg-black/30 text-white' : 'bg-white/10 text-zinc-400'} px-1.5 py-0.5 text-[10px]">${totalCount}</span>
                </button>

                <button type="button" data-pill-type="trending" class="filter-pill shrink-0 inline-flex items-center gap-1.5 rounded-xl px-3.5 py-2 text-xs font-semibold transition-all cursor-pointer ${isTopClicks ? 'bg-gradient-to-r from-amber-500 to-rose-500 text-white shadow-lg shadow-amber-500/20 ring-1 ring-white/20' : 'bg-white/5 text-zinc-300 hover:bg-white/10 ring-1 ring-white/10'}">
                    <span>🔥 Mais Acessados</span>
                </button>

                <button type="button" data-pill-type="favorites" class="filter-pill shrink-0 inline-flex items-center gap-1.5 rounded-xl px-3.5 py-2 text-xs font-semibold transition-all cursor-pointer ${isFavOnly ? 'bg-gradient-to-r from-emerald-500 to-teal-500 text-white shadow-lg shadow-emerald-500/20 ring-1 ring-white/20' : 'bg-white/5 text-zinc-300 hover:bg-white/10 ring-1 ring-white/10'}">
                    <span>⭐ Favoritos</span>
                    <span class="rounded-full ${isFavOnly ? 'bg-black/30 text-white' : 'bg-white/10 text-zinc-400'} px-1.5 py-0.5 text-[10px]">${favCount}</span>
                </button>

                <div class="h-4 w-px bg-white/15 shrink-0 mx-1"></div>

                ${categoriesWithCount.map(c => {
                    const isCatActive = !isFavOnly && activeCat === c.name;
                    const icon = catIcons[normKey(c.name)] || '📁';
                    return `
                    <button type="button" data-pill-type="category" data-category="${escapeHtml(c.name)}" class="filter-pill shrink-0 inline-flex items-center gap-1.5 rounded-xl px-3.5 py-2 text-xs font-medium transition-all cursor-pointer ${isCatActive ? 'bg-gradient-to-r from-emerald-500 to-cyan-500 text-white shadow-lg shadow-emerald-500/20 ring-1 ring-white/20 font-semibold' : 'bg-white/5 text-zinc-300 hover:bg-white/10 ring-1 ring-white/10'}">
                        <span>${icon} ${escapeHtml(c.name)}</span>
                        <span class="rounded-full ${isCatActive ? 'bg-black/30 text-white' : 'bg-white/10 text-zinc-400'} px-1.5 py-0.5 text-[10px]">${c.count}</span>
                    </button>
                    `;
                }).join('')}
            </div>
            `;
        }

        function renderRecentAndFavoritesShelf() {
            const favApps = state.apps.filter(a => isFavorite(a.id));
            const recentIds = getRecentAppIds();
            const recentApps = recentIds.map(id => state.apps.find(a => a.id === id)).filter(Boolean);

            if (favApps.length === 0 && recentApps.length === 0) return '';
            if (state.store.favoritesOnly) return '';

            return `
            <div class="grid gap-4 ${favApps.length && recentApps.length ? 'lg:grid-cols-2' : 'grid-cols-1'}">
                ${favApps.length ? `
                <div class="glass border-gradient rounded-2xl bg-gradient-to-r from-emerald-500/10 via-cyan-500/5 to-teal-500/10 p-4 card-shine">
                    <div class="flex items-center justify-between mb-3 pb-2 border-b border-white/5">
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-400">⭐</span>
                            <h4 class="text-sm font-bold text-white tracking-tight">Meus Favoritos Salvos</h4>
                            <span class="rounded-full bg-emerald-500/20 text-emerald-300 text-[11px] px-2 py-0.5 font-semibold">${favApps.length}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="flex items-center gap-1">
                                <button type="button" class="shelf-scroll-btn grid h-7 w-7 place-items-center rounded-lg border border-white/10 bg-white/5 text-zinc-300 hover:bg-white/15 hover:text-white transition-all cursor-pointer" data-target="favShelfScroller" data-dir="-1" title="Rolar para esquerda">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none"><polyline points="15 18 9 12 15 6"/></svg>
                                </button>
                                <button type="button" class="shelf-scroll-btn grid h-7 w-7 place-items-center rounded-lg border border-white/10 bg-white/5 text-zinc-300 hover:bg-white/15 hover:text-white transition-all cursor-pointer" data-target="favShelfScroller" data-dir="1" title="Rolar para direita">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none"><polyline points="9 18 15 12 9 6"/></svg>
                                </button>
                            </div>
                            <button type="button" id="viewAllFavsQuickBtn" class="text-xs text-emerald-400 hover:text-emerald-300 transition-colors font-medium cursor-pointer ml-1">Ver todos →</button>
                        </div>
                    </div>
                    <div id="favShelfScroller" class="shelf-scroller flex items-center gap-2.5 overflow-x-auto pb-2 scroll-smooth cursor-grab">
                        ${favApps.map(app => {
                            const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status));
                            return `
                            <div class="shrink-0 flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/5 p-2 pr-2.5 hover:bg-white/10 hover:border-emerald-400/30 transition-all group">
                                <img src="${escapeHtml(icon)}" alt="" class="h-8 w-8 rounded-lg object-cover ring-1 ring-white/10 pointer-events-none" />
                                <div class="min-w-0 max-w-[120px]">
                                    <div class="truncate text-xs font-semibold text-white group-hover:text-emerald-300 transition-colors">${escapeHtml(app.title)}</div>
                                    <div class="truncate text-[10px] text-zinc-400">${escapeHtml(app.category || 'App')}</div>
                                </div>
                                <div class="flex items-center gap-1 ml-1">
                                    <button type="button" class="open-iframe grid h-7 w-7 place-items-center rounded-lg bg-emerald-500/20 hover:bg-emerald-500 text-emerald-300 hover:text-white transition-all cursor-pointer" title="Testar App" data-id="${escapeHtml(app.id)}">
                                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                                    </button>
                                </div>
                            </div>
                            `;
                        }).join('')}
                    </div>
                </div>
                ` : ''}

                ${recentApps.length ? `
                <div class="glass border-gradient rounded-2xl bg-gradient-to-r from-cyan-500/10 via-indigo-500/5 to-transparent p-4 card-shine">
                    <div class="flex items-center justify-between mb-3 pb-2 border-b border-white/5">
                        <div class="flex items-center gap-2">
                            <span class="text-cyan-400">🕒</span>
                            <h4 class="text-sm font-bold text-white tracking-tight">Acessados Recentemente</h4>
                            <span class="rounded-full bg-cyan-500/20 text-cyan-300 text-[11px] px-2 py-0.5 font-semibold">${recentApps.length}</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <button type="button" class="shelf-scroll-btn grid h-7 w-7 place-items-center rounded-lg border border-white/10 bg-white/5 text-zinc-300 hover:bg-white/15 hover:text-white transition-all cursor-pointer" data-target="recentShelfScroller" data-dir="-1" title="Rolar para esquerda">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none"><polyline points="15 18 9 12 15 6"/></svg>
                            </button>
                            <button type="button" class="shelf-scroll-btn grid h-7 w-7 place-items-center rounded-lg border border-white/10 bg-white/5 text-zinc-300 hover:bg-white/15 hover:text-white transition-all cursor-pointer" data-target="recentShelfScroller" data-dir="1" title="Rolar para direita">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none"><polyline points="9 18 15 12 9 6"/></svg>
                            </button>
                        </div>
                    </div>
                    <div id="recentShelfScroller" class="shelf-scroller flex items-center gap-2.5 overflow-x-auto pb-2 scroll-smooth cursor-grab">
                        ${recentApps.map(app => {
                            const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status));
                            return `
                            <div class="shrink-0 flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/5 p-2 pr-2.5 hover:bg-white/10 hover:border-cyan-400/30 transition-all group">
                                <img src="${escapeHtml(icon)}" alt="" class="h-8 w-8 rounded-lg object-cover ring-1 ring-white/10 pointer-events-none" />
                                <div class="min-w-0 max-w-[120px]">
                                    <div class="truncate text-xs font-semibold text-white group-hover:text-cyan-300 transition-colors">${escapeHtml(app.title)}</div>
                                    <div class="truncate text-[10px] text-zinc-400">${escapeHtml(app.category || 'App')}</div>
                                </div>
                                <div class="flex items-center gap-1 ml-1">
                                    <button type="button" class="open-iframe grid h-7 w-7 place-items-center rounded-lg bg-cyan-500/20 hover:bg-cyan-500 text-cyan-300 hover:text-white transition-all cursor-pointer" title="Testar App" data-id="${escapeHtml(app.id)}">
                                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                                    </button>
                                </div>
                            </div>
                            `;
                        }).join('')}
                    </div>
                </div>
                ` : ''}
            </div>
            `;
        }

        function storeListRow(app) {
            const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status));
            const isFeatured = app.status === 'Destaque';
            const fav = isFavorite(app.id);
            const clicks = Number(app.clicks) || 0;
            const q = state.store.q;

            const highlightedTitle = q ? highlightMatches(app.title, q) : escapeHtml(app.title || 'Sem título');
            const highlightedShort = q ? highlightMatches(app.shortDescription, q) : escapeHtml(app.shortDescription || '');

            return `
            <div class="group glass border-gradient rounded-2xl bg-[#0a0c14]/70 p-3 sm:p-4 flex flex-col sm:flex-row sm:items-center justify-between gap-3 hover:bg-white/[0.04] transition-all">
                <button type="button" class="open-details flex items-center gap-3.5 min-w-0 flex-1 text-left cursor-pointer" data-id="${escapeHtml(app.id)}">
                    <img src="${escapeHtml(icon)}" alt="" class="h-11 w-11 rounded-xl object-cover ring-1 ring-white/10 group-hover:ring-emerald-400/40 shrink-0 transition-all pointer-events-none app-icon-squircle" />
                    <div class="min-w-0 flex-1 pointer-events-none">
                        <div class="flex items-center gap-2 mb-0.5 flex-wrap">
                            <span class="font-bold text-white group-hover:text-emerald-300 transition-colors truncate text-sm sm:text-base">${highlightedTitle}</span>
                            ${isFeatured ? `<span class="text-[10px] font-bold bg-gradient-to-r from-emerald-500 to-cyan-500 text-white px-1.5 py-0.5 rounded-full">★</span>` : ''}
                            ${app.status ? statusPill(app.status) : ''}
                            <span class="rounded-full bg-white/5 px-2 py-0.5 text-[10px] text-zinc-400 ring-1 ring-white/10">${escapeHtml(app.category || 'App')}</span>
                            ${clicks > 0 ? `<span class="hidden md:inline-flex items-center gap-0.5 text-[10px] text-amber-400 font-semibold bg-amber-500/10 px-2 py-0.5 rounded-full ring-1 ring-amber-400/20">🔥 ${clicks}</span>` : ''}
                        </div>
                        <p class="text-xs text-zinc-400 truncate leading-relaxed max-w-xl">${highlightedShort}</p>
                    </div>
                </button>

                <div class="flex items-center gap-2 shrink-0 self-end sm:self-center">
                    <button type="button" class="open-iframe inline-flex items-center gap-1.5 rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 px-3.5 py-2 text-xs font-bold text-white hover:from-emerald-400 hover:to-cyan-400 transition-all btn-shine cursor-pointer shadow-sm shadow-emerald-500/20" title="Testar App no Modal" data-id="${escapeHtml(app.id)}">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        <span class="pointer-events-none">Testar</span>
                    </button>
                    <button type="button" class="open-app grid h-8 w-8 place-items-center rounded-xl border border-white/10 bg-white/5 text-zinc-300 hover:bg-white/15 hover:text-white transition-all cursor-pointer" title="Abrir em Nova Aba" data-id="${escapeHtml(app.id)}">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="pointer-events-none"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    </button>
                    <button type="button" class="open-qr grid h-8 w-8 place-items-center rounded-xl border border-white/10 bg-white/5 text-zinc-300 hover:bg-white/15 hover:text-white transition-all cursor-pointer" title="QR Code para Smartphone" data-id="${escapeHtml(app.id)}">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="pointer-events-none"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                    </button>
                    <button type="button" class="fav-btn grid h-8 w-8 place-items-center rounded-xl border transition-all cursor-pointer ${fav ? 'border-emerald-400/30 bg-emerald-500/15 text-emerald-200' : 'border-white/10 bg-white/5 text-zinc-400 hover:bg-white/10'}" title="${fav ? 'Remover dos favoritos' : 'Favoritar'}" data-id="${escapeHtml(app.id)}">
                        ${heartSvg(fav)}
                    </button>
                </div>
            </div>
            `;
        }

        // -------- Global Announcement Banner --------
        function renderGlobalAnnouncement() {
            if (!state.prefs.announcementActive || !state.prefs.announcementText) return '';
            const text = safeText(state.prefs.announcementText);
            const link = safeText(state.prefs.announcementLink);
            const type = safeText(state.prefs.announcementType) || 'emerald';

            const themes = {
                emerald: {
                    border: 'border-emerald-500/30',
                    bg: 'from-emerald-500/15 via-teal-500/10 to-cyan-500/15',
                    badge: 'bg-emerald-500/20 text-emerald-300 ring-emerald-500/30',
                    btn: 'bg-emerald-500/20 hover:bg-emerald-500/30 text-emerald-200 border-emerald-500/30',
                    icon: '📢',
                    label: 'COMUNICADO'
                },
                cyan: {
                    border: 'border-cyan-500/30',
                    bg: 'from-cyan-500/15 via-blue-500/10 to-teal-500/15',
                    badge: 'bg-cyan-500/20 text-cyan-300 ring-cyan-500/30',
                    btn: 'bg-cyan-500/20 hover:bg-cyan-500/30 text-cyan-200 border-cyan-500/30',
                    icon: '⚡',
                    label: 'NOVIDADE'
                },
                amber: {
                    border: 'border-amber-500/30',
                    bg: 'from-amber-500/15 via-yellow-500/10 to-orange-500/15',
                    badge: 'bg-amber-500/20 text-amber-300 ring-amber-400/30',
                    btn: 'bg-amber-500/20 hover:bg-amber-500/30 text-amber-200 border-amber-500/30',
                    icon: '⚠️',
                    label: 'AVISO'
                },
                rose: {
                    border: 'border-rose-500/30',
                    bg: 'from-rose-500/15 via-pink-500/10 to-purple-500/15',
                    badge: 'bg-rose-500/20 text-rose-300 ring-rose-500/30',
                    btn: 'bg-rose-500/20 hover:bg-rose-500/30 text-rose-200 border-rose-500/30',
                    icon: '🔥',
                    label: 'ALERTA'
                }
            };

            const t = themes[type] || themes.emerald;

            return `
            <div class="relative overflow-hidden rounded-2xl border ${t.border} bg-gradient-to-r ${t.bg} p-4 sm:px-6 backdrop-blur-xl shadow-lg transition-all">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                    <div class="flex items-center gap-3">
                        <span class="text-xl shrink-0">${t.icon}</span>
                        <div class="text-sm font-medium text-zinc-100">
                            <span class="rounded-md px-2 py-0.5 text-xs font-semibold mr-2 ring-1 ${t.badge}">${t.label}</span>
                            <span>${escapeHtml(text)}</span>
                        </div>
                    </div>
                    ${link ? `
                        <a href="${escapeHtml(link)}" ${link.startsWith('http') ? 'target="_blank" rel="noopener noreferrer"' : ''} class="shrink-0 self-start sm:self-auto rounded-xl border px-3.5 py-1.5 text-xs font-semibold ${t.btn} transition-all flex items-center gap-1.5 cursor-pointer shadow-sm">
                            <span>Ver Mais →</span>
                        </a>
                    ` : ''}
                </div>
            </div>`;
        }

        // -------- Suggestions & Feedback List Renderer --------
        function renderSuggestionsList(items) {
            if (!items || !items.length) {
                return `
                <div class="rounded-2xl border border-white/5 bg-white/[0.02] p-8 text-center text-sm text-zinc-400">
                    <div class="text-3xl mb-2">📬</div>
                    <div class="font-medium text-white mb-1">Nenhuma sugestão ou relato recebido no momento</div>
                    <div class="text-xs text-zinc-500">Quando os visitantes utilizarem o botão "Sugerir App", os envios aparecerão aqui em tempo real.</div>
                </div>`;
            }

            return items.map(s => {
                const isBug = s.type === 'bug';
                const typeBadge = isBug 
                    ? `<span class="rounded-full bg-rose-500/10 px-2.5 py-0.5 text-xs font-semibold text-rose-300 ring-1 ring-rose-500/20">🐞 Relato de Bug</span>`
                    : `<span class="rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-xs font-semibold text-emerald-300 ring-1 ring-emerald-500/20">💡 Sugestão de App</span>`;

                const statusMap = {
                    'pendente': `<span class="rounded-full bg-amber-500/10 px-2.5 py-0.5 text-xs font-semibold text-amber-300 ring-1 ring-amber-400/20">🟡 Pendente</span>`,
                    'lido': `<span class="rounded-full bg-blue-500/10 px-2.5 py-0.5 text-xs font-semibold text-blue-300 ring-1 ring-blue-400/20">🔵 Lido</span>`,
                    'resolvido': `<span class="rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-xs font-semibold text-emerald-300 ring-1 ring-emerald-400/20">🟢 Resolvido</span>`
                };
                const statusBadge = statusMap[s.status] || `<span class="rounded-full bg-zinc-500/10 px-2.5 py-0.5 text-xs text-zinc-300">${escapeHtml(s.status || 'pendente')}</span>`;
                
                let dateStr = '';
                try {
                    const d = new Date(Number(s.createdAt) || s.createdAt);
                    dateStr = d.toLocaleDateString('pt-BR', { day: '2-digit', month: '2-digit', year: 'numeric', hour: '2-digit', minute: '2-digit' });
                } catch (e) {
                    dateStr = '';
                }

                return `
                <div class="rounded-xl border border-white/10 bg-white/5 p-4 sm:p-5 transition-all hover:border-white/20">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2.5 mb-3">
                        <div class="flex flex-wrap items-center gap-2">
                            ${typeBadge}
                            ${statusBadge}
                            ${s.appName ? `<span class="text-sm font-semibold text-white">App: ${escapeHtml(s.appName)}</span>` : ''}
                        </div>
                        <div class="text-xs text-zinc-400">${dateStr}</div>
                    </div>
                    
                    ${s.description ? `<p class="text-sm text-zinc-200 whitespace-pre-wrap leading-relaxed mb-3 bg-black/20 p-3 rounded-lg border border-white/5">${escapeHtml(s.description)}</p>` : ''}
                    
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 pt-3 border-t border-white/5 text-xs">
                        <div class="flex flex-wrap items-center gap-4 text-zinc-400">
                            ${s.contact ? `<span class="flex items-center gap-1.5"><span class="text-zinc-500">Contato:</span> <strong class="text-zinc-200 font-medium">${escapeHtml(s.contact)}</strong></span>` : '<span class="text-zinc-600">Sem contato informado</span>'}
                            ${s.url ? `<a href="${escapeHtml(s.url)}" target="_blank" rel="noopener noreferrer" class="text-cyan-400 hover:text-cyan-300 underline flex items-center gap-1 truncate max-w-xs">🔗 ${escapeHtml(s.url)}</a>` : ''}
                        </div>
                        <div class="flex items-center gap-2 shrink-0">
                            ${s.status !== 'lido' ? `<button type="button" class="action-sug-btn px-2.5 py-1.5 rounded-lg border border-blue-500/20 bg-blue-500/10 text-blue-300 hover:bg-blue-500/20 transition-all font-medium cursor-pointer" data-id="${escapeHtml(s.id)}" data-action="lido">Marcar Lido</button>` : ''}
                            ${s.status !== 'resolvido' ? `<button type="button" class="action-sug-btn px-2.5 py-1.5 rounded-lg border border-emerald-500/20 bg-emerald-500/10 text-emerald-300 hover:bg-emerald-500/20 transition-all font-medium cursor-pointer" data-id="${escapeHtml(s.id)}" data-action="resolvido">Resolver</button>` : ''}
                            <button type="button" class="action-sug-btn px-2.5 py-1.5 rounded-lg border border-rose-500/20 bg-rose-500/10 text-rose-400 hover:bg-rose-500/20 transition-all font-medium cursor-pointer" data-id="${escapeHtml(s.id)}" data-action="excluir" title="Excluir do banco">Excluir</button>
                        </div>
                    </div>
                </div>`;
            }).join('');
        }

        // -------- Store View --------
        function renderStore() {
            stopSliderAutoplay();

            const showAdmin = localStorage.getItem('4uia_dev_mode') === 'true';

            const categoriesWithCount = getCategoriesWithCount(state.apps);
            const categories = ['Todas', ...getCategories(state.apps)];
            const q = state.store.q;
            const cat = state.store.category;
            const sortBy = state.store.sortBy;
            const tags = getAllTags(state.apps).slice(0, 14);
            const favCount = favorites.size;
            const favOn = !!state.store.favoritesOnly;

            let filtered = state.apps;
            if (cat && cat !== 'Todas') filtered = filtered.filter(a => safeText(a.category) === cat);
            if (favOn) filtered = filtered.filter(a => isFavorite(a.id));
            if (q) {
                const scored = filtered.map(a => ({ a, s: scoreMatches(a, q) })).filter(x => x.s > 0);
                scored.sort((x, y) => y.s - x.s || (y.a.clicks || 0) - (x.a.clicks || 0) || (y.a.updatedAt || 0) - (x.a.updatedAt || 0));
                filtered = scored.map(x => x.a);
            } else {
                filtered = sortApps(filtered, sortBy);
            }

            const shownTotal = filtered.length;
            const visibleCount = Math.min(state.store.visible, shownTotal);
            const visibleApps = filtered.slice(0, visibleCount);
            const total = state.apps.length;

            const main = `
    <section class="grid gap-6">
        ${renderGlobalAnnouncement()}
        ${renderHeroSection({ total, shown: shownTotal })}
        ${renderStatsBar()}
        ${renderRecentAndFavoritesShelf()}
        ${renderBentoCategories()}
        ${renderSaaSSection()}
        
        <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5 space-y-4">
            
            ${renderFilterPills(categoriesWithCount)}

            <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between pt-2 border-t border-white/5">
                <div class="flex flex-1 flex-col gap-3 sm:flex-row sm:items-center">
                    ${searchBox({ value: q, id: 'storeSearch', placeholder: 'Buscar apps por título, tags, funcionalidade...' })}
                    ${categorySelect({ id: 'storeCategory', value: cat, categories })}
                </div>
                <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                    ${sortSelect({ id: 'storeSort', value: sortBy })}
                    <button id="toggleFavsBtn" class="rounded-xl border px-5 py-3 text-sm transition-all flex items-center gap-2 cursor-pointer ${favOn ? 'border-emerald-400/30 bg-emerald-500/10 text-emerald-200 hover:bg-emerald-500/15' : 'border-white/10 bg-white/5 text-zinc-200 hover:bg-white/10'}" title="Mostrar somente favoritos">
                        ${heartSvg(favOn)}
                        <span>Favoritos</span><span class="rounded-full bg-white/10 px-2 py-0.5 text-xs text-zinc-200 ring-1 ring-white/10">${favCount}</span>
                    </button>
                    <button id="clearFilters" class="rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm hover:bg-white/10 transition-all cursor-pointer">Limpar</button>
                </div>
            </div>

            ${tags.length ? `
                <div class="flex flex-wrap gap-2 pt-3 border-t border-white/5 items-center">
                    <span class="text-xs text-zinc-500 mr-1 self-center">⚡ Tags:</span>
                    ${tags.map(t => `
                        <button type="button" data-tag="${escapeHtml(t)}" class="tag-chip tag-hover rounded-full bg-white/5 px-2.5 py-1 text-xs font-medium text-zinc-300 ring-1 ring-white/10 hover:ring-emerald-400/30 hover:text-emerald-300 transition-all cursor-pointer">
                            <span class="pointer-events-none">#${escapeHtml(t)}</span>
                        </button>
                    `).join('')}
                </div>
            ` : ''}
        </div>

        <div id="appsGrid">
            <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
                <div class="text-sm text-zinc-400">
                    Mostrando <span class="text-white font-semibold">${visibleCount}</span> de <span class="text-white font-semibold">${shownTotal}</span> apps
                    ${q ? `<span class="ml-2 text-xs text-emerald-400 font-medium">para "${escapeHtml(q)}"</span>` : ''}
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    ${state.store.sortBy === 'acessos' ? `
                        <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-medium text-amber-300 ring-1 ring-amber-400/20">🔥 Mais Acessados</span>
                    ` : ''}
                    ${state.store.favoritesOnly ? `
                        <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-medium text-emerald-200 ring-1 ring-emerald-400/20">⭐ Favoritos</span>
                    ` : ''}
                    ${state.store.category !== 'Todas' ? `
                        <span class="rounded-full bg-cyan-500/10 px-3 py-1 text-xs font-medium text-cyan-300 ring-1 ring-cyan-400/20">
                            ${escapeHtml(state.store.category)}
                        </span>
                    ` : ''}

                    <!-- View Mode Switcher (Grade / Lista) -->
                    <div class="flex items-center gap-1 bg-white/5 border border-white/10 rounded-xl p-1 shrink-0 ml-1">
                        <button type="button" id="viewModeGridBtn" class="px-2.5 py-1 rounded-lg text-xs font-semibold transition-all cursor-pointer ${currentViewMode === 'grid' ? 'bg-emerald-500/20 text-emerald-300 border border-emerald-400/30' : 'text-zinc-400 hover:text-white'}" title="Grade de Cards">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                        </button>
                        <button type="button" id="viewModeListBtn" class="px-2.5 py-1 rounded-lg text-xs font-semibold transition-all cursor-pointer ${currentViewMode === 'list' ? 'bg-emerald-500/20 text-emerald-300 border border-emerald-400/30' : 'text-zinc-400 hover:text-white'}" title="Lista Compacta">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                        </button>
                    </div>
                </div>
            </div>
            ${renderStoreGrid(visibleApps)}
        </div>

        ${shownTotal > visibleCount ? `
            <div id="infiniteSentinel" class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5 text-center">
                <div class="flex items-center justify-center gap-3">
                    <div class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></div>
                    <span class="text-sm text-zinc-400">Carregando mais apps...</span>
                </div>
            </div>
        ` : ''}
    </section>
    `;

            $('#app').innerHTML = appShell({
                title: 'Descoberta',
                subtitle: `${total} apps disponíveis`,
                right: ` 
                    <button id="reloadCatalogBtn" class="rounded-xl border border-white/10 bg-white/5 px-3.5 py-2 text-xs sm:text-sm hover:bg-white/10 transition-all icon-bounce flex items-center gap-2 cursor-pointer">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M1 4v6h6M23 20v-6h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4-4.64 4.36A9 9 0 0 1 3.51 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Atualizar</span>
                    </button>
                    ${showAdmin ? `
                    <button id="headerAdminBtn" class="rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 px-3.5 py-2 text-xs sm:text-sm font-semibold text-white hover:from-emerald-400 hover:to-cyan-400 transition-all btn-shine flex items-center gap-2 cursor-pointer">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Admin 
                    </button>` : ''} 
                `,
                main,
            });
            bindStoreHandlers(filtered, shownTotal);
        }

        function renderHeroSection({ total, shown }) {
            const featuredApps = getFeaturedApps();
            if (state.slider.currentIndex >= featuredApps.length) { state.slider.currentIndex = 0; }
            const showAdmin = localStorage.getItem('4uia_dev_mode') === 'true';
            if (featuredApps.length === 0) {
                return `
                <div class="border-gradient-animated rounded-3xl bg-[#0a0c14] p-8 sm:p-10 relative overflow-hidden">
                    <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_50%_at_20%_20%,rgba(16,185,129,0.15),transparent)]"></div>
                    <div class="relative">
                        <div class="flex flex-wrap items-center gap-3 mb-5">
                            <span class="rounded-full bg-gradient-to-r from-emerald-500 to-cyan-500 px-4 py-1.5 text-xs font-semibold text-white">Bem-vindo</span>
                            ${backendBadge()}
                        </div>
                        <h1 class="text-3xl sm:text-4xl font-bold tracking-tight gradient-text mb-4">${escapeHtml(state.prefs.storeTitle || 'Descubra apps incríveis')}</h1>
                        <p class="text-zinc-400 max-w-xl text-lg">${escapeHtml(state.prefs.storeSlogan || 'Confira nossa seleção exclusiva de webapps para alta produtividade e entretenimento.')}</p>
                        <div class="mt-8 flex flex-wrap gap-4">
                            ${showAdmin ? `<a href="#/admin" class="rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 px-6 py-3 text-sm font-semibold text-white hover:from-emerald-400 hover:to-cyan-400 transition-all btn-shine">Configurar no Admin</a>` : ''}
                            <div class="text-sm text-zinc-500 self-center">${shown} de ${total} apps</div>
                        </div>
                    </div>
                </div>`;
            }
            const hero = featuredApps[state.slider.currentIndex] || featuredApps[0];
            const icon = hero.iconUrl || defaultIcon((hero.title || 'IA').slice(0, 2).toUpperCase(), statusTone(hero.status));
            const heroImg = safeText(hero.heroImageUrl);
            const tags = (hero.tags || []).slice(0, 5);
            const hasMultipleSlides = featuredApps.length > 1;
            const clicks = Number(hero.clicks) || 0;

            return `
            <div class="border-gradient-animated rounded-3xl bg-[#0a0c14] overflow-hidden relative group cyber-corner" id="heroSlider">
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_50%_at_50%_0%,rgba(16,185,129,0.12),transparent)]"></div>
                <div class="relative p-6 sm:p-8">
                    <div class="flex items-center justify-between mb-5">
                        <div class="flex items-center gap-3">
                            <span class="rounded-full bg-gradient-to-r from-emerald-500 to-cyan-500 px-4 py-1.5 text-xs font-semibold text-white glow-sm">✨ Super Destaque</span>
                            <span id="sliderStatus">${hero.status ? statusPill(hero.status) : ''}</span>
                            ${clicks > 0 ? `<span class="rounded-full bg-amber-500/10 px-2.5 py-1 text-xs font-semibold text-amber-300 ring-1 ring-amber-400/20">🔥 ${clicks} acessos</span>` : ''}
                        </div>
                        <div class="flex items-center gap-3">
                            ${hasMultipleSlides ? `<span id="sliderCounter" class="text-xs text-zinc-400 font-medium">${state.slider.currentIndex + 1} / ${featuredApps.length}</span>` : ''}
                            <div class="text-xs text-zinc-500">${shown} de ${total} apps</div>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/5 card-shine relative">
                        <div class="hero-glass-sweep"></div>
                        ${hasMultipleSlides ? `
                            <button type="button" id="sliderPrev" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 h-12 w-12 rounded-full bg-black/50 backdrop-blur-sm border border-white/20 flex items-center justify-center text-white hover:bg-black/70 hover:border-white/40 transition-all opacity-0 group-hover:opacity-100 cursor-pointer">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="pointer-events-none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                            <button type="button" id="sliderNext" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 h-12 w-12 rounded-full bg-black/50 backdrop-blur-sm border border-white/20 flex items-center justify-center text-white hover:bg-black/70 hover:border-white/40 transition-all opacity-0 group-hover:opacity-100 cursor-pointer">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="pointer-events-none"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                        ` : ''}
                        <div id="sliderContent" class="relative aspect-[21/9] w-full transition-all duration-300 ease-out z-10">
                            <img id="sliderHeroImage" alt="" src="${escapeHtml(heroImg)}" class="absolute inset-0 h-full w-full object-cover ${heroImg ? '' : 'hidden'}" />
                            <div id="sliderHeroPlaceholder" class="absolute inset-0 ${heroImg ? 'hidden' : ''}">
                                <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 via-cyan-500/10 to-teal-500/20"></div>
                                <div class="absolute inset-0 bg-[radial-gradient(ellipse_60%_40%_at_50%_50%,rgba(16,185,129,0.3),transparent)]"></div>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#050709] via-[#050709]/50 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8">
                                <div class="flex items-end gap-5">
                                    <img id="sliderIcon" alt="" src="${escapeHtml(icon)}" class="h-20 w-20 rounded-2xl object-cover ring-2 ring-white/20 app-icon-squircle float" />
                                    <div class="min-w-0 flex-1 mb-1">
                                        <div class="flex flex-wrap items-center gap-3 mb-2">
                                            <h1 id="sliderTitle" class="text-2xl sm:text-3xl font-bold tracking-tight text-white">${escapeHtml(hero.title || 'Sem título')}</h1>
                                            <span id="sliderCategory" class="rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-zinc-300">${escapeHtml(hero.category || 'App')}</span>
                                        </div>
                                        <p id="sliderDescription" class="text-zinc-300 line-clamp-2 max-w-2xl">${escapeHtml(hero.shortDescription || '')}</p>
                                    </div>
                                </div>
                                <div id="sliderTags" class="mt-5 flex flex-wrap gap-2">
                                    ${tags.map(t => `<span class="rounded-full bg-white/10 px-3 py-1.5 text-xs font-medium text-zinc-200 ring-1 ring-white/10">#${escapeHtml(t)}</span>`).join('')}
                                </div>
                                <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                    <div class="flex flex-wrap gap-3">
                                        <button type="button" class="open-iframe inline-flex items-center justify-center gap-2.5 rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 px-6 py-3 text-sm font-bold text-white hover:from-emerald-400 hover:to-cyan-400 transition-all btn-shine cursor-pointer shadow-lg shadow-emerald-500/25" data-id="${escapeHtml(hero.id)}">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                                            <span class="pointer-events-none">Testar no Modal</span>
                                        </button>
                                        <button type="button" id="sliderOpenApp" class="open-app inline-flex items-center justify-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-semibold text-[#050709] hover:bg-zinc-100 transition-all cursor-pointer" data-id="${escapeHtml(hero.id)}">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="pointer-events-none"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                            <span class="pointer-events-none">Nova Aba</span>
                                        </button>
                                        <button type="button" id="sliderDetails" class="open-details rounded-xl border border-white/20 bg-white/5 px-5 py-3 text-sm font-medium text-white hover:bg-white/10 transition-all cursor-pointer" data-id="${escapeHtml(hero.id)}">
                                            <span class="pointer-events-none">Detalhes</span>
                                        </button>
                                    </div>
                                    ${hasMultipleSlides ? `
                                        <div class="flex items-center gap-2">
                                            ${featuredApps.map((_, i) => `
                                                <button type="button" class="slider-dot h-2 ${i === state.slider.currentIndex ? 'w-6 bg-white' : 'w-2 bg-white/30'} rounded-full transition-all duration-300 cursor-pointer hover:bg-white/60" data-index="${i}"></button>
                                            `).join('')}
                                        </div>
                                    ` : ''}
                                </div>
                            </div>
                        </div>
                    </div>
                    ${hasMultipleSlides ? `
                        <div class="mt-4 h-1 bg-white/10 rounded-full overflow-hidden">
                            <div id="sliderProgress" class="h-full bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full slider-progress-animation" style="width: 0%"></div>
                        </div>
                    ` : ''}
                </div>
            </div>`;
        }

        function renderStatsBar() {
            const categoriesCount = getCategories(state.apps).length;
            const favCount = favorites.size;
            const isAllActive = !state.store.favoritesOnly && state.store.sortBy === 'destaque' && (!state.store.category || state.store.category === 'Todas') && !state.store.q;
            const isPopularActive = !state.store.favoritesOnly && (state.store.sortBy === 'acessos' || state.store.sortBy === 'popular');
            const isNewActive = !state.store.favoritesOnly && state.store.sortBy === 'novos';
            const isFavActive = !!state.store.favoritesOnly;

            return `
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3.5">
                <button type="button" class="quick-filter-btn glass border-gradient rounded-2xl p-4 sm:p-5 text-left group hover:scale-[1.02] transition-all cursor-pointer ${isAllActive ? 'bg-emerald-500/15 ring-2 ring-emerald-400/50 shadow-lg shadow-emerald-500/10' : 'bg-[#0a0c14]/60 hover:bg-[#0a0c14]/90'}" data-action="all" title="Ver catálogo completo de aplicativos">
                    <div class="flex items-center justify-between">
                        <span class="text-xl">⚡</span>
                        <span class="text-[10px] font-semibold uppercase tracking-wider text-emerald-400 group-hover:text-emerald-300">Catálogo</span>
                    </div>
                    <div class="mt-2 text-2xl sm:text-3xl font-bold gradient-text-vibrant stat-number">${state.apps.length}</div>
                    <div class="text-xs text-zinc-400 mt-0.5 group-hover:text-white transition-colors flex items-center justify-between">
                        <span>Todos os Apps</span>
                        <span class="text-[10px] text-zinc-500 group-hover:text-emerald-400">Ver ↓</span>
                    </div>
                </button>

                <button type="button" class="quick-filter-btn glass border-gradient rounded-2xl p-4 sm:p-5 text-left group hover:scale-[1.02] transition-all cursor-pointer ${isPopularActive ? 'bg-amber-500/15 ring-2 ring-amber-400/50 shadow-lg shadow-amber-500/10' : 'bg-[#0a0c14]/60 hover:bg-[#0a0c14]/90'}" data-action="popular" title="Filtrar pelos apps mais acessados">
                    <div class="flex items-center justify-between">
                        <span class="text-xl">🔥</span>
                        <span class="text-[10px] font-semibold uppercase tracking-wider text-amber-400 group-hover:text-amber-300">Top Acessos</span>
                    </div>
                    <div class="mt-2 text-2xl sm:text-3xl font-bold text-amber-400 stat-number">Populares</div>
                    <div class="text-xs text-zinc-400 mt-0.5 group-hover:text-white transition-colors flex items-center justify-between">
                        <span>Mais Acessados</span>
                        <span class="text-[10px] text-zinc-500 group-hover:text-amber-400">Filtrar ↓</span>
                    </div>
                </button>

                <button type="button" class="quick-filter-btn glass border-gradient rounded-2xl p-4 sm:p-5 text-left group hover:scale-[1.02] transition-all cursor-pointer ${isNewActive ? 'bg-cyan-500/15 ring-2 ring-cyan-400/50 shadow-lg shadow-cyan-500/10' : 'bg-[#0a0c14]/60 hover:bg-[#0a0c14]/90'}" data-action="new" title="Ver lançamentos e atualizações mais recentes">
                    <div class="flex items-center justify-between">
                        <span class="text-xl">🆕</span>
                        <span class="text-[10px] font-semibold uppercase tracking-wider text-cyan-400 group-hover:text-cyan-300">Lançamentos</span>
                    </div>
                    <div class="mt-2 text-2xl sm:text-3xl font-bold text-cyan-400 stat-number">Recentes</div>
                    <div class="text-xs text-zinc-400 mt-0.5 group-hover:text-white transition-colors flex items-center justify-between">
                        <span>Novidades</span>
                        <span class="text-[10px] text-zinc-500 group-hover:text-cyan-400">Filtrar ↓</span>
                    </div>
                </button>

                <button type="button" class="quick-filter-btn glass border-gradient rounded-2xl p-4 sm:p-5 text-left group hover:scale-[1.02] transition-all cursor-pointer ${isFavActive ? 'bg-emerald-500/20 ring-2 ring-emerald-400/60 shadow-lg shadow-emerald-500/15' : 'bg-[#0a0c14]/60 hover:bg-[#0a0c14]/90'}" data-action="fav" title="Ver somente seus aplicativos favoritos salvos">
                    <div class="flex items-center justify-between">
                        <span class="text-xl">⭐</span>
                        <span class="text-[10px] font-semibold uppercase tracking-wider text-teal-400 group-hover:text-teal-300">Favoritos</span>
                    </div>
                    <div class="mt-2 text-2xl sm:text-3xl font-bold text-emerald-300 stat-number">${favCount}</div>
                    <div class="text-xs text-zinc-400 mt-0.5 group-hover:text-white transition-colors flex items-center justify-between">
                        <span>Meus Favoritos</span>
                        <span class="text-[10px] text-zinc-500 group-hover:text-emerald-300">Filtrar ↓</span>
                    </div>
                </button>
            </div>`;
        }

        function renderBentoCategories() {
            const categoriesWithCount = getCategoriesWithCount(state.apps);
            if (categoriesWithCount.length === 0) return '';
            const byNorm = new Map(categoriesWithCount.map(c => [normKey(c.name), c]));
            const catJogos = byNorm.get('jogos');
            const catEditores = byNorm.get('editores');
            const catGeradores = byNorm.get('geradores');
            const catFinancas = byNorm.get('financas');
            const catClones = byNorm.get('clones');
            const mustHave = catJogos && catEditores && catGeradores && catFinancas;

            const colorSchemes = {
                jogos: { gradient: 'from-emerald-500/20 to-emerald-900/30', btn: 'from-emerald-500 to-emerald-600' },
                editores: { gradient: 'from-cyan-500/20 to-cyan-900/30', btn: 'from-cyan-500 to-cyan-600' },
                geradores: { gradient: 'from-teal-500/20 to-teal-900/30', btn: 'from-teal-500 to-teal-600' },
                financas: { gradient: 'from-emerald-400/20 to-emerald-800/30', btn: 'from-emerald-400 to-emerald-500' },
                side: { gradient: 'from-cyan-400/20 to-cyan-800/30', btn: 'from-cyan-400 to-cyan-500' },
                clones: { gradient: 'from-teal-400/20 to-teal-800/30', btn: 'from-teal-400 to-teal-500' }
            };

            function appsOfCategory(catName) { return sortApps(state.apps.filter(a => normKey(a.category) === normKey(catName)), 'destaque'); }
            function pickAppsForCard(catName, n) { return appsOfCategory(catName).slice(0, n); }
            function renderMiniAppButton(app) {
                const appIcon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status));
                return `
                <button type="button" class="open-details flex w-full items-center gap-3 rounded-xl border border-white/10 bg-white/5 p-3 text-left hover:bg-white/10 hover:border-white/20 transition-all cursor-pointer group" data-id="${escapeHtml(app.id)}">
                    <img alt="" src="${escapeHtml(appIcon)}" class="h-10 w-10 rounded-xl object-cover ring-1 ring-white/10 shrink-0 pointer-events-none app-icon-squircle" />
                    <div class="min-w-0 flex-1 pointer-events-none">
                        <div class="truncate text-sm font-medium text-white group-hover:text-emerald-300 transition-colors">${escapeHtml(app.title)}</div>
                        <div class="truncate text-xs text-zinc-400">${escapeHtml(clampText(app.shortDescription || '', 40))}</div>
                    </div>
                </button>`;
            }

            if (!mustHave) {
                const topCategories = categoriesWithCount.slice(0, 4);
                if (topCategories.length === 0) return '';
                const fallbackSchemes = [
                    { gradient: 'from-indigo-500/20 to-indigo-900/30', btn: 'from-indigo-500 to-indigo-600' },
                    { gradient: 'from-emerald-500/20 to-emerald-900/30', btn: 'from-emerald-500 to-emerald-600' },
                    { gradient: 'from-fuchsia-500/20 to-fuchsia-900/30', btn: 'from-fuchsia-500 to-fuchsia-600' },
                    { gradient: 'from-amber-500/20 to-amber-900/30', btn: 'from-amber-500 to-amber-600' },
                ];
                const bentoClasses = ['bento-large', '', '', 'bento-wide'];
                return `
                <div class="space-y-3">
                    <div class="flex items-center justify-between px-1">
                        <div class="flex items-center gap-2">
                            <span class="text-base font-bold text-white tracking-tight">🧭 Categorias em Destaque</span>
                        </div>
                        <span class="sm:hidden text-xs text-zinc-400 flex items-center gap-1 bg-white/5 px-2.5 py-1 rounded-full border border-white/10">↔ Deslize para explorar</span>
                    </div>
                    <div class="bento-grid">
                        ${topCategories.map((cat, i) => {
                            const scheme = fallbackSchemes[i % fallbackSchemes.length];
                            const bentoClass = bentoClasses[i] || '';
                            const categoryApps = sortApps(state.apps.filter(a => safeText(a.category) === cat.name), 'destaque').slice(0, bentoClass.includes('large') ? 4 : 2);
                            return `
                            <div class="glass border-gradient rounded-2xl bg-gradient-to-br ${scheme.gradient} overflow-hidden ${bentoClass} card-shine spotlight group cyber-corner">
                                <div class="p-5 h-full flex flex-col">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center gap-2.5">
                                            <div class="h-3 w-3 rounded-full bg-gradient-to-r ${scheme.btn}"></div>
                                            <h3 class="text-base font-semibold text-white">${escapeHtml(cat.name)}</h3>
                                        </div>
                                        <span class="rounded-full bg-white/10 px-2.5 py-1 text-[11px] font-medium text-zinc-300">${cat.count} apps</span>
                                    </div>
                                    <div class="flex-1 grid gap-2.5 ${bentoClass.includes('large') ? 'grid-cols-1' : ''}">
                                        ${categoryApps.map(renderMiniAppButton).join('')}
                                    </div>
                                    <button type="button" class="view-category-btn mt-4 w-full rounded-xl bg-gradient-to-r ${scheme.btn} px-4 py-2.5 text-sm font-semibold text-white hover:opacity-90 transition-all btn-shine flex items-center justify-center gap-2 cursor-pointer" data-category="${escapeHtml(cat.name)}">
                                        <span class="pointer-events-none">Ver todos</span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="pointer-events-none"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                </div>
                            </div>`;
                        }).join('')}
                    </div>
                </div>`;
            }

            const sideCat = categoriesWithCount.find(c => !['jogos', 'editores', 'geradores', 'financas', 'clones', 'saas'].includes(normKey(c.name)));
            const jogosApps = pickAppsForCard(catJogos.name, 2);
            const editoresApps = pickAppsForCard(catEditores.name, 2);
            const geradoresApps = pickAppsForCard(catGeradores.name, 2);
            const allFin = appsOfCategory(catFinancas.name);
            const finFeatured = allFin.filter(a => a.status === 'Destaque');
            const finApps = [...finFeatured, ...allFin.filter(a => a.status !== 'Destaque')].slice(0, 4);
            const sideApps = sideCat ? pickAppsForCard(sideCat.name, 4) : [];
            const clonesApps = catClones ? pickAppsForCard(catClones.name, 6) : [];

            function renderCategoryCard({ cat, scheme, apps, extraClass = '', innerGridClass = '' }) {
                return `
                <div class="glass border-gradient rounded-2xl bg-gradient-to-br ${scheme.gradient} overflow-hidden ${extraClass} card-shine spotlight group cyber-corner">
                    <div class="p-5 h-full flex flex-col">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2.5">
                                <div class="h-3 w-3 rounded-full bg-gradient-to-r ${scheme.btn}"></div>
                                <h3 class="text-base font-semibold text-white">${escapeHtml(cat.name)}</h3>
                            </div>
                            <span class="rounded-full bg-white/10 px-2.5 py-1 text-[11px] font-medium text-zinc-300">${cat.count} apps</span>
                        </div>
                        <div class="flex-1 grid gap-2.5 ${innerGridClass}">
                            ${apps.map(renderMiniAppButton).join('')}
                        </div>
                        <button type="button" class="view-category-btn mt-4 w-full rounded-xl bg-gradient-to-r ${scheme.btn} px-4 py-2.5 text-sm font-semibold text-white hover:opacity-90 transition-all btn-shine flex items-center justify-center gap-2 cursor-pointer" data-category="${escapeHtml(cat.name)}">
                            <span class="pointer-events-none">Ver todos</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="pointer-events-none"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                    </div>
                </div>`;
            }

            return `
            <div class="space-y-3">
                <div class="flex items-center justify-between px-1">
                    <div class="flex items-center gap-2">
                        <span class="text-base font-bold text-white tracking-tight">🧭 Categorias em Destaque</span>
                    </div>
                    <span class="sm:hidden text-xs text-zinc-400 flex items-center gap-1 bg-white/5 px-2.5 py-1 rounded-full border border-white/10">↔ Deslize para explorar</span>
                </div>
                <div class="bento-grid">
                    ${renderCategoryCard({ cat: catJogos, scheme: colorSchemes.jogos, apps: jogosApps })}
                    ${renderCategoryCard({ cat: catEditores, scheme: colorSchemes.editores, apps: editoresApps })}
                    ${renderCategoryCard({ cat: catGeradores, scheme: colorSchemes.geradores, apps: geradoresApps })}
                    ${sideCat ? renderCategoryCard({ cat: sideCat, scheme: colorSchemes.side, apps: sideApps, extraClass: 'bento-tall' }) : ''}
                    ${renderCategoryCard({ cat: catFinancas, scheme: colorSchemes.financas, apps: finApps, extraClass: 'bento-span-3', innerGridClass: 'grid-cols-2' })}
                    ${catClones ? renderCategoryCard({ cat: catClones, scheme: colorSchemes.clones, apps: clonesApps, extraClass: 'bento-full', innerGridClass: 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-3' }) : ''}
                </div>
            </div>`;
        }

        function renderSaaSSection() {
            const saasApps = sortApps(state.apps.filter(a => normKey(a.category) === 'saas'), 'destaque');
            if (saasApps.length === 0) return '';

            return `
            <div class="glass border-gradient rounded-3xl bg-gradient-to-br from-indigo-500/10 via-purple-500/5 to-transparent overflow-hidden card-shine spotlight group cyber-corner relative p-6">
                <div class="flex items-center justify-between mb-6 border-b border-white/5 pb-4">
                    <div class="flex items-center gap-3">
                        <div class="h-3.5 w-3.5 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 glow-sm"></div>
                        <h3 class="text-xl font-bold tracking-tight text-white">SaaS</h3>
                    </div>
                    <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-zinc-300">${saasApps.length} apps</span>
                </div>
                
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6">
                    ${saasApps.map(app => {
                        const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), 'indigo');
                        return `
                        <button type="button" class="open-details flex flex-col items-center text-center p-4 rounded-2xl border border-white/5 bg-white/[0.02] hover:bg-white/10 hover:border-white/20 transition-all duration-300 cursor-pointer group/item hover:-translate-y-1 hover:shadow-lg hover:shadow-indigo-500/10 w-full" data-id="${escapeHtml(app.id)}">
                            <img alt="" src="${escapeHtml(icon)}" class="h-20 w-20 rounded-2xl object-cover ring-2 ring-white/10 group-hover/item:ring-indigo-400/50 transition-all duration-300 pointer-events-none mb-3.5 app-icon-squircle shadow-md shadow-black/40" />
                            <div class="min-w-0 pointer-events-none w-full">
                                <h4 class="text-sm font-bold text-white group-hover/item:text-indigo-300 transition-colors line-clamp-1 mb-1" title="${escapeHtml(app.title)}">${escapeHtml(app.title)}</h4>
                                <p class="text-xs text-zinc-400 line-clamp-2 leading-relaxed" title="${escapeHtml(app.shortDescription || '')}">${escapeHtml(app.shortDescription || '')}</p>
                            </div>
                        </button>`;
                    }).join('')}
                </div>
            </div>`;
        }

        function renderStoreGrid(apps) {
            if (!apps.length) {
                const onlyFavs = !!state.store.favoritesOnly;
                const hasQuery = !!state.store.q;
                return ` 
                <div class="glass border-gradient rounded-3xl bg-[#0a0c14]/60 p-12 text-center">
                    <div class="mx-auto grid h-16 w-16 place-items-center rounded-2xl bg-gradient-to-br from-zinc-700 to-zinc-800 mb-5"> 
                        ${onlyFavs ? `<svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" class="text-emerald-400"><path d="M12 21s-6.7-4.35-9.33-8.06C.4 9.22 2.08 5.5 5.7 4.56c1.9-.5 3.73.13 4.88 1.35L12 7.33l1.42-1.42c1.15-1.22 2.98-1.85 4.88-1.35 3.62.94 5.3 4.66 3.03 8.38C18.7 16.65 12 21 12 21z"/></svg>` :
                            hasQuery ? `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" class="text-zinc-400"><path d="M21 21 15.8 15.8M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="m13 13 3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>` :
                                `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" class="text-zinc-400"><path d="M20 7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM16 3H8L6 7h12l-2-4z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>`} 
                    </div>
                    <div class="text-xl font-semibold text-white mb-2">
                        ${onlyFavs ? 'Nenhum favorito ainda' : hasQuery ? 'Nenhum resultado para "' + escapeHtml(state.store.q) + '"' : 'Nenhum app cadastrado'}
                    </div>
                    <div class="text-zinc-400 mb-6 max-w-md mx-auto">
                        ${onlyFavs ? 'Marque apps com ⭐ para salvá-los no topo e facilitar seu acesso rápido.' : hasQuery ? 'Tente buscar com outros termos ou clique em limpar.' : 'Adicione seu primeiro aplicativo no painel administrativo.'}
                    </div>
                    <div class="flex flex-wrap justify-center gap-3"> 
                        ${onlyFavs ? ` <button id="disableFavsBtn" class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-6 py-3 text-sm font-semibold text-white hover:bg-white/10 transition-all cursor-pointer"> Ver todos </button> ` :
                            hasQuery ? ` <button id="clearFiltersBtn" class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-6 py-3 text-sm font-semibold text-white hover:bg-white/10 transition-all cursor-pointer"> Limpar busca </button> ` :
                                `${localStorage.getItem('4uia_dev_mode') === 'true' ? ` <a href="#/admin" class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 px-6 py-3 text-sm font-semibold text-white hover:from-emerald-400 hover:to-cyan-400 transition-all btn-shine"> Abrir Painel Admin </a> ` : ''}`} 
                    </div>
                </div>`;
            }
            if (currentViewMode === 'list') {
                return `<div class="flex flex-col gap-2.5">${apps.map(app => storeListRow(app)).join('')}</div>`;
            }
            return `<div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">${apps.map(app => storeCard(app)).join('')}</div>`;
        }

        function storeCard(app) {
            const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status));
            const tags = (app.tags || []).slice(0, 3);
            const isFeatured = app.status === 'Destaque';
            const isNew = app.status === 'Novo' || ((Date.now() - (app.createdAt || 0)) < 1000 * 60 * 60 * 24 * 7);
            const fav = isFavorite(app.id);
            const clicks = Number(app.clicks) || 0;
            const q = state.store.q;

            const highlightedTitle = q ? highlightMatches(app.title, q) : escapeHtml(app.title || 'Sem título');
            const highlightedShort = q ? highlightMatches(app.shortDescription, q) : escapeHtml(app.shortDescription || '');

            return `
            <article class="group relative glass border-gradient rounded-2xl bg-[#0a0c14]/60 overflow-hidden card-3d card-shine spotlight transition-all duration-300 flex flex-col justify-between">
                <button type="button" class="fav-btn absolute top-4 right-4 z-10 grid h-10 w-10 place-items-center rounded-xl border transition-all cursor-pointer ${fav ? 'border-emerald-400/30 bg-emerald-500/15 text-emerald-200 hover:bg-emerald-500/20' : 'border-white/10 bg-white/5 text-zinc-200 hover:bg-white/10'}" aria-pressed="${fav ? 'true' : 'false'}" title="${fav ? 'Remover dos favoritos' : 'Adicionar aos favoritos'}" data-id="${escapeHtml(app.id)}">
                    ${heartSvg(fav)}
                </button>
                
                <button type="button" class="open-details relative w-full p-5 text-left cursor-pointer flex-1" data-id="${escapeHtml(app.id)}">
                    <div class="flex items-start gap-4">
                        <div class="relative shrink-0">
                            <img alt="" src="${escapeHtml(icon)}" class="h-16 w-16 rounded-2xl object-cover ring-2 ring-white/10 group-hover:ring-emerald-400/30 transition-all app-icon-squircle pointer-events-none" />
                            ${isFeatured ? `<span class="absolute -right-2 -top-2 rounded-full bg-gradient-to-r from-emerald-500 to-cyan-500 px-2 py-1 text-[10px] font-bold text-white shadow-lg">★</span>` : ''}
                            ${(!isFeatured && isNew) ? `<span class="absolute -right-2 -top-2 rounded-full bg-gradient-to-r from-cyan-500 to-teal-500 px-2 py-1 text-[10px] font-bold text-white shadow-lg">NEW</span>` : ''}
                        </div>
                        <div class="min-w-0 flex-1 pr-6">
                            <div class="flex items-center gap-2 mb-1.5">
                                <h3 class="truncate text-base font-semibold tracking-tight text-white group-hover:text-emerald-300 transition-colors">${highlightedTitle}</h3>
                            </div>
                            <div class="flex items-center gap-2 mb-2">
                                ${app.status ? statusPill(app.status) : ''}
                                ${clicks > 0 ? `<span class="inline-flex items-center gap-1 rounded-full bg-amber-500/10 px-2 py-0.5 text-[10px] font-semibold text-amber-300 ring-1 ring-amber-400/20">🔥 ${clicks}</span>` : ''}
                            </div>
                            <p class="line-clamp-2 text-sm text-zinc-400 leading-relaxed">${highlightedShort}</p>
                        </div>
                    </div>

                    <div class="mt-4 flex flex-wrap gap-1.5">
                        <span class="rounded-full bg-white/5 px-2.5 py-1 text-[11px] font-medium text-zinc-300 ring-1 ring-white/10">${escapeHtml(app.category || 'App')}</span>
                        ${tags.map(t => `<span class="rounded-full bg-white/5 px-2.5 py-1 text-[11px] text-zinc-400 ring-1 ring-white/10">#${q ? highlightMatches(t, q) : escapeHtml(t)}</span>`).join('')}
                    </div>

                    <div class="mt-4 flex items-center justify-between text-xs text-zinc-500 border-t border-white/5 pt-3">
                        <span class="flex items-center gap-1">📅 ${escapeHtml(fmtDate(app.updatedAt || app.createdAt || Date.now()))}</span>
                        <span class="opacity-0 group-hover:opacity-100 transition-opacity text-emerald-400 font-medium">Ver detalhes →</span>
                    </div>
                </button>

                <div class="relative flex items-center gap-2 border-t border-white/10 p-3 bg-white/[0.02]">
                    <button type="button" class="open-iframe flex-1 inline-flex items-center justify-center gap-1.5 rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 px-3 py-2.5 text-xs font-bold text-white hover:from-emerald-400 hover:to-cyan-400 transition-all btn-shine cursor-pointer shadow-sm shadow-emerald-500/20" title="Executar em janela modal sem sair da loja" data-id="${escapeHtml(app.id)}">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        <span class="pointer-events-none">Testar App</span>
                    </button>
                    <button type="button" class="open-app grid h-9 w-9 place-items-center rounded-xl border border-white/10 bg-white/5 text-zinc-200 hover:bg-white/10 hover:text-white transition-all cursor-pointer" title="Abrir em nova aba" data-id="${escapeHtml(app.id)}">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="pointer-events-none"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    </button>
                    <button type="button" class="open-qr grid h-9 w-9 place-items-center rounded-xl border border-white/10 bg-white/5 text-zinc-200 hover:bg-white/10 hover:text-white transition-all cursor-pointer" title="QR Code para Smartphone" data-id="${escapeHtml(app.id)}">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="pointer-events-none"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                    </button>
                    <button type="button" class="open-details grid h-9 w-9 place-items-center rounded-xl border border-white/10 bg-white/5 text-zinc-200 hover:bg-white/10 hover:text-white transition-all cursor-pointer" title="Mais informações" data-id="${escapeHtml(app.id)}">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="pointer-events-none"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                    </button>
                </div>
            </article>`;
        }

        function bindStoreHandlers(filtered, shownTotal) {
            $('#reloadCatalogBtn')?.addEventListener('click', async (e) => {
                const btn = e.currentTarget;
                const originalHtml = btn.innerHTML;
                btn.disabled = true;
                btn.innerHTML = `<svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> <span>Atualizando...</span>`;
                try {
                    await reloadFromServer(true);
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = originalHtml;
                }
            });
            $('#toggleFavsBtn')?.addEventListener('click', (e) => { e.preventDefault(); state.store.favoritesOnly = !state.store.favoritesOnly; state.store.visible = state.store.pageSize; renderStore(); });
            $('#disableFavsBtn')?.addEventListener('click', (e) => { e.preventDefault(); state.store.favoritesOnly = false; renderStore(); });
            $('#viewAllFavsQuickBtn')?.addEventListener('click', (e) => { e.preventDefault(); state.store.favoritesOnly = true; state.store.visible = state.store.pageSize; renderStore(); setTimeout(() => $('#appsGrid')?.scrollIntoView({ behavior: 'smooth', block: 'start' }), 100); });
            $('#viewModeGridBtn')?.addEventListener('click', () => setViewMode('grid'));
            $('#viewModeListBtn')?.addEventListener('click', () => setViewMode('list'));
            $('#mobNavHome')?.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
            $('#mobNavFavs')?.addEventListener('click', () => { state.store.favoritesOnly = !state.store.favoritesOnly; state.store.visible = state.store.pageSize; renderStore(); });
            $$('.open-cmd').forEach(b => b.addEventListener('click', openCmdPalette));

            const sliderPrevBtn = $('#sliderPrev');
            const sliderNextBtn = $('#sliderNext');
            const heroSlider = $('#heroSlider');
            if (sliderPrevBtn) { sliderPrevBtn.addEventListener('click', (e) => { e.preventDefault(); e.stopPropagation(); sliderPrev(); startSliderAutoplay(); }); }
            if (sliderNextBtn) { sliderNextBtn.addEventListener('click', (e) => { e.preventDefault(); e.stopPropagation(); sliderNext(); startSliderAutoplay(); }); }
            $$('.slider-dot').forEach(dot => { dot.addEventListener('click', (e) => { e.preventDefault(); e.stopPropagation(); const index = parseInt(dot.getAttribute('data-index'), 10); if (!isNaN(index)) sliderGoTo(index); }); });
            if (heroSlider) { heroSlider.addEventListener('mouseenter', () => { stopSliderAutoplay(); }); heroSlider.addEventListener('mouseleave', () => { startSliderAutoplay(); }); }

            $('#headerAdminBtn')?.addEventListener('click', (e) => {
                e.preventDefault();
                location.hash = '#/admin';
            });

            const featuredCount = getFeaturedApps().length;
            if (featuredCount > 1) {
                setTimeout(() => {
                    startSliderAutoplay();
                }, 50);
            }

            const input = $('#storeSearch');
            const catSel = $('#storeCategory');
            const sortSel = $('#storeSort');
            const clear = $('#clearFilters');
            const clearBtn2 = $('#clearFiltersBtn');
            
            if (input) {
                input.value = state.store.q;
                input.addEventListener('input', (e) => {
                    state.store.q = input.value;
                    state.store.visible = state.store.pageSize;
                    stopSliderAutoplay();
                    if (searchDebounceTimer) clearTimeout(searchDebounceTimer);
                    searchDebounceTimer = setTimeout(() => {
                        const cursorPos = input.selectionStart;
                        const currentValue = input.value;
                        renderStore();
                        const newInput = $('#storeSearch');
                        if (newInput) {
                            newInput.focus();
                            newInput.value = currentValue;
                            newInput.setSelectionRange(cursorPos, cursorPos);
                        }
                    }, 250);
                });
            }
            if (catSel) {
                catSel.value = state.store.category;
                catSel.addEventListener('change', () => {
                    state.store.category = catSel.value;
                    state.store.visible = state.store.pageSize;
                    renderStore();
                });
            }
            if (sortSel) {
                sortSel.value = state.store.sortBy;
                sortSel.addEventListener('change', () => {
                    state.store.sortBy = sortSel.value;
                    state.store.visible = state.store.pageSize;
                    renderStore();
                });
            }
            const doClear = () => {
                state.store.q = '';
                state.store.category = 'Todas';
                state.store.sortBy = 'destaque';
                state.store.favoritesOnly = false;
                state.store.visible = state.store.pageSize;
                renderStore();
            };
            if (clear) clear.addEventListener('click', doClear);
            if (clearBtn2) clearBtn2.addEventListener('click', doClear);

            $$('.spotlight').forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = ((e.clientX - rect.left) / rect.width) * 100;
                    const y = ((e.clientY - rect.top) / rect.height) * 100;
                    card.style.setProperty('--mouse-x', `${x}%`);
                    card.style.setProperty('--mouse-y', `${y}%`);
                });
            });

            const sentinel = $('#infiniteSentinel');
            if (sentinel) {
                const io = new IntersectionObserver((entries) => {
                    if (!entries[0]?.isIntersecting || state.store.loadingMore) return;
                    state.store.loadingMore = true;
                    state.store.visible = Math.min(state.store.visible + state.store.pageSize, shownTotal);
                    setTimeout(() => {
                        state.store.loadingMore = false;
                        renderStore();
                    }, 150);
                }, { rootMargin: '400px 0px' });
                io.observe(sentinel);
            }
        }

        // -------- Iframe Modal (Open In Store) --------
        function openIframeModal(app) {
            if (!app || !app.link) {
                toast('Este aplicativo não possui um link cadastrado.', 'warn');
                return;
            }
            recordAppClick(app.id);
            const d = $('#iframeDialog');
            if (!d) return;

            const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status));
            const iconEl = $('#iframeAppIcon');
            const titleEl = $('#iframeAppTitle');
            const statusEl = $('#iframeAppStatus');
            const urlEl = $('#iframeAppUrl');
            const catEl = $('#iframeAppCategory');
            const iframe = $('#appIframe');
            const loader = $('#iframeLoader');

            if (iconEl) iconEl.src = icon;
            if (titleEl) titleEl.textContent = app.title || 'Sem título';
            if (statusEl) statusEl.innerHTML = app.status ? statusPill(app.status) : '';
            if (urlEl) urlEl.textContent = normalizeAppLink(app.link);
            if (catEl) catEl.textContent = `Categoria: ${app.category || 'Geral'}`;

            if (loader) {
                loader.classList.remove('opacity-0', 'pointer-events-none');
            }

            const appUrl = normalizeAppLink(app.link);
            if (iframe) {
                iframe.src = appUrl;
                iframe.onload = () => {
                    if (loader) loader.classList.add('opacity-0', 'pointer-events-none');
                };
            }

            const closeBtn = $('#iframeCloseBtn');
            if (closeBtn) closeBtn.onclick = () => { d.close(); if (iframe) iframe.src = 'about:blank'; };

            const reloadBtn = $('#iframeReloadBtn');
            if (reloadBtn) reloadBtn.onclick = () => {
                if (loader) loader.classList.remove('opacity-0', 'pointer-events-none');
                if (iframe) iframe.src = appUrl;
            };

            const extBtn = $('#iframeOpenExternalBtn');
            if (extBtn) extBtn.onclick = () => {
                window.open(appUrl, '_blank', 'noopener,noreferrer');
            };

            const fsBtn = $('#iframeFullscreenBtn');
            if (fsBtn) fsBtn.onclick = () => {
                if (!document.fullscreenElement) {
                    d.requestFullscreen().catch(() => {});
                } else {
                    document.exitFullscreen().catch(() => {});
                }
            };

            d.onclose = () => {
                if (iframe) iframe.src = 'about:blank';
            };

            if (!d.open) d.showModal();
        }

        // -------- Suggestion Modal --------
        function openSuggestModal(type = 'sugestao', appName = '') {
            const d = $('#suggestDialog');
            if (!d) return;
            const form = $('#suggestForm');
            if (form) {
                form.reset();
                const typeInput = form.querySelector(`input[name="suggestType"][value="${type}"]`);
                if (typeInput) typeInput.checked = true;
                const nameInput = $('#suggestAppName');
                if (nameInput && appName) nameInput.value = appName;
            }
            if (!d.open) d.showModal();
        }

        function initSuggestForm() {
            const form = $('#suggestForm');
            if (!form) return;
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                const submitBtn = $('#suggestSubmitBtn');
                const originalText = submitBtn ? submitBtn.innerHTML : 'Enviar';
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = `<svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> <span>Enviando...</span>`;
                }
                try {
                    const type = form.querySelector('input[name="suggestType"]:checked')?.value || 'sugestao';
                    const appName = safeText($('#suggestAppName')?.value);
                    const url = safeText($('#suggestUrl')?.value);
                    const description = safeText($('#suggestDesc')?.value);
                    const contact = safeText($('#suggestContact')?.value);

                    if (API.backend === 'php' && API.suggest) {
                        const res = await fetch(API.suggest, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({ type, appName, url, description, contact })
                        });
                        const data = await res.json();
                        if (res.ok && data.success) {
                            toast(data.message || 'Sugestão enviada com sucesso!', 'ok');
                            $('#suggestDialog')?.close();
                            form.reset();
                            return;
                        }
                    }
                    toast('Sugestão registrada! Muito obrigado pela contribuição.', 'ok');
                    $('#suggestDialog')?.close();
                    form.reset();
                } catch (err) {
                    toast('Erro ao enviar sugestão: ' + err.message, 'err');
                } finally {
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    }
                }
            });
        }

        // -------- Details Modal --------
        function openDetails(app) {
            const d = $('#detailsDialog');
            try { const targetHash = detailsHashFor(app?.id); if (location.hash !== targetHash) history.replaceState(null, '', targetHash); } catch { }
            const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status));
            const tags = (app.tags || []);
            const heroImg = safeText(app.heroImageUrl);
            const clicks = Number(app.clicks) || 0;

            const fullText = `${app.title || ''} ${app.shortDescription || ''} ${app.fullDescription || ''} ${tags.join(' ')}`.toLowerCase();
            const needsCamera = /c[âa]mera|scanner|webcam|vis[aã]o|facial|qrcode|qr/i.test(fullText);
            const needsMic = /microfone|gravad|fala|transcri|áudio|audio|voz/i.test(fullText);

            $('#detailsBody').innerHTML = `
                ${heroImg ? `
                    <div class="relative overflow-hidden rounded-2xl border border-white/10 aspect-video w-full flex items-center justify-center mb-6 bg-cover bg-center" style="background-image: url('${escapeHtml(heroImg)}');">
                        <div class="absolute inset-0 backdrop-blur-xl bg-[#0a0c14]/40"></div>
                        <img alt="" src="${escapeHtml(heroImg)}" class="relative z-10 max-h-full max-w-full object-contain rounded-2xl" />
                        <div class="absolute inset-0 z-20 bg-gradient-to-t from-[#0a0c14]/80 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                ` : ''}
                <div class="flex flex-col gap-5 sm:flex-row sm:items-start sm:gap-6">
                    <img alt="" src="${escapeHtml(icon)}" class="h-24 w-24 rounded-2xl object-cover ring-2 ring-white/15 shrink-0 app-icon-squircle shadow-xl" />
                    <div class="min-w-0 flex-1">
                        <div class="flex flex-wrap items-center gap-2 mb-2">
                            <h2 class="text-2xl font-bold tracking-tight text-white">${escapeHtml(app.title || 'Sem título')}</h2>
                            ${app.status ? statusPill(app.status) : ''}
                            ${clicks > 0 ? `<span class="rounded-full bg-amber-500/10 px-2.5 py-1 text-xs font-semibold text-amber-300 ring-1 ring-amber-400/20">🔥 ${clicks} acessos</span>` : ''}
                            ${needsCamera ? `<span class="rounded-full bg-cyan-500/10 px-2.5 py-1 text-xs font-semibold text-cyan-300 ring-1 ring-cyan-400/20 inline-flex items-center gap-1">📷 Câmera</span>` : ''}
                            ${needsMic ? `<span class="rounded-full bg-purple-500/10 px-2.5 py-1 text-xs font-semibold text-purple-300 ring-1 ring-purple-400/20 inline-flex items-center gap-1">🎙️ Microfone</span>` : ''}
                        </div>
                        <span class="inline-flex rounded-full bg-white/5 px-3 py-1.5 text-xs font-medium text-zinc-300 ring-1 ring-white/10 mb-3">${escapeHtml(app.category || 'Sem categoria')}</span>
                        <p class="text-zinc-300">${escapeHtml(app.shortDescription || '')}</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            ${(tags.length ? tags : ['Sem tags']).map(t => `<span class="rounded-full bg-white/5 px-3 py-1.5 text-xs text-zinc-300 ring-1 ring-white/10">#${escapeHtml(t)}</span>`).join('')}
                        </div>
                        <div class="mt-5 grid gap-3 text-xs text-zinc-400 sm:grid-cols-3">
                            <div class="rounded-xl border border-white/10 bg-white/5 p-3.5">
                                <div class="text-[11px] uppercase tracking-wider text-zinc-500 mb-1">Criado</div>
                                <div class="text-zinc-200 font-medium">${escapeHtml(fmtDate(app.createdAt || Date.now()))}</div>
                            </div>
                            <div class="rounded-xl border border-white/10 bg-white/5 p-3.5">
                                <div class="text-[11px] uppercase tracking-wider text-zinc-500 mb-1">Atualizado</div>
                                <div class="text-zinc-200 font-medium">${escapeHtml(fmtDate(app.updatedAt || app.createdAt || Date.now()))}</div>
                            </div>
                            <div class="rounded-xl border border-white/10 bg-white/5 p-3.5">
                                <div class="text-[11px] uppercase tracking-wider text-zinc-500 mb-1">Popularidade</div>
                                <div class="text-amber-300 font-semibold flex items-center gap-1">🔥 ${clicks} cliques</div>
                            </div>
                        </div>
                        <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:items-center">
                            <button type="button" id="detailsOpenIframe" class="flex-1 inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 px-5 py-3 text-sm font-semibold text-white hover:from-emerald-400 hover:to-cyan-400 transition-all btn-shine cursor-pointer shadow-lg shadow-emerald-500/20">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                                <span class="pointer-events-none">Testar na Loja (Modal)</span>
                            </button>
                            <button type="button" id="detailsOpen" class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/15 bg-white/5 px-5 py-3 text-sm font-semibold text-zinc-200 hover:bg-white/10 transition-all cursor-pointer">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="pointer-events-none"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                <span class="pointer-events-none">Nova Aba</span>
                            </button>
                            <div class="flex items-center gap-2">
                                <button type="button" id="detailsQr" class="grid h-11 w-11 place-items-center rounded-xl border border-white/10 bg-white/5 text-zinc-100 hover:bg-white/10 transition-all cursor-pointer" title="📲 QR Code para Smartphone">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="pointer-events-none"><rect x="3" y="3" width="7" height="7" stroke="currentColor" stroke-width="2"/><rect x="14" y="3" width="7" height="7" stroke="currentColor" stroke-width="2"/><rect x="14" y="14" width="7" height="7" stroke="currentColor" stroke-width="2"/><rect x="3" y="14" width="7" height="7" stroke="currentColor" stroke-width="2"/></svg>
                                </button>
                                <button type="button" id="detailsWhatsapp" class="grid h-11 w-11 place-items-center rounded-xl border border-emerald-400/20 bg-emerald-500/10 text-emerald-300 hover:bg-emerald-500/20 transition-all cursor-pointer" title="💬 Compartilhar no WhatsApp">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="pointer-events-none"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                                </button>
                                <button type="button" class="fav-btn grid h-11 w-11 place-items-center rounded-xl border transition-all cursor-pointer ${isFavorite(app.id) ? 'border-emerald-400/30 bg-emerald-500/15 text-emerald-200 hover:bg-emerald-500/20' : 'border-white/10 bg-white/5 text-zinc-100 hover:bg-white/10'}" aria-pressed="${isFavorite(app.id) ? 'true' : 'false'}" title="${isFavorite(app.id) ? 'Remover dos favoritos' : 'Adicionar aos favoritos'}" data-id="${escapeHtml(app.id)}">
                                    ${heartSvg(isFavorite(app.id))}
                                </button>
                                <button type="button" id="detailsShare" class="grid h-11 w-11 place-items-center rounded-xl border border-white/10 bg-white/5 text-zinc-100 hover:bg-white/10 transition-all cursor-pointer" title="Compartilhar">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="pointer-events-none"><path d="M4 12v7a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M16 6l-4-4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 2v14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                                </button>
                                <button type="button" id="detailsCopy" class="grid h-11 w-11 place-items-center rounded-xl border border-white/10 bg-white/5 text-zinc-100 hover:bg-white/10 transition-all cursor-pointer" title="Copiar link do app">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="pointer-events-none"><path d="M16 4H8a2 2 0 0 0-2 2v12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M8 6h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <button type="button" id="detailsOpenSeo" class="grid h-11 w-11 place-items-center rounded-xl border border-white/10 bg-white/5 text-zinc-100 hover:bg-white/10 transition-all cursor-pointer" title="Abrir página (SEO)">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="pointer-events-none"><path d="M14 3h7v7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 14L21 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 14v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-sm font-semibold text-white mb-3">Descrição completa</h3>
                    <div class="whitespace-pre-wrap rounded-2xl border border-white/10 bg-white/5 p-5 text-sm text-zinc-300 leading-relaxed">${escapeHtml(app.fullDescription || 'Sem descrição completa.')}</div>
                </div>
            `;

            const openIframeBtn = $('#detailsOpenIframe');
            const openBtn = $('#detailsOpen');
            const qrBtn = $('#detailsQr');
            const waBtn = $('#detailsWhatsapp');
            const copyBtn = $('#detailsCopy');
            const shareBtn = $('#detailsShare');
            const openSeoBtn = $('#detailsOpenSeo');

            if (openIframeBtn) {
                openIframeBtn.onclick = (e) => {
                    e.preventDefault();
                    d.close();
                    openIframeModal(app);
                };
            }
            if (openBtn) {
                openBtn.onclick = (e) => {
                    e.preventDefault();
                    recordAppClick(app.id);
                    if (app.link) window.open(normalizeAppLink(app.link), '_blank', 'noopener,noreferrer');
                };
            }
            if (qrBtn) {
                qrBtn.onclick = (e) => { e.preventDefault(); openQrModal(app); };
            }
            if (waBtn) {
                waBtn.onclick = (e) => { e.preventDefault(); shareOnWhatsApp(app); };
            }
            if (shareBtn) {
                shareBtn.onclick = (e) => { e.preventDefault(); shareAppLink(app); };
            }
            if (copyBtn) {
                copyBtn.onclick = async (e) => {
                    e.preventDefault();
                    const link = normalizeAppLink(app.link);
                    if (!link) { toast('Sem link cadastrado.', 'warn'); return; }
                    try { await navigator.clipboard.writeText(link); toast('Link copiado!', 'ok'); } catch { toast('Erro ao copiar.', 'warn'); }
                };
            }
            if (openSeoBtn) {
                openSeoBtn.onclick = (e) => { e.preventDefault(); window.open(seoUrlFor(app.id), '_blank', 'noopener,noreferrer'); };
            }

            d.addEventListener('close', () => clearDetailsHash(), { once: true });
            if (!d.open) d.showModal();
        }

        // -------- Confirm Modal --------
        function confirmModal({ title = 'Confirmar', text = 'Tem certeza?', okText = 'OK', tone = 'danger' } = {}) {
            return new Promise((resolve) => {
                const d = $('#confirmDialog');
                $('#confirmTitle').textContent = title;
                $('#confirmText').textContent = text;
                const ok = $('#confirmOk');
                ok.textContent = okText;
                ok.className = tone === 'warn' ? 'rounded-xl bg-amber-500 px-5 py-2.5 text-sm font-semibold text-white hover:bg-amber-400 transition-all cursor-pointer' : 'rounded-xl bg-rose-500 px-5 py-2.5 text-sm font-semibold text-white hover:bg-rose-400 transition-all cursor-pointer';
                const cleanup = () => {
                    ok.replaceWith(ok.cloneNode(true));
                    $('#confirmCancel').replaceWith($('#confirmCancel').cloneNode(true));
                };
                $('#confirmOk').addEventListener('click', () => { cleanup(); d.close('ok'); resolve(true); }, { once: true });
                $('#confirmCancel').addEventListener('click', () => { cleanup(); d.close('cancel'); resolve(false); }, { once: true });
                d.addEventListener('close', () => { cleanup(); resolve(d.returnValue === 'ok'); }, { once: true });
                if (!d.open) d.showModal();
            });
        }

        // -------- Admin Statistics & Analytics View --------
        function timeAgo(unixTimestamp) {
            if (!unixTimestamp) return '';
            const now = Math.floor(Date.now() / 1000);
            const diff = Math.max(0, now - unixTimestamp);
            if (diff < 60) return 'agora mesmo';
            if (diff < 3600) return `${Math.floor(diff / 60)}m atrás`;
            if (diff < 86400) return `${Math.floor(diff / 3600)}h atrás`;
            return `${Math.floor(diff / 86400)}d atrás`;
        }

        function rankBadge(index) {
            if (index === 0) return `<span class="flex h-7 w-7 items-center justify-center rounded-lg bg-gradient-to-br from-amber-300 to-amber-500 text-xs font-black text-black shadow-md shadow-amber-500/20 shrink-0">1º</span>`;
            if (index === 1) return `<span class="flex h-7 w-7 items-center justify-center rounded-lg bg-gradient-to-br from-zinc-200 to-zinc-400 text-xs font-black text-black shadow-md shadow-zinc-400/20 shrink-0">2º</span>`;
            if (index === 2) return `<span class="flex h-7 w-7 items-center justify-center rounded-lg bg-gradient-to-br from-amber-700 to-amber-900 text-xs font-bold text-white shadow-md shadow-amber-800/20 shrink-0">3º</span>`;
            return `<span class="flex h-7 w-7 items-center justify-center rounded-lg bg-white/5 border border-white/10 text-xs font-semibold text-zinc-400 shrink-0">${index + 1}º</span>`;
        }

        function getSourceInfo(source) {
            const s = String(source || '').toLowerCase();
            if (s.includes('google')) return { icon: '🔍', name: 'Google Search', bg: 'bg-blue-500/15 text-blue-400' };
            if (s.includes('direto')) return { icon: '⚡', name: 'Acesso Direto', bg: 'bg-zinc-500/15 text-zinc-300' };
            if (s.includes('whatsapp') || s.includes('wa.me')) return { icon: '💬', name: 'WhatsApp', bg: 'bg-emerald-500/15 text-emerald-400' };
            if (s.includes('instagram')) return { icon: '📸', name: 'Instagram', bg: 'bg-pink-500/15 text-pink-400' };
            if (s.includes('portal') || s.includes('4u.ia.br')) return { icon: '🌐', name: 'Portal 4U', bg: 'bg-cyan-500/15 text-cyan-400' };
            if (s.includes('app 4u')) return { icon: '🚀', name: source, bg: 'bg-teal-500/15 text-teal-400' };
            if (s.includes('github')) return { icon: '🐙', name: 'GitHub', bg: 'bg-purple-500/15 text-purple-400' };
            if (s.includes('twitter') || s.includes('x (')) return { icon: '🐦', name: 'X / Twitter', bg: 'bg-sky-500/15 text-sky-400' };
            if (s.includes('youtube')) return { icon: '▶️', name: 'YouTube', bg: 'bg-red-500/15 text-red-400' };
            if (s.includes('facebook')) return { icon: '👥', name: 'Facebook', bg: 'bg-blue-600/15 text-blue-400' };
            if (s.includes('linkedin')) return { icon: '💼', name: 'LinkedIn', bg: 'bg-blue-700/15 text-blue-300' };
            return { icon: '🔗', name: source || 'Acesso Direto', bg: 'bg-white/10 text-zinc-300' };
        }

        function formatEventTitle(page) {
            if (!page) return 'Acesso à Vitrine';
            if (page.startsWith('Clique no App:')) return page;
            const clean = page.replace(/[#/?]/g, '');
            if (clean === 'loja' || clean === '') return 'Acesso à Vitrine da Loja';
            if (page.includes('/app/')) {
                const m = page.match(/\/app\/([^/?#]+)/);
                return m ? `App: ${m[1]}` : 'Visualizou Aplicativo';
            }
            return page;
        }

        function adminStatsView(data) {
            if (!data) {
                return `
                <div class="grid gap-6">
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                        ${[1, 2, 3, 4].map(() => `
                            <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5 space-y-3 animate-pulse">
                                <div class="w-1/3 h-4 bg-white/10 rounded"></div>
                                <div class="w-2/3 h-8 bg-white/20 rounded"></div>
                                <div class="w-1/2 h-3 bg-white/10 rounded"></div>
                            </div>
                        `).join('')}
                    </div>
                    <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-8 text-center text-zinc-400 flex flex-col items-center justify-center min-h-[300px]">
                        <div class="h-10 w-10 border-2 border-emerald-400 border-t-transparent rounded-full animate-spin mb-4"></div>
                        <div class="font-medium text-white">Carregando métricas e telemetria...</div>
                        <div class="text-xs text-zinc-500 mt-1">Consultando visitas, origens e acessos aos apps</div>
                    </div>
                </div>`;
            }

            const totalVisits = Number(data.total_visits) || 0;
            const uniqueVisitors = Number(data.unique_visitors) || 0;
            const totalClicks = Number(data.total_app_clicks) || 0;
            const convRate = data.conversion_rate || 0;
            const topApps = data.top_apps || [];
            const topReferrers = data.top_referrers || [];
            const devices = data.devices || {};
            const browsers = data.browsers || {};
            const categoryClicks = data.category_clicks || [];
            const recentVisits = data.recent_visits || [];

            const devTotal = Object.values(devices).reduce((a, b) => a + Number(b), 0) || 1;
            const broTotal = Object.values(browsers).reduce((a, b) => a + Number(b), 0) || 1;

            const topAppsItems = topApps.length ? topApps.map((ta, idx) => {
                const icon = ta.iconUrl || defaultIcon((ta.title || 'IA').slice(0, 2).toUpperCase(), 'emerald');
                const clicks = Number(ta.clicks) || 0;
                const maxClicks = Number(topApps[0]?.clicks) || 1;
                const relativeBar = Math.min(100, Math.max(5, Math.round((clicks / maxClicks) * 100)));
                return `
                <div class="group flex flex-col sm:flex-row sm:items-center justify-between gap-3 rounded-xl border border-white/5 bg-white/[0.02] p-3.5 hover:bg-white/[0.05] hover:border-white/10 transition-all">
                    <div class="flex items-center gap-3 min-w-0">
                        ${rankBadge(idx)}
                        <img src="${escapeHtml(icon)}" alt="" class="h-11 w-11 rounded-xl object-cover ring-1 ring-white/10 shrink-0" />
                        <div class="min-w-0">
                            <div class="flex items-center gap-2">
                                <span class="truncate text-sm font-semibold text-white group-hover:text-emerald-300 transition-colors">${escapeHtml(ta.title || 'Sem título')}</span>
                                ${ta.category ? `<span class="hidden sm:inline-block rounded-md bg-white/5 px-2 py-0.5 text-[10px] text-zinc-400">${escapeHtml(ta.category)}</span>` : ''}
                            </div>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-24 sm:w-36 h-1.5 rounded-full bg-white/10 overflow-hidden">
                                    <div class="h-full rounded-full bg-gradient-to-r from-amber-400 to-emerald-400" style="width: ${relativeBar}%"></div>
                                </div>
                                <span class="text-[11px] text-zinc-400 font-medium">${ta.percent}% dos cliques</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between sm:justify-end gap-3 shrink-0 pt-2 sm:pt-0 border-t sm:border-t-0 border-white/5">
                        <div class="text-right">
                            <div class="text-sm font-bold text-amber-300">🔥 ${clicks.toLocaleString('pt-BR')}</div>
                            <div class="text-[10px] text-zinc-500 uppercase tracking-wider">acessos</div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <button type="button" class="quick-edit-app-btn rounded-lg border border-white/10 bg-white/5 px-2.5 py-1.5 text-xs font-medium text-zinc-300 hover:bg-white/15 hover:text-white transition-all cursor-pointer" data-id="${escapeHtml(ta.id)}" title="Editar app no catálogo">
                                Editar
                            </button>
                            ${ta.link ? `
                                <a href="${escapeHtml(normalizeAppLink(ta.link))}" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-emerald-500/20 bg-emerald-500/10 px-2.5 py-1.5 text-xs font-medium text-emerald-300 hover:bg-emerald-500/20 transition-all flex items-center gap-1" title="Abrir app em nova aba">
                                    <span>Abrir</span>
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                </a>
                            ` : ''}
                        </div>
                    </div>
                </div>`;
            }).join('') : `<div class="p-6 text-center text-xs text-zinc-500">Nenhum clique registrado ainda</div>`;

            const referrerItems = topReferrers.length ? topReferrers.map(tr => {
                const info = getSourceInfo(tr.source);
                return `
                <div class="rounded-xl border border-white/5 bg-white/[0.02] p-3 hover:bg-white/[0.04] transition-all space-y-2">
                    <div class="flex items-center justify-between gap-2 text-xs">
                        <div class="flex items-center gap-2 min-w-0">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg ${info.bg} text-xs font-bold border border-white/5">${info.icon}</span>
                            <span class="font-semibold text-zinc-200 truncate">${escapeHtml(info.name)}</span>
                        </div>
                        <div class="flex items-center gap-1.5 shrink-0 text-right">
                            <span class="font-bold text-white text-xs">${Number(tr.count).toLocaleString('pt-BR')}</span>
                            <span class="rounded bg-emerald-500/15 border border-emerald-500/20 px-1.5 py-0.5 text-[10px] font-bold text-emerald-300">${tr.percent}%</span>
                        </div>
                    </div>
                    <div class="h-1.5 w-full overflow-hidden rounded-full bg-white/5">
                        <div class="h-full rounded-full bg-gradient-to-r from-emerald-500 to-cyan-400" style="width: ${Math.min(100, Math.max(4, tr.percent))}%"></div>
                    </div>
                </div>`;
            }).join('') : `<div class="p-6 text-center text-xs text-zinc-500">Nenhum dado de tráfego ainda</div>`;

            const deviceItems = Object.entries(devices).map(([dev, count]) => {
                const pct = Math.round((Number(count) / devTotal) * 100);
                const icon = dev === 'Mobile' ? '📱' : dev === 'Tablet' ? '📟' : '💻';
                const label = dev === 'Mobile' ? 'Celular / Mobile' : dev === 'Tablet' ? 'Tablet' : 'Computador / Desktop';
                return `
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between text-xs gap-2">
                        <span class="flex items-center gap-2 text-zinc-300 font-medium truncate">
                            <span class="text-sm shrink-0">${icon}</span>
                            <span class="truncate">${label}</span>
                        </span>
                        <div class="flex items-center gap-1.5 shrink-0">
                            <span class="font-bold text-white">${count}</span>
                            <span class="rounded bg-cyan-500/15 border border-cyan-500/20 px-1.5 py-0.5 text-[10px] font-bold text-cyan-300">${pct}%</span>
                        </div>
                    </div>
                    <div class="h-1.5 w-full overflow-hidden rounded-full bg-white/5">
                        <div class="h-full rounded-full bg-gradient-to-r from-emerald-500 to-cyan-400" style="width: ${pct}%"></div>
                    </div>
                </div>`;
            }).join('') || `<div class="text-xs text-zinc-500">Sem dados</div>`;

            const browserItems = Object.entries(browsers).map(([bro, count]) => {
                const pct = Math.round((Number(count) / broTotal) * 100);
                const broLower = bro.toLowerCase();
                const icon = broLower.includes('chrome') ? '🌐' : broLower.includes('safari') ? '🧭' : broLower.includes('edge') ? '🌊' : broLower.includes('firefox') ? '🦊' : '💻';
                return `
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between text-xs gap-2">
                        <span class="flex items-center gap-2 text-zinc-300 font-medium truncate">
                            <span class="text-sm shrink-0">${icon}</span>
                            <span class="truncate">${escapeHtml(bro)}</span>
                        </span>
                        <div class="flex items-center gap-1.5 shrink-0">
                            <span class="font-bold text-white">${count}</span>
                            <span class="rounded bg-blue-500/15 border border-blue-500/20 px-1.5 py-0.5 text-[10px] font-bold text-blue-300">${pct}%</span>
                        </div>
                    </div>
                    <div class="h-1.5 w-full overflow-hidden rounded-full bg-white/5">
                        <div class="h-full rounded-full bg-gradient-to-r from-cyan-500 to-blue-500" style="width: ${pct}%"></div>
                    </div>
                </div>`;
            }).join('') || `<div class="text-xs text-zinc-500">Sem dados</div>`;

            const categoryItems = categoryClicks.length ? categoryClicks.map(cat => {
                return `
                <div class="flex items-center justify-between gap-3 rounded-xl border border-white/5 bg-white/[0.02] p-3 hover:bg-white/[0.04] transition-all">
                    <div class="min-w-0 flex-1">
                        <div class="flex items-center justify-between text-xs mb-1.5">
                            <span class="font-medium text-white truncate">${escapeHtml(cat.category)}</span>
                            <span class="text-zinc-400 font-semibold">${cat.clicks} cliques <span class="text-zinc-500 font-normal">(${cat.percent}%)</span></span>
                        </div>
                        <div class="h-1.5 w-full overflow-hidden rounded-full bg-white/5">
                            <div class="h-full rounded-full bg-gradient-to-r from-emerald-500 to-cyan-500" style="width: ${Math.min(100, Math.max(3, cat.percent))}%"></div>
                        </div>
                        <div class="text-[10px] text-zinc-500 mt-1">${cat.total_apps} apps nesta categoria</div>
                    </div>
                </div>`;
            }).join('') : `<div class="p-4 text-center text-xs text-zinc-500">Nenhuma categoria</div>`;

            const recentItems = recentVisits.length ? recentVisits.map(rv => {
                const isAppClick = (rv.page || '').startsWith('Clique no App:');
                const dotColor = isAppClick ? 'bg-amber-400 ring-amber-400/20' : 'bg-emerald-400 ring-emerald-400/20';
                const title = formatEventTitle(rv.page);
                const sourceInfo = getSourceInfo(rv.source);
                return `
                <div class="rounded-xl border border-white/5 bg-white/[0.02] p-3 hover:bg-white/[0.04] transition-all space-y-2">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2 min-w-0">
                            <span class="relative flex h-2 w-2 shrink-0">
                                <span class="inline-flex rounded-full h-2 w-2 ${dotColor} ring-4"></span>
                            </span>
                            <span class="text-xs font-semibold ${isAppClick ? 'text-amber-300' : 'text-zinc-100'} truncate">
                                ${escapeHtml(title)}
                            </span>
                        </div>
                        <span class="text-[10px] text-zinc-500 shrink-0 font-medium">${timeAgo(rv.created_at)}</span>
                    </div>
                    <div class="flex flex-wrap items-center gap-1.5 text-[11px] text-zinc-400 pl-4">
                        <span class="rounded bg-white/5 px-1.5 py-0.5 text-zinc-300 font-medium">${sourceInfo.icon} ${escapeHtml(sourceInfo.name)}</span>
                        <span class="rounded bg-white/5 px-1.5 py-0.5 text-zinc-400">${escapeHtml(rv.device || 'Desktop')}</span>
                        <span class="rounded bg-white/5 px-1.5 py-0.5 text-zinc-400 truncate max-w-[120px]">${escapeHtml(rv.browser || 'Chrome')}</span>
                    </div>
                </div>`;
            }).join('') : `<div class="p-4 text-center text-xs text-zinc-500">Nenhuma atividade recente</div>`;

            return `
            <div class="grid gap-6">
                <!-- KPI Cards -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
                    <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/70 p-4 sm:p-5 relative overflow-hidden group hover:border-emerald-500/40 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="text-[11px] sm:text-xs font-semibold uppercase tracking-wider text-zinc-400">Total de Visitas</span>
                            <div class="h-8 w-8 sm:h-9 sm:w-9 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 shrink-0">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20M2 12h20"/></svg>
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-4 flex items-baseline gap-2">
                            <span class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white">${totalVisits.toLocaleString('pt-BR')}</span>
                            <span class="text-xs text-emerald-400 font-medium">sessões</span>
                        </div>
                        <p class="mt-1.5 sm:mt-2 text-[11px] sm:text-xs text-zinc-500">Páginas visualizadas na vitrine</p>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-emerald-500/5 rounded-full blur-xl group-hover:bg-emerald-500/10 transition-all"></div>
                    </div>

                    <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/70 p-4 sm:p-5 relative overflow-hidden group hover:border-cyan-500/40 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="text-[11px] sm:text-xs font-semibold uppercase tracking-wider text-zinc-400">Visitantes Únicos</span>
                            <div class="h-8 w-8 sm:h-9 sm:w-9 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 shrink-0">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-4 flex items-baseline gap-2">
                            <span class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white">${uniqueVisitors.toLocaleString('pt-BR')}</span>
                            <span class="text-xs text-cyan-400 font-medium">dispositivos</span>
                        </div>
                        <p class="mt-1.5 sm:mt-2 text-[11px] sm:text-xs text-zinc-500">IPs anonimizados (LGPD)</p>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-cyan-500/5 rounded-full blur-xl group-hover:bg-cyan-500/10 transition-all"></div>
                    </div>

                    <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/70 p-4 sm:p-5 relative overflow-hidden group hover:border-amber-500/40 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="text-[11px] sm:text-xs font-semibold uppercase tracking-wider text-zinc-400">Cliques nos Apps</span>
                            <div class="h-8 w-8 sm:h-9 sm:w-9 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 shrink-0">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-4 flex items-baseline gap-2">
                            <span class="text-2xl sm:text-3xl font-extrabold tracking-tight text-amber-300">🔥 ${totalClicks.toLocaleString('pt-BR')}</span>
                            <span class="text-xs text-amber-400 font-medium">aberturas</span>
                        </div>
                        <p class="mt-1.5 sm:mt-2 text-[11px] sm:text-xs text-zinc-500">Total de acessos a aplicativos</p>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-amber-500/5 rounded-full blur-xl group-hover:bg-amber-500/10 transition-all"></div>
                    </div>

                    <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/70 p-4 sm:p-5 relative overflow-hidden group hover:border-violet-500/40 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="text-[11px] sm:text-xs font-semibold uppercase tracking-wider text-zinc-400">Taxa de Interação</span>
                            <div class="h-8 w-8 sm:h-9 sm:w-9 rounded-xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center text-violet-400 shrink-0">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-4 flex items-baseline gap-2">
                            <span class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white">${convRate}%</span>
                            <span class="text-xs text-violet-400 font-medium">interação</span>
                        </div>
                        <p class="mt-1.5 sm:mt-2 text-[11px] sm:text-xs text-zinc-500">Razão cliques / visualizações</p>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-violet-500/5 rounded-full blur-xl group-hover:bg-violet-500/10 transition-all"></div>
                    </div>
                </div>

                <!-- 2-Column Grid -->
                <div class="grid gap-6 lg:grid-cols-[1.25fr_1fr]">
                    <!-- Left: Top Apps + Categories -->
                    <div class="space-y-6">
                        <!-- Top Apps -->
                        <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h2 class="text-base font-semibold text-white flex items-center gap-2">
                                        <span>🔥 Apps Mais Acessados</span>
                                        <span class="rounded-full bg-amber-500/10 border border-amber-500/20 px-2.5 py-0.5 text-xs font-semibold text-amber-300">Ranking Geral</span>
                                    </h2>
                                    <p class="text-xs text-zinc-400 mt-0.5">Aplicativos com maior engajamento e cliques da vitrine</p>
                                </div>
                            </div>
                            <div class="space-y-2.5">
                                ${topAppsItems}
                            </div>
                        </div>

                        <!-- Categories Breakdown -->
                        <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h2 class="text-base font-semibold text-white">Desempenho por Categoria</h2>
                                    <p class="text-xs text-zinc-400 mt-0.5">Distribuição de interesse dos usuários por segmento</p>
                                </div>
                            </div>
                            <div class="grid gap-2.5 sm:grid-cols-2">
                                ${categoryItems}
                            </div>
                        </div>
                    </div>

                    <!-- Right: Traffic Sources + Devices & Browsers + Activity Feed -->
                    <div class="space-y-6">
                        <!-- Traffic Sources -->
                        <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h2 class="text-base font-semibold text-white flex items-center gap-2">
                                        <span>🌐 Páginas de Origem</span>
                                        <span class="rounded-full bg-cyan-500/10 border border-cyan-500/20 px-2 py-0.5 text-xs font-semibold text-cyan-300">Referrers</span>
                                    </h2>
                                    <p class="text-xs text-zinc-400 mt-0.5">Canais e sites de onde vêm os visitantes</p>
                                </div>
                            </div>
                            <div class="space-y-2.5">
                                ${referrerItems}
                            </div>
                        </div>

                        <!-- Devices & Browsers -->
                        <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5 space-y-4">
                            <div>
                                <h2 class="text-base font-semibold text-white">Dispositivos & Navegadores</h2>
                                <p class="text-xs text-zinc-400 mt-0.5">Distribuição de plataformas e browsers</p>
                            </div>
                            <div class="space-y-3">
                                <div class="text-[11px] font-bold uppercase tracking-wider text-emerald-400">Aparelhos</div>
                                <div class="space-y-2.5">
                                    ${deviceItems}
                                </div>
                            </div>
                            <div class="border-t border-white/5 pt-3">
                                <div class="text-[11px] font-bold uppercase tracking-wider text-cyan-400 mb-2.5">Navegadores</div>
                                <div class="space-y-2.5">
                                    ${browserItems}
                                </div>
                            </div>
                        </div>

                        <!-- Recent Activity Feed -->
                        <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h2 class="text-base font-semibold text-white flex items-center gap-2">
                                        <span class="relative flex h-2 w-2">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                                        </span>
                                        <span>Atividade em Tempo Real</span>
                                    </h2>
                                    <p class="text-xs text-zinc-400 mt-0.5">Últimas visitas e eventos registrados</p>
                                </div>
                            </div>
                            <div class="space-y-2 max-h-[360px] overflow-y-auto pr-1">
                                ${recentItems}
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
        }

        // -------- Admin View --------
        function renderAdmin() {
            if (state.admin.tab === 'stats' && !state.admin.statsData && !state.admin.statsLoading) {
                fetchStats().then(() => renderAdmin());
            }
            if (state.admin.tab === 'settings' && !state.admin.suggestionsLoaded && !state.admin.suggestionsLoading) {
                fetchSuggestions().then(() => renderAdmin());
            }

            const currentTab = state.admin.tab || 'stats';
            const categories = ['Todas', ...getCategories(state.apps)];
            const filtered = getAdminFilteredApps();
            const selected = state.apps.find(a => a.id === state.admin.selectedId) || null;
            const hasBackend = API.backend === 'node' || API.backend === 'php';
            const statusBadge = state.meta.saving ? `<span class="rounded-full bg-amber-500/10 px-3 py-1.5 text-xs font-medium text-amber-300 ring-1 ring-amber-400/20 saving-indicator">Salvando...</span>` : hasBackend ? `<span class="rounded-full bg-emerald-500/10 px-3 py-1.5 text-xs font-medium text-emerald-300 ring-1 ring-emerald-400/20">✓ Sincronizado</span>` : `<span class="rounded-full bg-amber-500/10 px-3 py-1.5 text-xs font-medium text-amber-300 ring-1 ring-amber-400/20">Offline</span>`;
            const right = ` <a href="#/" class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm hover:bg-white/10 transition-all flex items-center gap-1.5 cursor-pointer text-zinc-300 hover:text-white" title="Voltar para a vitrine pública"><span>🏪 Ver Loja</span></a> ${statusBadge} <button id="reloadServerBtn" class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm hover:bg-white/10 transition-all cursor-pointer">Recarregar</button> ${!hasBackend ? `<button id="downloadCatalogBtn" class="rounded-xl bg-white px-4 py-2.5 text-sm font-semibold text-[#050709] hover:bg-zinc-100 transition-all cursor-pointer">Baixar JSON</button>` : ''} <button id="logoutBtn" class="rounded-xl border border-rose-400/20 bg-rose-500/10 px-4 py-2.5 text-sm text-rose-300 hover:bg-rose-500/20 transition-all cursor-pointer">Sair</button> `;

            let tabContent = '';
            if (currentTab === 'stats') {
                tabContent = adminStatsView(state.admin.statsData);
            } else if (currentTab === 'settings') {
                tabContent = adminStoreSettings();
            } else {
                tabContent = `
                <div class="grid gap-6 lg:grid-cols-[1fr_1.3fr]">
                    <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5 flex flex-col" style="height: 1050px;">
                        <div class="flex flex-col gap-3 sm:flex-row sm:items-center mb-4 flex-shrink-0">
                            ${searchBox({ value: state.admin.listQ, id: 'adminListSearch', placeholder: 'Buscar apps...' })}
                            ${categorySelect({ id: 'adminCategoryFilter', value: state.admin.categoryFilter, categories })}
                        </div>
                        <div class="text-xs text-zinc-500 mb-3 flex-shrink-0">
                            <span class="text-white font-medium">${filtered.length}</span> apps encontrados
                        </div>
                        <div class="flex-1 overflow-y-auto overflow-x-hidden pr-1">
                            ${adminList(filtered)}
                        </div>
                    </div>
                    <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5">
                        ${adminEditor(selected)}
                    </div>
                </div>`;
            }

            const main = `
            <section class="grid gap-6">
                <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-6">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <div class="flex items-center gap-3">
                                <h1 class="text-2xl font-bold tracking-tight gradient-text">Painel Administrativo</h1>
                                <span class="rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-xs font-semibold text-emerald-400 ring-1 ring-emerald-500/20">Central de Controle</span>
                            </div>
                            <p class="mt-1.5 text-sm text-zinc-400">
                                ${hasBackend ? `Auto-save ativo no servidor (${API.backend.toUpperCase()}) • Telemetria e catálogo sincronizados` : `Modo offline - salve manualmente`}
                            </p>
                        </div>
                        <div class="flex flex-wrap items-center gap-2.5">
                            ${currentTab === 'stats' ? `
                                <button id="refreshStatsBtn" class="rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 px-4 py-2.5 text-sm font-semibold text-zinc-200 transition-all flex items-center gap-2 cursor-pointer">
                                    <svg class="${state.admin.statsLoading ? 'animate-spin' : ''}" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/></svg>
                                    <span>Atualizar Estatísticas</span>
                                </button>
                            ` : ''}
                            ${currentTab === 'apps' ? `
                                <button id="newAppBtn" class="rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 px-5 py-2.5 text-sm font-semibold text-white hover:from-emerald-400 hover:to-cyan-400 transition-all btn-shine flex items-center gap-2 cursor-pointer shadow-lg shadow-emerald-500/20">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                                    <span>Novo App</span>
                                </button>
                            ` : ''}
                        </div>
                    </div>
                    <!-- Navigation Tabs -->
                    <div class="flex items-center gap-2 mt-6 border-t border-white/10 pt-4 overflow-x-auto">
                        <button id="tabBtnStats" class="tab-nav-btn flex items-center gap-2 px-4 py-2.5 rounded-xl font-medium text-sm transition-all cursor-pointer ${currentTab === 'stats' ? 'bg-gradient-to-r from-emerald-500/20 to-cyan-500/20 text-emerald-300 border border-emerald-400/40 shadow-sm' : 'text-zinc-400 hover:text-white hover:bg-white/5 border border-transparent'}">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
                            <span>Estatísticas & Tráfego</span>
                            <span class="rounded-full bg-emerald-500/20 px-2 py-0.5 text-[10px] font-bold text-emerald-300">NOVO</span>
                        </button>
                        <button id="tabBtnApps" class="tab-nav-btn flex items-center gap-2 px-4 py-2.5 rounded-xl font-medium text-sm transition-all cursor-pointer ${currentTab === 'apps' ? 'bg-gradient-to-r from-emerald-500/20 to-cyan-500/20 text-emerald-300 border border-emerald-400/40 shadow-sm' : 'text-zinc-400 hover:text-white hover:bg-white/5 border border-transparent'}">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                            <span>Catálogo de Apps (${state.apps.length})</span>
                        </button>
                        <button id="tabBtnSettings" class="tab-nav-btn flex items-center gap-2 px-4 py-2.5 rounded-xl font-medium text-sm transition-all cursor-pointer ${currentTab === 'settings' ? 'bg-gradient-to-r from-emerald-500/20 to-cyan-500/20 text-emerald-300 border border-emerald-400/40 shadow-sm' : 'text-zinc-400 hover:text-white hover:bg-white/5 border border-transparent'}">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                            <span>Configurações</span>
                        </button>
                    </div>
                </div>
                ${tabContent}
            </section>`;
            $('#app').innerHTML = appShell({ title: 'Admin', subtitle: `Backend: ${API.backend}`, right, main });
            bindAdminHandlers();
        }

        function adminStoreSettings() {
            const currentLogo = safeText(state.prefs.storeLogoUrl);
            const hero = getHeroApp();
            const heroId = safeText(state.prefs.heroAppId);
            const options = state.apps.map(a => `<option value="${escapeHtml(a.id)}" ${a.id === heroId ? 'selected' : ''}>${escapeHtml(a.title)} — ${escapeHtml(a.category || 'Sem categoria')}</option>`).join('');

            return `
            <div class="space-y-6">
                <!-- 1. Comunicado Global (Banner do Topo) -->
                <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-6 space-y-4">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-b border-white/5 pb-4">
                        <div>
                            <h2 class="text-base font-semibold text-white flex items-center gap-2">
                                <span>📢</span>
                                <span>Comunicado Global (Banner do Topo)</span>
                            </h2>
                            <p class="text-xs text-zinc-400 mt-1">Exiba um banner de aviso, lançamento ou novidade no topo da vitrine da loja.</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <label class="relative inline-flex items-center cursor-pointer select-none">
                                <input type="checkbox" id="announcementActiveInput" class="sr-only peer" ${state.prefs.announcementActive ? 'checked' : ''}>
                                <div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-500"></div>
                                <span class="ml-2.5 text-xs font-semibold ${state.prefs.announcementActive ? 'text-emerald-300' : 'text-zinc-400'}">${state.prefs.announcementActive ? 'Ativo na Loja' : 'Inativo'}</span>
                            </label>
                            <button type="button" id="saveAnnouncementBtn" class="rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 hover:from-emerald-400 hover:to-cyan-400 px-4 py-2 text-xs font-semibold text-white transition-all cursor-pointer shadow-sm">Salvar Banner</button>
                        </div>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-medium text-zinc-400 mb-1.5">Texto do Comunicado</label>
                            <input id="announcementTextInput" type="text" value="${escapeHtml(state.prefs.announcementText || '')}" placeholder="Ex: Novos aplicativos com IA adicionados nesta semana! Aproveite para testar." class="w-full rounded-xl border border-white/10 bg-[#0a0c14] px-4 py-2.5 text-sm text-zinc-100 placeholder:text-zinc-600 focus:outline-none focus:ring-2 focus:ring-emerald-400/50" />
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-zinc-400 mb-1.5">Estilo / Tema Visual</label>
                            <select id="announcementTypeInput" class="w-full rounded-xl border border-white/10 bg-[#0a0c14] px-4 py-2.5 text-sm text-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 cursor-pointer">
                                <option value="emerald" ${state.prefs.announcementType === 'emerald' ? 'selected' : ''}>🟢 Esmeralda (Informativo / Sucesso)</option>
                                <option value="cyan" ${state.prefs.announcementType === 'cyan' ? 'selected' : ''}>🔵 Ciano (Lançamento / Tecnologia)</option>
                                <option value="amber" ${state.prefs.announcementType === 'amber' ? 'selected' : ''}>🟡 Âmbar (Aviso / Importante)</option>
                                <option value="rose" ${state.prefs.announcementType === 'rose' ? 'selected' : ''}>🔴 Carmim (Alerta / Manutenção)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-zinc-400 mb-1.5">Link Opcional de Ação</label>
                            <input id="announcementLinkInput" type="text" value="${escapeHtml(state.prefs.announcementLink || '')}" placeholder="https://4u.ia.br/... ou #/app/..." class="w-full rounded-xl border border-white/10 bg-[#0a0c14] px-4 py-2.5 text-sm text-zinc-100 placeholder:text-zinc-600 focus:outline-none focus:ring-2 focus:ring-emerald-400/50" />
                        </div>
                    </div>
                </div>

                <!-- 2. Sugestões & Feedbacks da Comunidade -->
                <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-6 space-y-4">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-b border-white/5 pb-4">
                        <div>
                            <div class="flex items-center gap-2">
                                <h2 class="text-base font-semibold text-white flex items-center gap-2">
                                    <span>💡</span>
                                    <span>Sugestões & Feedbacks da Comunidade</span>
                                </h2>
                                <span class="rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-xs font-semibold text-emerald-400 ring-1 ring-emerald-500/20">${(state.admin.suggestions || []).length} mensagens</span>
                            </div>
                            <p class="text-xs text-zinc-400 mt-1">Ideias de novos apps e relatos de bugs enviados pelos visitantes no botão "Sugerir App".</p>
                        </div>
                        <button type="button" id="refreshSuggestionsBtn" class="rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 px-3.5 py-2 text-xs font-medium text-zinc-300 transition-all flex items-center gap-2 cursor-pointer self-start sm:self-auto">
                            <svg class="${state.admin.suggestionsLoading ? 'animate-spin' : ''}" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/></svg>
                            <span>Atualizar Mensagens</span>
                        </button>
                    </div>
                    <div class="space-y-3 max-h-[420px] overflow-y-auto pr-1">
                        ${renderSuggestionsList(state.admin.suggestions)}
                    </div>
                </div>

                <!-- 3. Central de Backup com 1 Clique -->
                <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-6 space-y-4">
                    <div class="border-b border-white/5 pb-4">
                        <h2 class="text-base font-semibold text-white flex items-center gap-2">
                            <span>📦</span>
                            <span>Central de Backup com 1 Clique</span>
                        </h2>
                        <p class="text-xs text-zinc-400 mt-1">Exporte cópias de segurança instantâneas do banco de dados e do catálogo para nunca perder nada.</p>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="rounded-xl border border-emerald-500/20 bg-emerald-500/5 p-5 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-2 text-emerald-300 font-semibold text-sm mb-1">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
                                    <span>Banco de Dados SQLite (dados.db)</span>
                                </div>
                                <p class="text-xs text-zinc-400 leading-relaxed mt-1">
                                    Arquivo SQLite com todos os apps, cliques, histórico completo de telemetria e visitas, sugestões e configurações.
                                </p>
                            </div>
                            <div class="mt-4 pt-4 border-t border-white/5 flex items-center justify-between">
                                <span class="text-[11px] text-zinc-500">Formato binário .db</span>
                                <button type="button" id="backupDbBtn" class="rounded-xl bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-400 hover:to-teal-400 px-4 py-2 text-xs font-semibold text-white transition-all btn-shine flex items-center gap-1.5 cursor-pointer shadow-sm">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                    <span>Baixar SQLite (.db)</span>
                                </button>
                            </div>
                        </div>

                        <div class="rounded-xl border border-cyan-500/20 bg-cyan-500/5 p-5 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-2 text-cyan-300 font-semibold text-sm mb-1">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                                    <span>Catálogo de Apps (catalog.json)</span>
                                </div>
                                <p class="text-xs text-zinc-400 leading-relaxed mt-1">
                                    Exportação portátil em JSON padrão. Ideal para migração rápida, importação em outros ambientes ou versionamento git.
                                </p>
                            </div>
                            <div class="mt-4 pt-4 border-t border-white/5 flex items-center justify-between">
                                <span class="text-[11px] text-zinc-500">JSON com ${state.apps.length} apps</span>
                                <button type="button" id="backupJsonBtn" class="rounded-xl bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-400 px-4 py-2 text-xs font-semibold text-white transition-all btn-shine flex items-center gap-1.5 cursor-pointer shadow-sm">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                    <span>Exportar JSON</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Identidade da Loja & Textos SEO -->
                <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-6 space-y-4">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-b border-white/5 pb-4">
                        <div>
                            <h2 class="text-base font-semibold text-white flex items-center gap-2">
                                <span>🔍</span>
                                <span>Identidade & Textos da Vitrine</span>
                            </h2>
                            <p class="text-xs text-zinc-400 mt-1">Personalize os títulos e slogans da loja exibidos para os visitantes e nos motores de busca.</p>
                        </div>
                        <button type="button" id="saveIdentityBtn" class="rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 hover:from-emerald-400 hover:to-cyan-400 px-4 py-2 text-xs font-semibold text-white transition-all cursor-pointer shadow-sm self-start sm:self-auto">Salvar Textos</button>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-xs font-medium text-zinc-400 mb-1.5">Título Principal da Vitrine (Hero)</label>
                            <input id="storeTitleInput" type="text" value="${escapeHtml(state.prefs.storeTitle || '')}" placeholder="Descubra apps incríveis" class="w-full rounded-xl border border-white/10 bg-[#0a0c14] px-4 py-2.5 text-sm text-zinc-100 placeholder:text-zinc-600 focus:outline-none focus:ring-2 focus:ring-emerald-400/50" />
                            <div class="text-[11px] text-zinc-500 mt-1">Padrão: Descubra apps incríveis</div>
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-zinc-400 mb-1.5">Slogan / Subtítulo da Vitrine</label>
                            <input id="storeSloganInput" type="text" value="${escapeHtml(state.prefs.storeSlogan || '')}" placeholder="Confira nossa seleção exclusiva de webapps para alta produtividade e entretenimento." class="w-full rounded-xl border border-white/10 bg-[#0a0c14] px-4 py-2.5 text-sm text-zinc-100 placeholder:text-zinc-600 focus:outline-none focus:ring-2 focus:ring-emerald-400/50" />
                            <div class="text-[11px] text-zinc-500 mt-1">Aparece no cabeçalho e logo abaixo do título</div>
                        </div>
                    </div>
                </div>

                <!-- 5. Logo da Loja & Super Destaque -->
                <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-6 space-y-4">
                    <div class="border-b border-white/5 pb-4">
                        <h2 class="text-base font-semibold text-white flex items-center gap-2">
                            <span>🎨</span>
                            <span>Logo da Loja & Super Destaque</span>
                        </h2>
                        <p class="text-xs text-zinc-400 mt-1">Configuração visual da marca e seleção do aplicativo em destaque principal no slider do topo.</p>
                    </div>
                    <div class="grid gap-5 lg:grid-cols-2">
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                            <div class="flex items-start gap-4">
                                <img id="storeLogoPreview" alt="" src="${escapeHtml(currentLogo || defaultIcon('IA', 'emerald'))}" class="h-16 w-16 rounded-2xl object-cover ring-2 ring-white/10" />
                                <div class="flex-1">
                                    <div class="text-sm font-semibold text-white">Logo da Loja</div>
                                    <div class="text-xs text-zinc-500 mt-1">Imagem quadrada (512×512 ideal)</div>
                                    <div class="mt-3 flex gap-2">
                                        <label class="cursor-pointer rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm hover:bg-white/10 transition-all"> 📷 Enviar <input id="storeLogoFile" type="file" accept="image/*" class="hidden" /></label>
                                        <button id="storeLogoClear" type="button" class="rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm hover:bg-white/10 transition-all cursor-pointer">Remover</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                            <div class="text-sm font-semibold text-white">Super Destaque</div>
                            <div class="text-xs text-zinc-500 mt-1 mb-3">App que aparece no topo da loja</div>
                            <select id="heroAppSelect" class="w-full rounded-xl border border-white/10 bg-[#0a0c14] px-4 py-3 text-sm text-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 transition-all cursor-pointer">
                                <option value="" ${!heroId ? 'selected' : ''}>Automático (1º Destaque)</option>
                                ${options}
                            </select>
                            <div class="mt-3 text-xs text-zinc-500">Atual: <span class="text-white font-medium">${escapeHtml(hero?.title || 'Nenhum')}</span></div>
                        </div>
                    </div>
                </div>
            </div>`;
        }

        function getAdminFilteredApps() {
            const q = safeText(state.admin.listQ);
            const cat = state.admin.categoryFilter;
            let list = [...state.apps].sort((a, b) => (b.updatedAt || 0) - (a.updatedAt || 0));
            if (cat && cat !== 'Todas') list = list.filter(a => safeText(a.category) === cat);
            if (q) {
                const qq = q.toLowerCase();
                list = list.filter(a => (a.title || '').toLowerCase().includes(qq) || (a.shortDescription || '').toLowerCase().includes(qq) || (a.tags || []).join(' ').toLowerCase().includes(qq) || (a.category || '').toLowerCase().includes(qq));
            }
            return list;
        }

        function adminList(apps) {
            if (!apps.length) return `<div class="rounded-2xl border border-white/10 bg-white/5 p-8 text-center text-sm text-zinc-400">Nenhum app encontrado</div>`;
            return `<div class="grid gap-2">${apps.map(adminListItem).join('')}</div>`;
        }

        function adminListItem(app) {
            const selected = state.admin.selectedId === app.id;
            const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status));
            const clicks = Number(app.clicks) || 0;
            return `
            <button class="admin-select group flex w-full items-center gap-3 rounded-xl border ${selected ? 'border-emerald-400/40 bg-emerald-500/10' : 'border-white/10 bg-white/5'} p-3 text-left hover:bg-white/10 transition-all cursor-pointer" data-id="${escapeHtml(app.id)}">
                <img alt="" src="${escapeHtml(icon)}" class="h-12 w-12 rounded-xl object-cover ring-1 ring-white/10 pointer-events-none" />
                <div class="min-w-0 flex-1 pointer-events-none">
                    <div class="flex items-center gap-2 mb-0.5">
                        <div class="truncate text-sm font-semibold text-white">${escapeHtml(app.title || 'Sem título')}</div>
                        ${app.status ? statusPill(app.status) : ''}
                    </div>
                    <div class="flex items-center justify-between text-xs text-zinc-500">
                        <span class="truncate">${escapeHtml(app.category || 'Sem categoria')}</span>
                        ${clicks > 0 ? `<span class="text-amber-400 font-medium shrink-0 ml-2">🔥 ${clicks}</span>` : ''}
                    </div>
                </div>
            </button>`;
        }

        function adminEditor(selected) {
            const editing = !!selected;
            const app = selected || { id: null, title: '', shortDescription: '', fullDescription: '', tags: [], category: '', iconUrl: '', heroImageUrl: '', link: '', status: 'Novo', clicks: 0 };
            const icon = app.iconUrl || defaultIcon((app.title || 'IA').slice(0, 2).toUpperCase(), statusTone(app.status));
            const hero = app.heroImageUrl;
            const statusOptions = STATUS.map(s => `<option value="${escapeHtml(s.value)}" ${s.value === app.status ? 'selected' : ''}>${escapeHtml(s.value)}</option>`).join('');
            let categories = getCategories(state.apps);
            const currentCat = safeText(app.category);
            if (currentCat && !categories.includes(currentCat)) categories = [currentCat, ...categories];
            const categoryOptions = categories.map(c => `<option value="${escapeHtml(c)}" ${c === currentCat ? 'selected' : ''}>${escapeHtml(c)}</option>`).join('');
            
            return `
            <div class="flex items-start justify-between mb-5">
                <div>
                    <div class="text-base font-semibold text-white">${editing ? 'Editar App' : 'Novo App'}</div>
                    <div class="text-xs text-zinc-500 mt-1">Preencha os dados e clique em Salvar</div>
                </div>
                ${editing ? `<button id="deleteAppBtn" class="rounded-xl border border-rose-400/20 bg-rose-500/10 px-4 py-2 text-sm text-rose-300 hover:bg-rose-500/20 transition-all cursor-pointer">Remover</button>` : ''}
            </div>
            <form id="appForm" class="grid gap-5">
                <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                    <div class="text-sm font-semibold text-white mb-4">Mídia</div>
                    <div class="grid gap-5 lg:grid-cols-[1fr_1.5fr]">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center gap-4">
                                <img id="iconPreview" alt="" src="${escapeHtml(icon)}" class="h-16 w-16 rounded-2xl object-cover ring-2 ring-white/10" />
                                <div class="flex-1">
                                    <label class="grid gap-1.5">
                                        <span class="text-xs text-zinc-400">Status</span>
                                        <select id="fStatus" class="rounded-xl border border-white/10 bg-[#0a0c14] px-3 py-2.5 text-sm text-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 cursor-pointer">${statusOptions}</select>
                                    </label>
                                </div>
                            </div>
                            <div class="grid gap-2">
                                <span class="text-xs text-zinc-400">Categoria</span>
                                <select id="fCategorySelect" class="rounded-xl border border-white/10 bg-[#0a0c14] px-3 py-2.5 text-sm text-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-400/50 cursor-pointer">
                                    <option value="" ${!currentCat ? 'selected' : ''}>Selecione...</option>
                                    ${categoryOptions}
                                    <option value="__custom__">+ Nova categoria...</option>
                                </select>
                                <input id="fCategoryCustom" value="" placeholder="Digite a nova categoria" class="hidden rounded-xl border border-white/10 bg-white/5 px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400/50" />
                                <div class="text-[11px] text-zinc-500">Dica: use nomes consistentes (ex: Finanças, Jogos, Editores, SaaS...)</div>
                            </div>
                            <label class="cursor-pointer rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm hover:bg-white/10 transition-all text-center">
                                📷 Enviar Ícone
                                <input id="fIconFile" type="file" accept="image/*" class="hidden" />
                            </label>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-zinc-400">Banner de Destaque</span>
                                <span class="text-[11px] text-zinc-500 font-medium">(1920×1080 / 16:9 ideal)</span>
                            </div>
                            <div class="mt-2 overflow-hidden rounded-2xl border border-white/10 bg-white/5">
                                <div id="heroPreviewContainer" class="relative aspect-video w-full flex items-center justify-center bg-cover bg-center" style="background-image: url('${escapeHtml(hero || defaultHeroImage(app.title || 'Seu App', statusTone(app.status)))}');">
                                    <div class="absolute inset-0 backdrop-blur-xl bg-[#0a0c14]/40"></div>
                                    <img id="heroPreview" alt="" src="${escapeHtml(hero || defaultHeroImage(app.title || 'Seu App', statusTone(app.status)))}" class="relative z-10 max-h-full max-w-full object-contain rounded-2xl" />
                                </div>
                            </div>
                            <div class="mt-3 flex gap-2">
                                <label class="flex-1 cursor-pointer rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm hover:bg-white/10 transition-all text-center">
                                    📷 Enviar Banner
                                    <input id="fHeroFile" type="file" accept="image/*" class="hidden" />
                                </label>
                                <button id="clearHeroBtn" type="button" class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm hover:bg-white/10 transition-all cursor-pointer">Remover</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-4">
                    <label class="grid gap-1.5">
                        <span class="text-xs text-zinc-400">Título *</span>
                        <input id="fTitle" value="${escapeHtml(app.title || '')}" required placeholder="Nome do app" class="rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400/50" />
                    </label>
                    <label class="grid gap-1.5">
                        <span class="text-xs text-zinc-400">Descrição curta</span>
                        <input id="fShort" value="${escapeHtml(app.shortDescription || '')}" maxlength="140" placeholder="Uma frase clara (até 140 caracteres)" class="rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400/50" />
                    </label>
                    <label class="grid gap-1.5">
                        <span class="text-xs text-zinc-400">Descrição completa</span>
                        <textarea id="fFull" rows="5" placeholder="Detalhe recursos, público, diferenciais…" class="rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400/50">${escapeHtml(app.fullDescription || '')}</textarea>
                    </label>
                    <label class="grid gap-1.5">
                        <span class="text-xs text-zinc-400">Tags (separadas por vírgula)</span>
                        <input id="fTags" value="${escapeHtml((app.tags || []).join(', '))}" placeholder="Ex: IA, Automação, Produtividade" class="rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400/50" />
                    </label>
                    <label class="grid gap-1.5">
                        <span class="text-xs text-zinc-400">Link do App *</span>
                        <input id="fLink" value="${escapeHtml(app.link || '')}" required placeholder="https://seuapp.com" class="rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400/50" />
                    </label>
                </div>
                ${editing ? `
                <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                    <div class="text-sm font-semibold text-white mb-3">Links & Métricas</div>
                    <div class="grid gap-3">
                        <div class="flex items-center justify-between gap-3 rounded-xl border border-white/10 bg-[#0a0c14]/40 px-4 py-3">
                            <div class="min-w-0">
                                <div class="text-[11px] uppercase tracking-wider text-zinc-500">Popularidade</div>
                                <div class="text-xs font-semibold text-amber-300">🔥 ${Number(app.clicks) || 0} acessos</div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-3 rounded-xl border border-white/10 bg-[#0a0c14]/40 px-4 py-3">
                            <div class="min-w-0">
                                <div class="text-[11px] uppercase tracking-wider text-zinc-500">Vitrine (SPA)</div>
                                <div class="truncate text-xs text-zinc-200">${escapeHtml(location.origin + location.pathname + detailsHashFor(app.id))}</div>
                            </div>
                            <button type="button" class="copy-link-btn rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-xs hover:bg-white/10 cursor-pointer" data-copy="${escapeHtml(location.origin + location.pathname + detailsHashFor(app.id))}">Copiar</button>
                        </div>
                        <div class="flex items-center justify-between gap-3 rounded-xl border border-white/10 bg-[#0a0c14]/40 px-4 py-3">
                            <div class="min-w-0">
                                <div class="text-[11px] uppercase tracking-wider text-zinc-500">Página SEO</div>
                                <div class="truncate text-xs text-zinc-200">${escapeHtml(seoUrlFor(app.id))}</div>
                            </div>
                            <div class="flex gap-2">
                                <a class="rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-xs hover:bg-white/10" href="${escapeHtml(seoUrlFor(app.id))}" target="_blank" rel="noopener noreferrer">Abrir</a>
                                <button type="button" class="copy-link-btn rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-xs hover:bg-white/10 cursor-pointer" data-copy="${escapeHtml(seoUrlFor(app.id))}">Copiar</button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-3 rounded-xl border border-white/10 bg-[#0a0c14]/40 px-4 py-3">
                            <div class="min-w-0">
                                <div class="text-[11px] uppercase tracking-wider text-zinc-500">Link do App</div>
                                <div class="truncate text-xs text-zinc-200">${escapeHtml(normalizeAppLink(app.link || ''))}</div>
                            </div>
                            <div class="flex gap-2">
                                <a class="rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-xs hover:bg-white/10" href="${escapeHtml(normalizeAppLink(app.link || '#'))}" target="_blank" rel="noopener noreferrer">Abrir</a>
                                <button type="button" class="copy-link-btn rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-xs hover:bg-white/10 cursor-pointer" data-copy="${escapeHtml(normalizeAppLink(app.link || ''))}">Copiar</button>
                            </div>
                        </div>
                    </div>
                </div>` : ''}
                <div class="flex flex-col-reverse gap-3 sm:flex-row sm:items-center sm:justify-between pt-3 border-t border-white/10">
                    <div class="text-xs text-zinc-500">${editing ? `ID: ${escapeHtml(app.id)}` : 'ID será gerado automaticamente'}</div>
                    <div class="flex gap-3">
                        ${editing ? `<button id="cancelEditBtn" type="button" class="rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm hover:bg-white/10 transition-all cursor-pointer">Cancelar</button>` : ''}
                        <button id="saveBtn" type="submit" class="rounded-xl bg-gradient-to-r from-emerald-500 to-cyan-500 px-6 py-3 text-sm font-semibold text-white hover:from-emerald-400 hover:to-cyan-400 transition-all btn-shine flex items-center gap-2 cursor-pointer">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><polyline points="17,21 17,13 7,13 7,21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><polyline points="7,3 7,8 15,8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <span>Salvar</span>
                        </button>
                    </div>
                </div>
            </form>`;
        }

        function validatePayload(p) {
            const errs = [];
            if (!p.title) errs.push('Título é obrigatório.');
            if (!p.link) errs.push('Link é obrigatório.');
            if (p.link && !isProbablyUrl(p.link)) errs.push('Link inválido. Use URL completa (https://...).');
            if ($('#fCategorySelect')?.value === '__custom__' && !p.category) errs.push('Digite o nome da nova categoria.');
            return errs;
        }

        function bindAdminHandlers() {
            // Admin Tabs
            $('#tabBtnStats')?.addEventListener('click', () => { state.admin.tab = 'stats'; renderAdmin(); });
            $('#tabBtnApps')?.addEventListener('click', () => { state.admin.tab = 'apps'; renderAdmin(); });
            $('#tabBtnSettings')?.addEventListener('click', () => { state.admin.tab = 'settings'; renderAdmin(); });

            // Refresh Stats Button
            $('#refreshStatsBtn')?.addEventListener('click', async () => {
                toast('Atualizando estatísticas...', 'info');
                await fetchStats(true);
                renderAdmin();
                toast('Estatísticas atualizadas!', 'ok');
            });

            // Quick Edit from Stats Top Apps
            $$('.quick-edit-app-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const id = btn.getAttribute('data-id');
                    state.admin.tab = 'apps';
                    state.admin.selectedId = id;
                    renderAdmin();
                });
            });

            $('#logoutBtn')?.addEventListener('click', async () => { auth.logout(); toast('Você saiu.', 'info'); location.hash = '#/'; await render(); });
            $('#reloadServerBtn')?.addEventListener('click', async () => await reloadFromServer(true));
            $('#downloadCatalogBtn')?.addEventListener('click', () => { downloadJson('catalog.json', catalogDraftPayload()); toast('JSON baixado!', 'ok'); });
            $('#newAppBtn')?.addEventListener('click', () => { state.admin.selectedId = null; renderAdmin(); $('#fTitle')?.focus(); });
            
            const storeLogoFile = $('#storeLogoFile');
            storeLogoFile?.addEventListener('change', async () => {
                const file = storeLogoFile.files?.[0];
                if (!file) return;
                if (file.size > 5 * 1024 * 1024) { toast('Imagem muito grande (máx 5MB).', 'warn'); return; }
                try {
                    const url = await uploadImage(file);
                    $('#storeLogoPreview').src = url;
                    state.prefs.storeLogoUrl = url;
                    markDirtyAndSave();
                    toast('Logo atualizado!', 'ok');
                    renderAdmin();
                } catch (err) { toast('Erro: ' + err.message, 'err'); }
            });

            $('#storeLogoClear')?.addEventListener('click', () => {
                state.prefs.storeLogoUrl = '';
                markDirtyAndSave();
                toast('Logo removido!', 'ok');
                renderAdmin();
            });

            const heroSelect = $('#heroAppSelect');
            heroSelect?.addEventListener('change', () => {
                state.prefs.heroAppId = safeText(heroSelect.value);
                markDirtyAndSave();
                toast('Destaque atualizado!', 'ok');
            });

            // Handlers da Aba Configurações
            $('#announcementActiveInput')?.addEventListener('change', (e) => {
                state.prefs.announcementActive = e.target.checked;
                markDirtyAndSave();
                toast(e.target.checked ? 'Comunicado ativado!' : 'Comunicado desativado.', 'info');
            });

            $('#saveAnnouncementBtn')?.addEventListener('click', () => {
                state.prefs.announcementActive = !!$('#announcementActiveInput')?.checked;
                state.prefs.announcementText = safeText($('#announcementTextInput')?.value);
                state.prefs.announcementType = safeText($('#announcementTypeInput')?.value) || 'emerald';
                state.prefs.announcementLink = safeText($('#announcementLinkInput')?.value);
                markDirtyAndSave();
                toast('Comunicado Global salvo com sucesso!', 'ok');
                renderAdmin();
            });

            $('#refreshSuggestionsBtn')?.addEventListener('click', async () => {
                toast('Buscando sugestões...', 'info');
                await fetchSuggestions(true);
                renderAdmin();
                toast('Sugestões atualizadas!', 'ok');
            });

            $$('.action-sug-btn').forEach(btn => {
                btn.addEventListener('click', async (e) => {
                    e.preventDefault();
                    const id = Number(btn.getAttribute('data-id'));
                    const action = btn.getAttribute('data-action');
                    if (action === 'excluir') {
                        if (!confirm('Deseja realmente excluir este feedback/sugestão?')) return;
                    }
                    await updateSuggestionStatus(id, action);
                });
            });

            $('#backupDbBtn')?.addEventListener('click', () => {
                const token = auth.getToken();
                if (!token) {
                    toast('Sessão expirada. Faça login novamente.', 'warn');
                    return;
                }
                toast('Iniciando download do backup SQLite...', 'info');
                window.open('api.php?action=backup-db&token=' + encodeURIComponent(token), '_blank');
            });

            $('#backupJsonBtn')?.addEventListener('click', () => {
                downloadJson('catalog.json', catalogDraftPayload());
                toast('Catálogo exportado em JSON com sucesso!', 'ok');
            });

            $('#saveIdentityBtn')?.addEventListener('click', () => {
                state.prefs.storeTitle = safeText($('#storeTitleInput')?.value);
                state.prefs.storeSlogan = safeText($('#storeSloganInput')?.value);
                markDirtyAndSave();
                toast('Identidade da vitrine salva com sucesso!', 'ok');
            });


            const listSearch = $('#adminListSearch');
            if (listSearch) {
                listSearch.value = state.admin.listQ;
                listSearch.addEventListener('input', () => {
                    state.admin.listQ = listSearch.value;
                    if (searchDebounceTimer) clearTimeout(searchDebounceTimer);
                    searchDebounceTimer = setTimeout(() => {
                        const cursorPos = listSearch.selectionStart;
                        const currentValue = listSearch.value;
                        renderAdmin();
                        const newInput = $('#adminListSearch');
                        if (newInput) {
                            newInput.focus();
                            newInput.value = currentValue;
                            newInput.setSelectionRange(cursorPos, cursorPos);
                        }
                    }, 300);
                });
            }

            const catFilter = $('#adminCategoryFilter');
            if (catFilter) {
                catFilter.value = state.admin.categoryFilter;
                catFilter.addEventListener('change', () => {
                    state.admin.categoryFilter = catFilter.value;
                    renderAdmin();
                });
            }

            $$('.admin-select').forEach(btn => btn.addEventListener('click', () => {
                state.admin.selectedId = btn.getAttribute('data-id');
                renderAdmin();
            }));

            $$('.copy-link-btn').forEach(btn => {
                btn.addEventListener('click', async (e) => {
                    e.preventDefault();
                    const val = btn.getAttribute('data-copy') || '';
                    if (!val) { toast('Nada para copiar.', 'warn'); return; }
                    try { await navigator.clipboard.writeText(val); toast('Link copiado!', 'ok'); } catch { prompt('Copie o link:', val); }
                });
            });

            const form = $('#appForm');
            if (!form) return;
            const selected = state.admin.selectedId ? state.apps.find(a => a.id === state.admin.selectedId) : null;
            let pendingIconUrl = null, pendingHeroUrl = null, heroCleared = false;
            const catSelect = $('#fCategorySelect');
            const catCustom = $('#fCategoryCustom');
            if (catSelect && catCustom) {
                const syncCustomVisibility = () => {
                    const v = safeText(catSelect.value);
                    if (v === '__custom__') { catCustom.classList.remove('hidden'); catCustom.focus(); } else { catCustom.classList.add('hidden'); }
                };
                catSelect.addEventListener('change', syncCustomVisibility);
                syncCustomVisibility();
            }

            $('#fIconFile')?.addEventListener('change', async function () {
                const file = this.files?.[0];
                if (!file) return;
                if (file.size > 5 * 1024 * 1024) { toast('Imagem grande demais.', 'warn'); return; }
                try { pendingIconUrl = await uploadImage(file); $('#iconPreview').src = pendingIconUrl; toast('Ícone pronto!', 'ok'); } catch (err) { toast('Erro: ' + err.message, 'err'); }
            });

            $('#fHeroFile')?.addEventListener('change', async function () {
                const file = this.files?.[0];
                if (!file) return;
                if (file.size > 10 * 1024 * 1024) { toast('Banner grande demais.', 'warn'); return; }
                try {
                    pendingHeroUrl = await uploadImage(file);
                    $('#heroPreview').src = pendingHeroUrl;
                    const container = $('#heroPreviewContainer');
                    if (container) container.style.backgroundImage = `url('${pendingHeroUrl}')`;
                    heroCleared = false;
                    toast('Banner pronto!', 'ok');
                } catch (err) { toast('Erro: ' + err.message, 'err'); }
            });

            $('#clearHeroBtn')?.addEventListener('click', () => {
                const defaultUrl = defaultHeroImage($('#fTitle')?.value || 'Seu App', statusTone($('#fStatus')?.value || 'Novo'));
                $('#heroPreview').src = defaultUrl;
                const container = $('#heroPreviewContainer');
                if (container) container.style.backgroundImage = `url('${defaultUrl}')`;
                pendingHeroUrl = null;
                heroCleared = true;
                toast('Banner será removido.', 'info');
            });

            $('#cancelEditBtn')?.addEventListener('click', () => { state.admin.selectedId = null; renderAdmin(); });
            $('#deleteAppBtn')?.addEventListener('click', async () => {
                if (!selected) return;
                const ok = await confirmModal({ title: 'Remover app', text: `Remover "${selected.title}"?`, okText: 'Remover' });
                if (!ok) return;
                state.apps = state.apps.filter(a => a.id !== selected.id);
                if (state.prefs.heroAppId === selected.id) state.prefs.heroAppId = '';
                state.admin.selectedId = null;
                markDirtyAndSave();
                toast('App removido!', 'ok');
                renderAdmin();
            });

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                const payload = {
                    title: safeText($('#fTitle')?.value),
                    shortDescription: safeText($('#fShort')?.value),
                    fullDescription: safeText($('#fFull')?.value),
                    tags: normalizeTags($('#fTags')?.value),
                    category: (() => {
                        const sel = safeText($('#fCategorySelect')?.value);
                        if (sel === '__custom__') return safeText($('#fCategoryCustom')?.value);
                        return sel;
                    })(),
                    iconUrl: pendingIconUrl || (selected?.iconUrl || ''),
                    heroImageUrl: heroCleared ? '' : (pendingHeroUrl || selected?.heroImageUrl || ''),
                    link: normalizeAppLink($('#fLink')?.value),
                    status: safeText($('#fStatus')?.value) || 'Novo',
                };
                const errors = validatePayload(payload);
                if (errors.length) { toast(errors[0], 'err'); return; }
                if (selected) {
                    const idx = state.apps.findIndex(a => a.id === selected.id);
                    if (idx >= 0) state.apps[idx] = { ...state.apps[idx], ...payload, updatedAt: Date.now() };
                    toast('App atualizado!', 'ok');
                } else {
                    const created = { ...payload, id: uid(), createdAt: Date.now(), updatedAt: Date.now(), clicks: 0 };
                    state.apps.unshift(created);
                    state.admin.selectedId = created.id;
                    toast('App criado!', 'ok');
                }
                markDirtyAndSave();
                await new Promise(r => setTimeout(r, 1200));
                renderAdmin();
            });
        }

        // -------- Render --------
        async function render() {
            stopSliderAutoplay();
            $$('dialog[open]').forEach(d => {
                if (d.id !== 'iframeDialog' && d.id !== 'suggestDialog') d.close();
            });
            if (!state.meta.loaded) { if (state.meta.error) renderCatalogErrorView(); return; }
            const route = currentRoute();
            if (route === 'admin') { if (!(await checkAuth())) { showLoginDialog(); return; } renderAdmin(); return; }
            renderStore();
            const detailsId = getDetailsIdFromHash();
            if (detailsId) {
                const app = state.apps.find(a => a.id === detailsId);
                if (app) { setTimeout(() => openDetails(app), 0); } else { clearDetailsHash(); }
            }
        }

        function renderCatalogErrorView() {
            const main = `
            <section class="glass border-gradient rounded-3xl bg-[#0a0c14]/60 p-8">
                <div class="flex items-start gap-4">
                    <div class="h-12 w-12 rounded-2xl bg-gradient-to-br from-rose-500 to-pink-500 grid place-items-center shrink-0">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-white"><path d="M12 9v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </div>
                    <div class="flex-1">
                        <div class="text-xl font-bold text-white mb-2">Backend Indisponível</div>
                        <div class="text-zinc-400 mb-4">${escapeHtml(state.meta.error || 'Não foi possível conectar.')}</div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-5 mb-5">
                            <div class="font-medium text-white mb-3">Como resolver:</div>
                            <ul class="space-y-2 text-sm text-zinc-300">
                                <li>• <strong>PHP:</strong> Verifique o arquivo <code class="bg-white/10 px-2 py-0.5 rounded">api.php</code></li>
                                <li>• <strong>Node.js:</strong> Execute <code class="bg-white/10 px-2 py-0.5 rounded">npm start</code></li>
                                <li>• <strong>Estático:</strong> Crie <code class="bg-white/10 px-2 py-0.5 rounded">catalog.json</code></li>
                            </ul>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <button id="retryCatalogBtn" class="rounded-xl bg-white px-5 py-3 text-sm font-semibold text-[#050709] hover:bg-zinc-100 transition-all cursor-pointer">Tentar Novamente</button>
                            <button id="downloadTemplateBtn" class="rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm hover:bg-white/10 transition-all cursor-pointer">Baixar Template</button>
                        </div>
                    </div>
                </div>
            </section>`;
            $('#app').innerHTML = appShell({ title: 'Erro', subtitle: 'Servidor indisponível', right: '', main });
            $('#retryCatalogBtn')?.addEventListener('click', boot);
            $('#downloadTemplateBtn')?.addEventListener('click', () => {
                downloadJson('catalog.json', { version: 1, exportedAt: new Date().toISOString(), prefs: {}, apps: [{ id: 'demo', title: 'App Demo', shortDescription: 'Descrição', fullDescription: '', tags: [], category: 'Geral', iconUrl: '', heroImageUrl: '', link: 'https://example.com', status: 'Novo', createdAt: Date.now(), updatedAt: Date.now(), clicks: 0 }] });
                toast('Template baixado!', 'ok');
            });
        }

        async function reloadFromServer(showToast = false) {
            try {
                state.meta.error = '';
                const { apps, prefs } = await fetchCatalog();
                state.apps = Array.isArray(apps) ? apps : [];
                state.prefs = prefs || { storeLogoUrl: '', heroAppId: '' };
                state.meta.loaded = true;
                state.meta.loadedAt = Date.now();
                state.meta.dirty = false;
                if (state.admin.selectedId && !state.apps.find(a => a.id === state.admin.selectedId)) state.admin.selectedId = null;
                if (showToast) toast('Catálogo atualizado!', 'ok');
                await render();
            } catch (err) {
                state.meta.loaded = false;
                state.meta.error = err?.message || String(err);
                await render();
            }
        }

        async function boot() {
            $('#app').innerHTML = `
            <div class="mx-auto flex min-h-screen max-w-[1280px] flex-col px-4 sm:px-6 pb-20 sm:pb-12 animate-pulse">
                <header class="pt-3 sm:pt-4 pb-2">
                    <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/90 p-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-2xl bg-white/10"></div>
                            <div class="space-y-2">
                                <div class="w-24 h-4 bg-white/20 rounded"></div>
                                <div class="w-36 h-3 bg-white/10 rounded"></div>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <div class="hidden sm:block w-20 h-9 bg-white/10 rounded-xl"></div>
                            <div class="w-28 h-9 bg-emerald-500/20 rounded-xl"></div>
                        </div>
                    </div>
                </header>
                <div class="mt-6 glass border-gradient rounded-3xl bg-[#0a0c14]/60 p-6 sm:p-10 h-56 flex flex-col justify-end space-y-3">
                    <div class="w-28 h-5 bg-emerald-500/20 rounded-full"></div>
                    <div class="w-2/3 max-w-md h-7 bg-white/20 rounded"></div>
                    <div class="w-1/2 max-w-xs h-4 bg-white/10 rounded"></div>
                </div>
                <div class="mt-6 grid grid-cols-2 sm:grid-cols-4 gap-3.5">
                    ${[1, 2, 3, 4].map(() => `
                        <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-4 space-y-2 h-24">
                            <div class="w-1/3 h-4 bg-white/10 rounded"></div>
                            <div class="w-2/3 h-6 bg-white/20 rounded"></div>
                        </div>
                    `).join('')}
                </div>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    ${[1, 2, 3, 4, 5, 6].map(() => `
                        <div class="glass border-gradient rounded-2xl bg-[#0a0c14]/60 p-5 space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 rounded-2xl bg-white/10"></div>
                                <div class="flex-1 space-y-2">
                                    <div class="w-3/4 h-4 bg-white/20 rounded"></div>
                                    <div class="w-1/2 h-3 bg-white/10 rounded"></div>
                                </div>
                            </div>
                            <div class="w-full h-10 bg-white/5 rounded-xl"></div>
                        </div>
                    `).join('')}
                </div>
            </div>`;
            initSuggestForm();
            const backend = await detectBackend();
            if (backend === 'none') { state.meta.error = 'Nenhum backend disponível.'; await render(); return; }
            await new Promise(r => setTimeout(r, 100));
            await reloadFromServer(false);
            trackVisit();
        }

        $('#detailsClose')?.addEventListener('click', () => { $('#detailsDialog')?.close(); clearDetailsHash(); });

        // Global click handler - using event delegation
        function handleGlobalClick(e) {
            try {
                const target = e.target;

                // Quick Filter Button click (from stats bar)
                const quickFilterBtn = target.closest('.quick-filter-btn');
                if (quickFilterBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const action = quickFilterBtn.dataset.action;
                    if (action === 'all') {
                        state.store.favoritesOnly = false;
                        state.store.category = 'Todas';
                        state.store.sortBy = 'destaque';
                        state.store.q = '';
                    } else if (action === 'popular') {
                        state.store.favoritesOnly = false;
                        state.store.sortBy = 'acessos';
                    } else if (action === 'new') {
                        state.store.favoritesOnly = false;
                        state.store.sortBy = 'novos';
                    } else if (action === 'fav') {
                        state.store.favoritesOnly = !state.store.favoritesOnly;
                    }
                    state.store.visible = state.store.pageSize;
                    renderStore();
                    setTimeout(() => {
                        const targetEl = $('#storeSearch') || $('#appsGrid');
                        if (targetEl) targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 100);
                    return;
                }

                // Shelf horizontal scroll buttons (PC arrows)
                const shelfScrollBtn = target.closest('.shelf-scroll-btn');
                if (shelfScrollBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const targetId = shelfScrollBtn.dataset.target;
                    const dir = parseInt(shelfScrollBtn.dataset.dir || '1', 10);
                    const container = document.getElementById(targetId);
                    if (container) {
                        container.scrollBy({ left: dir * 260, behavior: 'smooth' });
                    }
                    return;
                }

                // Command Palette Launcher
                const openCmdBtn = target.closest('.open-cmd');
                if (openCmdBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    openCmdPalette();
                    return;
                }

                // Open QR modal
                const openQrBtn = target.closest('.open-qr');
                if (openQrBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const id = openQrBtn.dataset.id || openQrBtn.getAttribute('data-id');
                    const app = state.apps.find(a => a.id === id);
                    if (app) openQrModal(app);
                    return;
                }

                // Command Palette action click
                const cmdActionBtn = target.closest('.cmd-action');
                if (cmdActionBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const act = cmdActionBtn.dataset.action;
                    $('#cmdPaletteDialog')?.close();
                    if (act === 'favs') {
                        state.store.favoritesOnly = true;
                        state.store.visible = state.store.pageSize;
                        renderStore();
                    } else if (act === 'trending') {
                        state.store.sortBy = 'acessos';
                        state.store.category = 'Todas';
                        state.store.favoritesOnly = false;
                        state.store.visible = state.store.pageSize;
                        renderStore();
                    } else if (act === 'suggest') {
                        openSuggestModal();
                    } else if (act === 'clear') {
                        state.store.q = '';
                        state.store.category = 'Todas';
                        state.store.sortBy = 'destaque';
                        state.store.favoritesOnly = false;
                        state.store.visible = state.store.pageSize;
                        renderStore();
                    }
                    return;
                }

                // Command Palette category click
                const cmdCatBtn = target.closest('.cmd-category');
                if (cmdCatBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const category = cmdCatBtn.dataset.category;
                    $('#cmdPaletteDialog')?.close();
                    if (category) {
                        state.store.category = category;
                        state.store.q = '';
                        state.store.favoritesOnly = false;
                        state.store.visible = state.store.pageSize;
                        renderStore();
                        setTimeout(() => $('#appsGrid')?.scrollIntoView({ behavior: 'smooth', block: 'start' }), 100);
                    }
                    return;
                }

                // Iframe Modal Launcher
                const openIframeBtn = target.closest('.open-iframe');
                if (openIframeBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const id = openIframeBtn.dataset.id || openIframeBtn.getAttribute('data-id');
                    const app = state.apps.find(a => a.id === id);
                    if (app) openIframeModal(app);
                    return;
                }

                // Suggest Modal Launcher
                const openSuggestBtn = target.closest('.open-suggest');
                if (openSuggestBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    openSuggestModal();
                    return;
                }

                // Filter Pill click
                const pillBtn = target.closest('.filter-pill');
                if (pillBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const pillType = pillBtn.dataset.pillType;
                    if (pillType === 'all') {
                        state.store.category = 'Todas';
                        state.store.favoritesOnly = false;
                        if (state.store.sortBy === 'acessos') state.store.sortBy = 'destaque';
                    } else if (pillType === 'trending') {
                        state.store.sortBy = 'acessos';
                        state.store.favoritesOnly = false;
                        state.store.category = 'Todas';
                    } else if (pillType === 'favorites') {
                        state.store.favoritesOnly = true;
                    } else if (pillType === 'category') {
                        state.store.category = pillBtn.dataset.category || 'Todas';
                        state.store.favoritesOnly = false;
                    }
                    state.store.visible = state.store.pageSize;
                    renderStore();
                    return;
                }

                // Favorites toggle button
                const favBtn = target.closest('.fav-btn');
                if (favBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const id = favBtn.dataset.id || favBtn.getAttribute('data-id');
                    if (!id) return;
                    toggleFavorite(id);
                    const app = state.apps.find(a => a.id === id);
                    toast(isFavorite(id) ? '⭐ Adicionado aos favoritos!' : 'Removido dos favoritos.', 'ok');
                    if (currentRoute() === 'store') {
                        const y = window.scrollY;
                        renderStore();
                        window.scrollTo({ top: y, behavior: 'auto' });
                    }
                    if ($('#detailsDialog')?.open && app) {
                        openDetails(app);
                    }
                    return;
                }

                // Open App external button
                const openAppBtn = target.closest('.open-app');
                if (openAppBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const id = openAppBtn.dataset.id || openAppBtn.getAttribute('data-id');
                    const app = state.apps.find(a => a.id === id);
                    if (app?.link) {
                        recordAppClick(app.id);
                        window.open(normalizeAppLink(app.link), '_blank', 'noopener,noreferrer');
                    }
                    return;
                }

                // Open Details Modal
                const openDetailsBtn = target.closest('.open-details');
                if (openDetailsBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const id = openDetailsBtn.dataset.id || openDetailsBtn.getAttribute('data-id');
                    const app = state.apps.find(a => a.id === id);
                    if (app) openDetails(app);
                    return;
                }

                // Tag Chip click
                const tagChip = target.closest('.tag-chip');
                if (tagChip) {
                    e.preventDefault();
                    e.stopPropagation();
                    const tag = tagChip.dataset.tag || tagChip.getAttribute('data-tag');
                    if (tag) {
                        state.store.q = tag;
                        state.store.visible = state.store.pageSize;
                        renderStore();
                        toast(`Buscando por #${tag}`, 'info');
                        setTimeout(() => $('#appsGrid')?.scrollIntoView({ behavior: 'smooth', block: 'start' }), 100);
                    }
                    return;
                }

                // Category card click
                const viewCatBtn = target.closest('.view-category-btn');
                if (viewCatBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const category = viewCatBtn.dataset.category || viewCatBtn.getAttribute('data-category');
                    if (category) {
                        state.store.category = category;
                        state.store.q = '';
                        state.store.favoritesOnly = false;
                        state.store.visible = state.store.pageSize;
                        renderStore();
                        toast(`Categoria: ${category}`, 'info');
                        setTimeout(() => $('#appsGrid')?.scrollIntoView({ behavior: 'smooth', block: 'start' }), 100);
                    }
                    return;
                }

                const privacyBtn = target.closest('.open-privacy');
                if (privacyBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    document.getElementById('privacyDialog')?.showModal();
                    return;
                }

                const termsBtn = target.closest('.open-terms');
                if (termsBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    document.getElementById('termsDialog')?.showModal();
                    return;
                }
            } catch (err) {
                console.error('Erro no clique global:', err);
                toast('Erro de clique: ' + err.message, 'err');
            }
        }
        document.addEventListener('click', handleGlobalClick, true);

        (function initEnhancements() {
            const btn = $('#backToTop');
            if (btn) {
                btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
            }

            const scrollBar = $('#scrollProgressBar');
            window.addEventListener('scroll', () => {
                const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
                if (scrollBar) scrollBar.style.width = scrolled + '%';

                if (btn) {
                    const show = window.scrollY > 700;
                    btn.classList.toggle('hidden', !show);
                }
            }, { passive: true });

            const cmdInput = $('#cmdPaletteInput');
            if (cmdInput) {
                cmdInput.addEventListener('input', () => {
                    renderCmdPaletteResults(cmdInput.value);
                });
            }

            document.addEventListener('keydown', (e) => {
                if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
                    e.preventDefault();
                    openCmdPalette();
                    return;
                }
                if (e.key === '/' && currentRoute() === 'store') {
                    const active = document.activeElement;
                    const isTyping = active && (active.tagName === 'INPUT' || active.tagName === 'TEXTAREA' || active.isContentEditable);
                    if (isTyping) return;
                    e.preventDefault();
                    $('#storeSearch')?.focus();
                }
            });

            // Backdoor: 5 clicks on logo para exibir Admin
            let logoClicks = 0;
            let logoTimer = null;
            document.addEventListener('click', (e) => {
                if (e.target.closest('#storeLogoTrigger')) {
                    logoClicks++;
                    clearTimeout(logoTimer);
                    logoTimer = setTimeout(() => { logoClicks = 0; }, 2000);
                    if (logoClicks >= 5) {
                        logoClicks = 0;
                        localStorage.setItem('4uia_dev_mode', 'true');
                        toast('Acesso Dev Ativado!', 'ok');
                        location.hash = '#/admin';
                    }
                }
            });

            // PWA beforeinstallprompt & installation handling
            let deferredInstallPrompt = null;
            window.addEventListener('beforeinstallprompt', (e) => {
                e.preventDefault();
                deferredInstallPrompt = e;
                const headerInstallBtn = $('#pwaInstallHeaderBtn');
                if (headerInstallBtn) {
                    headerInstallBtn.classList.remove('hidden');
                    headerInstallBtn.classList.add('inline-flex');
                }
            });

            document.addEventListener('click', async (e) => {
                const installBtn = e.target.closest('#pwaInstallHeaderBtn');
                if (installBtn && deferredInstallPrompt) {
                    e.preventDefault();
                    deferredInstallPrompt.prompt();
                    const choice = await deferredInstallPrompt.userChoice;
                    if (choice && choice.outcome === 'accepted') {
                        toast('Instalação do app iniciada!', 'ok');
                    }
                    deferredInstallPrompt = null;
                    installBtn.classList.add('hidden');
                    installBtn.classList.remove('inline-flex');
                }
            });

            window.addEventListener('appinstalled', () => {
                deferredInstallPrompt = null;
                const headerInstallBtn = $('#pwaInstallHeaderBtn');
                if (headerInstallBtn) {
                    headerInstallBtn.classList.add('hidden');
                    headerInstallBtn.classList.remove('inline-flex');
                }
                toast('🎉 Loja 4u instalada com sucesso!', 'ok');
            });

            // Horizontal scroll with mouse wheel on PC
            document.addEventListener('wheel', (e) => {
                const scroller = e.target.closest('.shelf-scroller');
                if (scroller && Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
                    e.preventDefault();
                    scroller.scrollLeft += e.deltaY;
                }
            }, { passive: false });

            // Drag to scroll for horizontal scrollers on PC
            let isDown = false;
            let startX = 0;
            let scrollLeftStart = 0;
            let hasDragged = false;
            let activeScroller = null;

            document.addEventListener('mousedown', (e) => {
                const scroller = e.target.closest('.shelf-scroller');
                if (!scroller || e.button !== 0) return;
                if (e.target.closest('button') || e.target.closest('a')) return;
                isDown = true;
                hasDragged = false;
                activeScroller = scroller;
                activeScroller.classList.add('cursor-grabbing');
                activeScroller.classList.remove('cursor-grab');
                startX = e.pageX - activeScroller.offsetLeft;
                scrollLeftStart = activeScroller.scrollLeft;
            });

            document.addEventListener('mousemove', (e) => {
                if (!isDown || !activeScroller) return;
                const x = e.pageX - activeScroller.offsetLeft;
                const walk = (x - startX) * 1.5;
                if (Math.abs(walk) > 5) hasDragged = true;
                activeScroller.scrollLeft = scrollLeftStart - walk;
            });

            document.addEventListener('mouseup', () => {
                if (isDown && activeScroller) {
                    activeScroller.classList.remove('cursor-grabbing');
                    activeScroller.classList.add('cursor-grab');
                }
                isDown = false;
                activeScroller = null;
            });

            // PWA Service Worker registration
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', () => {
                    navigator.serviceWorker.register('./sw.js').catch(err => console.log('SW error:', err));
                });
            }
        })();

        (function oneTimeTips() {
            try {
                const favKey = '4uia_tip_favorites_v1';
                if (!localStorage.getItem(favKey)) {
                    localStorage.setItem(favKey, '1');
                    setTimeout(() => toast('Dica: clique na ⭐ para salvar seus apps favoritos no topo.', 'info'), 1200);
                }
                const modalKey = '4uia_tip_modal_v1';
                if (!localStorage.getItem(modalKey)) {
                    localStorage.setItem(modalKey, '1');
                    setTimeout(() => toast('Novidade: clique em "Testar App" para usar a ferramenta sem sair da loja!', 'ok'), 3000);
                }
            } catch { }
        })();

        boot();
    </script>
</body>

</html>