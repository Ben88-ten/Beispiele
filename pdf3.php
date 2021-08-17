<?php
$name = $_POST['name'];
$nachname = $_POST['nachname'];
$nachricht = $_POST['nachricht'];
$Datei = $_POST['uploaddatei'];

if(isset($_POST["submit"])) {
    
define('FPDF_FONTPATH','fpdf183/font/');
require('fpdf.php');


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('courier','B',16); 
$pdf->Cell(40,10,"Hallo", $name, $nachname);
$pdf->Ln(10);
$pdf->Cell(40,10,"Hier folgt Ihre Nachricht .... ");
$pdf->Ln(10);
$pdf->Cell(40,10, $nachricht);
$pdf->Ln(10);

$pdf->Cell(40,10,"Danke!!!");


$pdf->Output();

}
?>
