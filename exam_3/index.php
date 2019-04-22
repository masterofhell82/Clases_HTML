
<?php

include_once 'app.php';
//echo ' desde el archivo index';
// se realizo la operacion de leer
$sql_leer='SELECT * FROM dca_peliculas_tabla';
$gsent=$POD->prepare($sql_leer);
$gsent->execute();
$resultado=$gsent->fetchall();

//var_dump($resultado);

// aqui se realizo todo la parte para insertar (agregar) nueva informacion
if($_POST){
    $peliculas=$_POST['peliculas'];
    $descripcion=$_POST['descripcion'];
    $sql_insertar='INSERT INTO dca_peliculas_tabla(peliculas,descripcion) VALUES (?,?)';
    $sentencia_insertar=$POD->prepare($sql_insertar);
    $sentencia_insertar->execute(array($peliculas,$descripcion));

    //para cerrar la conexion de la base de datos
    $POD=null;
    $sentencia_insertar=null;
    

    // se hace para que luego de ejecutar lo anterior redireccione al archivo
    header('location:index.php');
}

// aqui se realizo toda la parte de edicion de la informacion existente
if($_GET){
    $id=$_GET['id'];
    $sql_unico='SELECT * FROM dca_peliculas_tabla WHERE id=?';
    $gsent_unico=$POD->prepare($sql_unico);
    $gsent_unico->execute(array($id ));
    $resultado_unico=$gsent_unico->fetch();
    // var_dump es para pintar la informacion que esta guardada en la variable (imprimir)
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
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

    <link rel="stylesheet" 
    href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
    crossorigin="anonymous">
    <!-- aqui se hace la conexion con la hoja de estilos y coloque el icono de la pagina de inicio
    el titulo de la pagina -->
    <link rel = "stylesheet" href = "css/Estilos.css">
    <link rel = "shortcut icon" type = "image/x-icon" href = "image/tu.jpg">
    <title>Mi Cine Personal</title>
  </head>
  <body>
      <!-- aqui comence a desarrollar el codigo para mostar en la pagina los datos de lectura,
    donde se agrega, y elimina de la pagina -->
    <h1> Bienvenido al CRUD de Diana Amezquita </h1>
    <h2 class="ml-5" > Peliculas: </h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- en esta parte se se crea con bustra los iconos para editar y agregar informacion-->
                <?php foreach($resultado as $dato): ?>
                <div class="alert alert-primary " role="alert">
                    <a href="eliminar.php?id=<?php echo $dato['id'] ?>" class="float-right ml-2">
                        <i class="far fa-trash-alt"></i>
                    </a>
                    <a href="index.php?id=<?php echo $dato['id'] ?>" class="float-right">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <?php echo $dato['peliculas'] ?>
                    ->
                    <?php echo $dato['descripcion'] ?>
                    
                </div>
                <?php endforeach ?>
            </div>
            <div class="col-md-6">
                <?php if(!$_GET): ?>
                <!-- en esta parte se se crea la parte de agregar  informacion-->
                <h3>Agrega tu Pelicula Preferida:</h3>
                <form method="POST" >
                    <label for="" class="formulario__label mt-3">Pelicula:</label>
                    <input type="text" class="form-control mt-3" name="peliculas">
                    <label for="" class="formulario__label mt-3">Descripcion:</label>
                    <input type="text" class="form-control mt-3" name="descripcion">
                    <button class="btn btn-primary mt-4 ">Agregar</button>

                </form>
                <?php endif ?>
                <!-- en esta parte se se crea la parte de editado de  informacion-->
                <?php if($_GET): ?>
                <h3>Edita tu Pelicula de Preferencia:</h3>
                <form method="GET" action="editar.php">
                    <label for="" class="formulario__label mt-3">Pelicula:</label>
                    <input type="text" class="form-control mt-3" name="peliculas" value="<?php echo $resultado_unico['peliculas']; ?>">
                    <label for="" class="formulario__label mt-3">Descripcion:</label>
                    <input type="text" class="form-control mt-3" name="descripcion" value="<?php echo $resultado_unico['descripcion']; ?>">
                    <input type="hidden" name="id" value="<?php echo $resultado_unico['id']; ?>">
                    <button class="btn btn-primary mt-4 ">Editar</button>

                </form>
                <?php endif ?>
                <br>
            
                <aside id="Diana1">
                    <img class="cine" src="image/tu.gif" alt= "Minion en un cine">
            
                </aside>
                <br>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php

//para cerrar la conexion de la base de datos
$POD=null;
$gsent=null;

?>