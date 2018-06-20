<?php
/**
 * Created by PhpStorm.
 * User: miqui
 * Date: 17/06/2018
 * Time: 07:09 PM
 */

$pdf= new AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Servicios',0,0,'C');
$pdf->ln();
$pdf->ln();

$pdf-> SetFillColor(0,220,225);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(45);
$pdf->Cell(45,10,utf8_decode('Descripción'),1,0,'C',true);
$pdf->Cell(45,10,utf8_decode('Hora de inicio'),1,0,'C',true);
$pdf->Cell(45,10,utf8_decode('Hora final'),1,0,'C',true);
$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(45);
    $pdf->Cell(45,8,utf8_decode($row [1]),1,0,'C',true);
    $pdf->Cell(45,8,utf8_decode($row [2]),1,0,'C',true);
    $pdf->Cell(45,8,utf8_decode($row [3]),1,0,'C',true);
}
$pdf->Output();