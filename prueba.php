<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/reemplazo.php");
$obj = new Remplazo();
$obj->alta("2","2020-05-03","49","cafe grande");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
    echo $fila["IDremplazo"]." ".$fila["IDmobiliario"]." ".$fila["fecha"]." ".$fila["costo"]." ".$fila["descripcion"]."<br>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/proyecto.php");
$obj = new Proyecto();
$obj->alta("Areas", "Supervision","3","2020-02-09","2020-05-02","Conocer empleado");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
    echo $fila["IDproyecto"]." ".$fila["nombre_pro"]."".$fila["tipo_pro"]."".$fila["IDempleado"]."".$fila["fecha_in"]."".$fila["fecha_fin"]."".$fila["descripcion"]."<br>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////      
/*require_once("php/pedido.php");
$obj = new Pedido();
$obj->alta("2020-06-09","3","9","12","Paseo matlazincas","2");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
    echo $fila["IDpedido"]." ".$fila["fecha"]."".$fila["IDcliente"]."".$fila["precio"]."".$fila["cantidad"]."".$fila["direccion"]."".$fila["IDproducto"]."<br>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/mantenimiento.php");
$obj = new Mantenimiento();
$obj->alta("2020-05-03","4","5","4","7");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
    echo $fila["IDmantenimiento"]." ".$fila["fecha_man"]." ".$fila["area"]." ".$fila["IDmob"]." ".$fila["costo_man"]." ".$fila["IDempleado"]."<br>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/jornada.php");
$obj = new Jornada();
$obj->alta("30","7","90","5","2","1");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
    echo $fila["IDjornada"]." ".$fila["hrs_trabajadas"]." ".$fila["dias_trabajados"]." ".$fila["pago_hora"]." ".$fila["horas_extra"]." ".$fila["bonos"]." ".$fila["IDempleado"]."<br>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/evaluacion.php");
$obj = new Evaluacion();
$obj->alta("Empleado","Nadia","20","Femenino", "Informatica", "Mantenimiento","si","no","5000","Soltero", "998976762");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
    echo $fila["IDevaluación"]." ".$fila["tipo"]." ".$fila["pregunta1"]." ".$fila["pregunta2"]." ".$fila["pregunta3"]." ".$fila["pregunta4"]." ".$fila["pregunta5"]." ".$fila["pregunta6"]." ".$fila["pregunta7"]." ".$fila["pregunta8"]." ".$fila["pregunta9"]." ".$fila["pregunta10"]."<br>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/detalle_compra.php");
$obj = new Detalle_compra();
$obj->alta("7","5","9");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
    echo $fila["IDdetallecompra"]." ".$fila["IDmateriaprima"]."".$fila["IDcompra"]."".$fila["cantidad"]."<br>";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/balance.php");
$obj = new Balance();
$obj->alta("2020-04-12","2020-09-20","4");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
    echo $fila["IDbalance"]." ".$fila["fechainicio"]."".$fila["fechafin"]."".$fila["total"]."<br>";
  }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/asistencia.php");
$obj = new Asistencia();
$obj->alta("2020-04-12","4","13:00:00");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
    echo $fila["IDasistencia"]." ".$fila["fecha"]."".$fila["IDempleado"]."".$fila["hora"]."<br>";
  }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/actividad.php");
$obj = new Actividad();
$obj->alta("7","1","2","3");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
  	echo $fila["IDactividad"]." ".$fila["registro"]."".$fila["IDusuario"]."".$fila["movimiento_act"]."".$fila["movimiento_tabla"]."<br>";
  }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/empleado.php");
$obj = new Empleado();
//$obj->alta("Gael","Morales","Martinez","gael@gmail.com","GAMOMA0302039", "724679976", "Masculino","13-03-2020","Gerente","5000","Soltero", "998976762");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
  	echo $fila["IDempleado"]." ".$fila["nombre"]."".$fila["appaterno"].$fila["apmaterno"]."".$fila["correo"].$fila["rfc"]."".$fila["telefono"].$fila["sexo"].$fila["fechadeingreso"].$fila["cargo"].$fila["salario"].$fila["estadocivil"].$fila["nss"]."<br";
  }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/devoluciones.php");
$obj = new Devoluciones();
//$obj->alta("29-06-2020","20","Papas sabritas","2");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
  	echo $fila["IDdevoluciones"]." ".$fila["fecha"]." ".$fila["cantidad"]." ".$fila["descripcion"].$fila["IDproducto"]."<br";
  }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/compra.php");
$obj = new Compra();
//$obj->alta("10-06-2020","10","12","7");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
  	echo $fila["IDcompra"]." ".$fila["fecha"]." ".$fila["total"]." ".$fila["tipo_pago"]." ".$fila["id_cliente"]."<br";
  }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/cliente.php");
$obj = new Cliente();
$obj->alta("Karla","Metepec","72332433","karla@gmail.com","Martinez","Villalva","Femenino","13-06-2000");
$res = $obj-> consulta();

while($fila = $res->fetch_assoc()){
  	echo $fila["IDcliente"]." ".$fila["nombre"]."".$fila["direccion"].$fila["telefono"]."".$fila["correo"].$fila["apematerno"]."".$fila["apepaterno"].$fila["sexo"].$fila["fenacimiento"]."<br";
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/venta.php");
$obj =new Venta();
$obj->alta("120","25-02-2020","1","235","1");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["IDVenta"]." ".$fila["fecha"]." ".$fila["IDCliente"]." ".$fila["Total"]." ".$fila["tipo_pago"]."<br>";
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/producto.php");
$obj =new Producto();
$obj->alta("chocolate","15 gr cacao","8","7","55","50","60","dulces");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["nombre"]." ".$fila["descripcion"]." ".$fila["preciov"]." ".$fila["precioc"]." ".$fila["cantidad"]." ".$fila["cantmin"]." ".$fila["cantmax"]." ".$fila["categoria"]."<br>";
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/proveedor.php");
$obj =new Proveedor();
$obj->alta("esteban","7223459751","carlos leon #25","metepec","esteban123@gmail.com","INNH987NNA7");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["nombre"]." ".$fila["telefono"]." ".$fila["direccion"]." ".$fila["correo"]." ".$fila["rfc"]."<br>";
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/pago.php");
$obj =new Pago();
$obj->alta("23","12","25-02-2020","1","12");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["IDpago"]." ".$fila["IDempleado"]." ".$fila["sal"]." ".$fila["fecha_dep"]." ".$fila["met_pag"]." ".$fila["des"]."<br>";
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/mobiliario.php");
$obj =new Mobiliario();
$obj->alta("silla","cuero negro", "plegable","35","7","oficina");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["IDmobiliario"]." ".$fila["nombre"]." ".$fila["descripcion"]." ".$fila["cantidad"]." ".$fila["nic"]." ".$fila["tipo"]."<br>";
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
require_once("php/materiapr.php");
$obj =new Materia();
$obj->alta("Refresco","2","lata 355 ml","7","1","25");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["ID"]." ".$fila["Nombre"]." ".$fila["Tipo"]." ".$fila["Descripcion"]." ".$fila["Precio"]." ".$fila["Stock"]." ".$fila["Existencias"]."<br>";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*require_once("php/usuario.php");
$obj =new Usuario();
$obj->alta("Cristian","1","1234");

$res = $obj->consulta();
while($fila = $res->fetch_assoc()){
	echo $fila["IDusuario"]." ".$fila["nombre"]." ".$fila["tipo"]." ".$fila["password"]."<br>";
}*/
?>

