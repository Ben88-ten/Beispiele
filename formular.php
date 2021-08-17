<?php
$BV = $_POST['BV'];
$Gewerk = $_POST['Gewerk'];
$Datum = $_POST['Datum'];
$Datei = $_POST['uploaddatei'];

if(isset($_POST["submit"])) {
    
define('FPDF_FONTPATH','fpdf183/font/');
require('fpdf.php');


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('courier','B',16); 
$pdf->Cell(40,10,"Hallo". $BV. " " .$Gewerk . " " . $Datum);

$pdf->Ln(10);
$pdf->Cell(40,10,"Danke!!!");


$pdf->Output();

}
?>





