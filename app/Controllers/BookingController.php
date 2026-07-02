<?php
class BookingController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        $carId = $_GET['car_id'] ?? null;
        $location = $_GET['location'] ?? null;
        $startDate = $_GET['start_date'] ?? '';
        $endDate = $_GET['end_date'] ?? '';

        $car = null;
        if ($carId) {
            $stmt = $this->pdo->prepare("SELECT * FROM cars WHERE id = ?");
            $stmt->execute([$carId]);
            $car = $stmt->fetch();
        }

        $pageTitle = "Formulir Reservasi | SinggihCar";
        $pageDesc = "Lengkapi data reservasi Anda untuk pengalaman mobilitas premium bersama SinggihCar.";

        require_once 'app/Views/partials/header.php';
        require_once 'app/Views/booking/form.php';
        require_once 'app/Views/partials/footer.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ' . BASE_URL . '/');
            exit;
        }

        $name = $_POST['name'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $carId = !empty($_POST['car_id']) ? (int)$_POST['car_id'] : null;
        $location = $_POST['pickup_location'] ?? '';
        $startDate = $_POST['start_date'] ?? '';
        $endDate = $_POST['end_date'] ?? '';
        $specialRequest = $_POST['special_request'] ?? '';

        // Simpan ke database
        $stmt = $this->pdo->prepare("INSERT INTO bookings (car_id, name, phone, pickup_location, start_date, end_date, special_request) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$carId, $name, $phone, $location, $startDate, $endDate, $specialRequest]);
        
        $bookingId = $this->pdo->lastInsertId();

        // Ambil nama mobil jika ada
        $carName = "Menunggu Konfirmasi";
        if ($carId) {
            $stmtCar = $this->pdo->prepare("SELECT name FROM cars WHERE id = ?");
            $stmtCar->execute([$carId]);
            $car = $stmtCar->fetch();
            if ($car) $carName = $car['name'];
        }

        // Siapkan pesan WhatsApp (Faktur Digital)
        $adminPhone = '6282224460099';
        $message = "🏆 *SINGGIHCAR - RESERVASI BARU* 🏆\n";
        $message .= "ID Reservasi: #SC-" . str_pad($bookingId, 4, '0', STR_PAD_LEFT) . "\n\n";
        $message .= "👤 *Detail Pelanggan:*\n";
        $message .= "Nama: " . $name . "\n";
        $message .= "Telepon: " . $phone . "\n\n";
        $message .= "🚘 *Detail Layanan:*\n";
        $message .= "Armada: " . $carName . "\n";
        $message .= "Lokasi Jemput: " . $location . "\n";
        $message .= "Tgl Ambil: " . $startDate . "\n";
        $message .= "Tgl Kembali: " . $endDate . "\n";
        
        if (!empty($specialRequest)) {
            $message .= "\n📝 *Catatan Khusus:*\n" . $specialRequest . "\n";
        }
        
        $message .= "\nMohon konfirmasi ketersediaan dan rincian pembayarannya. Terima kasih.";

        $whatsappUrl = "https://wa.me/" . $adminPhone . "?text=" . urlencode($message);

        // Redirect ke WhatsApp
        header("Location: " . $whatsappUrl);
        exit;
    }
}
