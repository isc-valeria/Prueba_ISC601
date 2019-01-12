<?php
require('Public/fpdf/fpdf.php');
class PDF extends FPDF
{

	function Header()
	{   date_default_timezone_set('America/Mexico_City');
	    $this->SetFont('Arial','B',15); 
	    $this->Cell(80); 
	    $this->Cell(30,10,'Turismo Donato Duerra',0,0,'C'); 
	    $this->SetFont('Arial','I',10);
	    $this->Ln();
	   	$this->Cell(190,10,URL,0,0,'C'); 
	    $this->Ln();
		$this->Cell(190,7,'Reporte generado el '.date('d/m/Y').' a las '.date('h:i:s').' por: '.$_SESSION["nombre"],0,0,'C');	    
	}
	function Footer()
	{
	    $this->SetY(-25);
	    $this->SetFont('Arial','I',11);	
		$this->Cell(0,2,'51030- Villa Donato guerra (Malacatepec) Estado de mexico',0,0,'C');	
		$this->ln();	
		$this->SetFont('Arial','I',9);	
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}	
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','I',12);

$pdf->ln();

$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial','BI',9);
$pdf->Cell(190,10,'Contenido',0,0,'C');
$pdf->ln();
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','',9);
$pdf->SetX(10);
$cont=1;
while($row=mysqli_fetch_row($datos))
{

    // $pdf->SetX();
    $pdf->Cell(25,10,utf8_decode('No.'.$cont)    ,1,0,'C','true');
    $pdf->Cell(165,10,utf8_decode('Titulo:  '.($row[1]))    ,1,0,'C','true');
    $pdf->ln();
    $pdf->Cell(40,10,utf8_decode('Fecha:  '.($row[2]))    ,1,0,'C','true');
    $pdf->Cell(40,10,utf8_decode('Tipos:  '.($row[5])),1,0,'C','true');
    $pdf->Cell(110,10,utf8_decode('Ubicacion:  '.($row[6])),1,0,'C','true');
	$pdf->ln();
    $pdf->Cell(190,10,utf8_decode('Descripcion:'),1,0,'C','true');
    $pdf->ln();    
    $pdf->Cell(190,10,utf8_decode(($row[4])),1,0,'C','true');
    $pdf->ln();
    $pdf->ln();
    $cont++;
}
$pdf->Output();
