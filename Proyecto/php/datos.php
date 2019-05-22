<?php
$host='127.0.0.1';
$usuario='root';
$clave='';
$base='empresabd';
$ta='datos';
$comprobar;//Para activar o desactivar la comprobacion.

//Datos de formulario
if($_REQUEST['submit'] == 1){//Formulario 1
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$ModeloVaper = $_POST['ModeloVaper'];
$TipoCoil = $_POST['TipoCoil'];
$CantidadResistencias = $_POST['CantidadResistencias'];
}
elseif($_REQUEST['submit'] == 2){//Formulario 2, hace lectura desde bd.
echo '<html>
		<head> 
		<title>MTVaper</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="./estilos.css"> 
		
	</head>
	
	<body><!Cuerpo de la Pagina>
	
		<div><!Contenedor de elementos de la pagina>
			<center>
			<h1>Lista de Pedidos</h1>
			</center>
	  </html>';
}

elseif($_REQUEST['submit'] == 4){
	$id = $_GET["codigo"];
	echo"Se modificara el registro Nro. $id";
}

elseif($_REQUEST['submit'] == 5){
	$codigo = $_GET["codigo"];
	echo"Se modificara el registro Nro. $codigo";
}

elseif($_REQUEST['submit'] == 6){
	$codigo = $_GET["codigo"];
	$Nombre = $_POST["Nombre"];
	$Apellido = $_POST["Apellido"];
	$ModeloVaper = $_POST["ModeloVaper"];
	$TipoCoil = $_POST["TipoCoil"];
	$CantidadResistencias = $_POST["CantidadResistencias"];
	echo"Se modificara el registro Nro. $codigo";
}
//Querys
if($_REQUEST['submit'] == 1){
$insertquery = "INSERT INTO `datos` (Nombre,Apellido,ModeloVaper,TipoCoil,CantidadResistencias) values ('{$Nombre}','{$Apellido}','{$ModeloVaper}','{$TipoCoil}','{$CantidadResistencias}')";
}
elseif($_REQUEST['submit'] == 2){
$readquery = "SELECT * FROM `datos`";
}
elseif($_REQUEST['submit'] == 4){
$deletequery = "DELETE FROM `datos` WHERE id='{$codigo}'";
}
elseif($_REQUEST['submit'] == 5){
$readqueryb = "SELECT * FROM datos WHERE id='$codigo'";
}
elseif($_REQUEST['submit'] == 6){
$updatequery = "UPDATE datos SET Nombre='$Nombre', Apellido='$Apellido', ModeloVaper='$ModeloVaper', TipoCoil='$TipoCoil', CantidadResistencias='$CantidadResistencias' WHERE id='$codigo'";
}

?>