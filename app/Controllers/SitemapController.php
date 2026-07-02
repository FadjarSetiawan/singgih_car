<?php
class SitemapController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        header("Content-Type: text/xml;charset=iso-8859-1");
        
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        // Base URLs
        $urls = [
            ['loc' => BASE_URL . '/', 'priority' => '1.0'],
            ['loc' => BASE_URL . '/armada', 'priority' => '0.9'],
            ['loc' => BASE_URL . '/layanan', 'priority' => '0.8'],
            ['loc' => BASE_URL . '/artikel', 'priority' => '0.8'],
            ['loc' => BASE_URL . '/tentang', 'priority' => '0.6'],
        ];

        // Fetch cars for sitemap
        $stmt = $this->pdo->query("SELECT id FROM cars");
        $cars = $stmt->fetchAll();
        foreach ($cars as $car) {
            $urls[] = [
                'loc' => BASE_URL . '/booking?car_id=' . $car['id'], 
                'priority' => '0.7'
            ];
        }

        // Fetch articles for sitemap
        $stmt = $this->pdo->query("SELECT slug FROM articles WHERE is_published = 1");
        $articles = $stmt->fetchAll();
        foreach ($articles as $article) {
            $urls[] = [
                'loc' => BASE_URL . '/artikel/detail/' . $article['slug'], 
                'priority' => '0.8'
            ];
        }

        foreach ($urls as $url) {
            echo '<url>';
            echo '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
            echo '<changefreq>weekly</changefreq>';
            echo '<priority>' . $url['priority'] . '</priority>';
            echo '</url>';
        }
        
        echo '</urlset>';
    }
}
