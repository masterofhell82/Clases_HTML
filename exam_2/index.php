<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Formularios</title>
</head>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
		<form action="examen2.php" class="formulario" name="formulario_registro" method="POST"  onsubmit ='return verificar(this)'>
				<div class="arriba">
					<label class="la">Ingrese sus datos:</label>
				</div>
				<div class="input-group">
					<input type="text" id="nombre" name="nombre" required >
					<label class="label" for="nombre">Nombre:</label>
				</div>
				<div class="input-group">
					<input type="text" id="cedula" name="cedula" pattern="^([0-9]{7,9})$" required >
					<label class="label" for="cedula">Cedula:</label>
				</div>
						
				<hr style="color: #303F9F;" />
				<br>
				<div class="arriba">
					<label class="la">Ingrese los datos de su mascota:</label>
				</div>
				<div class="input-group">
					<input type="text" id="nombre_mascota" name="nombre_mascota" required  >
					<label class="label" for="nombre_mascota">Nombre de su mascota:</label>
				</div>
				<div class="input-group">
					<input type="text" id="altura" name="altura" required  >
					<label class="label" for="altura">Altura de su mascota (cm):</label>
				</div>
				<div class="input-group">
					<input type="text" id="peso" name="peso" required >
					<label class="label" for="peso">Peso de su mascota (kg):</label>
				</div>
				<div class="input-group">
					<input type="text" id="edad" name="edad" required >
					<label class="label" for="edad">Edad de su mascota(años):</label>
				</div>
				<div class="input-group">
					<input type="text" id="longitud" name="longitud" required >
					<label class="label" for="longitud">Longitud de su mascota:</label>
				</div>
				<div class="input-group">
					<input type="text" id="ejercicio" name="ejercicio" required >
					<label class="label" for="ejercicio">Nro de veces que se ejercita a la semana:</label>
				</div>
				<div class="input-group">
					<input type="text" id="comida" name="comida" required >
					<label class="label" for="comida">Nro de (kg) de comida comsume diario:</label>
				</div>
				<div class="input-group">
					<input type="text" id="baño" name="baño" required >
					<label class="label" for="baño">Nro de veces que va al baño diario:</label>
				</div>
				<input type="submit"  value="Enviar">
				</div>
			</form>
		</div>
	</div>

	<script src="js/formulario.js"></script>
</body>
</html>