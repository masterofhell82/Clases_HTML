<?php
// echo 'editar.php?id=1&peliculas=Titanic&descripcion=es una pelicula estadounidense dramatica de catastrofe de 1997 dirigida y escrita por James Cameron y protagonizada por Leonardo DiCaprio, Kate Winslet, Billy Zane, Kathy Bates, Gloria Stuart y Bill Paxton. La trama, una epopeya romantica, relata la relacion de Jack Dawson y Rose DeWitt Bukater, dos jovenes que se conocen y se enamoran a bordo del transatlantico RMS Titanic en su viaje inaugural desde Southampton, Inglaterra, a Nueva York, EE. UU., en abril de 1912. ';
// echo '<br>';

$id=$_GET['id'];
$peliculas=$_GET['peliculas'];
$descripcion=$_GET['descripcion'];
// echo $id;
// echo '<br>';
// echo $peliculas;
// echo '<br>';
// echo $descripcion;
// echo '<br>';

include_once 'app.php';

// aqui se realizo toda la parte de edicion de la informacion existente
$sql_editar='UPDATE dca_peliculas_tabla SET peliculas=?,descripcion=? WHERE id=?';
$sentencia_editar=$POD->prepare($sql_editar);
$sentencia_editar->execute(array($peliculas,$descripcion,$id));

//para cerrar la conexion de la base de datos
$POD=null;    
$sentencia_editar=null;

//para redireccionar los acampos
header('location:index.php');

?>