<?php
require_once("conexion.php");
class proyecto extends Conexion{
	
   public function alta($nombrepro,$tipopro, $fechai, $fechafin,$descripcion){
   $this->sentencia ="INSERT INTO proyecto VALUES(null,'$nombrepro', '$tipopro','$fechai','$fechafin','$descripcion')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM proyecto";
   	return $this->obtenerSentencia(); 
}
?>