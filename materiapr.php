<?php

require_once("conexion.php");

class Materia extends Conexion{
	public funtion alta($Nombre,$Tipo,$Descripcion,$Precio,$Stock,$Existencias){
		$this->sentencia = "INSERT INTO materiaprima VALUES (null,'$Nombre','$Tipo','$Descripcion','$Precio','$Stock','$Existencias')";
		$this->ejecutarSentencia();
	}

	public funtion consulta(){
		$this->sentencia = "SELECT * FROM materiaprima";
		return $this->obtenerSentencia();
	}
}
?>