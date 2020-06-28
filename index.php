<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ERP</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<nav>
		<ul>
			<a href="index.php"><li>Inicio</li></a>
			<a href="?sec=asi"><li>Asistencia</li></a>	
			<a href="?sec=cli"><li>Clientes</li></a>
			<a href="?sec=com"><li>Compras</li></a>	
			<a href="?sec=emp"><li>Empleados</li></a>
			<a href="?sec=mat"><li>Materia Prima</li></a>
			<a href="?sec=mob"><li>Mobiliario</li></a>
			<a href="?sec=prd"><li>Producto</li></a>
			<a href="?sec=prv"><li>Proveedor</li></a>
			<a href="?sec=usu"><li>Usuario</li></a>
			<a href="?sec=ven"><li>Ventas</li></a>
			
		</ul>
	</nav>
	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
		    case 'asi':
				require_once("php/vistaAsistencia.php");
				break;
			case 'gasi':
			    require_once("php/graficaAsistencia.php");
			    break;
			case 'rasi':
				header("Location: php/reporteAsistencia.php");
				break;}}
	?>
	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
		    case 'cli':
				require_once("php/vistaCliente.php");
				break;
			case 'gcli':
			    require_once("php/graficaCliente.php");
			    break;
			case 'rcli':
				header("Location: php/reporteCliente.php");
				break;}}
	?>
	<?php 
		if(isset($_GET["sec"])){
			$sec = $_GET["sec"];
			switch ($sec) {
				case 'usu':
					require_once("php/vistaUsuario.php");
					break;}}
	 ?>
	 <?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
		    case 'ven':
				require_once("php/vistaVenta.php");
				break;
			case 'gven':
			    require_once("php/graficaVenta.php");
			    break;
			case 'rven':
				header("Location: php/reporteVenta.php");
				break;}}
	?>
 	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
			case 'emp':
				require_once("php/vistaEmpleado.php");
				break;
			case 'remp':
				header("Location: php/reporteEmpleado.php");
				break;}}
	 ?>
 	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
			case 'prv':
				require_once("php/vistaProveedor.php");
				break;
			case 'rprv':
				header("Location: php/reporteProveedor.php");
				break;}}
	 ?>
 	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
			case 'prd':
				require_once("php/vistaProducto.php");
				break;
			case 'gpro':
				require_once("php/graficaProducto.php");
				break;
			case 'rpro':
				header("Location: php/reporteProducto.php");
				break;}}
	 ?>
 	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
			case 'com':
				require_once("php/vistaCompra.php");
				break;
			case 'gcom':
				require_once("php/graficaCompra.php");
				break;
		    case 'rcom':
				header("Location: php/reporteCompra.php");
				break;}}
	 ?>
 	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
			case 'mat':
				require_once("php/vistaMateriapri.php");
				break;
			case 'gmat':
				require_once("php/graficaMateriapri.php");
				break;
			case 'rmat':
				header("Location: php/reporteMateriapri.php");
				break;}}
	 ?>
 	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
			case 'mob':
				require_once("php/vistaMobiliario.php");
				break;
			case 'gmob':
				require_once("php/graficaMobiliario.php");
				break;
			case 'rmob':
				header("Location: php/reporteMobiliario.php");
				break;}}
	 ?>
</body>
</html>