<?php


$pdf = new \AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Turismo Valle de Bravo',0,0,'C');
$pdf->ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,10,'Nombre de la empresa: Turismo Valle de Bravo',0,0,'C');
$pdf->ln();
$pdf->Cell(40,10,'Reporte:',0,0,'C');
$pdf->ln();
$pdf->Cell(50,10,'Reporte de total de actividades',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0,220,255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(5);
$pdf->Cell(40,10,utf8_decode('Titulo'),1,0,'C','true');
$pdf->Cell(20,10,utf8_decode('Hora inicio'),1,0,'C', 'true');
$pdf->Cell(20,10,utf8_decode('Hora fin'),1,0,'C', 'true');
$pdf->Cell(20,10,utf8_decode('Telefono'),1,0,'C', 'true');
$pdf->Cell(50,10,utf8_decode('Correo'),1,0,'C', 'true');
$pdf->Cell(50,10,utf8_decode('Ubicacion'),1,0,'C', 'true');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',8);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(5);
    $pdf->Cell(40,10,utf8_decode($row[2]),1,0,'C');
    $pdf->Cell(20,10,utf8_decode($row[4]),1,0,'C');
    $pdf->Cell(20,10,utf8_decode($row[5]),1,0,'C');
    $pdf->Cell(20,10,utf8_decode($row[6]),1,0,'C');
    $pdf->Cell(50,10,utf8_decode($row[7]),1,0,'C');
    $pdf->Cell(50,10,utf8_decode($row[8]),1,0,'C');
}
$pdf->Output();

