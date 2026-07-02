<!-- ============================================================ -->
<!-- BOOKING FORM: Luxury Dark 2-Column Responsive Layout         -->
<!-- ============================================================ -->
<div class="bg-night pt-20 min-h-screen">
    <div class="max-w-6xl mx-auto px-6 py-12">

        <!-- Progress Indicator -->
        <div class="flex items-center gap-3 mb-10 text-[10px] uppercase tracking-[0.2em] font-semibold text-soft">
            <div class="flex items-center gap-2.5 text-cream">
                <span class="w-5 h-5 rounded-full bg-cream text-night flex items-center justify-center font-bold">1</span>
                Pilih Armada
            </div>
            <div class="flex-1 h-px bg-border"></div>
            <div class="flex items-center gap-2.5 text-cream">
                <span class="w-5 h-5 rounded-full bg-cream text-night flex items-center justify-center font-bold">2</span>
                Isi Data
            </div>
            <div class="flex-1 h-px bg-border"></div>
            <div class="flex items-center gap-2.5 text-muted">
                <span class="w-5 h-5 rounded-full border border-border flex items-center justify-center">3</span>
                Konfirmasi WA
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Form Card Kiri -->
            <div class="lg:col-span-8">
                <div class="bg-dim rounded-xl border border-border p-8 shadow-2xl">
                    <h1 class="font-serif text-cream text-2xl mb-6">Formulir Reservasi</h1>

                    <form action="<?= e(BASE_URL) ?>/booking/store" method="POST" class="space-y-8">
                        <input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">
                        <?php if(isset($car)): ?>
                            <input type="hidden" name="car_id" value="<?= e($car['id']) ?>">
                        <?php else: ?>
                            <input type="hidden" name="car_id" value="">
                        <?php endif; ?>

                        <!-- Seksi 1: Data Diri -->
                        <div>
                            <p class="text-[9px] uppercase tracking-[0.25em] text-muted mb-4 pb-2 border-b border-border">01. Informasi Kontak</p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-medium text-soft mb-2">Nama Lengkap</label>
                                    <input type="text" name="name" 
                                           class="w-full bg-night border border-border rounded px-4 py-3 text-cream placeholder:text-muted focus:ring-1 focus:ring-cream focus:border-cream outline-none text-sm transition-all" 
                                           required placeholder="Nama sesuai identitas KTP/Paspor">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-soft mb-2">Nomor WhatsApp</label>
                                    <input type="tel" name="phone" 
                                           class="w-full bg-night border border-border rounded px-4 py-3 text-cream placeholder:text-muted focus:ring-1 focus:ring-cream focus:border-cream outline-none text-sm transition-all" 
                                           required placeholder="Contoh: 08123456789">
                                </div>
                            </div>
                        </div>

                        <!-- Seksi 2: Detail Sewa -->
                        <div>
                            <p class="text-[9px] uppercase tracking-[0.25em] text-muted mb-4 pb-2 border-b border-border">02. Detail Perjalanan</p>
                            <div class="space-y-5">
                                <div>
                                    <label class="block text-xs font-medium text-soft mb-2">Lokasi Penjemputan / Alamat Pengantaran</label>
                                    <input type="text" name="pickup_location" value="<?= e($location ?? '') ?>" 
                                           class="w-full bg-night border border-border rounded px-4 py-3 text-cream placeholder:text-muted focus:ring-1 focus:ring-cream focus:border-cream outline-none text-sm transition-all" 
                                           required placeholder="Contoh: Bandara YIA / Stasiun Tugu / Nama Hotel Anda">
                                </div>
                                
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-xs font-medium text-soft mb-2">Tanggal Mulai Sewa</label>
                                        <input type="date" name="start_date" value="<?= e($startDate ?? '') ?>" 
                                               class="w-full bg-night border border-border rounded px-4 py-3 text-cream focus:ring-1 focus:ring-cream focus:border-cream outline-none text-sm transition-all [color-scheme:dark]" 
                                               required>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-medium text-soft mb-2">Tanggal Selesai Sewa</label>
                                        <input type="date" name="end_date" value="<?= e($endDate ?? '') ?>" 
                                               class="w-full bg-night border border-border rounded px-4 py-3 text-cream focus:ring-1 focus:ring-cream focus:border-cream outline-none text-sm transition-all [color-scheme:dark]" 
                                               required>
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-xs font-medium text-soft mb-2">Catatan Tambahan <span class="text-muted font-normal">(opsional)</span></label>
                                    <textarea name="special_request" rows="3" 
                                              class="w-full bg-night border border-border rounded px-4 py-3 text-cream placeholder:text-muted focus:ring-1 focus:ring-cream focus:border-cream outline-none text-sm transition-all resize-none" 
                                              placeholder="Informasi tambahan: jam penjemputan khusus, permintaan kursi bayi, dekorasi pengantin, dll."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit" 
                                    class="w-full flex items-center justify-center gap-3 bg-cream hover:bg-white text-night font-bold text-xs uppercase tracking-[0.2em] py-4 rounded transition-colors shadow-lg">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.125-.337-.152-.894-.356-1.748-.99-1.282-.954-2.138-2.39-2.385-2.72-.247-.329-.571-.856-.575-1.488-.004-.627.319-.941.432-1.054.113-.112.247-.141.328-.141.082 0 .164 0 .235.004.075.004.175-.029.273.208.1.242.341.83.371.892.03.063.05.137.016.204-.034.067-.05.108-.101.166-.05.058-.108.125-.152.175-.05.054-.103.113-.046.212.057.099.255.421.545.682.375.337.697.442.796.492.099.05.157.042.216-.025.059-.067.255-.296.324-.396.069-.1.138-.083.228-.05.091.033.575.271.674.321.099.05.165.075.189.117.024.041.024.237-.12.641z"/></svg>
                                Lanjutkan Konfirmasi WhatsApp
                            </button>
                            <p class="text-center text-[10px] text-muted mt-3">Sistem kami akan memformat pesan WhatsApp otomatis untuk finalisasi reservasi Anda.</p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sidebar Kanan -->
            <div class="lg:col-span-4">
                <?php if(isset($car)): ?>
                <div class="bg-dim rounded-xl border border-border p-6 shadow-sm sticky top-28">
                    <p class="text-[9px] uppercase tracking-[0.25em] text-muted mb-4">Armada Pilihan</p>
                    
                    <div class="bg-night rounded-lg border border-border p-4 flex items-center gap-4 mb-6">
                        <img src="<?= e($car['image_url']) ?>" alt="<?= e($car['name']) ?>" class="w-16 h-16 object-contain drop-shadow-lg">
                        <div>
                            <p class="font-serif text-cream text-base font-semibold"><?= e($car['name']) ?></p>
                            <p class="text-xs text-soft">Rp <?= number_format($car['price_per_day'], 0, ',', '.') ?> <span class="text-muted">/ hari</span></p>
                        </div>
                    </div>

                    <div class="space-y-3.5 text-xs text-soft border-t border-border pt-5">
                        <div class="flex items-center gap-2"><span class="text-gold">&bull;</span> Harga transparan &amp; final</div>
                        <div class="flex items-center gap-2"><span class="text-gold">&bull;</span> BBM area dalam kota termasuk</div>
                        <div class="flex items-center gap-2"><span class="text-gold">&bull;</span> Tanpa tambahan komisi concierge</div>
                    </div>
                </div>
                <?php else: ?>
                <div class="bg-dim rounded-xl border border-border p-6 shadow-sm">
                    <h3 class="font-serif text-cream text-base mb-2">Butuh Bantuan?</h3>
                    <p class="text-soft text-xs leading-relaxed mb-4">Tim konsultan reservasi Singgih Car siap membantu Anda mencocokkan rute perjalanan dengan armada terbaik.</p>
                    <a href="https://wa.me/6282224460099" target="_blank" class="text-xs text-cream hover:underline font-medium">Hubungi Layanan Hub &rarr;</a>
                </div>
                <?php endif; ?>

                <div class="mt-4 p-5 bg-dim/50 rounded-xl border border-border">
                    <p class="text-[10px] text-muted leading-relaxed">Privasi Terjamin: Data pribadi Anda diproses secara rahasia dan hanya digunakan untuk kepentingan administrasi sewa kendaraan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
