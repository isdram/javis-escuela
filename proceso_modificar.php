<?php
	include("conexion.php");


	$id = $_REQUEST['id'];

	$nombre = $_POST['nombre'];
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

	$query = "UPDATE tabla_imagen SET nombre='$nombre',Imagen='$Imagen' WHERE id='$id'";
	$resultado = $conexion->query($query);

	if ($resultado) {
	
		header("Location: mostrar.php");

	}else {
		echo "no se modifico";
	}
?>