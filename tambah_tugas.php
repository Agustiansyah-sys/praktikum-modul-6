<?php include 'koneksi_tugas.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
    <h2>Tambah Produk Baru</h2>

    <form method="POST" class="mt-3">
        <div class="mb-3">
            <label class="form-label">Nama Produk:</label>
            <input type="text" name="nama_produk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga:</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok:</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
        <a href="index_tugas.php" class="btn btn-secondary">Batal</a>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $query = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', '$harga', '$stok')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Data berhasil disimpan'); window.location='index_tugas.php';</script>";
            exit();
        } else {
            echo "<p class='text-danger mt-3'>Gagal menyimpan data: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>
</body>
</html>
