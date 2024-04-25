<?php
require_once(__DIR__ . '/../vendor/tecnickcom/tcpdf/tcpdf.php');

// Ambil ID mahasiswa dari parameter URL
$id_mhs = isset($_GET['id_mhs']) ? $_GET['id_mhs'] : null;

// Validasi ID mahasiswa
if (!$id_mhs) {
    die("ID mahasiswa tidak valid.");
}

// Establish database connection
$db = mysqli_connect('localhost', 'root', '', 'db_mhs');

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data mahasiswa berdasarkan ID
$query = "SELECT * FROM mahasiswa WHERE id_mhs = '$id_mhs'";
$result = mysqli_query($db, $query);

// Create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Putri');
$pdf->SetTitle('Detail Mahasiswa');
$pdf->SetSubject('Detail Mahasiswa');
$pdf->SetKeywords('Detail, Mahasiswa, PDF');

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
$pdf->SetMargins(15, 15, 15);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);

// Add title
$pdf->Cell(0, 14, 'Detail Mahasiswa', 0, 1, 'C');

// Periksa apakah data mahasiswa ditemukan
if (mysqli_num_rows($result) > 0) {
    // Ambil data mahasiswa
    $row = mysqli_fetch_assoc($result);

    // Tampilkan data mahasiswa dalam PDF
    $pdf->Cell(40, 10, 'ID Mahasiswa:', 0, 0, 'L');
    $pdf->Cell(0, 10, $row['id_mhs'], 0, 1, 'L');
    $pdf->Cell(40, 10, 'NIM:', 0, 0, 'L');
    $pdf->Cell(0, 10, $row['nim'], 0, 1, 'L');
    $pdf->Cell(40, 10, 'Nama:', 0, 0, 'L');
    $pdf->Cell(0, 10, $row['nama'], 0, 1, 'L');
    $pdf->Cell(40, 10, 'Jenis Kelamin:', 0, 0, 'L');
    $pdf->Cell(0, 10, $row['jenis_kelamin'], 0, 1, 'L');
    $pdf->Cell(40, 10, 'Jurusan:', 0, 0, 'L');
    $pdf->Cell(0, 10, $row['jurusan'], 0, 1, 'L');
    $pdf->Cell(40, 10, 'Alamat:', 0, 0, 'L');
    $pdf->Cell(0, 10, $row['alamat'], 0, 1, 'L');
} else {
    die("Data mahasiswa dengan ID $id_mhs tidak ditemukan.");
}

// Close and output PDF document
$pdf->Output('detail_mahasiswa.pdf', 'I');

// Close database connection
mysqli_close($db);
