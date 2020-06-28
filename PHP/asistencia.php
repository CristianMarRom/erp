<?php
require_once("conexion.php");

class Asistencia extends Conexion{
   public function alta($Fecha,$IDempleado,$Hora){
   $this->sentencia ="INSERT INTO asistencia VALUES(null,'$Fecha','$IDempleado','$Hora')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM asistencia";
   	return $this->obtenerSentencia(); 
  }
  public function nombres(){
    $this->sentencia = "SELECT Fecha FROM asistencia;";
    $res = $this->obtenerSentencia();
    $nombres = "";
    while($fila = $res->fetch_assoc()){
      $nombres = $nombres."'".$fila["Fecha"]."',";
    }
    return $nombres;
  }
  public function cantidades(){
    $this->sentencia = "SELECT IDempleado FROM asistencia;";
    $res = $this->obtenerSentencia();
    $cantidades = "";
    while($fila = $res->fetch_assoc()){
      $cantidades = $cantidades.$fila["IDempleado"].",";
    }
    return $cantidades;
}
public function eliminar($id){
   	$this->sentencia ="DELETE FROM asistencia WHERE IDasistencia=$id";
   	return $this->ejecutarSentencia();
}}
?>
