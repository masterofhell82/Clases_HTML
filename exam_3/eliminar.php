<?php

include_once 'app.php';
$id = $_GET['id'];

$sql_eliminar = 'DELETE FROM mag_libros_tabla WHERE id=?';
$sentencia_eliminar = $pdo->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($id));

//Aquí cerramos la conexión de la base de datos y sentencia
$pdo = null;
$sentencia_eliminar = null;

header('location:index.php');