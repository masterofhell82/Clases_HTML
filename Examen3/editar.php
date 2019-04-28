<?php
// Editar recibir datos atraves del metodo get.

//echo 'editar.php?id=1&nombre_de_bebidas=otro 
//nombre_de_bebidas&grado_de_alcohol=otra grado_de_alcohol';
//echo '<br>';
$id = $_GET['id'];
$nombre_de_bebidas = $_GET['nombre_de_bebidas'];
$grado_de_alcohol = $_GET['grado_de_alcohol'];
echo $id;
echo '<br>';
echo $nombre_de_bebidas;
echo '<br>';
echo $grado_de_alcohol;
//Operación de Update
include_once 'app.php';
$sql_editar = 'UPDATE vdt_bebidas_tabla SET nombre_de_bebidas=?,grado_de_alcohol=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($nombre_de_bebidas,$grado_de_alcohol,$id));
//se cierra la conexión de la base de datos y sentencia
$pdo = null;
$sentencia_editar = null;
// 
header('location:index.php'); 
?>