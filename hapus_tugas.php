<?php
include 'koneksi_tugas.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}
$id = intval($_GET['id']);
$cek = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = $id");
if (mysqli_num_rows($cek) === 0) {
    die("Produk tidak ditemukan.");
}

mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id") or die(mysqli_error($conn));
header("Location: index_tugas.php");
exit();
?>
