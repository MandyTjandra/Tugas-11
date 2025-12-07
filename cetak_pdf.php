<?php
require('fpdf.php');
include 'koneksi.php'; // Pakai file koneksi yang sama

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(277, 10, 'DAFTAR SISWA KELAS IX', 0, 1, 'C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(277, 10, 'JURUSAN REKAYASA PERANGKAT LUNAK', 0, 1, 'C');
$pdf->Cell(10, 15, '', 0, 1);

$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(220, 220, 220);
$pdf->Cell(30, 10, 'NIS', 1, 0, 'C', true);
$pdf->Cell(100, 10, 'NAMA SISWA', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'KELAS', 1, 0, 'C', true);
$pdf->Cell(107, 10, 'JURUSAN', 1, 1, 'C', true);

$pdf->SetFont('Arial','',10);
$query = mysqli_query($conn, "SELECT * FROM siswa ORDER BY nis ASC"); // Tambah Order By

while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(30, 10, $row['nis'], 1, 0, 'C');
    $pdf->Cell(100, 10, $row['nama'], 1, 0, 'L');
    $pdf->Cell(40, 10, $row['kelas'], 1, 0, 'C');
    $pdf->Cell(107, 10, $row['jurusan'], 1, 1, 'L');
}

$pdf->Output();
?>