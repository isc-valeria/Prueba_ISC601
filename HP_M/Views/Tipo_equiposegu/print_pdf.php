<?php
$pdf = new \AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();
//Header
$pdf->SetFont('Arial','B',10);
$pdf->Cell(2);
$pdf->Image('AppData\Config\libs\fpdf\logo.png','150','3','30','20','PNG','http://localhost/Prueba_ISC601/HP_M/');
$pdf->Ln();

$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor('32','118','193');
$pdf->Cell(190,10,'Clasificacion De Equipos',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0, 220, 255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',12);
$pdf->SetX(90);
$pdf->Cell(32,10,utf8_decode('Tipo De Equipo'),1,0,'C',true);





$valor=json_decode($_GET["campo1"]);
for($i=0;$i<count($valor);$i++)
{
    $pdf->ln();
    $pdf->SetX(23);
    $pdf->Cell(70,8,utf8_decode($valor[$i]),0,0,'L');
}
//Footer
$pdf->SetY(255);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'Carretera Federal Valle de Bravo Km 30, Ejido San Antonio Laguna,',0,0,'C');
$pdf->SetY(260);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'51200 Valle de Bravo, Méx. Page. '.$pdf->PageNo(),0,0,'C');
$pdf->Output();


