<?php
$pdf = new \AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();
//Header
$pdf->SetFont('Arial','B',10);
$pdf->Cell(2);

$pdf->Image('AppData\Config\libs\fpdf\logo.png','150','3','30','20','PNG','http://localhost/Prueba_ISC601/HP_M/');
$pdf->Ln();

$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor('32','118','193');
$pdf->Cell(190,10,'Equipo De Seguridad Registrado',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0, 220, 255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',12);
$pdf->SetX(32);
$pdf->Cell(27,10,utf8_decode('Nombre'),1,0,'C',true);
$pdf->Cell(32,10,utf8_decode('Tipo De Equipo'),1,0,'C',true);
$pdf->Cell(27,10,utf8_decode('Cantidad'),1,0,'C',true);
$pdf->Cell(25,10,utf8_decode('Estado'),1,0,'C',true);



$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);

$valor=json_decode($_GET["campo1"]);
//$pdf->Cell(340,10,$valor[0],0,0,'C');
//print_r($valor[0][0]);
//print_r(count($valor));
for($i=0;$i<count($valor);$i++)
{
    $pdf->ln();
    $pdf->SetX(10);
    $pdf->Cell(45,8,utf8_decode($valor[$i][0]),1,0,'C',true);
    $pdf->Cell(50,8,utf8_decode($valor[$i][1]),1,0,'C',true);
    $pdf->Cell(25,8,utf8_decode($valor[$i][2]),1,0,'C',true);
    $pdf->Cell(40,8,utf8_decode($valor[$i][3]),1,0,'C',true);

}


//Footer
$pdf->SetY(255);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'Carretera Federal Valle de Bravo Km 30, Ejido San Antonio Laguna,',0,0,'C');
$pdf->SetY(260);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'51200 Valle de Bravo, Méx. Page. '.$pdf->PageNo(),0,0,'C');
$pdf->Output();


