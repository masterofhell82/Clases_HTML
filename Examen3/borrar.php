<?php
// conexion a bdd
include_once 'app.php';

$id = $_GET['id'];

$sql_borrar = 'DELETE FROM vdt_bebidas_tabla WHERE id=?';
$sente_borrar = $pdo->prepare($sql_borrar);
$sente_borrar->execute(array($id));
//Se cierra la conexión de la base de datos 
// y las sentencias
$pdo = null;
$sentencia_borrar = null;
header('location:index.php'); 
?>