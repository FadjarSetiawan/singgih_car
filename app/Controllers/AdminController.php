<?php
// app/Controllers/AdminController.php

class AdminController {
    private $pdo;
    private $adminModel;

    // 1. Constructor (Untuk inisialisasi database dan model)
    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->adminModel = new AdminModel($pdo);
    }

    // 2. Fungsi helper untuk mengecek apakah admin sudah login
    private function checkAuth() {
        if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
            header("Location: " . BASE_URL . "/admin/login");
            exit;
        }
    }

    // 3. Halaman Dashboard Utama (FUNGSI INI YANG TADI HILANG)
    public function index() {
        $this->checkAuth(); // Lindungi halaman ini
        
        $pageTitle = "Dashboard Admin | SinggihCar";
        
        // Memanggil View untuk Admin
        require_once 'app/Views/partials/admin_header.php';
        require_once 'app/Views/admin/index.php';
        require_once 'app/Views/partials/admin_footer.php';
    }

    // 4. Halaman dan Proses Login
    public function login() {
        // Jika sudah login, langsung lempar ke dashboard
        if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
            header("Location: " . BASE_URL . "/admin");
            exit;
        }

        $error = '';

        // Proses jika form login disubmit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $admin = $this->adminModel->login($username, $password);

            if ($admin) {
                // Set sesi jika berhasil
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_username'] = $admin['username'];
                header("Location: " . BASE_URL . "/admin");
                exit;
            } else {
                $error = "Username atau Password salah.";
            }
        }

        // Tampilkan halaman form login
        require_once 'app/Views/admin/login.php';
    }

    // 5. Proses Logout
    public function logout() {
        session_unset();
        session_destroy();
        header("Location: " . BASE_URL . "/admin/login");
        exit;
    }
}
?>