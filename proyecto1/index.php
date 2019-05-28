<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VerowTATTOS</title>
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/titulos.css">
    <link rel="stylesheet" href="./css/inicio.css">
   
    <!letra de google fonts para el menu>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <! icono de desplazamiento para el menu>
    <link rel="stylesheet" href="css/fontello.css">
    <title>VerowTTATOS</title>
</head>

<body>
    <!LISTA DEL MENU DE NAVEGACION>
    <div class="navegacion">
    <nav>
    <ul>
        <!lista del menu y enlaces>
        <li><a href="./index.php">Inicio <span class="icon icon-up-dir"></span></a></li>
        <li><a href="./html/Nosotros.php">Nosotros <span class="icon icon-up-dir"></span></a></li>
        <li>
            <a href="#">Contactos <span class="icon icon-up-dir"></span></a>
            <!submenu>
        <div class="submenu">
            <div class="submenu-items">
            <p><a href="./html/Telefonos.php">Telefonos</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="./html/Correos_electronicos.php">Correos Electronicos</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="https://www.facebook.com/iTattos/" target="new">Redes sociales</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="./html/Formulario.php" >Formulario</a></p>
            </div> 
                    

                
        </div>    
            
        </li>
        
        <li><a href="./html/Direccion.php">Direccion <span class="icon icon-up-dir"></span></a></li>
    </ul>
    </nav>
    <!FIN DE LA LISTA DE NAVEGACION>

    <! CUADRO DE IMAGENES>
    <br>
    <h1>VerowTATTOS</h1>
            <h2>Tu mejor eleccion para tatuarte</h2>
    <div class="main">
        <div class="slides">
            <img src="./image/imagen1.jpg" alt="">
            <img src="./image/imagen2.jpg" alt="">
            <img src="./image/imagen3.jpg" alt="">
            <img src="./image/imagen4.jpg" alt="">
            <img src="./image/imagen5.jpg" alt="">
        </div>
    </div>
    <! slides, automatico>
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/jquery.slides.js"></script>
    
    <script>
     $(function(){
        $(".slides").slidesjs({
    play: {
      active: true, //Genera los botones de play y stpo
        
      effect: "slide",// Puede ser  "slide" o"fade".
        
      interval: 5000,// Intervalo en milisegundos
        
      auto: false,// Puede cambiarse el estado a true y al abrir la pagina comienza automaticamente
        
      swap: true,// Muestra el boton de play y stop
        
      pauseOnHover: false,// [booleano] hace una pausa en una presentación de diapositivas en reproducción
        
      restartDelay: 2500, // [número] retraso de reinicio en la presentación inactiva
        
    }
  });
});
    </script>
              
</body>

</html>