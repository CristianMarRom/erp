<?php
require_once("conexion.php");
class mantenimiento extends Conexion{
	
   public function alta($fechaman, $area, $costoman){
   $this->sentencia ="INSERT INTO mantenimiento VALUES(null,'$fechaman', '$area','$costoman')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM mantenimiento";
   	return $this->obtenerSentencia(); 
}
?>