<?php
include 'koneksi.php';

// Cek apakah ada parameter NIS di URL
if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];
    $ambil = mysqli_query($conn, "SELECT * FROM siswa WHERE nis = '$nis'");
    $data = mysqli_fetch_array($ambil);
} else {
    header("Location: index.php"); // Jika tidak ada NIS, kembalikan ke index
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 500px;">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <strong>Form Edit Data Siswa</strong>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label>NIS (Tidak bisa diubah)</label>
                    <input type="text" name="nis" class="form-control" value="<?= $data['nis'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="<?= $data['kelas'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?= $data['jurusan'] ?>" readonly>
                </div>
                
                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary">Batal</a>
                    <button type="submit" name="update" class="btn btn-primary">Update Data</button>
                </div>
            </form>

            <?php
            // Proses Update Data
            if (isset($_POST['update'])) {
                $nis_lama = $_POST['nis'];
                $nama_baru = $_POST['nama'];
                $kelas_baru = $_POST['kelas'];
                // Jurusan tidak diupdate karena readonly, tapi kalau mau bisa ditambahkan

                $update = mysqli_query($conn, "UPDATE siswa SET 
                                               nama='$nama_baru', 
                                               kelas='$kelas_baru' 
                                               WHERE nis='$nis_lama'");
                
                if ($update) {
                    echo "<script>
                            alert('Data Berhasil Diupdate!');
                            window.location='index.php';
                          </script>";
                } else {
                    echo "<div class='alert alert-danger mt-3'>Gagal update: " . mysqli_error($conn) . "</div>";
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>