<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 14/06/2018
 * Time: 11:46 AM
 */

$pdf = new \AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Servicios Lavanderia Disponibles',1,0,'C');

$pdf->SetY(30);

$pdf->SetFillColor(0,220,255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',12);

$pdf->setX(60);
$pdf->Cell(50,10,utf8_decode('Nombre del Servicio'),1,0,'C', true);
$pdf->Cell(50,10,utf8_decode('Precio del Servicio'),1,0,'C', true);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
while ($row=mysqli_fetch_array($datos))
{
    $pdf->ln();
    $pdf->SetX(60);
    $pdf->Cell(50,10,utf8_decode($row[1]),1,0,'C',true);
    $pdf->Cell(50,10,utf8_decode($row[2]),1,0,'C',true);
}

$pdf->Output();
