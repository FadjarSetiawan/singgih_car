<?php
// index.php (Front Controller / Router Utama)

require_once 'config.php';

// 1. AUTOLOADER (Keajaiban Arsitektur Kelas Tinggi)
// Ini membuat kita tidak perlu require_once setiap file Controller/Model secara manual
spl_autoload_register(function ($class_name) {
    if (file_exists('app/Controllers/' . $class_name . '.php')) {
        require_once 'app/Controllers/' . $class_name . '.php';
    } elseif (file_exists('app/Models/' . $class_name . '.php')) {
        require_once 'app/Models/' . $class_name . '.php';
    }
});

// 2. TANGKAP URL DARI .HTACCESS
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';
$url = filter_var($url, FILTER_SANITIZE_URL);

// Hapus base folder 'singgih_car' dari URL jika XAMPP secara keliru memasukkannya
$baseFolder = 'singgih_car';
if (strpos($url, $baseFolder . '/') === 0) {
    $url = substr($url, strlen($baseFolder . '/'));
} elseif ($url === $baseFolder) {
    $url = 'home';
}

$urlParts = explode('/', $url);

// 3. DAFTAR RUTE URL -> CONTROLLER
// Ini peta jalan website kita. Kunci = Teks di URL, Nilai = Nama Controller
$routes = [
    'home'        => 'HomeController',
    'admin'       => 'AdminController',   
    'artikel'     => 'ArticleController', 
    'booking'     => 'BookingController',
    'armada'      => 'ArmadaController',
    'layanan'     => 'LayananController',
    'tentang'     => 'TentangController',
    'sitemap.xml' => 'SitemapController'
];

// Ambil segment URL pertama (contoh: 'artikel' dari /artikel/baca/1)
$routeKey = strtolower($urlParts[0]);

// 4. LOGIKA PENENTUAN CONTROLLER
if (array_key_exists($routeKey, $routes)) {
    $controllerName = $routes[$routeKey];
} else {
    // Jika rute tidak terdaftar, lemparkan ke Error 404
    $controllerName = 'ErrorController';
}

// 5. EKSEKUSI CONTROLLER
if (class_exists($controllerName)) {
    // Instansiasi Controller dan kirim koneksi Database ($pdo)
    $controller = new $controllerName($pdo);
    
    // Cek apakah ada Method yang dipanggil (segment URL ke-2, misal /artikel/detail)
    $methodName = isset($urlParts[1]) ? $urlParts[1] : 'index';
    
    if (method_exists($controller, $methodName)) {
        // Ambil parameter ekstra jika ada (segment URL ke-3 dst, misal ID artikel)
        $params = array_slice($urlParts, 2);
        
        // Eksekusi method di dalam controller dengan parameternya
        call_user_func_array([$controller, $methodName], $params);
    } else {
        // Jika method spesifik tidak ditemukan, jalankan method index() sebagai default
        $controller->index();
    }
} else {
    // Fallback jika file controller terhapus / belum dibuat
    die("Sistem Error: Controller '$controllerName' belum dibuat.");
}
?>