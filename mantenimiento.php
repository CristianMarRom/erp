<?php
require_once("conexion.php");
class mantenimiento extends Conexion{
	
   public function alta($fecha_man,$area,$IDmob,$costo_man,$IDempleado){
   $this->sentencia ="INSERT INTO mantenimiento VALUES(null,'$fecha_man','$area','$IDmob','$costo_man','$IDempleado')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM mantenimiento";
   	return $this->obtenerSentencia(); 
}
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM mantenimiento  WHERE IDmantenimiento=$id";
   	return $this->ejecutarSentencia();
}}
?>