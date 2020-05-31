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
			<a href="?sec=usu"><li>Usuario</li></a>
			<a href="?sec=ven"><li>Ventas</li></a>
			<a href="?sec=emp"><li>Empleados</li></a>
			<a href="?sec=prv"><li>Proveedor</li></a>
			<a href="?sec=prd"><li>Producto</li></a>
		</ul>
	</nav>
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
					break;}}
	?>
 	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
			case 'emp':
				require_once("php/vistaEmpleado.php");
				break;}}
	 ?>
 	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
			case 'prv':
				require_once("php/vistaProveedor.php");
				break;}}
	 ?>
 	<?php 
	if(isset($_GET["sec"])){
		$sec = $_GET["sec"];
		switch ($sec) {
			case 'prd':
				require_once("php/vistaProducto.php");
				break;}}
	 ?>
</body>
</html>