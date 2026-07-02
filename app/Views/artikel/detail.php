<!-- =========================================================== -->
<!-- ARTIKEL DETAIL: Luxury Dark Magazine Layout                 -->
<!-- =========================================================== -->
<article class="bg-night pt-20">

    <!-- Breadcrumb -->
    <div class="border-b border-border bg-dim">
        <div class="max-w-4xl mx-auto px-6 py-4">
            <nav class="flex items-center gap-2 text-xs text-soft uppercase tracking-wider">
                <a href="<?= e(BASE_URL) ?>/" class="hover:text-cream transition-colors">Beranda</a>
                <svg class="w-3.5 h-3.5 text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <a href="<?= e(BASE_URL) ?>/artikel" class="hover:text-cream transition-colors">Artikel</a>
                <svg class="w-3.5 h-3.5 text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-cream font-medium line-clamp-1 max-w-[200px] sm:max-w-none"><?= e($article['title']) ?></span>
            </nav>
        </div>
    </div>

    <!-- Header Artikel -->
    <div class="max-w-3xl mx-auto px-6 pt-12 pb-8">
        <span class="inline-block bg-dim border border-border text-gold text-[9px] uppercase tracking-[0.2em] font-semibold px-3 py-1 rounded mb-5">Panduan Perjalanan</span>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif text-cream leading-tight mb-6">
            <?= e($article['title']) ?>
        </h1>
        
        <div class="flex flex-wrap items-center gap-4 text-xs text-soft pb-6 border-b border-border uppercase tracking-wider">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                <?= date('d F Y', strtotime($article['created_at'])) ?>
            </div>
            <span class="text-muted hidden sm:inline">&bull;</span>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                SinggihCar Atelier
            </div>
            <span class="text-muted hidden sm:inline">&bull;</span>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Yogyakarta
            </div>
        </div>
    </div>

    <!-- Foto Utama Artikel (Lebih lebar dari konten teks) -->
    <?php if (!empty($article['image_url'])): ?>
    <div class="max-w-5xl mx-auto px-6 mb-12">
        <div class="w-full rounded-xl overflow-hidden shadow-2xl border border-border" style="aspect-ratio: 16/7;">
            <img
                src="<?= e($article['image_url']) ?>"
                alt="<?= e($article['title']) ?>"
                class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700"
                onerror="this.parentElement.style.display='none';"
            >
        </div>
    </div>
    <?php endif; ?>

    <!-- Teks Konten Utama (Editorial Readability) -->
    <div class="max-w-2xl mx-auto px-6 pb-20">
        <div class="prose prose-invert prose-lg max-w-none
            prose-headings:font-serif prose-headings:text-cream prose-headings:font-semibold prose-headings:tracking-tight
            prose-h2:text-2xl prose-h2:mt-10 prose-h2:mb-4
            prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
            prose-p:text-soft prose-p:leading-relaxed prose-p:mb-6 prose-p:text-sm md:prose-p:text-base
            prose-a:text-cream prose-a:underline hover:prose-a:text-gold transition-colors
            prose-img:rounded-lg prose-img:border prose-img:border-border prose-img:my-8
            prose-ul:text-soft prose-li:mb-2
            prose-strong:text-cream prose-strong:font-semibold
            prose-blockquote:border-gold prose-blockquote:text-soft prose-blockquote:bg-dim prose-blockquote:rounded prose-blockquote:px-6 prose-blockquote:py-4 prose-blockquote:not-italic prose-blockquote:font-serif">
            <?= $article['content'] ?>
        </div>
    </div>

    <!-- Bottom CTA Bar -->
    <div class="bg-dim border-t border-border">
        <div class="max-w-4xl mx-auto px-6 py-14">
            <div class="bg-night border border-border rounded-xl p-8 md:p-10 flex flex-col md:flex-row items-center gap-8 justify-between">
                <div class="text-center md:text-left">
                    <h3 class="text-xl font-serif text-cream mb-2">Siap untuk Perjalanan Yogyakarta?</h3>
                    <p class="text-soft text-xs leading-relaxed max-w-md">Layanan sewa mobil premium dan chauffeur kami siap mempermudah agenda bisnis atau liburan berkelas Anda.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 flex-shrink-0">
                    <a href="<?= e(BASE_URL) ?>/armada"
                       class="text-[10px] uppercase tracking-[0.2em] bg-cream text-night px-6 py-3 hover:bg-white transition-colors duration-300 font-medium text-center">
                        Pilih Kendaraan
                    </a>
                    <a href="https://wa.me/6282224460099" target="_blank"
                       class="text-[10px] uppercase tracking-[0.2em] border border-cream/40 text-cream px-6 py-3 hover:bg-cream hover:text-night transition-all duration-300 font-medium text-center">
                        Chat WhatsApp
                    </a>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <a href="<?= e(BASE_URL) ?>/artikel" class="text-xs text-soft hover:text-cream transition-colors">
                    &larr; Kembali ke Semua Artikel
                </a>
            </div>
        </div>
    </div>
</article>
