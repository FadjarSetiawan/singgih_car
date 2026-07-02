<?php
class ArticleController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        $stmt = $this->pdo->query("SELECT * FROM articles WHERE is_published = 1 ORDER BY created_at DESC");
        $articles = $stmt->fetchAll();

        $pageTitle = "Jurnal Perjalanan & Panduan Wisata | SinggihCar";
        $pageDesc = "Temukan inspirasi perjalanan, panduan wisata Yogyakarta, dan tips sewa mobil eksklusif di Sleman dan sekitarnya.";

        require_once 'app/Views/partials/header.php';
        require_once 'app/Views/artikel/index.php';
        require_once 'app/Views/partials/footer.php';
    }

    public function detail($slug = '') {
        if (!$slug) {
            header('Location: ' . BASE_URL . '/artikel');
            exit;
        }

        $stmt = $this->pdo->prepare("SELECT * FROM articles WHERE slug = ? AND is_published = 1");
        $stmt->execute([$slug]);
        $article = $stmt->fetch();

        if (!$article) {
            header('Location: ' . BASE_URL . '/artikel');
            exit;
        }

        $pageTitle = $article['title'] . " | SinggihCar Yogyakarta";
        $pageDesc = $article['excerpt'];

        require_once 'app/Views/partials/header.php';
        require_once 'app/Views/artikel/detail.php';
        require_once 'app/Views/partials/footer.php';
    }
}
