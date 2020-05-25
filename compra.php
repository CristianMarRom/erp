<?php
require_once("conexion.php");
class compra extends Conexion{
	
   public function alta($fecha, $total,$tipo_pago){
   $this->sentencia ="INSERT INTO compra VALUES(null,'$fecha','$total','tipo_pago')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM compra";
   	return $this->obtenerSentencia(); 
}
?>
