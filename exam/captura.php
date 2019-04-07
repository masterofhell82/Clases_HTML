<html>
    <head>
        <meta charset="UTF-8" />
        <link rel = "stylesheet" href = "css/sytle1.css">
        <title>Resultado</title>
    </head>
    <body>
        <h1> Bienvenidos a Diana. </h1>
        
        <h2> Resultados del Formulario: </h2>
        <!--este archivo me sirve para obtener el recibo de los datos del formulario por medio del POST
-->
        <?php

        
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $sexo= $_POST['sexo'];
        $mail=$_POST['mail'];
        $edad=$_POST['edad'];
        $telefono=$_POST['telefono'];
        $mensaje=$_POST['mensaje'];
       ?>
        <h3> Nombres: 
        <?php 
        echo $nombre;
            ?></h3>
        <h3> Apellidos:
        <?php
        echo $apellido;
            ?></h3>
        <h3> Sexo:
        <?php
        echo $sexo;
        ?></h3>
        <h3> Correo: 
        <?php
        echo $mail;
            ?></h3>
        <h3>Edad:
        <?php
        echo $edad;
            ?> años </h3>
        <h3> Numero de Telefono: 
        <?php
        echo $telefono;
            ?></h3>
        <h3> Opinion Personal: 
        <?php
        echo $mensaje;
            ?></h3>
        <!-- el div es para hacer un boton para volver a la pagina principal -->
        <div class="Diana">
            <a class="Diana" href="examen.html"/>volver</a>
        
        </div>
    </body>
        
</html>