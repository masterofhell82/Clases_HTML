<?php

include_once 'app.php';
//aqui se esta realaizando una `parte del codigo donde puede borrar contenido de mi pagina

$id=$_GET['id'];
$sql_eliminar='DELETE FROM dca_peliculas_tabla WHERE id=?';
$sentencia_eliminar=$POD->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($id));


//para cerrar la conexion de la base de datos
$POD=null;
$sentencia_eliminar=null;

//para redireccionar los acampos
header('location:index.php');


?>