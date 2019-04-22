<?php
/* Deben desarrolla todo o parte de su codigo. */
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel = "stylesheet" href = "css/Estilos.css">
        <link rel = "shortcut icon" type = "image/x-icon" href = "image/tu.jpg">
        <title>Cines Unidos Diana</title>
        
    </head>
    <body>

        <!-- utilice este metodo para poder hacer la evaluacion de forma dinamica y diferente
        donde las preguntas del formulario son mis variables de entrada para realizar todas las condiciomnes
        y paso que se iran explicando a continuacion -->

        <h1> Bienvenidos a Cines Unidos de Diana. </h1>

        <form method="POST" action="php/php.php" class="formulario">
            
            <h2 class="formulario__titulo">Datos del Cliente:</h2>
            <br/><br/>
           
            <input type="text" class="formulario__input" id="nombre" name="nombre" required >
            <label for="" class="formulario__label">Nombre:</label>
            <br/><br/>
            
            <input type="text" class="formulario__input" id="apellido" name="apellido" required>
            <label for="" class="formulario__label">Apellido:</label>
            <br/><br/>
            
            <input type="number" class="formulario__input" id="edad" name="edad" required>
            <label for="" class="formulario__label">Edad: </label>
            <br/><br/>
            
            <input type="text" class="formulario__input" id="clase_de_pelicula" name="clase_de_pelicula" required>
            <label for="" class="formulario__label">Clase de Pelicula(A, B, C, o D): </label>
            <br/><br/>
            
            <input type="text" class="formulario__input" id="tipo_de_pelicula" name="tipo_de_pelicula" required>
            <label for="" class="formulario__label">Tipo de Pelicula (Romance, Accion o Misterio): </label>
            <br/><br/>
            
            <input type="number" class="formulario__input" id="dinero_que_tengo_disponible" name="dinero_que_tengo_disponible" required>
            <label for="" class="formulario__label">Dinero Disponible: </label>
            <br/><br/>
            
            <br/><br/>
            <!-- es el boton para continuar con el recibo  -->

    		<input type="submit" class="formulario__submit">
            
    	</form>

    </body>
</html>