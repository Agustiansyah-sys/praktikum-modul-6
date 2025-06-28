<?php
include 'koneksi.php';

$id = $_POST['id'] ?? null;
$nama = $_POST['nama'] ?? null;
$jabatan = $_POST['jabatan'] ?? null;
$email = $_POST['email'] ?? null;

if ($id && $nama && $jabatan && $email) {
    $sql = "UPDATE karyawan SET nama='$nama', jabatan='$jabatan', email='$email' WHERE id=$id";
    if ($conn->query($sql)) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Gagal update: " . $conn->error;
    }
} else {
    echo "Data tidak lengkap!";
}
?>
