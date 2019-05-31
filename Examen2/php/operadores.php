<?php
/* utilizando operadores aritmeticos */
$numero_de_hijos = 3;
$nro_de_personas_vivienda = 5;

$c = $nro_de_personas_vivienda  - $numero_de_hijos ;

echo 'Número de adultos en el hogar:  '. $c;

/* operador de comparacion */
$edad = 39; 
     
if($edad<40){
    echo'<br> -  No puede obtener pension si edad comprendida entre 30 - 39</br>';
}else{
    echo'<br> - Usted obtendra una pension</br>';
}
$nro_años_construida= 75;

$opcion = ($nro_años_construida - $edad);
    echo 'Años viviendo en su domicilio : '.$opcion ;

    if ($opcion>=12) { 
        echo '<br> - Puede optar por credito para remodelacion</br>';
    }else {
        echo'<br> no puede optar por credito para remodelacon</br>';
    }

/*Operador logico y de comparacion*/
if ($numero_de_hijos>=3 and $numero_de_hijos<=6){
    echo'<br> Podran adquirir sus hijos a becas ayudantia</br>';
}else {
    echo'<br> No pueden optar beca ayudantia</br>';
}

?>