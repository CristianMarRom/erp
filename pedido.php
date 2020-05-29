<?php
require_once("conexion.php");
class pedido extends Conexion{
	
   public function alta($fecha, $precio, $cantidad,$direccion){
   $this->sentencia ="INSERT INTO pedido VALUES(null,'$fecha', '$precio','$cantidad','$direccion')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM pedido";
   	return $this->obtenerSentencia(); 
}
?>