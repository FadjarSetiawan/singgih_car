<!-- ============================================================ -->
<!-- HERO: Full-screen dark luxury, left-aligned text           -->
<!-- ============================================================ -->
<section class="relative w-full" style="height: 100vh; min-height: 640px;">

    <!-- Background photo: Luxury SUV in dramatic setting -->
    <img
        src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=2400&q=90"
        alt="Sewa Mobil Premium Yogyakarta"
        class="absolute inset-0 w-full h-full object-cover object-center"
        fetchpriority="high"
    >

    <!-- Overlay: Dark gradient, stronger on left -->
    <div class="absolute inset-0" style="background: linear-gradient(105deg, rgba(0,0,0,0.88) 0%, rgba(0,0,0,0.55) 50%, rgba(0,0,0,0.25) 100%);"></div>

    <!-- Content: left-aligned -->
    <div class="relative z-10 flex flex-col justify-center h-full px-8 lg:px-16 xl:px-24 max-w-3xl" style="padding-top: 80px;">

        <!-- Kicker label -->
        <p class="text-[11px] uppercase tracking-[0.25em] text-soft mb-6">Est. 2018 &nbsp;&bull;&nbsp; Yogyakarta</p>

        <!-- Headline: mix regular + italic serif -->
        <h1 class="text-white font-serif leading-[1.1] mb-6" style="font-size: clamp(2.8rem, 6.5vw, 5.5rem);">
            The Pinnacle of<br>
            <em class="not-italic font-serif" style="font-style: italic;">Yogyakarta Travel</em>
        </h1>

        <p class="text-soft leading-relaxed max-w-sm mb-10" style="font-size: 0.9rem;">
            Armada eksklusif dan layanan concierge yang mendefinisikan ulang standar perjalanan di Yogyakarta.
        </p>

        <div class="flex items-center gap-5">
            <a href="<?= e(BASE_URL) ?>/armada"
               class="text-[11px] uppercase tracking-[0.2em] font-medium bg-cream text-night px-8 py-3.5 hover:bg-white transition-colors duration-300">
                Lihat Koleksi
            </a>
            <a href="https://wa.me/6282224460099" target="_blank"
               class="text-[11px] uppercase tracking-[0.2em] font-medium border border-cream/40 text-cream px-8 py-3.5 hover:bg-cream hover:text-night transition-colors duration-300">
                Hubungi Kami
            </a>
        </div>
    </div>

    <!-- Scroll indicator bottom center -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 z-10">
        <p class="text-[9px] uppercase tracking-[0.3em] text-muted">Jelajahi</p>
        <div class="w-px h-12 bg-gradient-to-b from-muted to-transparent"></div>
    </div>
</section>

<!-- ============================================================ -->
<!-- BOOKING BAR: Below hero, dark card style                   -->
<!-- ============================================================ -->
<div class="bg-dim border-b border-border">
    <div class="max-w-6xl mx-auto px-6 lg:px-12">
        <form action="<?= e(BASE_URL) ?>/booking" method="GET">
            <div class="flex flex-col md:flex-row items-stretch divide-y md:divide-y-0 md:divide-x divide-border">

                <!-- Layanan -->
                <div class="flex-1 px-6 py-5">
                    <label class="block text-[9px] uppercase tracking-[0.2em] text-muted mb-2">Layanan</label>
                    <select name="service_type" class="w-full bg-transparent text-cream text-sm focus:outline-none appearance-none cursor-pointer">
                        <option value="chauffeur">Chauffeur Drive</option>
                        <option value="self_drive">Lepas Kunci</option>
                        <option value="airport">Transfer Bandara</option>
                        <option value="tour">City Tour</option>
                    </select>
                </div>

                <!-- Tanggal Ambil -->
                <div class="flex-1 px-6 py-5">
                    <label class="block text-[9px] uppercase tracking-[0.2em] text-muted mb-2">Tanggal Ambil</label>
                    <input type="date" name="start_date" class="w-full bg-transparent text-cream text-sm focus:outline-none cursor-pointer [color-scheme:dark]" required>
                </div>

                <!-- Tanggal Kembali -->
                <div class="flex-1 px-6 py-5">
                    <label class="block text-[9px] uppercase tracking-[0.2em] text-muted mb-2">Tanggal Kembali</label>
                    <input type="date" name="end_date" class="w-full bg-transparent text-cream text-sm focus:outline-none cursor-pointer [color-scheme:dark]" required>
                </div>

                <!-- Fleet Type -->
                <div class="flex-1 px-6 py-5">
                    <label class="block text-[9px] uppercase tracking-[0.2em] text-muted mb-2">Jenis Kendaraan</label>
                    <select name="fleet" class="w-full bg-transparent text-cream text-sm focus:outline-none appearance-none cursor-pointer">
                        <option value="">Semua Kendaraan</option>
                        <option value="mpv">MPV / Keluarga</option>
                        <option value="suv">SUV</option>
                        <option value="sedan">Sedan</option>
                    </select>
                </div>

                <!-- Submit -->
                <div class="px-6 py-4 flex items-center flex-shrink-0">
                    <button type="submit"
                            class="text-[10px] uppercase tracking-[0.2em] font-medium whitespace-nowrap bg-cream text-night px-8 py-3 hover:bg-white transition-colors duration-300 flex items-center gap-3">
                        Cek Ketersediaan
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- ============================================================ -->
<!-- COLLECTIONS: 3 Large image cards                           -->
<!-- ============================================================ -->
<section class="bg-night py-24 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">

        <!-- Section header -->
        <div class="flex items-end justify-between mb-12">
            <div>
                <p class="text-[10px] uppercase tracking-[0.25em] text-muted mb-3">Pilihan Armada</p>
                <h2 class="text-cream font-serif text-3xl md:text-4xl">Koleksi Kami</h2>
            </div>
            <a href="<?= e(BASE_URL) ?>/armada" class="text-[10px] uppercase tracking-[0.2em] text-soft hover:text-cream transition-colors border-b border-soft pb-0.5">
                Lihat Semua
            </a>
        </div>

        <!-- Grid kendaraan dari DB -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1">
            <?php foreach(array_slice($cars, 0, 3) as $i => $car): ?>
            <a href="<?= e(BASE_URL) ?>/armada/detail?id=<?= e($car['id']) ?>"
               class="group relative overflow-hidden block"
               style="aspect-ratio: 4/5;">

                <!-- Foto mobil -->
                <img
                    src="<?= e($car['image_url']) ?>"
                    alt="<?= e($car['name']) ?>"
                    class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                    onerror="this.style.display='none';"
                >

                <!-- Dark overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent"></div>

                <!-- Info -->
                <div class="absolute bottom-0 left-0 p-7">
                    <p class="text-[9px] uppercase tracking-[0.25em] text-soft mb-2">
                        <?= e($car['category'] ?? 'Premium') ?>
                    </p>
                    <h3 class="text-cream font-serif text-xl mb-1"><?= e($car['name']) ?></h3>
                    <p class="text-soft text-sm">Mulai Rp <?= number_format($car['price_per_day'], 0, ',', '.') ?>/hari</p>
                </div>

                <!-- Hover CTA -->
                <div class="absolute top-6 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-[9px] uppercase tracking-[0.2em] bg-cream text-night px-4 py-2">Pilih</span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <!-- Jika data kosong -->
        <?php if (empty($cars)): ?>
        <div class="text-center py-20 border border-border">
            <p class="text-muted text-sm">Belum ada kendaraan tersedia.</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- ============================================================ -->
<!-- QUOTE SECTION: Luxury editorial                             -->
<!-- ============================================================ -->
<section class="bg-dim py-24 px-6 border-t border-border text-center">
    <div class="max-w-2xl mx-auto">
        <!-- Decorative icon -->
        <div class="flex justify-center mb-8">
            <svg class="w-8 h-8 text-gold opacity-60" viewBox="0 0 32 32" fill="currentColor">
                <path d="M16 2l2.4 7.4H27l-6.9 5 2.6 8-6.7-4.9L9.3 22.4l2.6-8L5 9.4h8.6z"/>
            </svg>
        </div>
        <blockquote class="font-serif text-cream text-xl md:text-2xl leading-relaxed italic mb-8">
            &ldquo;Travel is not just about the destination, but the quiet confidence of the journey itself.&rdquo;
        </blockquote>
        <p class="text-[10px] uppercase tracking-[0.3em] text-muted">&mdash; Singgih Car Atelier</p>
    </div>
</section>

<!-- ============================================================ -->
<!-- KEUNGGULAN: 2 kolom foto besar                              -->
<!-- ============================================================ -->
<section class="bg-night border-t border-border">
    <!-- Row 1 -->
    <div class="flex flex-col lg:flex-row" style="min-height: 520px;">
        <div class="lg:w-[55%] relative" style="min-height: 320px;">
            <img
                src="https://images.unsplash.com/photo-1502877338535-766e1452684a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80"
                alt="Armada Premium SinggihCar"
                class="absolute inset-0 w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-black/30"></div>
        </div>
        <div class="lg:w-[45%] flex items-center px-10 lg:px-16 xl:px-20 py-16 bg-dim">
            <div>
                <p class="text-[9px] uppercase tracking-[0.25em] text-muted mb-4">Standar Kami</p>
                <h2 class="font-serif text-cream text-3xl leading-snug mb-5">Armada Selalu<br><em>Prima &amp; Bersih</em></h2>
                <p class="text-soft text-sm leading-relaxed mb-8 max-w-sm">Setiap kendaraan diperiksa dan dibersihkan sebelum diserahkan. Standar kami tidak bernegosiasi dengan kenyamanan Anda.</p>
                <a href="<?= e(BASE_URL) ?>/armada" class="text-[10px] uppercase tracking-[0.2em] text-cream border-b border-cream/40 pb-0.5 hover:border-cream transition-colors">Jelajahi Armada</a>
            </div>
        </div>
    </div>

    <!-- Row 2 -->
    <div class="flex flex-col-reverse lg:flex-row border-t border-border" style="min-height: 520px;">
        <div class="lg:w-[45%] flex items-center px-10 lg:px-16 xl:px-20 py-16 bg-night">
            <div>
                <p class="text-[9px] uppercase tracking-[0.25em] text-muted mb-4">Selalu Ada</p>
                <h2 class="font-serif text-cream text-3xl leading-snug mb-5">Sopir Profesional,<br><em>Siap 24 Jam</em></h2>
                <p class="text-soft text-sm leading-relaxed mb-8 max-w-sm">Dijemput jam berapa pun, kami siap. Sopir kami berpengalaman, hafal rute, dan selalu responsif via WhatsApp.</p>
                <a href="https://wa.me/6282224460099" target="_blank" class="text-[10px] uppercase tracking-[0.2em] text-cream border-b border-cream/40 pb-0.5 hover:border-cream transition-colors">Hubungi via WhatsApp</a>
            </div>
        </div>
        <div class="lg:w-[55%] relative" style="min-height: 320px;">
            <img
                src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80"
                alt="Sopir Profesional"
                class="absolute inset-0 w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-black/30"></div>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- ULASAN: Dark, minimal                                      -->
<!-- ============================================================ -->
<section class="bg-dim border-t border-border py-24 px-6 lg:px-12">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-end justify-between mb-14">
            <div>
                <p class="text-[10px] uppercase tracking-[0.25em] text-muted mb-3">Testimoni</p>
                <h2 class="text-cream font-serif text-3xl">Kata Pelanggan</h2>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-border">
            <!-- Ulasan 1 -->
            <div class="bg-dim p-8 md:p-10">
                <div class="text-gold text-sm mb-5 tracking-widest">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="text-soft text-sm leading-relaxed mb-8 italic font-serif">&ldquo;Proses sewa cepat, tidak ada biaya tersembunyi. Mobil kondisinya seperti baru keluar dari dealer.&rdquo;</p>
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&w=80&h=80&fit=crop&q=80" class="w-9 h-9 rounded-full object-cover grayscale" alt="Budi">
                    <div>
                        <p class="text-cream text-sm font-medium">Budi Santoso</p>
                        <p class="text-[11px] text-muted">Sleman, Yogyakarta</p>
                    </div>
                </div>
            </div>

            <!-- Ulasan 2 -->
            <div class="bg-night p-8 md:p-10">
                <div class="text-gold text-sm mb-5 tracking-widest">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="text-soft text-sm leading-relaxed mb-8 italic font-serif">&ldquo;Sopirnya sangat paham jalan di Jogja. Terhindar dari macet parah saat liburan panjang.&rdquo;</p>
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&w=80&h=80&fit=crop&q=80" class="w-9 h-9 rounded-full object-cover grayscale" alt="Sari">
                    <div>
                        <p class="text-cream text-sm font-medium">Sari Maharani</p>
                        <p class="text-[11px] text-muted">Jakarta</p>
                    </div>
                </div>
            </div>

            <!-- Ulasan 3 -->
            <div class="bg-dim p-8 md:p-10">
                <div class="text-gold text-sm mb-5 tracking-widest">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="text-soft text-sm leading-relaxed mb-8 italic font-serif">&ldquo;Jemput di Bandara YIA jam 5 pagi, tepat waktu. Profesional dan armadanya selalu bersih.&rdquo;</p>
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&w=80&h=80&fit=crop&q=80" class="w-9 h-9 rounded-full object-cover grayscale" alt="Adrian">
                    <div>
                        <p class="text-cream text-sm font-medium">Adrian Wijaya</p>
                        <p class="text-[11px] text-muted">Perjalanan Bisnis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- CTA AKHIR: Cinematic full-image                             -->
<!-- ============================================================ -->
<div class="relative border-t border-border" style="height: 55vh; min-height: 340px;">
    <img
        src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
        alt="Perjalanan Yogyakarta"
        class="absolute inset-0 w-full h-full object-cover"
    >
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6" style="background: rgba(0,0,0,0.65);">
        <p class="text-[10px] uppercase tracking-[0.3em] text-muted mb-5">Mulai Perjalanan Anda</p>
        <h2 class="font-serif text-cream text-3xl md:text-5xl leading-tight mb-8">
            Siap untuk <em>Berangkat?</em>
        </h2>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="<?= e(BASE_URL) ?>/armada" class="text-[11px] uppercase tracking-[0.2em] bg-cream text-night font-medium px-10 py-3.5 hover:bg-white transition-colors">
                Pilih Kendaraan
            </a>
            <a href="https://wa.me/6282224460099" target="_blank" class="text-[11px] uppercase tracking-[0.2em] border border-cream/50 text-cream font-medium px-10 py-3.5 hover:bg-cream hover:text-night transition-colors">
                Chat WhatsApp
            </a>
        </div>
    </div>
</div>