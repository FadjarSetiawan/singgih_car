<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-900 mb-2">Selamat datang, <?= e($_SESSION['admin_username']) ?>!</h1>
    <p class="text-slate-500">Ringkasan sistem operasional rental mobil Anda hari ini.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold text-slate-500 mb-1">Total Armada</p>
            <h3 class="text-3xl font-bold text-slate-900">3</h3>
        </div>
        <div class="w-12 h-12 bg-slate-100 text-slate-900 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold text-slate-500 mb-1">Pesanan Aktif</p>
            <h3 class="text-3xl font-bold text-slate-900">0</h3>
        </div>
        <div class="w-12 h-12 bg-slate-100 text-slate-900 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold text-slate-500 mb-1">Artikel Terbit</p>
            <h3 class="text-3xl font-bold text-slate-900">0</h3>
        </div>
        <div class="w-12 h-12 bg-slate-100 text-slate-900 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl border border-slate-200 p-8 text-center text-slate-500 shadow-sm">
    <p>Sistem Panel Admin berhasil diinisialisasi dengan tema monokrom.</p>
</div>