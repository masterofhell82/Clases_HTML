<?php
    //seccion #9
    
    //realizando funcion con parametros
    function cmpstring($cadena1, $cadena2){
        $indicador=true;
        $resultado=strcasecmp($cadena1,$cadena2); //compara string sin tomar encuenta las mayusculas
        //$resultado=strcmp($cadena1,$cadena2);  //compara string tomando encuenta las mayusculas
        if($resultado){
            $indicador=false;
        }

        return $indicador;
    }

    // esta funcion la hice con el propocito de no confundirce al utilizar la funcion strcasecmp($cadena1,$cadena2)
    //ya que esta debuelve un 1 si no son iguales las cadenas introducidas por parametros y un 0 si lo son
    //esto puede confundir al programador ya que no es una manera intuitiva de comprender lo que debuelve dicha funcion
    //lo que hizo fue cambiar la manera en que la funcion strcasecmp($cadena1,$cadena2) muestra el resultado 

    //realizando funcion sin parametros 
    
    function numerosPrimos(){
        
        for($a=3;$a<20;$a++){
            $pase=true;
            for($b=2;$b<$a and $pase;$b++){

                if($a % $b != 0){
                    echo $a . " ; ";
                    $pase=false;
                }
                if($a % $b == 0){
                    $pase=false;
                }
            }
           
        }
    }

?>