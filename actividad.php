<?php
require_once("conexion.php");
class actividad extends Conexion{
	
   public function alta($registro, $movimiento_act,$movimiento_tabla){
   $this->sentencia ="INSERT INTO actividad VALUES(null,'$registro', '$movimiento_act','$movimiento_tabla')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM actividad";
   	return $this->obtenerSentencia(); 
}
?>
