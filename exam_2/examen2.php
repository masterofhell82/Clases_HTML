<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen 2</title>
</head>

<body>
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

    /*----------------------Parte 2 y 3| realizar 5 condiciones Usuando operadores de comparacion,logicos y aritmeticos----------------------*/

    //con el operador de comparacion "==" verificamos que el valor almacenado en $entero sea igual al de $entero1, en dado caso que esto sea cierto la condicion devuelve true y por ende el condicional ejecuta el codigo perteneciente al bloque if
    if ($entero == $entero1) {
        echo "$entero es igual a $entero1";
    }
    //con el operador de comparacion "!=" verificamos que el valor almacenado en $entero2 sea diferente al de $entero3, en dado caso que esto sea cierto la condicion devuelve true y por ende el condicional ejecuta el codigo perteneciente al bloque if
    if ($entero2 != $entero3) {
        echo "$entero2 es diferente a $entero3";
    }

    //con el operador aritmetico "*" multiplicamos el valor almacenado en $entero con el de $entero1 y luego con el operador de comparacion "<" verificamos que el resultado de esa multiplicacion sea menor que el valor almacenado en entero2, en caso de ser asi se ejecuta el codigo que esta dentro del bloque del if
    if ($entero * $entero1 < $entero2) {
        echo "$entero*$entero1 es menor que $entero2";
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