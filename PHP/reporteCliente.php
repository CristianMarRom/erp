<?php
	require_once("../fpdf/fpdf.php");
	require_once("cliente.php");
	$pdf = new FPDF();
	$obj = new Cliente();
	$res = $obj->consulta();
	$pdf->AddPage();
	$pdf->Image("../img/imagen.png",5,5,20,20);
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(200,20,"Reporte de Clientes",0,0,"C");
    $pdf->Ln(25);
	$pdf->SetFont('Arial','B',7);



	//$pdf->Cell(40,10,'¡Hola, Mundo!');
	$ancho = 23;
	$pdf->Cell($ancho,10,utf8_decode("Nombre"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Direccion"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Telefono"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Correo"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Apellido Materno"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Apellido Paterno"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Sexo"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Fecha Nacimiento"),1,0,"C");
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',5);
    while ($fila = $res->fetch_assoc()){
    	$pdf->Cell($ancho,10,utf8_decode($fila["nombre"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["direccion"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["telefono"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["correo"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["apematerno"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["apepaterno"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["sexo"]),1,0,"C");
    	$pdf->Cell($ancho,10,utf8_decode($fila["fenacimiento"]),1,0,"C");
        $pdf->Ln(10);
    }
	$pdf->Output();
?>