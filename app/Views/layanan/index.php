<!-- ============================================================ -->
<!-- LAYANAN: Luxury Dark Editorial Theme                         -->
<!-- ============================================================ -->

<!-- Page Header -->
<div class="pt-20 bg-night border-b border-border">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-14">
        <p class="text-[10px] uppercase tracking-[0.25em] text-muted mb-3">Layanan Eksklusif</p>
        <h1 class="font-serif text-cream text-4xl md:text-5xl">Apa yang Kami Tawarkan</h1>
        <p class="text-soft mt-3 max-w-xl leading-relaxed text-sm">Pilihan layanan perjalanan premium yang dirancang untuk memberikan kenyamanan mutlak dan prestise selama Anda berada di Yogyakarta.</p>
    </div>
</div>

<!-- Services alternating rows -->
<section class="bg-night">
    <!-- Layanan 1: Chauffeur -->
    <div class="flex flex-col lg:flex-row border-b border-border" style="min-height: 500px;">
        <div class="lg:w-[55%] relative h-[320px] lg:h-auto overflow-hidden">
            <img 
                src="https://images.unsplash.com/photo-1600706432502-75a0e286b92b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                alt="Layanan Sopir VIP Yogyakarta" 
                class="absolute inset-0 w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-105"
            >
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        <div class="lg:w-[45%] flex items-center p-8 lg:p-16 xl:p-20 bg-dim">
            <div class="w-full">
                <span class="text-[10px] uppercase tracking-[0.25em] text-gold mb-3 block">Chauffeur Service</span>
                <h2 class="font-serif text-cream text-3xl mb-5">Layanan Chauffeur VIP</h2>
                <p class="text-soft text-sm leading-relaxed mb-6">Biarkan pengemudi profesional kami mengurus perjalanan Anda. Sopir kami tidak hanya terlatih secara teknis, tetapi juga mengedepankan kesopanan, privasi, dan keprotokolan tingkat tinggi.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-xs text-soft">
                        <span class="w-1.5 h-1.5 bg-gold rounded-full"></span>
                        Pengemudi multibahasa &amp; berpakaian formal
                    </li>
                    <li class="flex items-center gap-3 text-xs text-soft">
                        <span class="w-1.5 h-1.5 bg-gold rounded-full"></span>
                        Ketepatan waktu terjamin 100%
                    </li>
                </ul>

                <!-- Armada Terkait -->
                <div class="border-t border-border pt-6 mt-6">
                    <p class="text-[9px] uppercase tracking-[0.2em] text-muted mb-4 font-semibold">Pilihan Armada Chauffeur:</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <?php 
                        foreach ($cars as $car): 
                            if (in_array($car['name'], ['Toyota Alphard', 'Mercedes-Benz S-Class'])):
                        ?>
                        <a href="<?= e(BASE_URL) ?>/armada/detail?id=<?= e($car['id']) ?>" class="group flex items-center gap-3 bg-night border border-border p-3 rounded hover:border-soft transition-colors">
                            <img src="<?= e($car['image_url']) ?>" alt="<?= e($car['name']) ?>" class="w-12 h-12 object-contain bg-dim p-1 rounded">
                            <div>
                                <p class="text-xs font-semibold text-cream group-hover:text-gold transition-colors"><?= e($car['name']) ?></p>
                                <p class="text-[10px] text-soft">Rp <?= number_format($car['price_per_day'], 0, ',', '.') ?></p>
                            </div>
                        </a>
                        <?php 
                            endif;
                        endforeach; 
                        ?>
                    </div>
                </div>

                <a href="https://wa.me/6282224460099?text=Halo%20SinggihCar,%20saya%20tertarik%20dengan%20layanan%20Chauffeur%20VIP." target="_blank"
                   class="text-[10px] uppercase tracking-[0.2em] border border-cream/40 text-cream px-6 py-3 hover:bg-cream hover:text-night transition-all duration-300 inline-block mt-8">
                    Hubungi Chauffeur Concierge
                </a>
            </div>
        </div>
    </div>

    <!-- Layanan 2: Lepas Kunci -->
    <div class="flex flex-col-reverse lg:flex-row border-b border-border" style="min-height: 500px;">
        <div class="lg:w-[45%] flex items-center p-8 lg:p-16 xl:p-20 bg-night">
            <div class="w-full">
                <span class="text-[10px] uppercase tracking-[0.25em] text-gold mb-3 block">Self Drive</span>
                <h2 class="font-serif text-cream text-3xl mb-5">Sewa Harian Lepas Kunci</h2>
                <p class="text-soft text-sm leading-relaxed mb-6">Kebebasan penuh untuk menjelajahi Yogyakarta sesuai ritme Anda sendiri. Setiap unit armada diserahkan dalam kondisi mekanis prima, bersih luar-dalam, dan tangki bahan bakar penuh.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-xs text-soft">
                        <span class="w-1.5 h-1.5 bg-gold rounded-full"></span>
                        Pilihan armada terbaru (di bawah 3 tahun)
                    </li>
                    <li class="flex items-center gap-3 text-xs text-soft">
                        <span class="w-1.5 h-1.5 bg-gold rounded-full"></span>
                        Asuransi komprehensif sudah termasuk
                    </li>
                </ul>

                <!-- Armada Terkait -->
                <div class="border-t border-border pt-6 mt-6">
                    <p class="text-[9px] uppercase tracking-[0.2em] text-muted mb-4 font-semibold">Pilihan Armada Lepas Kunci:</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <?php 
                        $count = 0;
                        foreach ($cars as $car): 
                            if (in_array($car['name'], ['Toyota Avanza', 'Mitsubishi Xpander', 'Honda HR-V'])):
                                if ($count >= 2) break;
                                $count++;
                        ?>
                        <a href="<?= e(BASE_URL) ?>/armada/detail?id=<?= e($car['id']) ?>" class="group flex items-center gap-3 bg-dim border border-border p-3 rounded hover:border-soft transition-colors">
                            <img src="<?= e($car['image_url']) ?>" alt="<?= e($car['name']) ?>" class="w-12 h-12 object-contain bg-night p-1 rounded">
                            <div>
                                <p class="text-xs font-semibold text-cream group-hover:text-gold transition-colors"><?= e($car['name']) ?></p>
                                <p class="text-[10px] text-soft">Rp <?= number_format($car['price_per_day'], 0, ',', '.') ?></p>
                            </div>
                        </a>
                        <?php 
                            endif;
                        endforeach; 
                        ?>
                    </div>
                </div>

                <a href="<?= e(BASE_URL) ?>/armada" 
                   class="text-[10px] uppercase tracking-[0.2em] bg-cream text-night px-6 py-3 hover:bg-white transition-colors duration-300 inline-block font-medium mt-8">
                    Lihat Semua Mobil
                </a>
            </div>
        </div>
        <div class="lg:w-[55%] relative h-[320px] lg:h-auto overflow-hidden">
            <img 
                src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                alt="Sewa Mobil Lepas Kunci Jogja" 
                class="absolute inset-0 w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-105"
            >
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
    </div>

    <!-- Layanan 3: Airport Transfer -->
    <div class="flex flex-col lg:flex-row border-b border-border" style="min-height: 500px;">
        <div class="lg:w-[55%] relative h-[320px] lg:h-auto overflow-hidden">
            <img 
                src="https://images.unsplash.com/photo-1616422285623-13ff0162193c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                alt="Jemput Bandara YIA Yogyakarta" 
                class="absolute inset-0 w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-105"
            >
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        <div class="lg:w-[45%] flex items-center p-8 lg:p-16 xl:p-20 bg-dim">
            <div class="w-full">
                <span class="text-[10px] uppercase tracking-[0.25em] text-gold mb-3 block">Airport Transfer</span>
                <h2 class="font-serif text-cream text-3xl mb-5">Transfer Bandara YIA</h2>
                <p class="text-soft text-sm leading-relaxed mb-6">Memulai atau mengakhiri kunjungan Anda tanpa rasa cemas. Layanan transfer bandara kami memantau jadwal penerbangan Anda secara real-time untuk memastikan penjemputan yang tepat waktu di Yogyakarta International Airport (YIA).</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-xs text-soft">
                        <span class="w-1.5 h-1.5 bg-gold rounded-full"></span>
                        Sopir menunggu di area kedatangan dengan papan nama
                    </li>
                    <li class="flex items-center gap-3 text-xs text-soft">
                        <span class="w-1.5 h-1.5 bg-gold rounded-full"></span>
                        Harga tetap tanpa tambahan biaya tol atau parkir
                    </li>
                </ul>

                <!-- Armada Terkait -->
                <div class="border-t border-border pt-6 mt-6">
                    <p class="text-[9px] uppercase tracking-[0.2em] text-muted mb-4 font-semibold">Pilihan Armada Transfer:</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <?php 
                        foreach ($cars as $car): 
                            if (in_array($car['name'], ['Toyota Alphard', 'Toyota HiAce Premio'])):
                        ?>
                        <a href="<?= e(BASE_URL) ?>/armada/detail?id=<?= e($car['id']) ?>" class="group flex items-center gap-3 bg-night border border-border p-3 rounded hover:border-soft transition-colors">
                            <img src="<?= e($car['image_url']) ?>" alt="<?= e($car['name']) ?>" class="w-12 h-12 object-contain bg-dim p-1 rounded">
                            <div>
                                <p class="text-xs font-semibold text-cream group-hover:text-gold transition-colors"><?= e($car['name']) ?></p>
                                <p class="text-[10px] text-soft">Rp <?= number_format($car['price_per_day'], 0, ',', '.') ?></p>
                            </div>
                        </a>
                        <?php 
                            endif;
                        endforeach; 
                        ?>
                    </div>
                </div>

                <a href="https://wa.me/6282224460099?text=Halo%20SinggihCar,%20saya%20butuh%20layanan%20Transfer%20Bandara%20YIA." target="_blank"
                   class="text-[10px] uppercase tracking-[0.2em] border border-cream/40 text-cream px-6 py-3 hover:bg-cream hover:text-night transition-all duration-300 inline-block mt-8">
                    Jadwalkan Penjemputan
                </a>
            </div>
        </div>
    </div>

    <!-- Layanan 4: Wedding Car -->
    <div class="flex flex-col-reverse lg:flex-row border-b border-border" style="min-height: 500px;">
        <div class="lg:w-[45%] flex items-center p-8 lg:p-16 xl:p-20 bg-night">
            <div class="w-full">
                <span class="text-[10px] uppercase tracking-[0.25em] text-gold mb-3 block">Wedding Car</span>
                <h2 class="font-serif text-cream text-3xl mb-5">Mobil Pernikahan Premium</h2>
                <p class="text-soft text-sm leading-relaxed mb-6">Sempurnakan hari bahagia Anda dengan perjalanan yang berkesan. Kami menyediakan kendaraan pernikahan mewah lengkap dengan dekorasi bunga segar eksklusif dan pengemudi profesional.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-xs text-soft">
                        <span class="w-1.5 h-1.5 bg-gold rounded-full"></span>
                        Dekorasi bunga premium disesuaikan dengan tema
                    </li>
                    <li class="flex items-center gap-3 text-xs text-soft">
                        <span class="w-1.5 h-1.5 bg-gold rounded-full"></span>
                        Sopir berpakaian formal jas/batik premium
                    </li>
                </ul>

                <!-- Armada Terkait -->
                <div class="border-t border-border pt-6 mt-6">
                    <p class="text-[9px] uppercase tracking-[0.2em] text-muted mb-4 font-semibold">Pilihan Armada Wedding:</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <?php 
                        foreach ($cars as $car): 
                            if (in_array($car['name'], ['Toyota Alphard', 'Mercedes-Benz S-Class'])):
                        ?>
                        <a href="<?= e(BASE_URL) ?>/armada/detail?id=<?= e($car['id']) ?>" class="group flex items-center gap-3 bg-dim border border-border p-3 rounded hover:border-soft transition-colors">
                            <img src="<?= e($car['image_url']) ?>" alt="<?= e($car['name']) ?>" class="w-12 h-12 object-contain bg-night p-1 rounded">
                            <div>
                                <p class="text-xs font-semibold text-cream group-hover:text-gold transition-colors"><?= e($car['name']) ?></p>
                                <p class="text-[10px] text-soft">Rp <?= number_format($car['price_per_day'], 0, ',', '.') ?></p>
                            </div>
                        </a>
                        <?php 
                            endif;
                        endforeach; 
                        ?>
                    </div>
                </div>

                <a href="https://wa.me/6282224460099?text=Halo%20SinggihCar,%20saya%20tertarik%20dengan%20layanan%20Wedding%20Car." target="_blank"
                   class="text-[10px] uppercase tracking-[0.2em] border border-cream/40 text-cream px-6 py-3 hover:bg-cream hover:text-night transition-all duration-300 inline-block mt-8">
                    Konsultasi Paket Pernikahan
                </a>
            </div>
        </div>
        <div class="lg:w-[55%] relative h-[320px] lg:h-auto overflow-hidden">
            <img 
                src="https://images.unsplash.com/photo-1519225495810-7512c696505a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                alt="Mobil Pengantin Mewah Yogyakarta" 
                class="absolute inset-0 w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-105"
            >
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
    </div>
</section>

<!-- Corporate Concierge Section -->
<div class="bg-dim py-20 px-6 border-t border-border">
    <div class="max-w-4xl mx-auto text-center">
        <p class="text-[10px] uppercase tracking-[0.25em] text-muted mb-4">Layanan Korporasi</p>
        <h2 class="font-serif text-cream text-3xl mb-5">Corporate &amp; Event Concierge</h2>
        <p class="text-soft text-sm leading-relaxed mb-8 max-w-xl mx-auto">Kami menyediakan manajemen armada khusus untuk tamu VIP, kunjungan delegasi kenegaraan, kebutuhan operasional perusahaan, serta event berskala besar di Yogyakarta.</p>
        <a href="mailto:singgih.car@gmail.com"
           class="text-[10px] uppercase tracking-[0.2em] bg-cream text-night px-8 py-3.5 hover:bg-white transition-colors duration-300 inline-flex items-center gap-3 font-medium">
            Hubungi Tim Korporat
        </a>
    </div>
</div>
