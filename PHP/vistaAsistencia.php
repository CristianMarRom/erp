<?php 
	require_once("asistencia.php");
	$obj = new Asistencia();
 ?>
<section id="principal">
    <div>
		<a href="?sec=gasi"><input type="button" value="Generar Gráfica"></a>
    </div>
	<div>
		<a href="?sec=rasi"><input type="button" value="Generar Reporte"></a>
    </div>
	<form action="" method="post">
		Fecha: <input type="date" name="Fecha"> <br>
		ID Empleado: <input type="text" name="IDempleado"> <br>
		Hora: <input type="time" name="Hora"> <br>
		<input type="submit" value="Agregar Asistencia" name="alta">
		<br>
		<?php
        if(isset($_GET["e"])){
        	echo "<h2>Asistencia Eliminada</h2>";
        }?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$Fecha = $_POST["Fecha"];
			$IDempleado = $_POST["IDempleado"];
			$Hora = $_POST["Hora"];
			
			$obj->alta($Fecha,$IDempleado,$Hora);
			echo "<h2>Asistencia agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha</th>
			<th>ID Empleado</th>		
		    <th>Hora</th>
			<th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["Fecha"]."</td>";
				echo "<td>".$fila["IDempleado"]."</td>";
				echo "<td>".$fila["Hora"]."</td>";
			?>
			<td>
			<form action="" method="post" class="eliminar">
				<input type="hidden" value="<?php echo $fila['IDasistencia']; ?>" name="id">
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
        	header("Location: ?sec=asi&e=1");
        }
    ?>
</section>