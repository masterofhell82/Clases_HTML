<?php

    //datos para conectar con la base de datos
    $host = "localhost"; 	                //TU HOST//
    $dbuser = "root";	 	                //TU USUARIO DEL HOST//
    $dbpwd = "";	                        //TU CONTRASEÑA//
    $db = "gp_estacionamiento_base_datos";	//TU NOMBRE DE BASE DE DATOS//

    //conectando con la base de datos
    $miConexion=mysqli_connect($host ,$dbuser,$dbpwd,$db);

    //establesiento con que grupo decaracteres estamos trabajando
    mysqli_set_charset($miConexion,"utf8");
    
    
    //comprueba si conexion a la base de datos se ha hecho correctamente
    function estadoConexion($miConexion){
        if(!$miConexion){
            //se muestra ha fallado y su error correspondiente
            $msg="la conexion ha fallado" . mysqli_error();
            echo "<script>alert('$msg');</script>";
            exit();
        }else{
            $msg="la conexion la base de datos se ha hecho exitosamente";
            echo "<script>alert('$msg');</script>";
        }
    }
    
    //descomenta si quieres saber el estado de la conexion
    //estadoConexion($miConexion);
    
?>