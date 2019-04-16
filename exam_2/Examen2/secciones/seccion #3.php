<?php
    //condicion #1           
    //ejemplo de condicional cuando quieres comprar un producto en una tienda
    if($dinero_disponible>=$precio_producto && $estado_tienda){
        $dinero_sobrante=$dinero_disponible-$precio_producto;
        echo "<h4>* Puedes comprar el producto de la tienda y el dinero que me sobra de la compra es " .$dinero_sobrante ."</h4>";
    }else{
        echo "<h4>* No puedes comprar el producto de la tienda </h4>";
    }

    //condicion #2           
    //ejemplo de condicional cuando vamos hacer un tarea de programacion y no hay luz
    $hay_internet=true;
    if(!$hay_luz || !$hay_internet){
        echo "<h4>* No puedo hacer la tarea de programacion</h4>";
    }else{
        echo "<h4>* Puedo hacer la tarea de programacion</h4>";
    }

    //condicion #3 
    //ejemplo de condicional cuando estamos manejando un vehiculo
    $limite_velocidad=80;
    $velocidad_actual=85;
    if ($velocidad_actual>$limite_velocidad) {
        $velocidad_superada=$velocidad_actual-$limite_velocidad;
        echo "<h4>* Obtienes una multa,Superate el limite de velocidad por " . $velocidad_superada . " KM/H</h4>";
    } else {
        echo "<h4>* No superaste le limite de velocidad,no obtienes una multa</h4>";
    }
    
    //condicion #4
    //ejemplo de condicional cuando comes mucho
    $comes_mucho=false;
    $haces_ejercicio=false;
    if ($comes_mucho || $haces_ejercicio) {
        echo "<h4>* Engordaras</h4>";
    } else {
        echo "<h4>No Engordaras</h4>";
    }

    //condicion #5
    //ejemplo de condicional cuando quieres llamar
    $saldo=100;
    $bateria_celular=50;
    if ($saldo>0 && $bateria_celular>0) {
        echo "<h4>* Puedes hacer tu llamada</h4>";
    } else {
        echo "<h4>* No puedes hacer tu llamada</h4>";
    }
    


?>