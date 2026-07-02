<!-- ========================================================== -->
<!-- BLOG INDEX: Luxury Dark Editorial Theme                   -->
<!-- ========================================================== -->

<!-- Page Header -->
<div class="pt-20 bg-night border-b border-border">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-14">
        <p class="text-[10px] uppercase tracking-[0.25em] text-muted mb-3">Jurnal Perjalanan</p>
        <h1 class="font-serif text-cream text-4xl md:text-5xl">Tips &amp; Panduan Wisata</h1>
        <p class="text-soft mt-3 max-w-xl leading-relaxed text-sm">Informasi perjalanan eksklusif, panduan rute wisata, dan tips berkendara di wilayah Yogyakarta dan sekitarnya.</p>
    </div>
</div>

<section class="bg-night py-12">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        <?php if (!empty($articles)): ?>

        <!-- ======================= -->
        <!-- Artikel Featured (Jumbo) -->
        <!-- ======================= -->
        <a href="<?= e(BASE_URL) ?>/artikel/detail/<?= e($articles[0]['slug']) ?>" class="group block mb-12">
            <div class="relative rounded-xl overflow-hidden border border-border" style="height: 440px;">

                <!-- Gambar featured dengan fallback -->
                <?php if (!empty($articles[0]['image_url'])): ?>
                <img
                    src="<?= e($articles[0]['image_url']) ?>"
                    alt="<?= e($articles[0]['title']) ?>"
                    class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700"
                    onerror="this.style.display='none'; this.parentElement.style.background='#111111';"
                >
                <?php endif; ?>

                <!-- Overlay gelap elegan -->
                <div class="absolute inset-0 bg-gradient-to-t from-night via-night/50 to-transparent"></div>

                <!-- Konten teks -->
                <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12">
                    <span class="inline-block bg-cream text-night text-[9px] uppercase tracking-[0.2em] font-semibold px-3 py-1 rounded mb-4">Artikel Utama</span>
                    <h2 class="text-2xl md:text-3xl font-serif text-cream leading-tight max-w-3xl mb-4 group-hover:text-gold transition-colors">
                        <?= e($articles[0]['title']) ?>
                    </h2>
                    <p class="text-soft text-xs tracking-wider uppercase">
                        <?= date('d F Y', strtotime($articles[0]['created_at'])) ?>
                        &nbsp;&bull;&nbsp;
                        <span class="text-cream">Baca Selengkapnya &rarr;</span>
                    </p>
                </div>
            </div>
        </a>

        <!-- ========================= -->
        <!-- Grid Artikel Lainnya      -->
        <!-- ========================= -->
        <?php if (count($articles) > 1): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach (array_slice($articles, 1) as $article): ?>
            <a href="<?= e(BASE_URL) ?>/artikel/detail/<?= e($article['slug']) ?>"
               class="group bg-dim rounded-xl overflow-hidden border border-border hover:border-soft transition-all duration-300 flex flex-col"
               style="min-height: 400px;">

                <!-- Foto artikel -->
                <div class="relative overflow-hidden bg-night" style="height: 220px;">
                    <?php if (!empty($article['image_url'])): ?>
                    <img
                        src="<?= e($article['image_url']) ?>"
                        alt="<?= e($article['title']) ?>"
                        loading="lazy"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500"
                        onerror="this.style.display='none'; this.parentElement.style.background='#111111';"
                    >
                    <?php else: ?>
                    <div class="w-full h-full flex items-center justify-center text-muted">
                        <svg class="w-12 h-12 opacity-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Konten teks -->
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="font-serif text-cream text-lg leading-snug mb-3 group-hover:text-gold transition-colors">
                        <?= e($article['title']) ?>
                    </h3>
                    <?php if (!empty($article['excerpt'])): ?>
                    <p class="text-sm text-soft leading-relaxed line-clamp-2 mb-6 flex-1">
                        <?= e($article['excerpt']) ?>
                    </p>
                    <?php else: ?>
                    <div class="flex-1"></div>
                    <?php endif; ?>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-border mt-auto">
                        <span class="text-[10px] uppercase tracking-wider text-muted">
                            <?= date('d M Y', strtotime($article['created_at'])) ?>
                        </span>
                        <span class="text-[10px] uppercase tracking-wider text-cream font-medium group-hover:underline">
                            Baca &rarr;
                        </span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php else: ?>
        <!-- Empty state -->
        <div class="text-center py-24 border border-border bg-dim rounded-xl">
            <svg class="w-12 h-12 text-muted mx-auto mb-4 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <p class="text-cream text-base font-medium mb-1">Belum Ada Jurnal</p>
            <p class="text-muted text-xs">Artikel dan tips wisata terbaru akan segera hadir.</p>
        </div>
        <?php endif; ?>
    </div>
</section>
