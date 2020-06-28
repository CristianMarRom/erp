<?php
	require_once("../fpdf/fpdf.php");
	require_once("materiapr.php");
	$pdf = new FPDF();
	$obj = new Materia();
	$res = $obj->consulta();
	$pdf->AddPage();
	$pdf->Image("../img/imagen.png",5,5,20,20);
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(200,20,"Reporte de Materia Prima",0,0,"C");
    $pdf->Ln(25);
	$pdf->SetFont('Arial','B',13);




	//$pdf->Cell(40,10,'¡Hola, Mundo!');
	$ancho = 32;
	$pdf->Cell($ancho,10,utf8_decode("Nombre"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Tipo"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Descripcion"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Precio"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Stock"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Existencias"),1,0,"C");
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',10);
    while ($fila = $res->fetch_assoc()){
    	$pdf->Cell($ancho,10,utf8_decode($fila["Nombre"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["Tipo"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["Descripcion"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["Precio"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["Stock"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["Existencias"]),1,0,"C");
        $pdf->Ln(10);
    }
	$pdf->Output();
?>