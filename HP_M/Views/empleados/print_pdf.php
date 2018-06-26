<?php
$pdf = new \AppData\Config\libs\fpdf\fpdf();
$pdf->AddPage();
//Header
$pdf->SetFont('Arial','B',10);
$pdf->Cell(2);
$pdf->Image('AppData\Config\libs\fpdf\head_logo.gif','150','3','30','20','GIF','http://localhost/Prueba_ISC601/HP_M/');
$pdf->Ln();

$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor('32','118','193');
$pdf->Cell(190,10,'Lista de Empleados',0,0,'C');
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

//Footer
$pdf->SetY(255);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'Carretera Federal Valle de Bravo Km 30, Ejido San Antonio Laguna,',0,0,'C');
$pdf->SetY(260);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'51200 Valle de Bravo, Méx. Page. '.$pdf->PageNo(),0,0,'C');
$pdf->Output();

