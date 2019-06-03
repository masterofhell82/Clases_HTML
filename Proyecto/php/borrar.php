<?php
// datos de configuracion
$codigo = $_GET["codigo"];

include ("datos.php");
include ("funciones.php");

//conectamos con la db
$mysqli = conectarbase($host, $usuario, $clave, $base);//Devuelve objeto de conexion a base de datos.
//echo "<br>Fila: $id";

if(isset($id) and $id<>""){
// Aquí ira el resto de las instrucciones
	//echo "<br>Fila: $codigo";
	$res = multiquery($mysqli, $deletequery);
	if($res)
		{
		//echo '<br>Registro eliminado con exito!.';
		echo '<br>Registro eliminado con exito!.';
			echo '<form action="consultas.php" method="post">
				  <p><button type="submit" name="submit" value="2">Volver al listado</button></p>
				  </form>';
		}
		else
		{
		//echo '<br>Error al borrar registro. No existe!';
		echo '<br>Registro eliminado con exito!.';
			echo '<form action="consultas.php" method="post">
				  <p><button type="submit" name="submit" value="2">Volver al listado</button></p>
				  </form>';
		}			
} else {
		echo '<br>Registro eliminado con exito!.';
			echo '<form action="consultas.php" method="post">
				  <p><button type="submit" name="submit" value="2">Volver al listado</button></p>
				  </form>';
}

//phpinfo();//Informacion del sistema.

?>