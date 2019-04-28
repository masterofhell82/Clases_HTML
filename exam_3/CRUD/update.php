<!doctype html>
<html>
<head  lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Documento sin título</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
    <?php
        //llama a la coneccion a la base de datos(abre la conexion) 
        require("Conexionbd.php");
        
        //si no se apreta el boton con id cr osea el boton que dice Actualizar
        if(!isset($_POST["cr"])){
            //se toma el id por el metodo get que manda el boton actualizar
            $id=(int)$_GET["id"];
            //se consulta mediante el id que se trajo
            $consulta="SELECT * FROM gap_datos_tabla WHERE id=$id";
            //se llama a un recordset o resultset y de alli se extrae la fila
            if($resultado=mysqli_query($miConexion,$consulta)){
                $registro=mysqli_fetch_assoc($resultado);
                //se extrae todos los datos del array asociativo y se guardan en variables para mostrarlas en los value del formulario de esta pagina
                $ida=(int)$registro["id"];
                $ci=(int)$registro["ci"];
                $nombre_carro=$registro["nombre_carro"];
                $marca=$registro["marca"];
                $modelo_carro=$registro["modelo_carro"];
                $placa=$registro["placa"];
                $lugar_estacionamiento=$registro["lugar_estacionamiento"];
            }  
            
        }else{
            //recolectamos todos los valores que manda este mismo formulario para guardarlos en la base de datos
            $ida=(int)$_POST["id"];
            $ci=(int)$_POST["CI"];
            $nombre_carro=$_POST["Nombre"];
            $marca=$_POST["Marca"];
            $modelo_carro=$_POST["Modelo"];
            $placa=$_POST["Placa"];
            $lugar_estacionamiento=$_POST["lde"];
            //guarda la consulta en una variable para introducirla en la funcion mysqli_query 
            $consulta="UPDATE gap_datos_tabla SET ci= $ci , nombre_carro='$nombre_carro' , marca='$marca' , modelo_carro='$modelo_carro' , placa='$placa' , lugar_estacionamiento='$lugar_estacionamiento' WHERE id=$ida";
            //actualiza los datos que puso en el formulario en la base de datos
            $resultado=mysqli_query($miConexion,$consulta);
            //direcciona a el archivo index.php
            header("Location:index.php");
        }    
        //cierra la coneccion de la base de datos
        mysqli_close($miConexion); 
         
    ?>
    <!-- creo que el furmulario se entiende por si solo -->
    <!-- este formuario manda sus datos mediante post asi mismo -->
    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <!-- creo una tabla para ordenar los datos del formuario update-->
        <table width="25%" border="0" align="center">
            <!-- este es el encabezado de la tabla -->
            <thead>
                <tr>
                    <th class="fila" scope="col" colspan="6" id="titulo">VALET PARKING</th>
                </tr>

                <tr>
                    <th class="fila" scope="col" colspan="6" id="titulo">Actualizar</th>
                </tr>
            
                <tr>
                    <!-- mostrando los encabezado de las columnas -->
                    <th class="fila" scope="col" header="titulo">CI</th>
                    <th class="fila" scope="col" header="titulo">Nombre del Carro</th>
                    <th class="fila" scope="col" header="titulo">Marca</th>
                    <th class="fila" scope="col" header="titulo">Modelo</th>
                    <th class="fila" scope="col" header="titulo">Placa</th>
                    <th class="fila" scope="col" header="titulo">Lugar De Estacionamiento</th>
                </tr>  
            </thead>
        
            <tr>
                <!-- se crean todo los input para introducir los valores de cambio y el boton Actualizar para enviar los datos-->
                <input type="hidden" name="id" id="id" value="<?php echo $ida?>">
                <td><input type="number" min="0" name="CI" size="10" class="centrado" value="<?php echo $ci?>" required></td>
                <td><input type="text" maxlength="50" name="Nombre" size="10" class="centrado" value="<?php echo $nombre_carro?>" required></td>
                <td><input type="text" maxlength="50" name="Marca" size="10" class="centrado" value="<?php echo $marca?>" required></td>
                <td><input type="text" maxlength="50" name="Modelo" size="10" class="centrado" value="<?php echo $modelo_carro?>" required></td>
                <td><input type="text" maxlength="50" name="Placa" size="10" class="centrado" value="<?php echo $placa?>" required></td>
                <td><input type="text" maxlength="6" name="lde" size="10" class="centrado" value="<?php echo $lugar_estacionamiento?>" required></td>
                <td class="bot"><input type="submit" name="cr" id="cr" value="Actualizar"></td>
            </tr>
        
        </table>
    </form>

</body>
</html>