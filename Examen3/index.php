<?php
 
include_once 'app.php';
                                                    // se utiliza Leer los elementos de la tabla bebidas
$sql_leer = 'SELECT * FROM `vdt_bebidas_tabla`';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();                    // Resultado guarda un array con fetchall de la consulta sql de la tabla bebidas
            //var_dump($resultado); devolvernos el array
                                                    //Se Agrega un elemento
//AGREGAR ES LO QUE VA A VIAJAR ATRAVES EL POST
//SE GUARDAN EN VARIABLES EN ESTE CASO nombre_de_bebida y grado_de_alcohol
if($_POST){
    $nombre_de_bebidas = $_POST['nombre_de_bebidas'];
    $grado_de_alcohol = $_POST['grado_de_alcohol'];
   // values en ?? para evitar inyecciones en sql
    $sql_insertar = 'INSERT INTO vdt_bebidas_tabla (nombre_de_bebidas,grado_de_alcohol) VALUES (?,?)';
   // crear sentencia variable insertar
    $sentencia_insertar = $pdo->prepare($sql_insertar);
    // ejecutar la sentencia , se reemplaza los ? con las verdaderas variables
    $sentencia_insertar->execute(array($nombre_de_bebidas,$grado_de_alcohol));
                                                    //se cierra la conexión de la base de datos
                                                    // y las sentencia
    $sentencia_insertar = null;
    $pdo = null;
    // para que aparezca de inmediato, lo que se agrega. se redirige
    header('location:index.php');
}

// Editar recibir datos atraves del metodo get.
if($_GET){
$id = $_GET['id'];
$sql_especial = 'SELECT * FROM `vdt_bebidas_tabla` WHERE id=?';
$gsent_especial = $pdo->prepare($sql_especial);
$gsent_especial->execute(array($id));
$resultado_especial = $gsent_especial->fetch();
            //var_dump($resultado_especial);
}
?>
<!-- Pagina de boostsrap  -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/estilo.css">
    <title>Bebidas Info</title>
  </head>
  <body>
    <h1 class="form-title"> Información  bebidas V C.A </h1>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6">
                <!-- cuadros de muestra de datos ingresados-->
                <?php foreach($resultado as $dato): ?>
                <div class="alert alert-dark" role="alert">
                    <?php echo $dato['nombre_de_bebidas'] ?>
                    <?php echo $dato['grado_de_alcohol'] ?>

                    <a href="borrar.php?id=<?php echo $dato['id'] ?>" class="float-right ml-3"> 
                    <i class="far fa-trash-alt"></i>
                    </a>

                    <a href="index.php?id=<?php echo $dato['id'] ?>" class="float-right">
                        <i class="far fa-edit"></i>
                        
                    </a>
                </div>

                <?php endforeach ?>

        </div>

        <div class="col-md-6">
<!--Enviando el cliente-->
            <?php if(!$_GET): ?>
            
            
            <h2>Ingrese Información</h2>
            <br>
            <h6>Nombre de la bebida</h6>
            <form method="POST">
                <input type="text" class="form-control" name="nombre_de_bebidas">
            <h6><br>Grado de alcohol</h6>   
                <input type="text" class="form-control mt-3" name="grado_de_alcohol">
                <button class= "bottom">Agregar</button> 
        </form>
        <?php endif ?>
<!--Editando la información-->
        <?php if($_GET): ?>
            <h2 >Editar información</h2>
            <br>
            <form method="GET" action="editar.php">
            <h6>Nombre de la bebida</h6>
                <input type="text" class="form-control" name="nombre_de_bebidas" value="<?php echo $resultado_especial['nombre_de_bebidas'] ?>">
            <h6><br>Grado de alcohol</h6>
                <input type="text" class="form-control mt-3" name="grado_de_alcohol" value="<?php echo $resultado_especial['grado_de_alcohol'] ?>">
                <input type="hidden" name="id" value="<?php echo $resultado_especial['id'] ?>" >                
                <button class="bottom2">Agregar</button> 
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
//cierre de base de datos ademas de las sentencias
$pdo = null;
$gsent = null;