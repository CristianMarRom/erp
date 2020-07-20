<?php
require_once("conexion.php");

class Venta extends Conexion{
	public function alta($IDVenta,$fecha,$IDCliente,$Total,$tipo_pago){
		$this->sentencia = "INSERT INTO venta VALUES ('$IDVenta','$fecha','$IDCliente','$Total','$tipo_pago')";
		$this->ejecutarSentencia();
	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM venta";
		return $this->obtenerSentencia();
	}
	public function nombres(){
		$this->sentencia = "SELECT fecha FROM venta;";
		$res = $this->obtenerSentencia();
		$nombres = "";
		while($fila = $res->fetch_assoc()){
			$nombres = $nombres."'".$fila["fecha"]."',";
		}
		return $nombres;
	}
	public function cantidades(){
		$this->sentencia = "SELECT Total FROM venta;";
		$res = $this->obtenerSentencia();
		$cantidades = "";
		while($fila = $res->fetch_assoc()){
			$cantidades = $cantidades.$fila["Total"].",";
		}
		return $cantidades;
	}
	public function eliminar($id){
   	$this->sentencia ="DELETE FROM venta WHERE IDventa=$id";
   	return $this->ejecutarSentencia();
	}
	public function obtenerClientes(){
		$this->sentencia = "SELECT IDCliente,nombre,apepaterno,apematerno FROM cliente";
		$res = $this->obtenerSentencia();
		echo "<select name='cliente'>";
		while ($fila = $res->fetch_assoc()){
			echo "<option value='".$fila["IDcliente"]."'> ".$fila["nombre"]." ".$fila["apematerno"]." </option>";
		}
		echo "</select>";
	}}
?>