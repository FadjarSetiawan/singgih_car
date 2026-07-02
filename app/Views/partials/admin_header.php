<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle ?? 'Admin Panel') ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #F8FAFC; color: #1E293B; font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="antialiased flex h-screen overflow-hidden bg-[#F8FAFC]">

    <aside class="w-64 bg-white border-r border-slate-200 flex flex-col hidden md:flex h-full shrink-0">
        <div class="h-20 flex items-center px-8 border-b border-slate-200">
            <span class="text-xl font-bold tracking-tight text-slate-900">Singgih<span class="font-normal text-slate-500">Admin</span></span>
        </div>
        
        <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
            <a href="<?= BASE_URL ?>/admin" class="flex items-center gap-3 px-4 py-3 bg-slate-900 text-white rounded-xl font-medium transition-colors shadow-md shadow-slate-900/10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                Dashboard
            </a>
            <a href="<?= BASE_URL ?>/admin/cars" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl font-medium transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                Manajemen Mobil
            </a>
        </nav>
        
        <div class="p-4 border-t border-slate-200">
            <a href="<?= BASE_URL ?>/admin/logout" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 hover:text-slate-900 rounded-xl font-medium transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Keluar Sistem
            </a>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-full overflow-hidden relative">
        
        <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 md:hidden shrink-0">
            <span class="text-xl font-bold text-slate-900">Singgih<span class="font-normal text-slate-500">Admin</span></span>
            <a href="<?= BASE_URL ?>/admin/logout" class="text-slate-900 font-semibold text-sm">Keluar</a>
        </header>
        
        <div class="flex-1 overflow-y-auto p-6 lg:p-10">