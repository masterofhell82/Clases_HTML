<?php

    //condicion #1            
    //ejemplo de condicional cuando se va a comprar un producto
    if( $dinero_disponible >= $precio_producto){
        echo "<h4> * Puedes comprar el producto</h4>";
    }else{
        echo "<h4> * No puedes comprar el producto</h4>";
    }

    //condicion #2            
    //ejemplo de condicional cuando vas a la playa
    if($dia_soleado){
        echo "<h4> * Puedes broncearte en la playa</h4>";
    }else{
        echo "<h4> * No puedes broncearte en la playa</h4>";
    }

    //condicion #3            
    //ejemplo de condicional "apobacion de materia"
    if($nota_total<= $base_nota){
        echo "<h4> * Reprobaste la materia</h4>";
    }else{
        echo "<h4> * Aprobasate la materia</h4>";
    }

    //condicion #4            
    //ejemplo de condicional para que se unan las cadenas comparadas(este ejemplo se usa para comparar password)

    if($password_introducido===$password_base_datos){
        echo "<h4> * Ha entrado en la cuenta</h4>";
    }else{
        echo "<h4> * No ha entrado en la cuenta</h4>";
    }

    //condicion #5            
    //ejemplo de condicional para pasar un materia
    if($estudiaste){
        echo "<h4> * Pasaras la materia</h4>";
    }else{
        echo "<h4> * No pasaras la materia</h4>";
    }    
?>