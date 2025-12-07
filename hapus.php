<?php
include 'koneksi.php';

if(isset($_GET['nis'])){
    $nis = $_GET['nis'];
    $hapus = mysqli_query($conn, "DELETE FROM siswa WHERE nis = '$nis'");
    
    if($hapus){
        echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location='index.php';</script>";
    }
}
?>