<?php
$pdf = new \AppData\Config\libs\fpdf\fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Lista de Empleados.',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0, 220, 255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',12);
$pdf->SetX(25);
$pdf->Cell(27,10,utf8_decode('Nombre'),1,0,'C',true);
$pdf->Cell(27,10,utf8_decode('Apellido'),1,0,'C',true);
$pdf->Cell(27,10,utf8_decode('Apellido'),1,0,'C',true);
$pdf->Cell(25,10,utf8_decode('Puesto'),1,0,'C',true);
$pdf->Cell(25,10,utf8_decode('Turno'),1,0,'C',true);
$pdf->Cell(20,10,utf8_decode('Entrada'),1,0,'C',true);
$pdf->Cell(20,10,utf8_decode('Salida'),1,0,'C',true);


$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(25);
    $pdf->Cell(27,8,utf8_decode($row[1]),1,0,'C',true);
    $pdf->Cell(27,8,utf8_decode($row[2]),1,0,'C',true);
    $pdf->Cell(27,8,utf8_decode($row[3]),1,0,'C',true);
    $pdf->Cell(25,8,utf8_decode($row[4]),1,0,'C',true);
    $pdf->Cell(25,8,utf8_decode($row[5]),1,0,'C',true);
    $pdf->Cell(20,8,utf8_decode($row[6]),1,0,'C',true);
    $pdf->Cell(20,8,utf8_decode($row[7]),1,0,'C',true);


}
$pdf->Output();
