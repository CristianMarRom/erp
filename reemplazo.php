<?php
require_once("conexion.php");
class Remplazo extends Conexion{
	
   public function alta($IDmobiliario,$fecha,$costo,$descripcion){
   $this->sentencia ="INSERT INTO reemplazo VALUES(null,'$IDmobiliario','$fecha','$costo','$descripcion')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM reemplazo";
   	return $this->obtenerSentencia(); 
}
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM reemplazo  WHERE IDremplazo=$id";
   	return $this->ejecutarSentencia();
}}
?>