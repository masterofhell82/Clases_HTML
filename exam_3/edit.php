<?php
$id=$_GET['id'];//id por GET
$Nombre=$_GET['nom'];//nombre por GET
$Apellido=$_GET['ape'];//apellido por GET
$CI=$_GET['ci'];//ci por GET
include_once 'app.php';//importa a el archivo app.php
$editar='UPDATE dja_prueba SET Nombre=?,Apellido=?,CI=? WHERE id=?';//variable con sentencia editar de la tabla cuado tiene un id espesifico
$sditar=$mbd->prepare($editar);//variable donde se prepara la variable anterior con la BDD
$sditar->execute(array($Nombre,$Apellido,$CI,$id));//ejecutar la variable en un array los cuales son los componentes necesarios para editar los elementos de un id espesifico
header('location:index.php');//manda directamente a la pagina principal, asi no se tiene que recargar la pagina
//no se cierra en este caso el php para evitar inyexiones
