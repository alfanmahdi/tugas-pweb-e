<?php
// Memanggil library FPDF
require('fpdf.php');

// Instance object dan mengatur halaman PDF
$pdf = new FPDF('l', 'mm', 'A5'); // l=Landscape, mm=Milimeter, A5=Ukuran Kertas
$pdf->AddPage();

// Mengatur jenis font dan judul
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 7, 'SEKOLAH MENENGAH KEJURUAN NEGERI 2 LANGSA', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK', 0, 1, 'C');

// Memberikan spasi agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

// Header tabel
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 6, 'NIM', 1, 0, 'C');
$pdf->Cell(85, 6, 'NAMA MAHASISWA', 1, 0, 'C');
$pdf->Cell(27, 6, 'NO HP', 1, 0, 'C');
$pdf->Cell(25, 6, 'TANGGAL LHR', 1, 1, 'C');

// Mengambil data dari database
$pdf->SetFont('Arial', '', 10);
include 'connection.php';
$mahasiswa = mysqli_query($connect, "SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(20, 6, $row['nim'], 1, 0);
    $pdf->Cell(85, 6, $row['nama_lengkap'], 1, 0);
    $pdf->Cell(27, 6, $row['no_hp'], 1, 0);
    $pdf->Cell(25, 6, $row['tanggal_lahir'], 1, 1);
}

// Menyimpan dan menampilkan PDF
$pdf->Output();
?>
