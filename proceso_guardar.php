<?php
	include("conexion.php");
	$nombre = $_POST['nombre'];
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

	$query = "INSERT INTO tabla_imagen(nombre,Imagen) VALUES('$nombre','$Imagen')";
	$resultado = $conexion->query($query);

	if ($resultado) {
		header("Location: mostrar.php");

	}else {
		echo "no se inserto";
	}
?>