<?php 
	require_once("venta.php");
	$obj = new Venta();
 ?>
<section id="principal">

	<form action="" method="post">
		ID Venta: <input type="text" name="IDVenta"> <br>
		Fecha: <input type="date" name="fecha"> <br>
		ID Cliente: <input type="text" name="IDCliente"> <br>
		Total: <input type="text" name="Total"> <br>
		Tipo de pago:
		<select name="tipo_pago">
			<option value="1">Efectivo</option>
			<option value="2">Tarjeta</option>
		</select> <br>
		<input type="submit" value="Agregar Venta" name="alta">
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
				echo "</tr>";
			}
		 ?>
	</table>

</section>