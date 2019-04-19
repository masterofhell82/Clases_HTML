<?php
function coneccion()
{
	//variables para conectar con la base de datos
	$host = 'localhost';
	$username = 'luis';
	$password = '123456';
	$database = 'lg_crud';

	$conn = new mysqli($host, $username, $password, $database); //funcion que conecta con mysql recibiendo por parametros las variables indicadas
	if ($conn->connect_errno) {
		echo "
			No se pudo conectar con la base   de datos.
			\n Errno: $conn->connect_errno
			Error: $conn->connect_error 
		"; //lanzar un alert informando que no se pudo conectar
		exit;
	}
	return $conn;
}
