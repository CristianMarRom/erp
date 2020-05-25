<?php
require_once("conexion.php");
class devoluciones extends Conexion{
	
   public function alta($fecha, $cantidad,$descripcion){
   $this->sentencia ="INSERT INTO devoluciones VALUES(null,'$fecha', '$cantidad','$descripcion')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM devoluciones";
   	return $this->obtenerSentencia(); 
}
?>
