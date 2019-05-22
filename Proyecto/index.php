<html> <!Etiqueta de inicio del codigo HTML>

	<head><!Encabezado de la pagina Web>
		<title>MTVaper</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="./css/estilos.css"> 
		
	</head>
	
	<body><!Cuerpo de la Pagina>
	
		<div><!Contenedor de elementos de la pagina>
		
			<center><h1>MTVaper</h1>
			<h2>Compra los mejores cigarros y mods electronicos</h2></center>
	
			<!-- Contenedor del carrusel de imagenes-->
			<div class="slideshow-container">

			  <!-- Full-width images with number and caption text -->
			  <div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="img1.jpg" style="width:100%">
				<div class="text"><div class = "boton">
					<a href = "./php/formulario.php">Comprar</a><!crear buttons del formulario>	
				</div></div>
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="img2.jpg" style="width:100%">
				<div class="text"><div class = "boton">
					<a href = "./php/formulario.php">Comprar</a><!crear buttons del formulario>	
				</div></div>
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="img3.jpg" style="width:100%">
				<div class="text"><div class = "boton">
					<a href = "./php/formulario.php">Comprar</a><!crear buttons del formulario>	
				</div></div>
			  </div>
				
			  <!-- Next and previous buttons -->
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span>
			  <span class="dot" onclick="currentSlide(2)"></span>
			  <span class="dot" onclick="currentSlide(3)"></span>
			</div> 
		</div>
		
	<script language="Javascript" type"text/javascript" src="./js/funciones.js"></script><!Se incluye al final para hacer uso de todo los elementos declarados anteriormente>
	
		
	
	</body>
	

</html><!Etiqueta de fin del codigo HTML>