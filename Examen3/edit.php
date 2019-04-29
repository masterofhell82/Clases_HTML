<<?php
include("db.php");
$marca = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM jdm_telefonos_tabla WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $marca = $row['marca'];
    $description = $row['description'];
  }
}
/*
Se usa para editar uno de los productos del formulario mediante el id
y asi poder editar bien sea la marca o la descripcion del articulo
de poder actualizar la informacion se muestra el message que te indica
su actualizacion satisfactoria 
*/
if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $marca= $_POST['marca'];
  $description = $_POST['description'];

  $query = "UPDATE jdm_telefonos_tabla set marca = '$marca', description = '$description' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'La Descripcion fue actualizada exitosamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}
/*
Esta siguiente llama a header.php para ubicar el diseño de la 
cabezera en la parte superior mediante el nombre que le proporcione PHP CRUD MYSQL TELEFONOS
*/
?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="marca" type="text" class="form-control" value="<?php echo $marca; ?>" placeholder="Update marca">
        </div>
        <div class="form-group">
        <textarea name="description" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
