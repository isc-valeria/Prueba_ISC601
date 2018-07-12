<?php
$pdf = new \AppData\Config\libs\fpdf\fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(2);
$pdf->Image('AppData\Config\libs\fpdf\logo.png','150','3','50','20','PNG','http://localhost/Prueba_ISC601/HP_M/');
$pdf->Ln();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(180,10,'Lista de tareas.',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0, 220, 255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(30);
$pdf->Cell(40,10,utf8_decode('Descripcion tarea'),0,0,'C',true);
$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);

$valor=json_decode($_GET["campo1"]);
for($i=0;$i<count($valor);$i++)
{
    $pdf->ln();
    $pdf->SetX(23);
    $pdf->Cell(70,8,utf8_decode($valor[$i]),0,0,'L');
}
$pdf->SetY(260);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'Carretera Federal Valle de Bravo Km 30, Ejido San Antonio Laguna,',0,0,'C');
$pdf->SetY(270);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'51200 Valle de Bravo, Méx. Page. '.$pdf->PageNo(),0,0,'C');
$pdf->Output();
