<?php
require_once("conexion.php");
class balance extends Conexion{
	
   public function alta($fechai, $fechafin, $total){
   $this->sentencia ="INSERT INTO balance VALUES(null,'$fecha', '$fechafin','$total')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM balance";
   	return $this->obtenerSentencia(); 
}
?>