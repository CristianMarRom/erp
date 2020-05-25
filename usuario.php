<?php

require_once("conexion.php");

class Usuario extends Conexion{
	public funtion alta($nombre,$tipo,$password){
		$this->sentencia = "INSERT INTO usuario VALUES (null,'$nombre','$tipo','$password')";
		$this->ejecutarSentencia();
	}

	public funtion consulta(){
		$this->sentencia = "SELECT * FROM usuario";
		return $this->obtenerSentencia();
	}
}
?>