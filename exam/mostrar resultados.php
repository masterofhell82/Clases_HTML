<?php

$nombre = $_POST['nombre'];    
$apellido = $_POST['apellido'];
$dirección = $_POST['dirección'];
$correo = $_POST['correo'];
$CI = $_POST['CI'];
$edad = $_POST['edad'];

$modelo = $_POST['modelo'];
$IMEI = $_POST['IMEI'];
$fecha  = $_POST['fecha'];
$falla= $_POST['falla'];
$sexo= $_POST['sexo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resultaldos del formulario</title>
    <link rel="stylesheet" href="css/stylephp.css">
</head>
<body>

    <div class="centro">
        <h1>EMPRESA DE AQUARIUM CELLULAR C.A</h1>
        <h2>registro de datos para la ficha tecnica</h2>
    </div>

    <div class="centro" id="tabla">
        <h3>registros de los datos</h3>
           
        <table class="centro">
            
            <tr>
                <td>nombre</td>
                <td>
                    <?php
                        echo $nombre;
                    ?>
                </td>
            </tr>

            <tr>
                <td>apellido</td>
                <td>
                    <?php
                        echo $apellido;
                    ?>
                </td>
            </tr> 

            <tr>
                <td>dirección</td>
                <td>
                    <?php
                        echo $dirección;
                    ?>
                </td>
            </tr>

            <tr>
                <td>correo</td>
                <td>
                    <?php
                        echo $correo;
                    ?>
                </td>
            </tr>

            <tr>
                <td>CI</td>
                <td>
                    <?php
                        echo $CI;
                    ?>
                </td>
            </tr>
            
            <tr>
                <td>edad</td>
                <td>
                    <?php
                        echo $edad;
                    ?>
                </td>
            </tr>

            <tr>
                <td>sexo</td>
                <td>
                    <?php
                        echo $sexo;
                    ?>
                </td>
            </tr>

            <tr>
                <td>modelo</td>
                <td>
                    <?php
                        echo $modelo;
                    ?>
                </td>
            </tr>

            <tr>
                <td>IMEI</td>
                <td>
                    <?php
                        echo $IMEI;
                    ?>
                </td>
            </tr>

            <tr>
                <td>fecha de entrega</td>
                <td>
                    <?php
                        echo $fecha;
                    ?>
                </td>
            </tr>

            <tr>
                <td>falla</td>
                <td>
                    <?php
                        echo $falla;
                    ?>
                </td>
            </tr>
        </table>
    </div>
    
</body>
</html>