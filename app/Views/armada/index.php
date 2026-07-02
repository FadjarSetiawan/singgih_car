<!-- Page Header -->
<div class="pt-20 bg-night border-b border-border">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-14">
        <p class="text-[10px] uppercase tracking-[0.25em] text-muted mb-3">Pilih Kendaraan Anda</p>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <h1 class="font-serif text-cream text-4xl md:text-5xl">Koleksi Armada</h1>
            <a href="https://wa.me/6282224460099" target="_blank" class="text-[10px] uppercase tracking-[0.2em] border border-border text-soft px-5 py-2.5 hover:border-soft hover:text-cream transition-colors inline-flex items-center gap-3 flex-shrink-0">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Tanya Ketersediaan
            </a>
        </div>
    </div>
</div>

<!-- Filter Bar -->
<div class="bg-dim border-b border-border sticky top-[72px] z-40">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex items-center gap-1 py-0 overflow-x-auto scrollbar-none">
            <a href="<?= e(BASE_URL) ?>/armada" class="flex-shrink-0 text-[10px] uppercase tracking-[0.2em] px-5 py-4 border-b-2 border-cream text-cream transition-colors">Semua</a>
            <a href="<?= e(BASE_URL) ?>/armada?category=MPV" class="flex-shrink-0 text-[10px] uppercase tracking-[0.2em] px-5 py-4 border-b-2 border-transparent text-muted hover:text-soft transition-colors">MPV</a>
            <a href="<?= e(BASE_URL) ?>/armada?category=SUV" class="flex-shrink-0 text-[10px] uppercase tracking-[0.2em] px-5 py-4 border-b-2 border-transparent text-muted hover:text-soft transition-colors">SUV</a>
            <a href="<?= e(BASE_URL) ?>/armada?category=Sedan" class="flex-shrink-0 text-[10px] uppercase tracking-[0.2em] px-5 py-4 border-b-2 border-transparent text-muted hover:text-soft transition-colors">Sedan</a>
            <a href="<?= e(BASE_URL) ?>/armada?category=Minibus" class="flex-shrink-0 text-[10px] uppercase tracking-[0.2em] px-5 py-4 border-b-2 border-transparent text-muted hover:text-soft transition-colors">Minibus</a>
        </div>
    </div>
</div>

<!-- Grid -->
<section class="bg-night py-10 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        <?php if (!empty($cars)): ?>
        <p class="text-[10px] uppercase tracking-[0.2em] text-muted mb-8"><?= count($cars) ?> kendaraan tersedia</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1">
            <?php foreach($cars as $car): ?>
            <a href="<?= e(BASE_URL) ?>/armada/detail?id=<?= e($car['id']) ?>"
               class="group relative overflow-hidden block bg-dim"
               style="aspect-ratio: 4/5;">

                <!-- Foto -->
                <img
                    src="<?= e($car['image_url']) ?>"
                    alt="<?= e($car['name']) ?>"
                    loading="lazy"
                    class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                    onerror="this.style.opacity='0';"
                >

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

                <!-- Status dot -->
                <div class="absolute top-5 left-5 flex items-center gap-2">
                    <span class="w-1.5 h-1.5 bg-green-400 rounded-full"></span>
                    <span class="text-[9px] uppercase tracking-[0.2em] text-soft">Tersedia</span>
                </div>

                <!-- Info bawah -->
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-[9px] uppercase tracking-[0.2em] text-muted mb-1.5"><?= e($car['category'] ?? 'Premium') ?></p>
                    <h3 class="text-cream font-serif text-xl mb-2"><?= e($car['name']) ?></h3>
                    <div class="flex items-center justify-between">
                        <p class="text-soft text-sm">Rp <?= number_format($car['price_per_day'], 0, ',', '.') ?><span class="text-muted">/hari</span></p>
                        <span class="text-[9px] uppercase tracking-[0.2em] text-night bg-cream px-3 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Pilih</span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <?php else: ?>
        <div class="text-center py-24 border border-border">
            <p class="text-muted text-sm">Tidak ada kendaraan ditemukan.</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- CTA -->
<div class="bg-dim border-t border-border py-16 px-6 text-center">
    <p class="text-[10px] uppercase tracking-[0.25em] text-muted mb-4">Butuh Bantuan?</p>
    <h2 class="font-serif text-cream text-2xl mb-4">Tidak Menemukan yang Cocok?</h2>
    <p class="text-soft text-sm mb-8 max-w-sm mx-auto">Hubungi kami langsung dan kami akan carikan kendaraan terbaik untuk perjalanan Anda.</p>
    <a href="https://wa.me/6282224460099" target="_blank" class="text-[10px] uppercase tracking-[0.2em] bg-cream text-night font-medium px-8 py-3.5 hover:bg-white transition-colors inline-flex items-center gap-3">
        Hubungi via WhatsApp
    </a>
</div>
