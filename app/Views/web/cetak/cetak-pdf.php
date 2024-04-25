<?php
require_once(__DIR__ . '/../vendor/tecnickcom/tcpdf/tcpdf.php');

// Create new PDF document
$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Putri');
$pdf->SetTitle('Laporan Data Mahasiswa');
$pdf->SetSubject('Berikut Adalah Laporan Data Mahasiswa');
$pdf->SetKeywords('Data, Mahasiswa, PDF, Laporan');

// Set default header data
$pdf->SetHeaderData('', 0, 'Laporan Data Mahasiswa', 'Berikut Adalah Laporan Data Mahasiswa');

// Set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

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
$pdf->SetFont('helvetica', '', 10);

// Set some content
$html = '
<table border="1" cellspacing="0" cellpadding="3">
<tr bgcolor="#CCCCCC">
    <th>No</th>
    <th>ID Mahasiswa</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Jurusan</th>
    <th>Alamat</th>
</tr>';

// Fetch data from database
// Establish database connection
$db = mysqli_connect('localhost', 'root', '', 'db_mhs');

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from database
$query = "SELECT id_mhs, nim, nama, jenis_kelamin, jurusan, alamat FROM mahasiswa";
$result = mysqli_query($db, $query);

// Initialize counter
$nomor = 1;

// Fetch data rows from the result set and output to PDF
while ($row = mysqli_fetch_assoc($result)) {
    $html .= '
    <tr>
        <td align="center">' . $nomor . '</td>
        <td>' . $row['id_mhs'] . '</td>
        <td>' . $row['nim'] . '</td>
        <td>' . $row['nama'] . '</td>
        <td>' . $row['jenis_kelamin'] . '</td>
        <td>' . $row['jurusan'] . '</td>
        <td>' . $row['alamat'] . '</td>
    </tr>';
    $nomor++;
}

$html .= '</table>';

// Output content
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
$pdf->Output('cetak-laporan-mahasiswa.pdf', 'I');

// Close database connection
mysqli_close($db);
