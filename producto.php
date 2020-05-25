<?php

require_once("conexion.php");

class Producto extends Conexion{
	public funtion alta($nombre,$descripcion,$preciov,$precioc,$cantidad,$cantnim,$cantmax,$categoria){
		$this->sentencia = "INSERT INTO producto VALUES (null,'$nombre','$descripcion','$preciov','$precioc','$cantidad','$cantnim','$cantmax','$categoria')";
		$this->ejecutarSentencia();
	}

	public funtion consulta(){
		$this->sentencia = "SELECT * FROM producto";
		return $this->obtenerSentencia();
	}
}
?>