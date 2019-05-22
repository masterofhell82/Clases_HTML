<?php
// datos de configuracion
include ("datos.php");
include ("funciones.php");

//conectamos con la db
$mysqli = conectarbase($host, $usuario, $clave, $base);//Devuelve objeto de conexion a base de datos.

$comprobar = verifcampos($Nombre,$Apellido);//Verificar antes de conectar.
if($comprobar){
	if(isset($codigo) and $codigo<>""){
	// Aquí ira el resto de las instrucciones
		echo "<br>Fila: $codigo";
		$res = multiquery($mysqli, $updatequery);
		if($res)
			{
			echo '<br>Registro actualizado con exito!.';
			echo '<form action="consultas.php" method="post">
				  <p><button type="submit" name="submit" value="2">Volver al listado</button></p>
				  </form>';
			}
			else
			{
			echo '<br>Error al actualizar registro. No existe!';
			echo '<form action="consultas.php" method="post">
				<p><button type="submit" name="submit" value="2">Volver al listado</button></p>
			  </form>';
		}			
	}
} else {
	echo '<p>Verifique la informacion e intente nuevamente.';
	echo '<form action="consultas.php" method="post">
				<p><button type="submit" name="submit" value="2">Volver al listado</button></p>
			  </form>';
	} 

//phpinfo();//Informacion del sistema.

?>