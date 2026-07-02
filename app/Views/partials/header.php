<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= e($pageDesc ?? 'Sewa mobil Yogyakarta premium. Rental mobil eksklusif di Sleman & Malioboro dengan layanan chauffeur dan harga terbaik.') ?>">
    <meta name="keywords" content="sewa mobil, sewa mobil yogyakarta, sewa mobil murah, rental mobil sleman, sewa alphard jogja, sewa mobil mewah yogyakarta">
    <meta name="author" content="SinggihCar">

    <meta property="og:title" content="<?= e($pageTitle ?? 'Sewa Mobil Yogyakarta Premium | SinggihCar') ?>">
    <meta property="og:description" content="<?= e($pageDesc ?? 'Sewa mobil eksklusif dengan harga terbaik di Yogyakarta.') ?>">
    <meta property="og:type" content="website">

    <title><?= e($pageTitle ?? 'Sewa Mobil Yogyakarta | SinggihCar') ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AutoRental",
      "name": "SinggihCar",
      "@id": "<?= e(BASE_URL) ?>",
      "url": "<?= e(BASE_URL) ?>",
      "telephone": "+6282224460099",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Mangsel VIII, RT.007/RW.016, Margomulyo",
        "addressLocality": "Sleman",
        "addressRegion": "Yogyakarta",
        "postalCode": "55562",
        "addressCountry": "ID"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "priceRange": "$$"
    }
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                    },
                    colors: {
                        night:  '#0a0a0a',
                        ink:    '#111111',
                        dim:    '#1a1a1a',
                        border: '#2a2a2a',
                        muted:  '#6b6b6b',
                        soft:   '#9a9a9a',
                        cream:  '#f5f0e8',
                        gold:   '#c9a96e',
                    }
                }
            }
        }
    </script>
    <style>
        * { box-sizing: border-box; }
        body {
            background-color: #0a0a0a;
            color: #e8e8e8;
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        html { scroll-behavior: smooth; }

        /* Underline nav active */
        .nav-link {
            position: relative;
            font-size: 0.75rem;
            font-weight: 400;
            letter-spacing: 0.05em;
            color: #9a9a9a;
            text-decoration: none;
            transition: color 0.3s;
            padding-bottom: 2px;
        }
        .nav-link:hover { color: #f5f0e8; }
        .nav-link.active {
            color: #f5f0e8;
            border-bottom: 1px solid #f5f0e8;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: #0a0a0a; }
        ::-webkit-scrollbar-thumb { background: #2a2a2a; }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen">

    <!-- ============================= -->
    <!-- NAVBAR: Luxury minimal dark   -->
    <!-- ============================= -->
    <nav x-data="{ mobileMenuOpen: false, scrolled: false }"
         @scroll.window="scrolled = window.pageYOffset > 40"
         :class="scrolled ? 'bg-night/95 backdrop-blur-md border-b border-border' : 'bg-transparent border-b border-transparent'"
         class="fixed top-0 left-0 w-full z-50 transition-all duration-500 flex items-center justify-between px-6 lg:px-12 py-5">

        <!-- Logo -->
        <a href="<?= e(BASE_URL) ?>/" class="text-cream font-serif text-lg font-semibold tracking-widest uppercase flex-shrink-0">
            Singgih Car
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-8">
            <a href="<?= e(BASE_URL) ?>/armada" class="nav-link <?= (strpos($_SERVER['REQUEST_URI'], '/armada') !== false) ? 'active' : '' ?>">Armada</a>
            <a href="<?= e(BASE_URL) ?>/layanan" class="nav-link <?= (strpos($_SERVER['REQUEST_URI'], '/layanan') !== false) ? 'active' : '' ?>">Layanan</a>
            <a href="<?= e(BASE_URL) ?>/artikel" class="nav-link <?= (strpos($_SERVER['REQUEST_URI'], '/artikel') !== false) ? 'active' : '' ?>">Artikel</a>
            <a href="<?= e(BASE_URL) ?>/tentang" class="nav-link <?= (strpos($_SERVER['REQUEST_URI'], '/tentang') !== false) ? 'active' : '' ?>">Tentang</a>
        </div>

        <!-- CTA -->
        <div class="hidden md:flex items-center gap-5">
            <a href="tel:+6282224460099" class="nav-link hidden lg:block">0822-2446-0099</a>
            <a href="<?= e(BASE_URL) ?>/armada" class="text-xs font-medium tracking-widest uppercase border border-cream/40 text-cream px-5 py-2.5 hover:bg-cream hover:text-night transition-all duration-300">
                Reservasi
            </a>
        </div>

        <!-- Mobile Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-soft p-1">
            <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="md:hidden absolute top-full left-0 w-full bg-night border-t border-border px-6 py-8 flex flex-col gap-6"
             style="display:none;">
            <a href="<?= e(BASE_URL) ?>/armada" class="nav-link text-base">Armada</a>
            <a href="<?= e(BASE_URL) ?>/layanan" class="nav-link text-base">Layanan</a>
            <a href="<?= e(BASE_URL) ?>/artikel" class="nav-link text-base">Artikel</a>
            <a href="<?= e(BASE_URL) ?>/tentang" class="nav-link text-base">Tentang</a>
            <div class="pt-4 border-t border-border">
                <a href="<?= e(BASE_URL) ?>/armada" class="inline-block text-xs font-medium tracking-widest uppercase border border-cream/40 text-cream px-6 py-3 hover:bg-cream hover:text-night transition-all duration-300">
                    Reservasi Sekarang
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">