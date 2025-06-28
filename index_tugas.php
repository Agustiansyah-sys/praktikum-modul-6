<?php include 'koneksi_tugas.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
    <h2 class="mb-3">Daftar Produk</h2>
    <a href="tambah_tugas.php" class="btn btn-primary mb-3">+ Tambah Produk Baru</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $produk = mysqli_query($conn, "SELECT * FROM produk");
        $no = 1;
        while ($row = mysqli_fetch_assoc($produk)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_produk']; ?></td>
            <td><?= $row['harga']; ?></td>
            <td><?= $row['stok']; ?></td>
            <td>
                <a href="edit_tugas.php?id=<?= $row['id_produk']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus_tugas.php?id=<?= $row['id_produk']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus produk ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>
