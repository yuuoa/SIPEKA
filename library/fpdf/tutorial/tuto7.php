<<<<<<< HEAD
<?php
require('../fpdf.php');

$pdf = new FPDF();
$pdf->AddFont('CevicheOne','','CevicheOne-Regular.php','.');
$pdf->AddPage();
$pdf->SetFont('CevicheOne','',45);
$pdf->Write(10,'Enjoy new fonts with FPDF!');
$pdf->Output();
?>
=======
<?php
require('../fpdf.php');

$pdf = new FPDF();
$pdf->AddFont('CevicheOne','','CevicheOne-Regular.php','.');
$pdf->AddPage();
$pdf->SetFont('CevicheOne','',45);
$pdf->Write(10,'Enjoy new fonts with FPDF!');
$pdf->Output();
?>
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
