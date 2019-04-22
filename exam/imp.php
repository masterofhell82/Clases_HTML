<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario Respondido</title>
    <div class="print"> 
    <?php
        $nom=$_POST['nom'];
        $ape=$_POST['ape'];
        $fecha=$_POST['fecha'];
        $edad=$_POST['edad'];
        $e=$_POST['e'];
        $pass=$_POST['pass'];
        $tel=$_POST['tel'];
        $color=$_POST['color'];
        $mens=$_POST['mens'];
        $dire=$_POST['dire'];
    if ($nom===''||$ape===''||$fecha===''||$edad===''||$e===''||$pass===''||$tel===''||$dire===''){
        echo json_encode ("LLena todos los campos marcados con (*)");
    }else{
        echo "Nombre: $nom";
        echo "<br/>";
        echo "Apellido: $ape";
        echo "<br/>";
        echo "Fecha de Nacimiento: $fecha";
        echo "<br/>";
        echo "Edad: $edad";
        echo "<br/>";
        echo "Correo: $e";
        echo "<br/>";
        echo "Contraseña: 0?2F45@D0A165";
        echo "<br/>";
        echo "Telefono: $tel";
        echo "<br/>";
        echo "Direccion: $dire";
        echo "<br/>";        
        echo "Mensaje: $mens";
        echo "<br/>";
        echo "Color Favorito: $color";
        echo "<br/>";
        $hm = $_REQUEST['hm'];
        ?>
        <?php if($hm == 'h') echo 'Sexo: Hombre'  ?> 
        <?php if($hm == 'm') echo 'Sexo: Mujer' ?> 
        <?php
        echo "<br/>";
    }
        ?> 
        <p><input type="button" value="Imprir esta pagina" onclick="window.print()"></p>          
        <p><a href="index.html">Volver al Formulario</a></p>
        </div>
    <LINK REL=StyleSheet HREF="css/sytle2.css">





</head>
<body>
    <div class="h1">
    <h1>Los Datos Captados para el Formulario Fueron: </h1>
    </div>
</body>

</html>

