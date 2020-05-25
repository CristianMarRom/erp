<?php

require_once("conexion.php");

class Venta extends Conexion{
	public funtion alta($fecha,$IDCliente,$Total,$tipo_pago){
		$this->sentencia = "INSERT INTO venta VALUES (null,'$fecha','$IDCliente','$Total','$tipo_pago')";
		$this->ejecutarSentencia();
	}

	public funtion consulta(){
		$this->sentencia = "SELECT * FROM venta";
		return $this->obtenerSentencia();
	}
}
?>