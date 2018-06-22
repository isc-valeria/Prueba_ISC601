<?php

$pdf = new \AppData\Config\libs\fpdf\fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Tipos producto',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0, 220, 255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',12);
$pdf->SetX(50);
$pdf->Cell(50,10,utf8_decode('No.'),1,0,'C',true);
$pdf->Cell(60,10,utf8_decode('Tipo'),1,0,'C',true);
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
$pdf->Output();

