<?php
class Koneksi {
    public static function connect() {
        $dbUrl = $_ENV('POSTGRES_URL') ?? getenv('POSTGRES_URL');
        
        try {
            $pdo = new PDO($dbUrl);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}