<?php
// config.php
// Keamanan Session
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', 'Strict');
ini_set('session.use_strict_mode', 1);
session_start();

// MENDUGA NAMA FOLDER PROYEKMU ADALAH 'singgih_car'. 
// Ubah jika nama foldermu di htdocs berbeda (contoh: '/rental-mobil')
define('BASE_URL', 'https://singgihcar.web.id');

$host = 'localhost';
$dbname = 'kaizorat_singgihcar';
$username = 'kaizorat_usersinggihcar';
$password = 'DWA?.i-zHqiEyzk*';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Koneksi Database Gagal."); 
}

// Fungsi helper keamanan XSS
function e($string) {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

// Fungsi helper CSRF Token Generation
function csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Fungsi helper validasi CSRF Token
function verify_csrf($token) {
    if (!isset($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
        die("Validasi Keamanan Gagal (CSRF Token Mismatch).");
    }
    return true;
}
?>