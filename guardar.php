<?php
	
	//include("conexion.php")
	require 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$estado_civil = $_POST['estado_civil'];
	$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 0;
	$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;
	$Imagenes = addslashes(file_get_contents($_FILES['Imagenes']['tmp_name']));
	



	$arrayIntereses = null;
	
	$num_array = count($intereses);
	$contador = 0;
	
	if($num_array>0){
		foreach ($intereses as $key => $value) {
			if ($contador != $num_array-1){
			$arrayIntereses .= $value.' ';
			$contador++;
			} else {
			$arrayIntereses .= $value;
			}
		}
	}
	
	$query = "INSERT INTO personas (nombre, correo, telefono, estado_civil, hijos, intereses, Imagenes) VALUES 
	('$nombre', '$email', '$telefono', '$estado_civil', '$hijos', '$arrayIntereses','$Imagenes')";
	$resultado = $conexion->query($query);

if ($resultado) {
		header("Location: paso-2.html");

	}else {
		echo "no se inserto";
	}
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3> REGISTRO GUARDADO </h3>
						<?php } else { ?>
						<h3> ERROR AL GUARDAR </h3>
					<?php } ?>
					
					<a href="paso-2.html" class="btn btn-primary"> Continuar </a>
					
				</div>
			</div>
		</div>
	</body>
</html>
