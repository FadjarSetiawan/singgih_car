<?php
// app/Models/AdminModel.php

class AdminModel {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    public function login($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM admins WHERE username = ?");
        $stmt->execute([$username]);
        $admin = $stmt->fetch();

        // Verifikasi password hash (Lebih aman dari sekadar MD5)
        if ($admin && password_verify($password, $admin['password'])) {
            return $admin;
        }
        return false;
    }
}
