<?php 
	require_once("empleado.php");
	$obj = new Empleado();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre: <input type="text" name="nombre"> <br>
		Apellido Paterno: <input type="text" name="appaterno"> <br>
		Apellido Materno: <input type="text" name="apmaterno"> <br>
		Correo: <input type="text" name="correo"> <br>
		RFC: <input type="text" name="rfc"> <br>
		Telefono: <input type="text" name="telefono"> <br>
		Sexo:
		<select name="sexo">
			<option value="1">Femenino</option>
			<option value="2">Masculino</option>
		</select> <br>
		Fecha de Ingreso: <input type="date" name="fechadeingreso"> <br>	
		Cargo: <input type="text" name="cargo"> <br>
		Salario: <input type="text" name="salario"> <br>	
		Estado Civil:
		<select name="estadocivil">
			<option value="1">Solter@</option>
			<option value="2">Casad@</option>
		</select> <br>	
		Numero NSS: <input type="text" name="nss"> <br>		
		<input type="submit" value="Agregar Empleado" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];
			$appaterno = $_POST["appaterno"];
			$apmaterno = $_POST["apmaterno"];
			$correo = $_POST["correo"];
			$rfc = $_POST["rfc"];
			$telefono = $_POST["telefono"];
			$sexo = $_POST["sexo"];
			$fechadeingreso = $_POST["fechadeingreso"];
			$cargo = $_POST["cargo"];
			$salario = $_POST["salario"];
			$estadocivil = $_POST["estadocivil"];
			$nss = $_POST["nss"];			
			
			$obj->alta($nombre,$appaterno,$apmaterno,$correo,$rfc,$telefono,$sexo,$fechadeingreso,$cargo,$salario,$estadocivil,$nss);
			echo "<h2>Empleado agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Nombre</th>
			<th>Apellido Paterno</th>		
		    <th>Apellido Materno</th>
			<th>Correo</th>
			<th>RFC</th>
			<th>Telefono</th>
			<th>Sexo</th>
			<th>Fecha de ingreso</th>
			<th>Cargo</th>
			<th>Salario</th>
			<th>Estado Civil</th>
			<th>NSS</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."</td>";
				echo "<td>".$fila["appaterno"]."</td>";
				echo "<td>".$fila["apmaterno"]."</td>";
				echo "<td>".$fila["correo"]."</td>";
				echo "<td>".$fila["rfc"]."</td>";
				echo "<td>".$fila["telefono"]."</td>";
				if($fila["sexo"]==1){
					echo "<td>Femenino</td>";
				}else{
					echo "<td>Masculino</td>";
				}
				echo "<td>".$fila["fechadeingreso"]."</td>";
				echo "<td>".$fila["cargo"]."</td>";
				echo "<td>".$fila["salario"]."</td>";
				if($fila["estadocivil"]==1){
					echo "<td>Solter@</td>";
				}else{
					echo "<td>Casad@</td>";
				}
				echo "<td>".$fila["nss"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>