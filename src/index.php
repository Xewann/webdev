<?php
$host = 'db'; // Sesuai dengan nama service di docker-compose
$port = '5432';
$dbname = 'webdev_db';
$user = 'yumna';
$password = 'root';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "Koneksi ke PostgreSQL berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>
