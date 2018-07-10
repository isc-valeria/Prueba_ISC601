<?php
/**
 * Created by PhpStorm.
 * User: Jabneel
 * Date: 26/06/2018
 * Time: 09:51 AM
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
$pdf->SetX(5);
$pdf->Cell(0,8,utf8_decode('Facturación'),0,0,'L');
$pdf->ln();

//Body
$pdf-> SetFillColor(0,220,225);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',18);
$pdf->SetX(3);
$pdf->Cell(7.31,1.5,utf8_decode('Clave de reserva'),1,0,'C',true);
$pdf->Cell(7.31,1.5,utf8_decode('Número de Habitación '),1,0,'C',true);
$pdf->Cell(7.31,1.5,utf8_decode('Total'),1,0,'C',true);
$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(3);
    $pdf->Cell(7.31,0.6,utf8_decode($row [0]),1,0,'C',true);
    $pdf->Cell(7.31,0.6,utf8_decode($row [1]),1,0,'C',true);
    $pdf->Cell(7.31,0.6,utf8_decode($row [2]),1,0,'C',true);
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