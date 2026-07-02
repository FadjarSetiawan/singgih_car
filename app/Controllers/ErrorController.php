<?php
// app/Controllers/ErrorController.php

class ErrorController {
    
    public function __construct($pdo = null) {
        // Pdo tidak terlalu dibutuhkan di halaman 404, tapi kita siapkan agar seragam
    }
    
    public function index() {
        $pageTitle = "404 - Halaman Tidak Ditemukan | SinggihCar";
        
        // Panggil header
        require_once 'app/Views/partials/header.php';
        
        // Tampilan khusus 404 yang bersih dan terang
        echo '
        <div class="relative pt-40 pb-20 min-h-[70vh] flex items-center justify-center overflow-hidden bg-slate-50">
            <!-- Background element -->
            <div class="absolute inset-0 z-0 flex items-center justify-center opacity-5 pointer-events-none">
                <span class="text-[20rem] md:text-[30rem] font-bold text-slate-900 leading-none">404</span>
            </div>
            
            <div class="relative z-10 text-center px-6 max-w-2xl mx-auto">
                <span class="text-brand-accent uppercase tracking-widest text-xs font-bold mb-6 block bg-blue-50 border border-blue-100 rounded-full px-6 py-2 w-max mx-auto shadow-sm">KODE STATUS 404</span>
                <h1 class="text-5xl md:text-7xl font-bold text-slate-900 mb-6 tracking-tight">Halaman Tidak Ditemukan</h1>
                <p class="text-lg text-slate-600 mb-12 leading-relaxed">Halaman yang Anda tuju mungkin telah dialihkan, dihapus, atau tidak pernah ada. Silakan kembali ke beranda untuk menjelajahi layanan kami.</p>
                <a href="' . BASE_URL . '/" class="bg-brand-accent hover:bg-brand-accentHover text-white tracking-widest text-sm font-bold px-10 py-4 rounded-full inline-block transition-colors shadow-md">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
        ';
        
        // Panggil footer
        require_once 'app/Views/partials/footer.php';
    }
}
