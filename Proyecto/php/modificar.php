<?php
// datos de configuracion
include ("datos.php");
include ("funciones.php");

$mysqli = conectarbase($host, $usuario, $clave, $base);//Devuelve objeto de conexion a base de datos.

if(isset($codigo) and $codigo<>""){
// Aquí ira el resto de las instrucciones
	echo "<br>Fila: $codigo";
	$res = multiquery($mysqli, $readqueryb);
	if($res)
		{

	//se despliega el resultado  
	echo '<table border = 1>';  
	echo '<tr>';//Table row  
	echo '<th>id</th>';
	echo '</tr>';  
	while ($fila = $res->fetch_assoc()){   
		
		echo '<tr>';		
		echo '<td>
				<form action="actualizar.php?codigo='.$fila["id"].'" method="post">
				<p><input type="text" name="Nombre" value="'.$fila["Nombre"].'"/></p>
				<p><input type="text" name="Apellido" value="'.$fila["Apellido"].'"/></p>
				<p><input type="text" name="ModeloVaper" value="'.$fila["ModeloVaper"].'"/></p>
				<p><input type="text" name="TipoCoil" value="'.$fila["TipoCoil"].'"/></p>
				<p><input type="text" name="CantidadResistencias" value="'.$fila["CantidadResistencias"].'"/></p>
				<p><button type="submit" name="submit" value="6">ACTUALIZAR</button></p>
				</form>
			 </td>';//Actualizar los registros.
		echo '</tr>';
	}  
	echo '</table>';
 
		}
		else
		{
		echo '<br>Error al borrar registro. No existe!';
		echo '<form action="accionread.php" method="post">
				<p><button type="submit" name="submit" value="2">Volver al listado</button></p>
			  </form>';
		}			
}

//phpinfo();//Informacion del sistema.

?>