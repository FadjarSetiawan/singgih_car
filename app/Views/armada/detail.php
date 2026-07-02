<!-- ============================================================ -->
<!-- ARMADA DETAIL: Luxury Dark 2-Column Minimalist Layout         -->
<!-- ============================================================ -->
<div class="bg-night pt-20 min-h-screen">

    <!-- Breadcrumb -->
    <div class="bg-dim border-b border-border">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 py-4">
            <nav class="flex items-center gap-2 text-xs text-soft uppercase tracking-wider">
                <a href="<?= e(BASE_URL) ?>/" class="hover:text-cream transition-colors">Beranda</a>
                <svg class="w-3.5 h-3.5 text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <a href="<?= e(BASE_URL) ?>/armada" class="hover:text-cream transition-colors">Armada</a>
                <svg class="w-3.5 h-3.5 text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-cream font-medium"><?= e($car['name']) ?></span>
            </nav>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">

            <!-- KIRI: Foto Mobil (Jumbo & Sticky) -->
            <div class="lg:col-span-7 lg:sticky lg:top-28">
                <div class="bg-dim rounded-xl border border-border shadow-2xl overflow-hidden">
                    <!-- Area foto -->
                    <div class="bg-gradient-to-br from-dim to-night p-8 flex items-center justify-center" style="min-height: 380px;">
                        <img
                            src="<?= e($car['image_url']) ?>"
                            alt="<?= e($car['name']) ?>"
                            class="w-full max-h-80 object-contain drop-shadow-2xl hover:scale-102 transition-transform duration-500 relative z-10"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >
                        <!-- Fallback jika gambar error -->
                        <div class="hidden flex-col items-center justify-center gap-3 text-muted" style="display:none; min-height:280px;">
                            <svg class="w-20 h-20 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 6H6l-3 5v4h2m8-9l3 5h3l1 4h-2M3 11h18"/></svg>
                            <p class="text-sm font-medium"><?= e($car['name']) ?></p>
                        </div>
                    </div>

                    <!-- Specs ringkas bawah foto -->
                    <div class="px-6 py-5 border-t border-border grid grid-cols-3 divide-x divide-border bg-night/50">
                        <div class="text-center px-2">
                            <p class="text-[9px] uppercase tracking-[0.2em] text-muted mb-1">Kapasitas</p>
                            <p class="font-bold text-cream text-xs md:text-sm">5–7 Kursi</p>
                        </div>
                        <div class="text-center px-2">
                            <p class="text-[9px] uppercase tracking-[0.2em] text-muted mb-1">Transmisi</p>
                            <p class="font-bold text-cream text-xs md:text-sm">Automatic</p>
                        </div>
                        <div class="text-center px-2">
                            <p class="text-[9px] uppercase tracking-[0.2em] text-muted mb-1">Status</p>
                            <p class="font-bold text-green-400 text-xs md:text-sm">Tersedia</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KANAN: Detail Info + Form CTA -->
            <div class="lg:col-span-5 flex flex-col gap-6">

                <!-- Judul & Deskripsi -->
                <div class="bg-dim rounded-xl border border-border p-7 shadow-sm">
                    <span class="inline-block bg-night border border-border text-gold text-[9px] uppercase tracking-[0.2em] font-semibold px-3 py-1 rounded mb-4">
                        <?= e($car['category'] ?? 'Premium') ?>
                    </span>
                    <h1 class="font-serif text-cream text-3xl mb-3"><?= e($car['name']) ?></h1>
                    
                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="text-2xl font-semibold text-cream">Rp <?= number_format($car['price_per_day'], 0, ',', '.') ?></span>
                        <span class="text-muted text-xs uppercase tracking-wider">/ hari</span>
                    </div>

                    <p class="text-soft text-sm leading-relaxed">
                        <?= e($car['description'] ?? 'Kendaraan mewah kelas dunia yang memadukan kenyamanan luar biasa dengan performa prima. Sempurna untuk kebutuhan perjalanan bisnis, kunjungan dinas, maupun liburan eksklusif Anda di Yogyakarta.') ?>
                    </p>
                </div>

                <!-- Kelengkapan Layanan -->
                <div class="bg-dim rounded-xl border border-border p-7 shadow-sm">
                    <h2 class="text-[10px] uppercase tracking-[0.2em] text-muted mb-5">Termasuk dalam Harga</h2>
                    
                    <div class="space-y-4">
                        <?php
                        $inclusions = [
                            'BBM untuk area dalam kota Yogyakarta',
                            'Perlindungan asuransi komprehensif',
                            'Layanan antar-jemput (area bandara/hotel tertentu)',
                            'Kondisi mobil higienis & dicek sebelum penyerahan'
                        ];
                        foreach ($inclusions as $inc):
                        ?>
                        <div class="flex items-start gap-3.5 text-sm text-soft">
                            <div class="w-6 h-6 rounded bg-night border border-border flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-xs md:text-sm mt-0.5"><?= $inc ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- CTA Booking -->
                <div class="bg-dim rounded-xl border border-border p-7 shadow-sm">
                    <div class="flex flex-col gap-3">
                        <a href="<?= e(BASE_URL) ?>/booking?car_id=<?= e($car['id']) ?>"
                           class="w-full flex items-center justify-center gap-2 bg-cream hover:bg-white text-night font-bold text-xs uppercase tracking-[0.2em] py-4 rounded transition-colors shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            Mulai Booking Online
                        </a>
                        <a href="https://wa.me/6282224460099?text=Halo%20SinggihCar%2C%20saya%20tertarik%20menyewa%20<?= urlencode($car['name']) ?>."
                           target="_blank"
                           class="w-full flex items-center justify-center gap-2 border border-border hover:border-soft text-cream font-medium text-xs uppercase tracking-[0.2em] py-3.5 rounded transition-all">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            Tanya via WhatsApp
                        </a>
                    </div>
                    <p class="text-center text-[10px] text-muted mt-4">Tanpa komisi tambahan. Konfirmasi cepat &amp; instan.</p>
                </div>

                <!-- Back navigation -->
                <div class="text-center lg:text-left mt-2">
                    <a href="<?= e(BASE_URL) ?>/armada" class="text-xs text-soft hover:text-cream transition-colors inline-flex items-center gap-2">
                        &larr; Kembali ke Semua Armada
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
