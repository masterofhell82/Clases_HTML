<?php

include('db.php'); //Para incluir el archivo de la base de datos
/* El siguiente codigo se utiliza para asignar los valores
a la base de datos en mi caso se agrega la marca del dispositivo y su descripcion*/
if (isset($_POST['save_task'])) {
  $marca = $_POST['marca'];
  $description = $_POST['description'];
  $query = "INSERT INTO jdm_telefonos_tabla(marca, description) VALUES ('$marca', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
/*
El siguiente muestra el mensaje de que se guardo la informacion correctamente
*/
  $_SESSION['message'] = 'Se Guardo Exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
