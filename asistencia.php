<?php
require_once("conexion.php");
class asistencia extends Conexion{
	
   public function alta($fecha, $hora){
   $this->sentencia ="INSERT INTO asistencia VALUES(null,'$fecha', '$hora')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM asistencia";
   	return $this->obtenerSentencia(); 
}
?>
