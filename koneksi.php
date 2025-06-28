<?php 
$servername = "localhost";      
$username = "root";             
$password = "";                 
$dbname = "db_perusahaan";      
$port = "3307";                 

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
