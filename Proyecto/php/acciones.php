<?php
// datos de configuracion
$accion = $_GET['codigo'];
include ("datos.php");
include ("funciones.php");

//conectamos con la db

if($accion == 1){
//Conectarse a la bd
$mysqli = conectarbase($host, $usuario, $clave, $base);//Devuelve objeto de conexion a base de datos.

//Establecer el query con los datos a enviar.
   if ($mysqli)  
   {  
	  
	  $res = multiquery($mysqli, $insertquery);//ejecuta consulta de datos en la bd usando la variable de conexion global mysqli.
													 //Devuelve objeto de resultado de consulta, valido para X querys.
	  echo '<form action="../index.php" method="post">
			<p><button type="submit" name="submit" value="7">Volver al inicio</button></p>
		  </form>';
   }
	else
   {  
      echo "Error de registro.";  
   }

} else if($accion == 2){
	
//conectamos con la db
$mysqli = conectarbase($host, $usuario, $clave, $base);//Devuelve objeto de conexion a base de datos.

//echo $readquery;

   if ($mysqli)  
   {  
	
	$res = multiquery($mysqli, $readquery);
	
	//se despliega el resultado 
	echo '<html>
		<head><!Encabezado de la pagina Web>
		<title>MTVaper</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 
		</head>
			<body>';
	echo '<div class="contenido">';
	echo '<table border = 0>';  
	echo '<tr>';//Table row  
	echo '<th>id</th>'; 
	echo '<th>Nombre</th>';  
	echo '<th>Apellido</th>';  
	echo '<th>Modelo del Vaper</th>'; 
	echo '<th>Tipo de coil</th>'; 
	echo '<th>Cantidad de Resistencias </th>'; 
	echo '<th colspan = 2>Opciones</th>'; 
	echo '</tr>';  
	while ($fila = $res->fetch_assoc()){   
		echo '<tr>';  
		echo '<td>'.$fila["id"].'</td>';
		echo '<td>'.$fila["Nombre"].'</td>';
		echo '<td>'.$fila["Apellido"].'</td>';
		echo '<td>'.$fila["ModeloVaper"].'</td>';
		echo '<td>'.$fila["TipoCoil"].'</td>';
		echo '<td>'.$fila["CantidadResistencias"].'</td>';
		//echo $codigo ='<td><a href="borrar.php?codigo='.$fila["id"].'">BORRAR</a></td>';//Borrar un registro de la tabla.
		echo '<td>
				<form action="borrar.php?codigo='.$fila["id"].'" method="post">
				<p><button type="submit" name="submit" value="4">BORRAR</button></p>
				</form>
			 </td>';
		echo '<td>
				<form action="modificar.php?codigo='.$fila["id"].'" method="post">
				<p><button type="submit" name="submit" value="5">MODIFICAR</button></p>
				</form>
			 </td>';;//Modificar un registro de la tabla.
		echo '</tr>';  
	}  
	echo '</table>';
	
		echo '<form action="./consultas.php" method="post">
				<p><button type="submit" name="submit" value="7">Volver al inicio</button></p>
			  </form>
			  </div>
			  </body>
			  </html>';	
   }  
	else
   {  
      echo "Error de lectura o registro vacio.";   
   }

}

?>