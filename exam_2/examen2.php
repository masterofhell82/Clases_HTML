<div class="p_10_1"><!--segmento punto 10 --> 
<?php 
    include('seg1.php')//la diferencia entre include u require es que si falta include solo faltara su segmento de codigo,
    //pero require si llegara a faltar faltataria su codigo y el rasto debajo de donde este la sentencia
?> 
</div>

<body>
    <div class="encabezado">Examen 2</div>
    <div class="examen">
        <div class="p_1"><!--segmento punto 1 --> 
        <div class="t_1">
        <?php echo'</br></br>Punto Numero 1 </br></br>'; //inicio de el punto 1 + 4 saltos de linea 
        ?>
        </div>
        <?php
            $edad=35; //tipo int
            $rango=15; //tipo int
            $nome='Naruto'; //tipo string
            $op=4; //tipo int
            $dimension=0.625;//tipo float
            $commit='Tengo muchisimo sueño';//tipo string
            $Tengo='Hambre'; //tipo string
            $cine='Quiero ir al cine';//tipo string
            $nome_de_capoeira='Meu nome e Baloo e eu sou do grupo Capoeira Senzala';//tipo string
            $tengo_dinero=true;//tipo booleana
            ?>
            <div class="p_10"><!--segmento punto 10 --> 
                <?php 
                    require('seg2.php')//la diferencia entre include u require es que si falta include solo faltara su segmento de codigo,
                //pero require si llegara a faltar faltataria su codigo y el rasto debajo de donde este la sentencia
                ?> 
                </div>
        </div>    
        <div class="p_2"><!--segmento punto 2 --> 
        <div class="t_2">
        <?php echo'</br></br>Punto Numero 2</br></br>';//inicio de el punto 2 + 4 saltos de linea
        ?>
        </div>
        <?php        
            if ($edad>18) {//condicional donde si la variable edad sea mayor a 18 años
                echo'Puede entrar a la pagina </br>'; //impresion es caso de que sea la edad mayor a 18 + Salto de linea
            } else {//caso contrario a donde sea mayor a 18
                echo'No puede entrar a la pagina </br>'; //impresion es caso de que sea la edad menor a 18 + Salto de linea
            }
            if ($nome="Eloy") {//condicional donde si la variable nome sea igual a Naruto
                echo'Los nombres no coinciden </br>';//impresion es caso de que no sean iguales + Salto de linea
            } else {//caso contrario a donde sea igual a Naruto
                echo'Los nombre si coincides </br>';//impresion es caso de que si sean iguales + Salto de linea
            }
            if ($cine==$tengo_dinero) {//condicional donde si tengo dinero puedo ir al cine
                echo'Si la podre ver Endgame :D </br>';//impresion donde sea verdad que tenga el dinero+ Salto de linea
            } else {//caso contrario en donde fuese falso que tendria dinero para ir al cine
                echo'No puedo ver T.T </br>';//impresion donde sea falso que tenga el dinero+ Salto de linea
            }
            if ($dimension=5/8) {//condicional donde la dimension es igual a 5/8
                echo'El numero es igual </br>';//impresion donde sea igual + Salto de linea
            } else {//caso contrario en donde la dimension sea igual 
                echo'El numero no es igual </br>';//impresion donde no es igual + Salto de linea
            }
            if ($commit==$Tengo) {//condicional donde muestra si los comentarios son iguales
                echo'Los caracteres son iguales </br>';//impresion donde sean iguales + Salto de linea
            } else {//caso contrario de donde los comentarios sean iguales
                echo'Los caracteres no son iguales </br>';//impresion donde no sean iguales + Salto de linea
            }
            echo'</br></br>';//2 saltos de linea
            echo '<hr>';//fin de el punto 2
            ?>
        </div>

        <div class="p_3"><!--segmento punto 3 --> 
        <div class="t_3">
        <?php echo'</br></br>Punto Numero 3</br></br>';//inicio de el punto 3 + 4 saltos de linea
        ?>
        </div>
        <?php        
            $f=7;
            $y=2;
            $x=6;
            $s= $f + $y;
            $r= $f - $y;
            $m= $x * $y;
            $d= $f / $x;
            if ($x>$y && $s>$y) {//condicional con AND
                echo $x.' es mayor que '.$y.' y la suma de '.$f.'+'.$y. ' es mayor a '.$y.'</br> ';//imprime en caso verdadero cuando se cumplen las dos condiciones + Salto de linea
            } else {//caso contrario de donde se cumpla el condicional
                echo'Alguna o ninguna opcion corresponde </br>'; //impresion en caso de ser falso  + Salto de linea
            }
            if ($f>$y && $s<$x) {//condicional con AND
                echo $f.' es mayor que '.$y.' y la suma de '.$f.'+'.$y. ' es menor a '.$x.'</br> ';//imprime en caso verdadero cuando se cumplen las dos condiciones + Salto de linea
            } else {//caso contrario de donde se cumpla el condicional
                echo'Alguna o ninguna opcion corresponde </br>'; //impresion en caso de ser falso  + Salto de linea
            }
            if ($y>$d || $r<$y) {//condicional con OR
                echo $y.' es mayor que la division de '.$f.'/'.$x.' o la resta de '.$f.'-'.$y. ' es menor a '.$y.'</br> ';//imprime en caso verdadero cuando se cumplen las dos condiciones + Salto de linea
            } else {//caso contrario de donde se cumpla el condicional
                echo'Alguna o ninguna opcion corresponde </br>'; //impresion en caso de ser falso  + Salto de linea
            }
            if ($x>$f || $m>=$y) {//condicional con OR
                echo $x.' es mayor que '.$f.' o la multiplicacion de '.$x.'*'.$y. ' es mayor o igual a '.$y.'</br> ';//imprime en caso verdadero cuando se cumplen las dos condiciones + Salto de linea
            } else {//caso contrario de donde se cumpla el condicional
                echo'Alguna o ninguna opcion corresponde </br>'; //impresion en caso de ser falso  + Salto de linea
            }
            if ($x==$y && $s>$f) {//condicional con AND
                echo $x.' es igual a '.$y.' y la suma de '.$f.'+'.$y. ' es mayor a '.$f.'</br> ';//imprime en caso verdadero cuando se cumplen las dos condiciones + Salto de linea
            } else {//caso contrario de donde se cumpla el condicional
                echo'Alguna o ninguna opcion corresponde </br>'; //impresion en caso de ser falso  + Salto de linea
            }
            //operaciones aritmeticas
            echo'La suma de '.$f.' y '.$y.' es igual a = '.$s.'</br>';//imprime los numeros con los cuales se hace la operacion de sumar y su resultado + Salto de linea
            echo'La resta de '.$f.' y '.$y.' es igual a = '.$r.'</br>';//imprime los numeros con los cuales se hace la operacion de restar y su resultado + Salto de linea
            echo'La multiplicacion de '.$x.' y '.$y.' es igual a = '.$m.'</br>';//imprime los numeros con los cuales se hace la operacion de multiplicar y su resultado + Salto de linea
            echo'La division de '.$f.' y '.$x.' es igual a = '.$d.'</br>';//imprime los numeros con los cuales se hace la operacion de dividir y su resultado + Salto de linea
            echo'</br> </br>';//2 saltos de linea
            echo '<hr>';//fin de el punto 3
        ?>
        </div>

        <div class="p_4"><!--segmento punto 4 --> 
        <div class="t_4">
        <?php echo'</br></br>Punto Numero 4</br></br>';//inicio de el punto 4 + 4 saltos de linea
        ?>
        </div>
        <?php
            $cordas=array('Amarela','Laranjas','Branca','Prateada','cinza','Preto');//arreglo tipo string con declaracion array
            $animales=['Rinoceronte Blanco','Tiburon Blanco','Gorila de Montaña','Elefante','Oso panda','Tigre de Amoy'];//arreglo tipo string sin declaracion array
            $decimales=array(1.57,3.256,782.363,323.6,25.6,32.9);//arreglo tipo float con declaracion array
            $años=[1850,1924,1954,1994,2000,2019];//arreglo tipo int sin declaracion array
            //mostrar arreglos con su contenido
            echo 'Lista de arreglos: </br></br>';
            echo 'cordas contiene = [Amarela, Laranjas, Branca, Prateada, cinza, Preto]</br>';
            echo 'animales contiene = [Rinoceronte Blanco, Tiburon Blanco, Gorila de Montaña, Elefante, Oso panda, Tigre de Amoy]</br>';
            echo 'decimales contiene = [1.57,3.256,782.363,323.3,5.6,32.9]</br>';
            echo 'años contiene = [1850,1924,1954,1994,2000,2019]</br>';
            echo'</br></br>';//2 saltos de linea
            echo '<hr>';//fin de el punto 4 
        ?>
        </div>

        <div class="p_5"><!--segmento punto 5 --> 
        <div class="t_5">
        <?php echo'</br></br>Punto Numero 5</br></br>';//inicio de el punto 5 + 4salto de linea
        ?>
        </div>        
        <?php
            echo $cordas[1].'</br>';//muestra el segundo lugar en la posicion de el arreglo ya que estos incluyen al 0 como numero de posicion + Salto de linea
            echo $animales[0].'</br>';//muestra el primer lugar en la posicion de el arreglo ya que estos incluyen al 0 como numero de posicion + Salto de linea
            echo $decimales[4].'</br>';//muestra el quinto lugar en la posicion de el arreglo ya que estos incluyen al 0 como numero de posicion + Salto de linea
            //echo $años[6].'</br>'; este no muestra nada ya que el numero 6 no fue asignado en el arreglo, el cual seria la posicion septima
            echo'</br></br>';//2 saltos de linea
            echo '<hr>';//fin de el punto 5
        ?>
        </div>
 
        <div class="p_6"><!--segmento punto 6 --> 
        <div class="t_6">
        <?php echo'</br></br>Punto Numero 6 </br></br>';//inicio de el punto 6 + 4 saltso de linea
        ?>
        </div>
        <?php    
            $t=0;//variable iniciadora  
            //ciclo while tiene una variable el cual recorrera hasta que se le indique
            //en este se agrega directamente la variable, el rango de recorrido y cuanto ira en aumento de decremento
            //el ciclo foreach recorre todo el arreglo sin que se indique un rango 
            while($t<=5){//correra de 0 a 5 para mostrar todos los datos de el arreglo
                echo '<p>Os colores das cordas son: '.$cordas[$t].'</p>';//datos tipos string
                $t++;//variable iniciadora  ira aumentando desde 0 al 5, de en uno a uno
            } 
            for($t=0;$t<=5;$t++){//variable iniciadora + correra de 0 a 5 para mostrar todos los datos de el arreglo +variable iniciadora  ira aumentando desde 0 al 5 de en uno a uno
                echo '<p> Animales en peligro es extincion: '.$animales[$t].'</p>';//datos tipos string
            }
            foreach ($decimales as $key ) {//arreglo de donde se  sacara informacion mas variable que llevara el conteo auntomatico de cacillas de el arreglo
                echo '<p> Medidas de el terreno: '.$key.'</p>';//datos tipos float
            }
            $t=5;//variable iniciadora  
            while($t>=0){//correra de 0 a 5 para mostrar todos los datos de el arreglo
                echo '<p> Años de nacimientos familiares: '.$años[$t].'</p>';//datos tipos int
                $t--;//variable iniciadora  ira decreciendo desde 5 al 0, de en uno a uno
            }
            echo'</br></br>';//2 saltos de linea
            echo '<hr>';//fin de el punto 6
        ?>
        </div>

        <div class="p_7"><!--segmento punto 7 --> 
        <div class="t_7">
        <?php echo'</br></br>Punto Numero 7</br></br>';//inicio de el punto 7 + 4 saltos de linea
        ?>
        </div>            
        <?php    
            //la diferencia entre for y foreach, es que foreach recorre todo el arreglo sin tener que colocar una cantidad de casillas especificas
            // y que no podria mostrar todo el contenido de el arreglo, o en caso de faltar podria dar error  
            $pelicula[0]=[//arreglo Asociativo numero 1 sobre peliculas
                'nome'=>'Titanic',//Nombre de la pelicula, en tipo string
                'ano'=>1997,//Año de estreno, en tipo int
                'recaudo'=>'$ 1,835,300,000',//Dinero reecaudadoen en cines, en tipo string
            ];
            $pelicula[1]=[//arreglo asociativo numero 2 sobre peliculas
                'nome'=>'Avatar',//nombre de la pelicula, en tipo string
                'ano'=>2009,//año de estreno, en tipo int
                'recaudo'=>'$ 2,787,965,087',//dinero reecaudadoen en cines, en tipo string           
            ];
            $pelicula[2]=[//arreglo asociativo numero 3 sobre peliculas
                'nome'=>'Harry Potter y la piedra filosofal',//nombre de la pelicula, en tipo string
                'ano'=>2001,//año de estreno, en tipo int
                'recaudo'=>'$ 968,657,891',//dinero reecaudadoen en cines, en tipo string      
            ];
            $pelicula[3]=[//arreglo asociativo numero 4 sobre peliculas
                'nome'=>'Jurassic Park',//Nombre de la pelicula, en tipo string
                'ano'=>1993,//año de estreno, en tipo int
                'recaudo'=>'$ 919,700,000',//dinero reecaudadoen en cines, en tipo string    
            ];
            $pelicula[4]=[//arreglo asociativo numero 5 sobre peliculas
                'nome'=>'E.T.: El extraterrestre',//nombre de la pelicula, en tipo string
                'ano'=>1982,//año de estreno, en tipo int
                'recaudo'=>'$ 756,700,000',//dinero reecaudadoen en cines, en tipo string       
            ];
            foreach ($pelicula as $bankai) {//ciclo donde se evaluan las posiciones en la variable bankai
                echo '<p> Nombre de la pelicula: '.$bankai['nome'].'</p>';//nombre de el arreglo asociativo
                echo '<p> Año de estreno: '.$bankai['ano'].'</p>';//año de el arreglo asociativo
                echo '<p> Recaudo en cines: '.$bankai['recaudo'].'</p>';//recaudo de el arreglo asociativo
                echo '<hr>';//linea separadora entre cada vez que se cumplre un ciclo
            };
            echo'</br></br>';//2 saltos de linea
            //fin de el punto 7
            ?>
        </div>

        <div class="p_8"><!--segmento punto 8 --> 
        <div class="t_8">
        <?php echo'Punto Numero 8</br></br>';//inicio de el punto 8 + 2 saltos de linea
        ?>
        </div>        
        <?php    
            $op=4;//opcion la cual se evalara en int y sera de el 1 al 4
            switch ($op) {//switch donde contendra la variable op para trabajar, este switch mostrara opciones para un usuario de pagina web
                case 1://de ser caso 1 en int
                    echo'Ha ingresado al sistema </br>';//impresion por esta opcion  + Salto de linea
                    break;//hace que no sigan cprriendo hacia abajo las otra opciones solo corre esta
                case 2://de ser caso 2 en int
                    echo'Introdusca sus datos </br>';//impresion por esta opcion  + Salto de linea
                    break;//hace que no sigan cprriendo hacia abajo las otra opciones solo corre esta
                case 3://de ser caso 3 en int
                    echo'Introdusca su nueva contraseña </br>';//impresion por esta opcion
                    break;//hace que no sigan cprriendo hacia abajo las otra opciones solo corre esta
                case 4://de ser caso 4 en int
                    echo'Usted ha salido de el sistema </br>';//impresion por esta opcion  + Salto de linea
                    break;//hace que no sigan cprriendo hacia abajo las otra opciones solo corre esta                      
                default://de ser un numero fuera de el rango establecido o un string
                    echo'Opcion no valida, introdusca un numero de el 1-4 </br>';//impresion por esta opcion  + Salto de linea
                    break;//hace que no sigan cprriendo hacia abajo las otra opciones solo corre esta
            }
            echo'</br></br>';//2 salto de linea
            echo '<hr>';//fin de el punto 8
        ?>
        </div>
      
        <div class="p_9"><!--segmento punto 9 --> 
        <div class="t_9">
        <?php echo'</br></br>Punto Numero 9</br></br>';//inicio de el punto 9 + 4 saltos de linea
        ?>
        </div>        
        <?php    
            function consejos(){//esta primera funcion es creada para almacenar texto
            return '<p>10 Consejos del Dalai Lama </br>
                    1)Ten en cuenta que el gran amor y los grandes logros requieren grandes riesgos.</br>
                    2)Cuando pierdes, no pierdes la lección.</br>
                    3)Sigue las tres R: Respeto a ti mismo, Respeto para los otros y Responsabilidad sobre todas tus acciones.</br>
                    4)Recuerda que no conseguir lo que quieres, a veces significa un maravilloso golpe de suerte.</br>
                    5)Aprende las reglas, así sabrás como romperlas apropiadamente.</br>
                    6)No permitas que una pequeña disputa destroce una Gran Amistad.</br>
                    7)Cuando creas que has cometido un error, haz algo inmediatamente para corregirlo.</br>
                    8)Ocupa algo de tiempo cada día en estar solo.</br>
                    9)Abre tus brazos al cambio, pero no te olvides de tus valores.</br>
                    10)Recuerda que a veces el silencio es la mejor respuesta. </p>';//con return se regresara todo el texto que este en la funcion
        }
        function promedios($f,$y,$x){//esta funcion es para sacar el promedio de las variables con las que se tabajo anteriormente
            return($f+$y+$x)/3;//return regresa el resultado de la operacion
        }
        ?>
        <section><!-- seccion donde se montraran los return de las funciones (punto 9) -->
            <?php echo 'El texto para el ejemplo es: </br>'.consejos();//muestra a pantalla el return de la funcion 1
            echo 'El promedio de los numeros es: '.promedios($f,$y,$x);//muestra a pantalla el return de la funcion 2
            echo'</br></br>';//2 saltos de linea
            //fin de el punto 9
            ?>
        </section>
        </div>        
    </body>     
</html>