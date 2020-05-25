<?php

require_once("conexion.php");

class Proveedor extends Conexion{
	public funtion alta($nombre,$telefono,$direccion,$correo,$rfc){
		$this->sentencia = "INSERT INTO proveedor VALUES (null,'$nombre','$telefono','$direccion','$correo','$rfc')";
		$this->ejecutarSentencia();
	}

	public funtion consulta(){
		$this->sentencia = "SELECT * FROM proveedor";
		return $this->obtenerSentencia();
	}
}
?>