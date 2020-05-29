<?php
require_once("conexion.php");
class reemplazo extends Conexion{
	
   public function alta($fecha, $costo, $descripcion){
   $this->sentencia ="INSERT INTO reemplazo VALUES(null,'$fecha', '$costo','$descripcion')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM reemplazo";
   	return $this->obtenerSentencia(); 
}
?>