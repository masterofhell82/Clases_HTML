<?php

function conectar()
{
	//variables para conectar con la base de datos
	$host = 'localhost';
	$username = 'luis';
	$password = '123456';
	$database = 'lg_crud';

	$conn = mysqli_connect($host, $username, $password, $database); //funcion que conecta con mysql recibiendo por parametros las variables indicadas
	if (!$conn) {
		echo "<script>alert('No se pudo conectar con la base   de datos')</script>"; //lanzar un alert informando que no se pudo conectar
	}
}
