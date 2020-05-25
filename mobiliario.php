<?php

require_once("conexion.php");

class Mobiliario extends Conexion{
	public funtion alta($nombre,$descripcion,$cantidad,$nic,$tipo){
		$this->sentencia = "INSERT INTO mobiliario VALUES (null,'$nombre','$descripcion','$cantidad','$nic','$tipo')";
		$this->ejecutarSentencia();
	}

	public funtion consulta(){
		$this->sentencia = "SELECT * FROM mobiliario";
		return $this->obtenerSentencia();
	}
}
?>