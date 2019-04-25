<?php
 
include_once 'app.php';

//Operación de Leer los elementos de la tabla
$sql_leer = 'SELECT * FROM `mag_libros_tabla`';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

//var_dump($resultado);

//Operación de Agregar un elemento
if($_POST){
    $titulo = $_POST['titulo'];
    $sinopsis = $_POST['sinopsis'];

    $sql_insertar = 'INSERT INTO mag_libros_tabla (titulo,sinopsis) VALUES (?,?)';
    $sentencia_insertar = $pdo->prepare($sql_insertar);
    $sentencia_insertar->execute(array($titulo,$sinopsis));

    //Aquí cerramos la conexión de la base de datos y sentencia
    $sentencia_insertar = null;
    $pdo = null;
    header('location:index.php');

}

if($_GET){
$id = $_GET['id'];
$sql_unico = 'SELECT * FROM `mag_libros_tabla` WHERE id=?';
$gsent_unico = $pdo->prepare($sql_unico);
$gsent_unico->execute(array($id));
$resultado_unico = $gsent_unico->fetch();

//var_dump($resultado_unico);
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/Estilos.css">
    <title>Biblioteca Virtual</title>
  </head>
  <body>
    <h1 class="form-title"> Bienvenido a Biblioteca M.A.</h1>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6">

                <?php foreach($resultado as $dato): ?>

                <div class="alert alert-dark" role="alert">
                    <?php echo $dato['titulo'] ?>
                    <?php echo $dato['sinopsis'] ?>

                    <a href="eliminar.php?id=<?php echo $dato['id'] ?>" class="float-right ml-3">
                    <i class="fas fa-trash-alt"></i>
                    </a>

                    <a href="index.php?id=<?php echo $dato['id'] ?>" class="float-right">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </div>

                <?php endforeach ?>
    
        </div>

        <div class="col-md-6">
           
            <?php if(!$_GET): ?>
            <h2 class = "form-title2">INTRODUCE AQUÍ TU LIBRO</h2>
            <form method="POST">
                <input type="text" class="form-control" name="titulo">
                <input type="text" class="form-control mt-3" name="sinopsis">
                <button class= "btn-submit">Agregar</button> 
        </form>
        <?php endif ?>
        
        <?php if($_GET): ?>
            <h2 class="form-title3">EDITA TU LIBRO AQUÍ</h2>
            <form method="GET" action="editar.php">
                <input type="text" class="form-control" name="titulo" value="<?php echo $resultado_unico['titulo'] ?>">
                <input type="text" class="form-control mt-3" name="sinopsis" value="<?php echo $resultado_unico['sinopsis'] ?>">
                <input type="hidden" name="id" value="<?php echo $resultado_unico['id'] ?>" >                
                <button class="btn-submit2">Agregar</button> 
        </form>
        <?php endif ?>
        

        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

<?php

//Aquí cerramos la conexión de la base de datos y sentencia
$pdo = null;
$gsent = null;


