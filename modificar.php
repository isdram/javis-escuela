<!DOCTYPE html>
<html>
<head>
	<title>Index de imagenes</title>
</head>
<body>
					<?php
						include("conexion.php");

						$id = $_REQUEST['id'];

						$query = "SELECT * FROM personas WHERE id= '$id'";
						$resultado = $conexion->query($query);
						$row = $resultado->fetch_assoc();
					?>
<center> <br/><br/><br/>	
	 	<form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
		<input type="text" REQUIRED  name="nombre" placeholder="Nombre..." value="<?php echo $row ['nombre']; ?>"/><br/><br/>
		<td><img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagenes']); ?>"/><br/><br/>
		<input type="file" REQUIRED name="Imagenes"/><br/><br/>
		<input type="submit" value="Aceptar"/>
	</form>
	</center>
</body>
</html>