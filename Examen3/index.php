<?php include("db.php"); ?> 

<?php include('includes/header.php'); ?> 

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- Se ultiliza para mostrar los mensajes de alerta de boostrap  -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- Se usa para añadir a la tabla mediante las acciones ya establecidas
      la informacion de las mismas -->

      <div class="card card-body"> 
        <form action="save_task.php" method="POST"> 
          <div class="form-group">
            <input type="text" name="marca" class="form-control" placeholder="Telefono marca" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Telefono description"></textarea> 
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <!-- Este crea las dimensiones de las tablas con sus respectivas Titulos -->
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Marca</th>
            <th>Descripcion</th>          
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- Esta seleciona y combina la sentencia de ejecucución con su conjunto de resultados -->
          <?php
          $query = "SELECT * FROM jdm_telefonos_tabla";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['marca']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?> 