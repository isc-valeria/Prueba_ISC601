<?php
$pdf = new \AppData\Config\libs\fpdf\fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Lista de habitaciones.',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0, 220, 255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',12);
$pdf->SetX(25);
$pdf->Cell(40,10,utf8_decode('No. de habitación'),1,0,'C',true);
$pdf->Cell(40,10,utf8_decode('Descripción'),1,0,'C',true);
$pdf->Cell(40,10,utf8_decode('Tipo de habitación'),1,0,'C',true);
$pdf->Cell(40,10,utf8_decode('Estado habitación'),1,0,'C',true);
$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(25);
    $pdf->Cell(40,8,utf8_decode($row[1]),1,0,'C',true);
    $pdf->Cell(40,8,utf8_decode($row[2]),1,0,'C',true);
    $pdf->Cell(40,8,utf8_decode($row[3]),1,0,'C',true);
    $pdf->Cell(40,8,utf8_decode($row[4]),1,0,'C',true);

}
$pdf->Output();

