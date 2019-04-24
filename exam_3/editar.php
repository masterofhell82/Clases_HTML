<?php

//echo 'editar.php?id=1&titulo=otro titulo&sinopsis=otra sinopsis';
//echo '<br>';

$id = $_GET['id'];
$titulo = $_GET['titulo'];
$sinopsis = $_GET['sinopsis'];

echo $id;
echo '<br>';
echo $titulo;
echo '<br>';
echo $sinopsis;

//Operación de Update
include_once 'app.php';

$sql_editar = 'UPDATE mag_libros_tabla SET titulo=?,sinopsis=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($titulo,$sinopsis,$id));

//Aquí cerramos la conexión de la base de datos y sentencia
$pdo = null;
$sentencia_editar = null;

header('location:index.php');