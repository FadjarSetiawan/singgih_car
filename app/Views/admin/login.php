<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | SinggihCar</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F8FAFC; }</style>
</head>
<body class="min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-md bg-white rounded-3xl shadow-xl shadow-slate-200/50 p-8 border border-slate-100">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Login Panel</h1>
            <p class="text-sm text-slate-500">Masukkan akses administrator SinggihCar.</p>
        </div>

        <?php if(!empty($error)): ?>
            <div class="bg-red-50 text-red-600 p-4 rounded-xl text-sm font-medium mb-6">
                <?= e($error) ?>
            </div>
        <?php endif; ?>

<form action="<?= BASE_URL ?>/admin/login" method="POST" class="space-y-5">
                <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Username</label>
                <input type="text" name="username" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 bg-slate-50 text-slate-900">
            </div>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 bg-slate-50 text-slate-900">
            </div>
            <button type="submit" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-semibold py-3.5 rounded-xl transition-colors mt-4">
                Masuk ke Dashboard
            </button>
        </form>
        <div class="mt-8 text-center text-sm text-slate-400">
            &copy; <?= date('Y') ?> SinggihCar Systems
        </div>
    </div>
</body>
</html>