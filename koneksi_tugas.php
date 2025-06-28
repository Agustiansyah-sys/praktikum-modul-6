<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_toko";
$port = 3307; 

$conn = new mysqli($host, $user, $pass, $db, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
