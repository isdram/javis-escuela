<?php

$conexion = new mysqli('localhost', 'root', '', 'personal');

if($conexion->connect_error){
	die('Error en la conexion' . $conexion->connect_error);
}
	printf("Servidor Informacion: %s\n", $conexion->server_info);
?>