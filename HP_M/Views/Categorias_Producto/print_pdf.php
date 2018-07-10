<?php

$pdf = new \AppData\Config\libs\fpdf\fpdf();
$pdf->AddPage();

$pdf->SetFont('Arial','B',10);
$pdf->Cell(2);
$pdf->Image('AppData\Config\libs\fpdf\logo.png','150','3','30','20','PNG','http://localhost/Prueba_ISC601/HP_M/');
$pdf->Ln();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Lista de categorias producto',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0, 220, 255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',12);
$pdf->SetX(50);
$pdf->Cell(50,10,utf8_decode('No.'),1,0,'C',true);
$pdf->Cell(60,10,utf8_decode('Categoria'),1,0,'C',true);
$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
$n=1;
while($row=mysqli_fetch_row($datos))

{
    $pdf->ln();
    $pdf->SetX(50);
    $pdf->Cell(50,8,utf8_decode($n),1,0,'C',true);
    $pdf->Cell(60,8,utf8_decode($row[1]),1,0,'C',true);
    $n++;
}


$pdf->SetY(-47);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'Carretera Federal Valle de Bravo Km 30, Ejido San Antonio Laguna,',0,0,'C');
$pdf->SetY(-42);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'51200 Valle de Bravo, Méx. Page. '.$pdf->PageNo(),0,0,'C');

$pdf->Output();

?>