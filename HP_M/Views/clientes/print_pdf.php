<?php
/**
 * Created by PhpStorm.
 * User: Jabneel
 * Date: 14/06/2018
 * Time: 05:36 PM
 */
$pdf= new AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Clientes',0,0,'C');
$pdf->ln();
$pdf->ln();

$pdf-> SetFillColor(0,220,225);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(25);
$pdf->Cell(35,10,utf8_decode('Nombre del cliente'),1,0,'C',true);
$pdf->Cell(35,10,utf8_decode('Apellido Paterno'),1,0,'C',true);
$pdf->Cell(35,10,utf8_decode('Apellido Materno'),1,0,'C',true);
$pdf->Cell(35,10,utf8_decode('Teléfono'),1,0,'C',true);
$pdf->Cell(35,10,utf8_decode('Correo electrónico'),1,0,'C',true);
$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(25);
    $pdf->Cell(35,8,utf8_decode($row [1]),1,0,'C',true);
    $pdf->Cell(35,8,utf8_decode($row [2]),1,0,'C',true);
    $pdf->Cell(35,8,utf8_decode($row [3]),1,0,'C',true);
    $pdf->Cell(35,8,utf8_decode($row [4]),1,0,'C',true);
    $pdf->Cell(35,8,utf8_decode($row [5]),1,0,'C',true);

}
$pdf->Output();