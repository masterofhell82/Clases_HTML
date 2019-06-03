<?php

include("db.php"); //Para incluir la Base de datos
/*
El siguiente codigo se usa para borrar un atributo añadido
al formulario seleccionandolo de la tabla por su id
*/
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM jdm_telefonos_tabla WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
/*
Este muestra el mensaje de que la operacion de eliminacion
fue exitosa 
*/
  $_SESSION['message'] = 'El telefono fue removido exitosamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>