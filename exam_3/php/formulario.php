<?php
include "conexion.php";
$user_id=null;
$sql1= "select * from es_person where id = ".$_GET["id"];
$query = $con->query($sql1);
$es_person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $es_person=$r;
  break;
}

  }
?>

<?php if($es_person!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $es_person->name; ?>" name="name" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $es_person->lastname; ?>" name="lastname" required>
  </div>
  <div class="form-group">
    <label for="address">Domicilio</label>
    <input type="text" class="form-control" value="<?php echo $es_person->address; ?>" name="address" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo $es_person->email; ?>" name="email" >
  </div>
  <div class="form-group">
    <label for="phone">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $es_person->phone; ?>" name="phone" >
  </div>
<input type="hidden" name="id" value="<?php echo $es_person->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>