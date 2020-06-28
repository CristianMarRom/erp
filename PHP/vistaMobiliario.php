<?php 
	require_once("mobiliario.php");
	$obj = new Mobiliario();
 ?>
<section id="principal">
    <div>
		<a href="?sec=gmob"><input type="button" value="Generar Gráfica"></a>
    </div>
    <div>
		<a href="?sec=rmob"><input type="button" value="Generar Reporte"></a>
    </div>
	<form action="" method="post">
		Nombre: <input type="text" name="nombre"> <br>
		Descripcion: <input type="text" name="descripcion"> <br>
		Cantidad: <input type="text" name="cantidad"> <br>
		NIC: <input type="text" name="nic"> <br>
		Tipo: <input type="text" name="tipo"> <br>
		<input type="submit" value="Agregar Mobiliario" name="alta">
		<br>
		<?php
        if(isset($_GET["e"])){
        	echo "<h2>Mobiliario Eliminado</h2>";
        }?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];
			$descripcion = $_POST["descripcion"];
			$cantidad = $_POST["cantidad"];
			$nic = $_POST["nic"];
			$tipo = $_POST["tipo"];
			
			$obj->alta($nombre,$descripcion,$cantidad,$nic,$tipo);
			echo "<h2>Mobiliario agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>ID Mobiliario</th>
			<th>Nombre</th>
			<th>Descripcion</th>		
		    <th>Cantidad</th>
			<th>nic</th>
			<th>Tipo</th>
			<th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["IDmobiliario"]."</td>";
				echo "<td>".$fila["nombre"]."</td>";	
				echo "<td>".$fila["descripcion"]."</td>";
				echo "<td>".$fila["cantidad"]."</td>";
				echo "<td>".$fila["nic"]."</td>";
				echo "<td>".$fila["tipo"]."</td>";
			?>
			<td>
			<form action="" method="post" class="eliminar">
				<input type="hidden" value="<?php echo $fila['IDmobiliario']; ?>" name="id">
				<input type="submit" value="Eliminar" name="eliminar">
			</form>
		    </td>
			<?php 
			echo "</tr>";
			}
		 ?>
	</table>
    <?php 
        if(isset($_POST["eliminar"])){
        	$id = $_POST["id"];
        	$obj->eliminar($id);
        	header("Location: ?sec=mob&e=1");
        }
    ?>
</section>