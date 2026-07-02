<?php
class ArmadaController {
    private $carModel;

    public function __construct($pdo) {
        $this->carModel = new CarModel($pdo);
    }

    public function index() {
        $category = $_GET['category'] ?? 'all';
        $cars = $this->carModel->getCars(20, $category); // Ambil lebih banyak untuk halaman armada
        $pageTitle = "Koleksi Armada | SinggihCar";
        $pageDesc = "Jelajahi koleksi mobil mewah kami untuk kebutuhan perjalanan Anda.";

        require_once 'app/Views/partials/header.php';
        require_once 'app/Views/armada/index.php';
        require_once 'app/Views/partials/footer.php';
    }

    public function detail() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: ' . BASE_URL . '/armada');
            exit;
        }

        $car = $this->carModel->getCarById($id);
        if (!$car) {
            header('Location: ' . BASE_URL . '/armada');
            exit;
        }

        $pageTitle = $car['name'] . " | SinggihCar";
        $pageDesc = "Sewa " . $car['name'] . " premium di Yogyakarta.";

        require_once 'app/Views/partials/header.php';
        require_once 'app/Views/armada/detail.php';
        require_once 'app/Views/partials/footer.php';
    }
}
