<?php

require_once("conexion.php");

class Pago extends Conexion{
	public funtion alta($sal,$fecha_dep,$met_pag,$des){
		$this->sentencia = "INSERT INTO pago VALUES (null,'$sal','$fecha_dep','$met_pag','$des')";
		$this->ejecutarSentencia();
	}

	public funtion consulta(){
		$this->sentencia = "SELECT * FROM pago";
		return $this->obtenerSentencia();
	}
}
?>