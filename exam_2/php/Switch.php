<?php

// el switch lo uso para saber el tipo de pelicula que desea ver el usuario

echo '<br/> Lentrada de '.$tipo_de_pelicula.' Posee: ';

switch($tipo_de_pelicula){
    case 'Romance':
        echo 'un monto de 8000BsS';
        break;
    case 'Accion':
        echo 'un monto de 8500BsS';
        break;
    case 'Misterio':
        echo 'un monto de 9000BsS';
        break;
    default:
        echo 'Opcion no valida';
        break;
}

?>