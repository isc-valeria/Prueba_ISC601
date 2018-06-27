<?php
/**
 * Created by PhpStorm.
 * User: miqui
 * Date: 17/06/2018
 * Time: 07:09 PM
 */

$pdf= new AppData\Config\libs\fpdf\FPDF('L','cm','letter');
$pdf->AddPage();

//Header
$pdf->SetFont('Arial','B',10);
$pdf->Cell(2);
$pdf->Image('AppData\Config\libs\fpdf\head_logo.gif','18.5','2','6.5','3','GIF','http://localhost/Prueba_ISC601/HP_M/');
$pdf->Ln();

//Tittle
$pdf->SetFont('Arial','B',30);
$pdf->SetTextColor('32','118','193');
$pdf->SetX(3);
$pdf->Cell(0,5,'Registro de prendas por pieza',0,0,'L');
$pdf->ln();


$pdf->SetFillColor(0,220,255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',12);
$pdf->SetX(4);
$pdf->Cell(4,1.5,utf8_decode('Pieza'),1,0,'C',true);
$pdf->Cell(4,1.5,utf8_decode('Servicio'),1,0,'C',true);
$pdf->Cell(4,1.5,utf8_decode('Cantidad'),1,0,'C',true);
$pdf->Cell(4,1.5,utf8_decode('Observaciones'),1,0,'C',true);
$pdf->Cell(4,1.5,utf8_decode('Fecha de registro'),1,0,'C',true);
$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);

while ($row=mysqli_fetch_array($datos))
{
    $pdf->ln();
    $pdf->SetX(4);
    $pdf->Cell(4,0.6,utf8_decode($row [1]),1,0,'C',true);
    $pdf->Cell(4,0.6,utf8_decode($row [2]),1,0,'C',true);
    $pdf->Cell(4,0.6,utf8_decode($row [3]),1,0,'C',true);
    $pdf->Cell(4,0.6,utf8_decode($row [4]),1,0,'C',true);
    $pdf->Cell(4,0.6,utf8_decode($row [5]),1,0,'C',true);
}
//Footer
$pdf->SetY(-4.7);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'Carretera Federal Valle de Bravo Km 30, Ejido San Antonio Laguna,',0,0,'C');
$pdf->SetY(-4.2);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'51200 Valle de Bravo, Méx. Page. '.$pdf->PageNo(),0,0,'C');

$pdf->Output();

?>