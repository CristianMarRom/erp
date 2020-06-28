<?php
	require_once("../fpdf/fpdf.php");
	require_once("asistencia.php");
	$pdf = new FPDF();
	$obj = new Asistencia();
	$res = $obj->consulta();
	$pdf->AddPage();
	$pdf->Image("../img/imagen.png",5,5,20,20);
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(200,20,"Reporte de Asistencia",0,0,"C");
    $pdf->Ln(25);
	$pdf->SetFont('Arial','B',13);




	//$pdf->Cell(40,10,'¡Hola, Mundo!');
	$ancho = 32;
	$pdf->Cell($ancho,10,utf8_decode("Fecha"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("ID Empleado"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Hora"),1,0,"C");
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',10);
    while ($fila = $res->fetch_assoc()){
    	$pdf->Cell($ancho,10,utf8_decode($fila["Fecha"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["IDempleado"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["Hora"]),1,0,"C");
        $pdf->Ln(10);
    }
	$pdf->Output();
?>