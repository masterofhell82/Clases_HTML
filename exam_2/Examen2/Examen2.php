<!--solo seran mostrados por pantalla los resultados de las seccion que tengan como objetivos imprimirlos -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen 2</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    
    <div align="center" id="seccionCentro">
        <div class="seccion1">
            <?php
                //seccion #1
                //creando variables inicializadas

                include("secciones/seccion #1.php");
            ?>
        </div>

        <div id="seccion2">
            <?php
                //seccion #2
                
                echo "<h3>seccion #2</h3>";
                echo "<h3>Resultados</h3>";
                include("secciones/seccion #2.php");
            ?>
        </div>

        <div id="seccion3">
            <?php
                //seccion #3
                echo "<h3>seccion #3</h3>";
                echo "<h3>Resultados</h3>";
                include("secciones/seccion #3.php");
            ?>
        </div>

        <div id="seccion4">
            <?php
                //seccion #4
                //creando arrays

                include("secciones/seccion #4.php");
            ?>
        </div>

        <div id="seccion5">       
            <?php
                //seccion #5
                echo "<h3>seccion #5</h3>";
                echo "<h3>Resultados</h3>";
                include("secciones/seccion #5.php");
            ?>
        </div> 

        <div id="seccion6">
            <?php
                //seccion #6
                echo "<h3>seccion #6</h3>";
                echo "<h3>Resultados</h3>";
                include("secciones/seccion #6.php");
            ?>
        </div>

        <div id="seccion7">
            <?php
                //seccion #7
                echo "<h3>seccion #7</h3>";
                echo "<h3>Resultados</h3>";    
                include("secciones/seccion #7.php");
            ?>
        </div>

        <div id="seccion8">
            <?php
                //seccion #8
                echo "<h3>seccion #8</h3>";
                echo "<h3>Resultados</h3>";
                //codigo con  switch
                require("secciones/seccion #8.php");
            ?>
        </div>

        <div id="seccion9">
            <?php
                //seccion #9

                //realizando la funciones
                include("secciones/seccion #9.php");

            ?>
        </div>
    </div>
</body>
</html>