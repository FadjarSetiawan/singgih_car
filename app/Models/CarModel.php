<?php
class CarModel {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    // Mengambil data mobil dengan opsi filter kategori
    public function getCars($limit = 3, $category = null) {
        if ($category && $category !== 'all') {
            $stmt = $this->db->prepare("SELECT * FROM cars WHERE category = :cat LIMIT :limit");
            $stmt->bindValue(':cat', $category, PDO::PARAM_STR);
            $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        
        $stmt = $this->db->query("SELECT * FROM cars LIMIT " . (int)$limit);
        return $stmt->fetchAll();
    }

    // Mengambil detail satu mobil berdasarkan ID
    public function getCarById($id) {
        $stmt = $this->db->prepare("SELECT * FROM cars WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
