///ACTIVIDAD
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM actividad WHERE IDactividad=$id";
   	return $this->ejecutarSentencia();
}

//asistencia 
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM asistencia WHERE IDasistencia=$id";
   	return $this->ejecutarSentencia();
}
//////balance 
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM balance WHERE IDbalance=$id";
   	return $this->ejecutarSentencia();
}

////////77CLIENTE

public function eliminar($id){
   	$this->sentencia ="DELETE * FROM cliente WHERE IDcliente=$id";
   	return $this->ejecutarSentencia();
}

////////COMPRA
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM compra WHERE IDcompra=$id";
   	return $this->ejecutarSentencia();
}

////////DETALLE DECOMPRA

public function eliminar($id){
   	$this->sentencia ="DELETE * FROM detalle_compra WHERE IDdetallecompra=$id";
   	return $this->ejecutarSentencia();
}
////// DEVOLUCIONES
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM devoluciones WHERE IDdevoluciones=$id";
   	return $this->ejecutarSentencia();
}

///////EMPLEADO
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM empleado  WHERE IDempleado=$id";
   	return $this->ejecutarSentencia();
}

////////EVALUCION
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM evaluacion  WHERE IDevaluación=$id";
   	return $this->ejecutarSentencia();
}

/////JORNADA
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM jornada  WHERE IDjornada=$id";
   	return $this->ejecutarSentencia();
}
//////MANTENIMIENTO
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM mantenimiento  WHERE IDmantenimiento=$id";
   	return $this->ejecutarSentencia();
}
/////MATERIAPRIMA
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM materiaprima  WHERE ID=$id";
   	return $this->ejecutarSentencia();
}
/////////MOBILIARIO
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM mobiliario  WHERE IDmobiliario=$id";
   	return $this->ejecutarSentencia();
}
}
////////////7PAGO
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM pago  WHERE IDpago=$id";
   	return $this->ejecutarSentencia();
}
////////PEDIDO

public function eliminar($id){
   	$this->sentencia ="DELETE * FROM pedido  WHERE IDpedido=$id";
   	return $this->ejecutarSentencia();
}
////////PRODUCTO

public function eliminar($id){
   	$this->sentencia ="DELETE * FROM producto  WHERE IDproducto=$id";
   	return $this->ejecutarSentencia();
}
////////PROVEEDOR
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM proveedor  WHERE IDproveedor=$id";
   	return $this->ejecutarSentencia();
}
//////REEMPLAZO
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM reemplazo  WHERE IDremplazo=$id";
   	return $this->ejecutarSentencia();
}
///////////proyecto
public function eliminar($id){
   	$this->sentencia ="DELETE * FROM proyecto WHERE IDproyecto=$id";
   	return $this->ejecutarSentencia();
}
/////USUARIO

public function eliminar($id){
   	$this->sentencia ="DELETE * FROM usuario WHERE IDusuario=$id";
   	return $this->ejecutarSentencia();
}
////////VENTA
ublic function eliminar($id){
   	$this->sentencia ="DELETE * FROM venta WHERE IDventa=$id";
   	return $this->ejecutarSentencia();
}


