<?php


$pdf = new \AppData\Config\libs\fpdf\fpdf("L","mm","Legal");
$pdf->AddPage();


$pdf->SetFont('Arial','B',10);
$pdf->Cell(2);
$pdf->Image('AppData\Config\libs\fpdf\head_logo.gif','290','3','50','20','GIF','http://localhost/Prueba_ISC601/HP_M/');
$pdf->Ln();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(340,10,'Lista de tareas realizadas.',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0, 220, 255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(10);
$pdf->Cell(45,10,utf8_decode('Descripcion tarea'),1,0,'C',true);
$pdf->Cell(50,10,utf8_decode('nombre empleado'),1,0,'C',true);
$pdf->Cell(25,10,utf8_decode('Habitacion'),1,0,'C',true);
$pdf->Cell(40,10,utf8_decode('inicio'),1,0,'C',true);
$pdf->Cell(40,10,utf8_decode('Fin'),1,0,'C',true);
$pdf->Cell(130,10,utf8_decode('Equipo'),1,0,'C',true);
$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);

while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(10);
    $pdf->Cell(45,8,utf8_decode($row[1]),1,0,'C',true);
    $pdf->Cell(50,8,utf8_decode($row[2] ." ".$row[3]." ".$row[4]),1,0,'C',true);
    $pdf->Cell(25,8,utf8_decode($row[5]),1,0,'C',true);
    $pdf->Cell(40,8,utf8_decode($row[6]),1,0,'C',true);
    $pdf->Cell(40,8,utf8_decode($row[7]),1,0,'C',true);
    $pdf->Cell(130,8,utf8_decode($row[8]),1,0,'C',true);

}


$pdf->SetY(180);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'Carretera Federal Valle de Bravo Km 30, Ejido San Antonio Laguna,',0,0,'C');
$pdf->SetY(190);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'51200 Valle de Bravo, Méx. Page. '.$pdf->PageNo(),0,0,'C');
$pdf->Output();
