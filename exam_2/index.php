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
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 2</h5>
                        <img src="http://lorempixel.com/400/200/technics/2" class="card-img-top" alt="foto de muestra">
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

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 3</h5>
                        <img src="http://lorempixel.com/400/200/technics/3" class="card-img-top" alt="foto de muestra">
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
            <!--end row-->
            <div class="row p-3">

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 4</h5>
                        <img src="http://lorempixel.com/400/200/technics/4" class="card-img-top" alt="foto de muestra">
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

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 5</h5>
                        <img src="http://lorempixel.com/400/200/technics/5" class="card-img-top" alt="foto de muestra">
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

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 6</h5>
                        <img src="http://lorempixel.com/400/200/technics/6" class="card-img-top" alt="foto de muestra">
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

            <div class="row p-3">
                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 7</h5>
                        <img src="http://lorempixel.com/400/200/technics/7" class="card-img-top" alt="foto de muestra">
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

                <div class="col-sm-4">
                    <div class="card border-dark">
                        <h5 class="card-header">Parte 8</h5>
                        <img src="http://lorempixel.com/400/200/technics/8" class="card-img-top" alt="foto de muestra">
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



    <?php

    /*----------------------Parte 2 y 3| realizar 5 condiciones Usuando operadores de comparacion,logicos y aritmeticos----------------------*/

    //con el operador de comparacion "==" verificamos que el valor almacenado en $entero sea igual al de $entero1, en dado caso que esto sea cierto la condicion devuelve true y por ende el condicional ejecuta el codigo perteneciente al bloque if
    if ($entero == $entero2) {
        echo "$entero es igual a $entero1";
    }
    //con el operador de comparacion "!=" verificamos que el valor almacenado en $entero2 sea diferente al de $entero3, en dado caso que esto sea cierto la condicion devuelve true y por ende el condicional ejecuta el codigo perteneciente al bloque if
    if ($entero2 != $entero3) {
        echo "$entero2 es diferente a $entero3";
    }

    //con el operador aritmetico "*" multiplicamos el valor almacenado en $entero con el de $entero1 y luego con el operador de comparacion "<" verificamos que el resultado de esa multiplicacion sea menor que el valor almacenado en entero2, en caso de ser asi se ejecuta el codigo que esta dentro del bloque del if
    if ($entero * $entero2 < $entero3) {
        echo "$entero*$entero2 es menor que $entero2";
    }
    //con el operador de comparacion ">" verificamos que el valor almacenado en $flotante sea mayor al de $flotante2, en dado caso que esto sea cierto la condicion devuelve true y por ende el condicional ejecuta el codigo perteneciente al bloque if
    if ($flotante > $flotante2) {
        echo "$flotante es mayor que $flotante2";
    }
    //con el operador && generamos un AND logico, los valores a comparar deben ser del tipo boolean y si el resultado de esta operacion logica devuelve true se ejecuta el codigo dentro del bloque if
    if ($bool1 && $bool2) {
        echo "$bool1 AND $bool2 da como resultado " . $bool1 && $bool2;
    }
    //con el operador || generamos un OR logico, los valores a comparar deben ser del tipo boolean y si el resultado de esta operacion logica devuelve true se ejecuta el codigo dentro del bloque if
    if ($bool1 || $bool2) {
        echo "$bool1 OR $bool2 da como resultado " . $bool1 || $bool2;
    }




    ?>
</body>

</html>