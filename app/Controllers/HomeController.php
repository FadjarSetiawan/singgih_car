<?php
class HomeController {
    private $carModel;

    public function __construct($pdo) {
        // Instansiasi Model
        $this->carModel = new CarModel($pdo);
    }

    public function index() {
        // 1. Ambil data dari Model
        $cars = $this->carModel->getCars(3);
        
        // 2. Siapkan variabel untuk View (misal Title Halaman)
        $pageTitle = "SinggihCar | Sewa Mobil Mudah & Nyaman";

        // 3. Panggil Views (Partials & Body)
        require_once 'app/Views/partials/header.php';
        require_once 'app/Views/home/index.php';
        require_once 'app/Views/partials/footer.php';
    }
}
