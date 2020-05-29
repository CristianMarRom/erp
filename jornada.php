<?php
require_once("conexion.php");
class jornada extends Conexion{
	
   public function alta($hrstrab, $diastrab, $pagohora,$hextras, $bonos){
   $this->sentencia ="INSERT INTO jornada VALUES(null,'$hrstrab', '$diastrab','$pagohora','$hextras','$bonos')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM jornada";
   	return $this->obtenerSentencia(); 
}
?>