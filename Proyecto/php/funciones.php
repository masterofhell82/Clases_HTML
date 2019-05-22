<?php
function verifcampos($nombre,$edad){
if( strlen($nombre) == 0 || strlen($edad) == 0)
	{
		echo "<br>Verifique los campos.";
		return false;
	}
    else
    {
		return true;
    }		
}

function conectarbase ($host,$usuario,$clave,$base){//Inicio de la funcion conectarbase.

    $mysqli = new mysqli($host, $usuario, $clave, $base);

		if ($mysqli)  
		{  
			
			$mysqli->set_charset("utf8");
			return $mysqli;  
        }  
	    else
        {  
        echo "Error de registro, server side.";  
        return $mysqli;  
        }
}//Fin de la funcion conectarbase.

function multiquery ($mysqli, $query){
	
		$res = $mysqli->query($query);
		return $res;//Devuelve los resultados de la consulta.
		
}