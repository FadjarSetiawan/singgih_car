<?php
class LayananController {
    private $carModel;

    public function __construct($pdo) {
        $this->carModel = new CarModel($pdo);
    }

    public function index() {
        $pageTitle = "Layanan Kami | SinggihCar";
        $pageDesc = "Pelajari berbagai layanan penyewaan kendaraan premium dari SinggihCar.";
        $cars = $this->carModel->getCars(20); // Ambil semua mobil untuk relasi layanan

        require_once 'app/Views/partials/header.php';
        require_once 'app/Views/layanan/index.php';
        require_once 'app/Views/partials/footer.php';
    }
}
