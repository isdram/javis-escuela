<!DOCTYPE html>
<html>
<head>
	<title>INFORMACION</title>
</head>
<body>

	<center>
		<table border="2">
			<thead>
				<tr>
					<th colspan="10"> <a href="index.php">HOME</a> </th>
				</tr>


				<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>telefono</th>
						<th>Estado Civil</th>
						<th>Hijos S/N</th>
						<th>Interes</th>
						<th>Imagen</th>
						<th colspan="2">Operaciones</th>
				</tr>
			
			</thead>
				<tbody>
					<?php
						include("conexion.php");
						
						//$query = "SELECT * FROM personas WHERE id='ID'";
					
					//$query = "SELECT * FROM personas WHERE id = '%ID'";
					//$query = "SELECT * FROM personas WHERE numero = '$id'";
					$query = "SELECT * FROM personas";

						$resultado = $conexion->query($query);
						while ($row = $resultado->fetch_assoc()) {
					?>
						<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['nombre']; ?></td>
		<td><?php echo $row['correo']; ?></td>
		<td><?php echo $row['telefono']; ?></td>
		<td><?php echo $row['estado_civil']; ?></td>
		<td><?php echo $row['hijos']; ?></td>
		<td><?php echo $row['intereses']; ?></td>
		<td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagenes']); ?>" /></td>
							


							<th><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></th>  
							<th><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></th> 

						</tr>
					<?php 
							}
					 ?>
				</tbody>


		</table>
	</center>
</body>
</html>