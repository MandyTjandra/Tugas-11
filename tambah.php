<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 500px;">
    <div class="card">
        <div class="card-header bg-primary text-white">Form Tambah Siswa</div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label>NIS</label>
                    <input type="text" name="nis" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="IX-A" required>
                </div>
                <div class="mb-3">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="Rekayasa Perangkat Lunak" readonly>
                </div>
                <button type="submit" name="simpan" class="btn btn-success">Simpan Data</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </form>

            <?php
            include 'koneksi.php';
            if(isset($_POST['simpan'])){
                $nis = $_POST['nis'];
                $nama = $_POST['nama'];
                $kelas = $_POST['kelas'];
                $jurusan = $_POST['jurusan'];

                $insert = mysqli_query($conn, "INSERT INTO siswa VALUES ('$nis', '$nama', '$kelas', '$jurusan')");
                if($insert){
                    echo "<script>alert('Berhasil disimpan!'); window.location='index.php';</script>";
                } else {
                    echo "Gagal: " . mysqli_error($conn);
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>