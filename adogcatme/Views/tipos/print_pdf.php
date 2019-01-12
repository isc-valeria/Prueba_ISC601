<?php
/**
 * Created by PhpStorm.
 * User: VALERIA
 * Date: 14/06/2018
 * Time: 11:44 AM
 */

$pdf = new \AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();

$pdf->Cell(2);
$pdf->Image('AppData\Config\libs\fpdf\logo.jpg','60','10','15','15','JPG','http://localhost/aplicaciones-web/adogcatme/');
$pdf->Image('AppData\Config\libs\fpdf\logo.jpg','140','10','15','15','JPG','http://localhost/aplicaciones-web/adogcatme/');

$pdf->Ln();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'ADOPTA, NO COMPRES',0,0,'C');
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor('0','0','0');
$pdf->SetX(15);
$pdf->Cell(0,8,utf8_decode('ADOGCATME'),0,0,'L');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(125);
$pdf->Cell(45,10,utf8_decode('Fecha'),1,0,'C','true');
$pdf->Cell(20,10,utf8_decode(''),1,0,'C', 'true');
$pdf->ln();

$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor('0','0','0');
$pdf->SetX(15);
$pdf->Cell(0,8,utf8_decode('Reporte'),0,0,'L');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(125);
$pdf->Cell(45,10,utf8_decode('Hora'),1,0,'C','true');
$pdf->Cell(20,10,utf8_decode(''),1,0,'C', 'true');
$pdf->ln();

$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor('0','0','0');
$pdf->SetX(15);
$pdf->Cell(0,8,utf8_decode('Lista de animales en adopcion'),0,0,'L');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(125);
$pdf->Cell(45,10,utf8_decode('Quien lo genera'),1,0,'C','true');
$pdf->Cell(20,10,utf8_decode(''),1,0,'C', 'true');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(15);
$pdf->Cell(25,10,utf8_decode('Nombre'),1,0,'C','true');
$pdf->Cell(25,10,utf8_decode('Edad'),1,0,'C', 'true');
$pdf->Cell(25,10,utf8_decode('Color'),1,0,'C', 'true');
$pdf->Cell(25,10,utf8_decode('Imagen'),1,0,'C', 'true');
$pdf->Cell(25,10,utf8_decode('Raza'),1,0,'C', 'true');
$pdf->Cell(25,10,utf8_decode('Sexo'),1,0,'C', 'true');
$pdf->Cell(25,10,utf8_decode('Especie'),1,0,'C', 'true');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',8);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(15);
    $pdf->Cell(25,10,utf8_decode($row[1]),1,0,'C');
    $pdf->Cell(25,10,utf8_decode($row[2]),1,0,'C');
    $pdf->Cell(25,10,utf8_decode($row[3]),1,0,'C');
    $pdf->Cell(25,10,utf8_decode($row[4]),1,0,'C');
    $pdf->Cell(25,10,utf8_decode($row[5]),1,0,'C');
    $pdf->Cell(25,10,utf8_decode($row[6]),1,0,'C');
    $pdf->Cell(25,10,utf8_decode($row[7]),1,0,'C');
}

//Footer
$pdf->SetY(272);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'Creado por Adogcatme, adopta, no compres.',0,0,'C');


$pdf->Output();

