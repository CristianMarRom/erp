<?php 
	require_once("venta.php");
	$obj = new Venta();
 ?>
<section id="principal">
    <div>
		<a href="?sec=gven"><input type="button" value="Generar Gráfica"></a>
    </div>
	<div>
		<a href="?sec=rven"><input type="button" value="Generar Reporte"></a>
    </div>
	<form action="" method="post">
		ID Venta: <input type="text" name="IDVenta"> <br>
		Fecha: <input type="date" name="fecha"> <br>
		Cliente:
		<?php
		$obj->obtenerClientes();
		?> <br>
		Total: <input type="text" name="Total"> <br>
		Tipo de pago:
		<select name="tipo_pago">
			<option value="1">Efectivo</option>
			<option value="2">Tarjeta</option>
		</select> <br>
		<input type="submit" value="Agregar Venta" name="alta">
		<br>
		<?php
        if(isset($_GET["e"])){
        	echo "<h2>Venta Eliminada</h2>";
        }?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$IDVenta = $_POST["IDVenta"];
			$fecha = $_POST["fecha"];
			$IDCliente = $_POST["IDCliente"];
			$Total = $_POST["Total"];
			$tipo_pago = $_POST["tipo_pago"];
			
			$obj->alta($IDVenta,$fecha,$IDCliente,$Total,$tipo_pago);
			echo "<h2>Venta agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>ID Cliente</th>
			<th>Fecha</th>
			<th>ID Cliente</th>		
		    <th>Total</th>
			<th>Tipo de pago</th>
			<th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["IDVenta"]."</td>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["IDCliente"]."</td>";
				echo "<td>".$fila["Total"]."</td>";
				if($fila["tipo_pago"]==1){
					echo "<td>Efectivo</td>";
				}else{
					echo "<td>Tarjeta</td>";
				}
			?>
			<td>
			<form action="" method="post" class="eliminar">
				<input type="hidden" value="<?php echo $fila['IDventa']; ?>" name="id">
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
        	header("Location: ?sec=ven&e=1");
        }
    ?>
</section>