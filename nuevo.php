<html lang="es">

	<head> 
		<title>PEGASO | Nuevo Registro</title>
		<header class="header">
		<div class="contain">
			<h1><img src="images/logo.png" alt="brushell"></h1>
		</div>
	</header> 




<nav class="navbar">
		<span class="item"><span>1</span> <span>Datos personales</span></span>
		<span class="item"><span>2</span> <span>Otros de interés</span></span>
		<span class="item"><span>3</span> <span>Finalizar</span></span>
		<meta name="viewport" content="width=device-whit, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=RobotoCondensed:400,300,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	

	</nav>

	<div class="contain content">
	<header>
		<h2>¡HOLA!,</h2>
		<p>En pocos minutos pasarás a formar parte de la red social. </p> 
	</header>

	</head>
	<body>
		<div class="wrapper paso-1">
		
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Nuevo Registro</h3>
			</div>
			
			

			<form action="guardar.php" enctype="multipart/form-data" class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
			<div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">Nombre</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="nombre" name="nombre"
				placeholder="Nombre" required>
	
			</div>
			</div>
	
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email"
				placeholder="Email" required>
			</div>
		</div>	

		<div class="form-group">
			<label for="telefono" class="col-sm-2 control-label">Telefono</label>
			<div class="col-sm-10">
				<input type="telefono" class="form-control" id="telefono" name="telefono"
				placeholder="Telefono" required>
			</div>
		</div>	
		
			<div class="form-group">
				<label for="estado_civil" class"col-sm2 control-label">  Estado Civil
				</label>
				<div class="col-sm-10">
				<select class="form-control" id="estado_civil" name=
				"estado_civil">
					<option value="SOLTERO">SOLTERO</option>
					<option value="CASADO">CASADO</option>
					<option value="OTRO">OTRO</option>
				</select>
			</div>
			</div>
	
			<div class="form-group">
				<label for="hijos" class="col-sm-2 control-label">¿Tienes Hijos?
				</label>
				
				<div class="col-sm-10">
					<label class="radio-inline">
						<input type="radio" id="hijos" name="hijos" value="1" checked
						> SI
						</label>
						
				<label class="radio-inline">
					<input type="radio" id="hijos" name="hijos" value="0"> NO
					</label>
				</div>
				</div>
	
			<div class="form-group">
				<label for="intereses" class="col-sm-2 control-label">INTERESES
		</label>
				
				<div class="col-sm-10">
					<label class="checkbox-inline">
						<input type="checkbox" id="intereses[]" name="intereses[]"
						value="Libros"> Libros
						</label>
						
					<label class="checkbox-inline">
						<input type="checkbox" id="intereses[]" name="intereses[]"
						value="Musica">Musica
						</label>
						
					<label class="checkbox-inline">
						<input type="checkbox" id="intereses[]" name="intereses[]"
						value="Deportes"> Deportes
						</label>
						
					<label class="checkbox-inline">
						<input type="checkbox" id="intereses[]" name="intereses[]"
						value="Otros">Otros

						</label>
					</div>
				</div>
				<label>
					<h3>Ingresa una foto de perfil</h3>


		<div action="guardar.php" method="POST" enctype="multipart/form-data"/>
			<input type="file" REQUIRED name="Imagenes"/><br/><br/>
			
				</label> 
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="index.php" class="btn btn-fefault">Regresar</a><br/><br/>
					<button type="submit" class="btn btn-primary">Guardar</button>		
				</div>
			</div>
		</form>
	</div>
	</body>
</html>