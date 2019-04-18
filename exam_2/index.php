<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen 2</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- estilos locales -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- js local -->
    <script src="js/app.js"></script>
</head>

<body>
    <div class="container">
        <div class="tarjetas pt-5">
            <h1>Evaluacion PHP</h1>
            <div class="row p-3">

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 1</h5>
                        <img src="http://lorempixel.com/400/200/technics/1" class="card-img-top" alt="foto de muestra">
                        <div class="card-body">
                            <h5 class="card-title">Crear 10 variables. Declaradas e inicializadas</h5>
                            <p class="card-text">
                                <?php
                                /*----------Parte 1 | Crear 10 variables. Declaradas e inicializadas----------*/

                                // type integer - almacenan numeros enteros
                                $entero = 10;
                                $entero2 = 7;
                                $entero3 = 12;
                                // fin integer
                                //type float - almacenan decimales
                                $flotante = 6.43;
                                $flotante2 = 3.76;
                                $flotante3 = 2.90;
                                // fin float
                                // type string - almacenan cadena de caracteres
                                $texto = "hola";
                                $texto2 = "mundo";
                                // fin string
                                // type boolean - almacenan valores booleanos (verdadero o falso)
                                $bool1 = true;
                                $bool2 = false;
                                // fin boolean
                                ?>
                                <table class="table table-striped table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Campos</th>
                                            <th scope="col">Valores</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Enteros</th>
                                            <td><?= $entero . " | " . $entero2 . " | " . $entero3 ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">flotantes</th>
                                            <td><?= $flotante . " | " . $flotante2 . " | " . $flotante3 ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">textos</th>
                                            <td><?= $flotante . " | " . $flotante2  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Booleanos</th>
                                            <td><?= " true | false" ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- ----------------------Parte 2 y 3| realizar 5 condiciones -->
                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 2</h5>
                        <img src="http://lorempixel.com/400/200/technics/2" class="card-img-top" alt="foto de muestra">
                        <div class="card-body">
                            <h5 class="card-title">Condicionales</h5>

                            <p class="card-text">

                                <?php


                                echo '<p>con el operador de comparacion " == " verificamos que el valor almacenado en <b>$entero</b> sea igual a el mismo, en dado caso que esto sea cierto la condicion devuelve true y por ende el condicional ejecuta el codigo perteneciente al bloque if</p> ';

                                if ($entero == $entero) {
                                    echo "<b>$entero es igual a $entero</b> <br/>";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 2b</h5>
                        <img src="http://lorempixel.com/400/200/technics/3" class="card-img-top" alt="foto de muestra">
                        <div class="card-body">
                            <h5 class="card-title">Condicionales</h5>
                            <p class="card-text">
                                <?php
                                echo '<p>con el operador de comparacion "!=" verificamos que el valor almacenado en <b>$entero</b> sea diferente al de <b>$entero2</b>, en dado caso que esto sea cierto la condicion devuelve true y por ende el condicional ejecuta el codigo perteneciente al bloque de</p>';
                                if ($entero != $entero2) {
                                    echo  "<b>$entero es diferente a $entero2</b> <br/>";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->
            <div class="row p-3">

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 3</h5>
                        <img src="http://lorempixel.com/400/200/technics/4" class="card-img-top" alt="foto de muestra">
                        <div class="card-body">
                            <h5 class="card-title">Condicionales y operadores aritmeticos</h5>
                            <p class="card-text">
                                <?php
                                echo '<p>con el operador aritmetico "*" multiplicamos el valor almacenado en <b>$entero</b> con el de <b>$entero1</b> y luego con el operador de comparacion ">" verificamos que el resultado de esa multiplicacion sea mayor que el valor almacenado en <b>$entero2</b>. en caso de ser asi se ejecuta el codigo que esta dentro del bloque del if</p>';
                                if ($entero * $entero2 > $entero3) {
                                    echo "<b>$entero*$entero2 es mayor que $entero2</b><br/>";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 3b</h5>
                        <img src="http://lorempixel.com/400/200/technics/5" class="card-img-top" alt="foto de muestra">
                        <div class="card-body">
                            <h5 class="card-title">Condicionales y operadores de comparación</h5>
                            <p class="card-text">
                                <?php
                                echo '<p>con el operador de comparacion "<" verificamos que el valor almacenado en <b>$flotante</b> sea menor al de <b>$flotante2</b>, en dado caso que esto sea cierto la condicion devuelve true y por ende el condicional ejecuta el codigo perteneciente al bloque if</p>';
                                if ($flotante2 < $flotante) {
                                    echo "<b>$flotante2 es menor que $flotante</b> <br/>";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 3c</h5>
                        <img src="http://lorempixel.com/400/200/technics/6" class="card-img-top" alt="foto de muestra">
                        <div class="card-body">
                            <h5 class="card-title">Condicionales y operadores de logicos</h5>
                            <p class="card-text">
                                <?php
                                echo '<p>con el operador <b>&&</b> generamos un AND logico, los valores a comparar deben ser del tipo boolean y si el resultado de esta operacion logica devuelve true se ejecuta el codigo dentro del bloque if</p>';
                                // usamos el operator ! para negar la condicion y entrar en el bloque de codigo
                                if (!($bool1 && $bool2)) {
                                    echo  "<b>true AND false da como resultado false </b><br/>";
                                }

                                echo '<br/><p>con el operador <b>||</b> generamos un OR logico, los valores a comparar deben ser del tipo boolean y si el resultado de esta operacion logica devuelve true se ejecuta el codigo dentro del bloque if</p>';

                                if ($bool1 || $bool2) {
                                    echo "<b>true OR false da como resultado true</b>";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row p-3">
                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 4 y 6</h5>
                        <img src="http://lorempixel.com/400/200/technics/7" class="card-img-top" alt="foto de muestra">
                        <div class="card-body">
                            <h5 class="card-title">Crear 4 arreglos con 6 elementos cada uno y recorrerlos</h5>
                            <p class="card-text">
                                <?php
                                $numeros = [1, 2, 3, 4, 5, 6];  //tipo integer
                                $edades = [51, 44, 38, 25, 17, 40];  //tipo integer
                                $carros = array('bmw', 'nissan', 'hummer', 'chevrolet', 'chery', 'toyota');  //tipo string
                                $nombres = array('pedro', 'jose', 'maria', 'andres', 'diana', 'adriana');  // tipo string

                                ?>
                                <table class="table table-striped table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Arreglo</th>
                                            <th scope="col">Valores</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">numeros</th>
                                            <td>
                                                <?php
                                                //El ciclo for recibe 3 operaciones, una asignacion a una variable contador, una condicion la cual indicara si el siclo se repite o no y una accion que se generara al terminar cada ciclo, en este caso incremento de la variable contador lo cual es lo mas comun.
                                                //estamos usando un operador de incremento el cual es "++" y lo que hace es aumentar en 1 la variable idincada
                                                for ($i = 0; $i < count($numeros); $i++) { //con count obtenemos el tamaño del array
                                                    //saco el valor de cada elemento
                                                    echo $numeros[$i];
                                                    if ($i != count($numeros) - 1) //por estetica, no imprimir el ultimo pie
                                                        echo " | ";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">edades</th>
                                            <td>
                                                <?php
                                                $i = 0; //declarando el contador
                                                //el ciclo while recibe una condicion la cual mientras sea verdadera se repetira el ciclo, cabe destacar que dentro del mismo debe existir alguna operacion que cambie el estado de esta condicion, ya que si no lo hacemos el ciclo se repetira de manera infinita
                                                while ($i < count($edades)) { //con count obtenemos el tamaño del array
                                                    //saco el valor de cada elemento
                                                    echo $edades[$i];
                                                    if ($i != count($numeros) - 1) //por estetica, no imprimir el ultimo pie
                                                        echo " | ";
                                                    $i++; //utilizamos el operador de incremento para aumentar la vairable contador
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">carros</th>
                                            <td>
                                                <?php
                                                //el bucle foreach se encarga de recorrer cada elemento del array $carros y los interpreta como $valor para iterarlo dentro del ciclo
                                                foreach ($carros as $valor) {
                                                    echo $valor;
                                                    if ($valor != end($carros)) //por estetica, no imprimir el ultimo pie
                                                        echo " | ";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nombres</th>
                                            <td>
                                                <?php
                                                //el bucle foreach se encarga de recorrer cada elemento del array $carros y los interpreta como $valor para iterarlo dentro del ciclo
                                                foreach ($nombres as $valor) {
                                                    echo $valor;
                                                    if ($valor != end($nombres)) //por estetica, no imprimir el ultimo pie
                                                        echo " | ";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 5</h5>
                        <img src="http://lorempixel.com/400/200/technics/8" class="card-img-top" alt="foto de muestra">
                        <div class="card-body">
                            <h5 class="card-title">Imprimir valores de arrays segun su indice</h5>
                            <p class="card-text">
                                <?php
                                echo $numeros[1] . '-> imprimiendo indice 1 del arreglo <b>$numeros</b><br/>';
                                echo $edades[0] . '-> imprimiendo indice 0 del arreglo <b>$edades</b><br/>';
                                echo $carros[4] . '-> imprimiendo indice 4 del arreglo <b>$carros</b><br/>';
                                echo $nombres[5] . '-> imprimiendo indice 5 del arreglo <b>$nombres</b><br/>'; //NOTA: se solicita el indice 6, pero en el punto cuatro se indico que los arreglos tuvieran 6 elementos cada uno, asi que el indice maximo es 5. Debido a esto es el colocado
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 9</h5>
                        <img src="http://lorempixel.com/400/200/technics/9" class="card-img-top" alt="foto de muestra">
                        <div class="card-body">
                            <p class="card-text">
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




</body>

</html>