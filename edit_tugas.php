<?php
include 'koneksi_tugas.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}
$id = intval($_GET['id']);
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = $id") or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($result);
if (!$data) {
    die("Data produk dengan ID tersebut tidak ditemukan.");
}
if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama_produk']);
    $harga = intval($_POST['harga']);
    $stok = intval($_POST['stok']);
    $update = mysqli_query($conn, "UPDATE produk SET nama_produk='$nama', harga=$harga, stok=$stok WHERE id_produk=$id")
        or die("Gagal update: " . mysqli_error($conn));
    header("Location: index_tugas.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
    <h2>Edit Data Produk</h2>

    <form method="POST" class="mt-3">
        <div class="mb-3">
            <label class="form-label">Nama Produk:</label>
            <input type="text" name="nama_produk" class="form-control" value="<?= htmlspecialchars($data['nama_produk']); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga:</label>
            <input type="number" name="harga" class="form-control" value="<?= $data['harga']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok:</label>
            <input type="number" name="stok" class="form-control" value="<?= $data['stok']; ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <a href="index_tugas.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
