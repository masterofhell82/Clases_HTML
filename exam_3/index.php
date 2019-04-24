<?php
include_once 'app.php'; //importa a el archivo app.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <LINK REL=StyleSheet HREF="skin.css"><!-- llama la configuracion css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->
    <title>Examen 3</title>
</head>
<body>
<div class= "portada"><h2><br>Examen 3<br></h2></div> <!-- Portada(encabezado de pagina) -->
    <?php foreach($resultado as $dato): ?><!-- inicio de foreach donde cada resultado lo pasa a variable dato -->
    <div class="datos">
    <?php 
    echo $dato['id'].' | '.$dato['Nombre'].' | '.$dato['Apellido'].' | '.$dato['CI'].'</br>';//muestra en la pantalla una fila completa de la tabla de la BDD
    ?>
    <br>
    <a href="eli.php?id=<?php echo $dato['id'];?>"><i class="far fa-trash-alt"></i>Eliminar</i></a><!-- Boton para eliminar elementos de la BDD -->
    <a href="index.php?id=<?php echo $dato['id'];?>"><i class="far fa-edit">Editar</i></a>    <!-- Boton para editar elementos de la BDD  -->
    <?php endforeach ?><!-- fin de el foreach  -->
    </div>
    <div formulario><!-- fomulario este sera para Ingresar y Editar elementos -->
    <?php if(!$_GET): ?><!-- metodo cuando no se utilice metodo GET -->
        <form method="POST"><!-- form con metodo POST, este formulario sera para Ingresar elementos-->
        <h2>Agregar Datos a la Base de Datos </h2>
        <label> Nombre: </label> <br />
        <input type="text" id="nom" name="nom" size="20" placeholder="Nombre para la BDD" required /> <br/>
        <label> Apellido: </label> <br />
        <input type="text" id="ape" name="ape" size="20" placeholder="Apellido para la BDD" required /> <br/>    
        <label> CI: </label> <br />
        <input type="number" id="ci" name="ci" size="11" placeholder="CI sin caracteres especiales"/> <br/>
        <br>
        <input type="submit" name="envio" value="Enviar"><!-- Boton para enviar -->
        <input type="reset" value="Borrar"> <!-- Boton para borrar los campos antes de enviar -->
        </form>
    <?php endif ?><!-- fin de el metodo cuando no se utilice metodo GET -->
    <?php if($_GET): ?><!-- metodo cuando sea utilice metodo GET -->
    <form method="GET" action="edit.php"><!-- form con metodo GET Y enviado a edit.php, este formulario sera para Editar elementos-->
        <h2>Editar Datos a la Base de Datos </h2>
        <label> Nombre: </label> <br />
        <input type="text" id="nom" name="nom" size="20" placeholder="Nombre para la BDD" value="<?php echo $resultado_2['Nombre']?>"  /> <br/>
        <label> Apellido: </label> <br />
        <input type="text" id="ape" name="ape" size="20" placeholder="Apellido para la BDD" value="<?php echo $resultado_2['Apellido']?>" /> <br/>    
        <label> CI: </label> <br />
        <input type="number" id="ci" name="ci" size="11" placeholder="CI sin caracteres especiales" value="<?php echo $resultado_2['CI']?>" /> <br/>
        <input type="hidden" name="id" value="<?php echo $resultado_2['id']?>" /> <br/><!-- input invisible, necesario para usar id y porder cambiar una fila de elementos -->
        <br>
        <input type="submit" name="envio" value="Guardar"><!-- Boton para guardar -->
        </form>
    <?php endif ?><!-- fin de el metodo cuando sea utilice metodo GET -->
    </div>
</body>
</html>