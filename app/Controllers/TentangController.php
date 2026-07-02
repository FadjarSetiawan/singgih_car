<?php
class TentangController {
    public function __construct($pdo) {
        // Halaman statis
    }

    public function index() {
        $pageTitle = "Tentang Kami | SinggihCar";
        $pageDesc = "Mengenal lebih dekat visi dan misi SinggihCar dalam industri rental mobil premium.";

        require_once 'app/Views/partials/header.php';
        require_once 'app/Views/tentang/index.php';
        require_once 'app/Views/partials/footer.php';
    }
}
