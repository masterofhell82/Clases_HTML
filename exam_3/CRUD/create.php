<?php

    //si se toca el boton insertar entonces se insertara el registro
    if($_POST["Insertar"]){
        //llama a la coneccion a la base de datos(abre la conexion)
        require("Conexionbd.php");
        //agarramos todos los datos que el formulario nos manda del formulario por el metodo post
        $ci=(int)$_POST["CI"];
        $nombre_carro=$_POST["Nombre"];
        $marca=$_POST["Marca"];
        $modelo_carro=$_POST["Modelo"];
        $placa=$_POST["Placa"];
        $lugar_estacionamiento=$_POST["lde"];
        //creamos una variable y de agregamos a ella una sentencia sql insert into para ingresar a la base de datos
        $consulta="INSERT INTO `gap_datos_tabla`(`ci`, `nombre_carro`, `marca`, `modelo_carro`, `placa`, `lugar_estacionamiento`) VALUES ($ci,'$nombre_carro','$marca','$modelo_carro','$placa','$lugar_estacionamiento')";
        //agregamos la sentencia sql a la base de datos con la variable $miConexion del archivo conexionbd.php
        $resultado=mysqli_query($miConexion,$consulta);
        //direcciona a el archivo index.php
        header("Location:index.php");
        //cierra la coneccion de la base de datos
        mysqli_close($miConexion);
    }

?>