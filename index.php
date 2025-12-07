<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Data Siswa RPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Data Siswa Kelas IX - RPL</h2>

    <div class="d-flex justify-content-between mb-3">
        <a href="tambah.php" class="btn btn-primary">+ Tambah Siswa</a>
        
        <a href="cetak_pdf.php" target="_blank" class="btn btn-success">
            <i class="bi bi-printer"></i> Cetak Laporan PDF
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM siswa ORDER BY nis ASC");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $row['nis']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['kelas']; ?></td>
                        <td><?= $row['jurusan']; ?></td>
                        <td class="text-center">
                            <a href="edit.php?nis=<?= $row['nis']; ?>" class="btn btn-sm btn-warning text-white">Edit</a>
                            
                            <a href="hapus.php?nis=<?= $row['nis']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>