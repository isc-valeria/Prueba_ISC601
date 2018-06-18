<?php
/**
 * Created by PhpStorm.
 * User: VALERIA
 * Date: 14/06/2018
 * Time: 11:44 AM
 */

$pdf = new \AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Lista de Habitaciones',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0,220,255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(25);
$pdf->Cell(40,10,utf8_decode('Numero de Habitacion'),1,0,'C','true');
$pdf->Cell(40,10,utf8_decode('Descripcion'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('Tipo Habitacion'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('Estado Habitacion'),1,0,'C', 'true');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',8);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(25);
    $pdf->Cell(40,10,utf8_decode($row[1]),1,0,'C');
    $pdf->Cell(40,10,utf8_decode($row[2]),1,0,'C');
    $pdf->Cell(40,10,utf8_decode($row[3]),1,0,'C');
    $pdf->Cell(40,10,utf8_decode($row[4]),1,0,'C');
}
$pdf->Output();

