<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Paul mag LGBTQ menschen');
$pdf->Output();
?>
<p>Paul ist ein schwuli</p>
