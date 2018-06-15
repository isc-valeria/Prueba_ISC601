<?php
$pdf = new \AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Lista de Habitaciones',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0,220,255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFontSize(12);
$pdf->SetX(25);
$pdf->Cell(40,10,utf8_decode('No. de Habitación'),1,0,'C', true);
$pdf->Cell(40,10,utf8_decode('Descripción'),1,0,'C', true);
$pdf->Cell(40,10,utf8_decode('Tipo de Habitación'),1,0,'C', true);
$pdf->Cell(40,10,utf8_decode('Estado de Habitación'),1,0,'C', true);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFontSize(10);

while ($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(25);
    $pdf->Cell(40,10,utf8_decode($row[0]),1,0,'C', true);
    $pdf->Cell(40,10,utf8_decode($row[1]),1,0,'C', true);
    $pdf->Cell(40,10,utf8_decode($row[2]),1,0,'C', true);
    $pdf->Cell(40,10,utf8_decode($row[3]),1,0,'C', true);
}
$pdf->Output();
