<?php
/**
 * Created by PhpStorm.
 * User: octavio
 * Date: 14/06/2018
 * Time: 02:52 PM
 */
$pdf = new \AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Lista de productos.',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0, 220, 255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',12);
$pdf->SetX(25);
$pdf->Cell(30,10,utf8_decode('nombre'),1,0,'C',true);
$pdf->Cell(30,10,utf8_decode('categoria'),1,0,'C',true);
$pdf->Cell(30,10,utf8_decode('Tipo '),1,0,'C',true);
$pdf->Cell(30,10,utf8_decode('Existencias'),1,0,'C',true);
$pdf->Cell(30,10,utf8_decode('stock_Max'),1,0,'C',true);
$pdf->Cell(30,10,utf8_decode('Stock_Min'),1,0,'C',true);
$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(25);
    $pdf->Cell(30,8,utf8_decode($row[1]),1,0,'C',true);
    $pdf->Cell(30,8,utf8_decode($row[2]),1,0,'C',true);
    $pdf->Cell(30,8,utf8_decode($row[3]),1,0,'C',true);
    $pdf->Cell(30,8,utf8_decode($row[4]),1,0,'C',true);
    $pdf->Cell(30,8,utf8_decode($row[5]),1,0,'C',true);
    $pdf->Cell(30,8,utf8_decode($row[6]),1,0,'C',true);


}
$pdf->Output();