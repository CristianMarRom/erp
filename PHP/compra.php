<?php
require_once("conexion.php");
class Compra extends Conexion{
	
   public function alta($fecha, $total,$tipo_pago,$id_cliente){
   $this->sentencia ="INSERT INTO compra VALUES(null,'$fecha','$total','$tipo_pago','$id_cliente')";
       $this->ejecutarSentencia();
   }
   public function consulta(){
   	$this->sentencia ="SELECT * FROM compra";
   	return $this->obtenerSentencia(); 
}
  public function nombres(){
    $this->sentencia = "SELECT fecha FROM compra;";
    $res = $this->obtenerSentencia();
    $nombres = "";
    while($fila = $res->fetch_assoc()){
      $nombres = $nombres."'".$fila["fecha"]."',";
    }
    return $nombres;
  }

  public function cantidades(){
    $this->sentencia = "SELECT total FROM compra;";
    $res = $this->obtenerSentencia();
    $cantidades = "";
    while($fila = $res->fetch_assoc()){
      $cantidades = $cantidades.$fila["total"].",";
    }
    return $cantidades;
  }
public function eliminar($id){
   	$this->sentencia ="DELETE FROM compra WHERE IDcompra=$id";
   	return $this->ejecutarSentencia();
}
public function obtenerClientes(){
    $this->sentencia = "SELECT IDCliente,nombre,apepaterno,apematerno FROM cliente";
    $res = $this->obtenerSentencia();
    echo "<select name='cliente'>";
    while ($fila = $res->fetch_assoc()){
      echo "<option value='".$fila["IDcliente"]."'> ".$fila["nombre"]." ".$fila["apematerno"]." </option>";
    }
    echo "</select>";
  }}
?>
