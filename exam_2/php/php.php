<html>
    <head>

        <meta charset="UTF-8" />
        <link rel = "stylesheet" href = "../css/Estilos2.css">
        <link rel = "shortcut icon" type = "image/x-icon" href = "../image/tu.jpg">
        <title>Recibo de Diana</title>

    </head>
    <body>

        <!--Cree un formulario que trata de cine para esta evaluacion para no hacer simples calculos
        con el fin de dar una mejor funcionalidad a los pasos que nos estaban pidiendo para la evaluacion
        comienzo con variables dinamicas, es decir, que su valor jamas es el mismo ya que es introducido 
        por el usuario... y tambien tengo variables estaticas paara la ejecucion del programa. -->
        
        <h1> Bienvenidos a Cines Unidos de Diana. </h1>
        
        <h2> Resultados del Boleto: </h2>
    
    <div class= 'contenedor'>

    <!-- cree los diferentes div para poder colocarles estilos a las paginas y modificar los 
    contenidos y colores.. 


    utilice aside para dividir los div y poder darle una mejor imagen a la pagina web y asi
    esta misma no quedara con espacios libres aparte de su recibo-->

        <aside id="Diana1">
            <img class="Cotufa" src="../image/combo1.png" alt= "Combo de Cotufas">
            
        </aside>
        
        <aside id="Diana2">
            <img class="Cotufa1" src="../image/combo2.png" alt= "Combo de Cotufas">
            
        </aside>

        <?php
        //Variables:

        //edad es una variable numerica
        $edad = $_POST['edad'];
        //clase_de_pelicula es una variable de texto
        $clase_de_pelicula = $_POST['clase_de_pelicula'];
        //nombre es una variable de texto
        $nombre=$_POST['nombre'];
        //apellido es una variable de texto
        $apellido=$_POST['apellido'];
        //dinero_que_disponible es una variable numerica
        $dinero_que_tengo_disponible=$_POST['dinero_que_tengo_disponible'];
        //dinero_que_necesario_para_ir_al_cine es una variable numerica
        $dinero_que_necesario_para_ir_al_cine= 10000;
        //Diana es una variable numerica que guarda un resultado
        $Diana= $dinero_que_tengo_disponible - $dinero_que_necesario_para_ir_al_cine;
        //i es una variable numerica
        $i=0;
        // variable usada para el switch... para poder usar todos los caso la hare dinamica
        $tipo_de_pelicula=$_POST['tipo_de_pelicula'];

       // Esto hace que las variables se obtenengan por medio de un formulario y con ellos se le da 
       //un mejor uso a los parametros que piden...
       
        echo "Datos Personales: <br/><br/>";
        echo "Nombre y Apellido: ".$nombre." ".$apellido."</br> Edad: ".$edad." Años </br>";
        
        //arreglos paso numero 4 
        // arreglo 1

        echo "<h3> Direccion: </h3>";
        $Pais = ['Colombia', 'Venezuela', 'Peru', 'Chile', 'Brasil', 'EEUU'];
            
        //al decirle que me imprima las posiciones de los arrglos que corresponden,
        // me da como resultado... el valor de los que esta ocupando y muestra en pantalla..

        echo " Pais: <br/>";
        echo $Pais[1];
        
        //arreglo2

        $Capital = ['Distrito Capital','Bogota','Lima', 'Santiago de Chile','Brasilia','Washington'];

        echo "<br/> Captial: <br/>";

        //echo $Capital[0];

        //use el while para poder  ejecutar una o varias líneas de código de manera repetitiva 

        while($i<=0){
            echo $Capital[$i];
            $i++;
        }

        echo '</br></br>';

        //arreglo 3
        $Numero_de_la_sala =[1, 2, 3, 4, 5, 6];

        echo "<br/> Numeros de las Salas: <br/>";

        //use el foreach porque es un tipo especial de bucle que permite recorrer 
        //estructuras que contienen varios elementos 

        foreach($Numero_de_la_sala as $Valor){
            echo $Valor .'<br/>';
        }

        echo '<br/> Numero de la Sala que le Corresponde: ';
        echo $Numero_de_la_sala[4];
        echo '</br>';

        //arreglo 4
        $clase_pelicula = ['A', 'B', 'C', 'D', 'A y B', 'B y C'];
        
        echo "<br/> Clases: <br/>";

        // use el for porque me perimite hacer una estructura de control en programación
        // en la que se puede indicar de antemano el número mínimo de iteraciones.​

        for($i=0;$i<=5;$i++){
            echo $clase_pelicula[$i] .'<br/>';
        
        }
        echo '<br/> Clase que puede ver: ';
        echo $clase_pelicula[5];
        
        //condicionales con comparacion, compuertas logicas y la aritmetica la hice arriba con las
        //variables y coloque la variable nueva alli en  la condiciona "Diana"

        echo "<br/><br/>Clases de Peliculas: <br/><br/>";

        if($edad<12 and $clase_de_pelicula="A"){
            echo "Puede ver este tipo  de pelicula!, Clase (A) </br>";
        }

        if($edad>11 and $clase_de_pelicula="A"and $clase_de_pelicula="B"){
            echo "Puede ver este tipo  de pelicula!, Clases (A, B) </br>";
        }else {
            echo "La clase B de peliculas, no las puedes ver por la edad que tienes. </br>";
        }

        if($edad>15 and $clase_de_pelicula="A"and $clase_de_pelicula="B" and $clase_de_pelicula="C"){
            echo "Puede ver este tipo de pelicula!, Clases (A, B, C) </br>";
        }else {
            echo "La clase C de peliculas, no las puedes ver por la edad que tienes. </br>";
        }

        if($edad>17and $clase_de_pelicula="A"and $clase_de_pelicula="B"and $clase_de_pelicula="C"and $clase_de_pelicula="D"){
            echo "Puede ver este tipo de pelicula!, Clases (A, B, C, D) </br>";
        }else {
            echo "La clase D de peliculas, no las puedes ver por la edad que tienes. </br>";
        }

        echo "</br> Con el Dinero Disponible que Posee: </br></br>";
        if($Diana>=0){
            echo "Puedes pagar todos los servicios sin dificultad. <br/> Con una diferencia de: ".$Diana." BsS";
        }else{
            echo "Puedes pagar solo las entradas del cine con tu dinero disponible. <br/> Para pagar todos los gastos completo le hacen falta:  ".$Diana." BsS<br/>";
        }

        // se separo una parte de codigo para poder usar el require alli dentro esta el switch
        require('Switch.php');

        //funcion con parametros... realiza un promedio del dinero

        echo '<br/> Dinero que queda: '.CuantoGastare($dinero_que_tengo_disponible,$Diana).' BsS';
        
        function CuantoGastare($dinero_que_tengo_disponible,$Diana){
            return ($dinero_que_tengo_disponible+$Diana)/2;
        }

        //separe una parte del codigo para incluirla con el include y guarda el arreglo asociativo
        include('ArreglosAsociativos.php');
         
        // funcion sin parametro:

        echo '<br/>Reglas del Cine: <br/>'.Reglas();

        function Reglas(){
            return '<br/>1) No hacer ruido. <br/>
                    2) No salir de la sala cuando comience la pelicula.<br/>
                    3) Apagar los telefonos o colocarlo en silencio.<br/>
                    4) No pararse durante la pelicula.<br/>';
        }
        ?>

    </div>  
        <div class="Diana">
            <br/><br/>
            <a class="Diana" href="../examen2.php">Volver al Menu Principal</a>
        
        </div>
        
    </body>
</html>