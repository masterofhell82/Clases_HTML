<?php
/*Definir variables */
/* Variable de tipo numerico*/
$edad = 39;
$numero_de_hijos= 3;
$nro_de_personas_vivienda= 5;
$nro_años_construida= 20;
/* Variable de tipo string*/
$jefe_de_familia= 'padre';
$nombre= 'Pedro';
$apellido= 'Perez';
$ocupacion= 'Mecanico';
/*variable booleana */
$casa= true;
$casado= true;
$vehiculo=false;
$negocio=false;
$servicios=true;

/* Concatenar y mostrar en pantalla */

echo 'Nombre: '. $nombre . '<br> Apellido: ' . $apellido .
'<br> Ocupacion: ' . $ocupacion . '<br> Jefe de familia:  ' . $jefe_de_familia .
'<br> Edad: '. $edad . '<br> Numero de hijos'. $numero_de_hijos .
'<br> Numero de personas que viven en el hogar: '. $nro_de_personas_vivienda;

?>