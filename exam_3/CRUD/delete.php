<?php
    //funcion que elimina un registro dependiendo del id que le pases por parametro
	function eliminar_producto($id){

        //llama a la coneccion a la base de datos(abre la conexion)
        require("Conexionbd.php");

        //variable donde se guarda una sentencia sql la cual borra un registro dependiendo del id
        $consulta="DELETE FROM gap_datos_tabla WHERE id='".$id."'";

        //agregamos la sentencia sql a la base de datos con la variable $miConexion del archivo conexionbd.php
        $resultados=mysqli_query($miConexion,$consulta);

        //direcciona a el archivo index.php
        header("Location:index.php");
        
        //cierra la coneccion de la base de datos
        mysqli_close($miConexion);
    }

    //se llama a dicha funcion y se le pasa el id que recolectamos por el metodo get
    eliminar_producto($_GET["id"]);
?>

