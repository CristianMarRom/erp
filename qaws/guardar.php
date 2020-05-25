<?php
$nom=$_POST['nom'];
$tip=$_POST['tip'];
$contra=$_POST['pass'];

    $conexion=mysqli_connect("localhost", "root", "", "erpsi") or die ("No se pudo establecer la conexion");
	mysqli_query($conexion, "insert into usuarios values(default,'$nom','$tip','$contra')") or die("EXITO EN LA CONEXCION");
?>