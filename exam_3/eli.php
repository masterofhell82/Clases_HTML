<?php
include_once 'app.php';//importa a el archivo app.php
$id=$_GET['id'];//id por GET
$eliminar='DELETE FROM dja_prueba WHERE id=?';//variable con sentencia eliminar de la tabla cuado tiene un id espesifico
$sminar=$mbd->prepare($eliminar);//variable donde se prepara la variable anterior con la BDD
$sminar->execute(array($id));//ejecutar la variable en un array el cual usara la id
header('location:index.php');//manda directamente a la pagina principal, asi no se tiene que recargar la pagina
//no se cierra en este caso el php para evitar inyexiones 