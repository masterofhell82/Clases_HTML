<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root', //Usuario para acceder a la BD
  '', //Clave para acceder a la BD
  'jm_telefonos_base_datos' // Nombre de la BD
) or die(mysqli_erro($mysqli));

?>