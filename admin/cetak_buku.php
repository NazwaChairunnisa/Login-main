<?php

// Sambungkan ke pdf library
require '../library/fpdf.php';
include '../koneksi_db.php';

// instansiasi objek dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();

// Buat judulnya disini
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA BUKU',0,0,'C');

// Buat pengaturan tabel
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(50,7,'JUDUL',1,0,'C');
$pdf->Cell(75,7,'Pengarang',1,0,'C');
$pdf->Cell(55,7,'Tahun Terbit',1,0,'C');

// Buat pengaturan tabel ISI
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"select * from buku");
while($meledak = mysqli_fetch_array($data)){
    $pdf->Cell(10,7,$no++,1,0,'C');
    $pdf->Cell(50,7,$meledak['judul_buku'],1,0,'C');
    $pdf->Cell(75,7,$meledak['pengarang'],1,0,'C');
    $pdf->Cell(55,7,$meledak['tahun_terbit'],1,1,'C');
}

$pdf->Output();


?>