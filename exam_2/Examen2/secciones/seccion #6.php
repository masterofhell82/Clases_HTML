<?php
    //seccion #6

    //imprimiendo array #1 con ciclo while
            
    $i=0;
    while($i < sizeof($venezuela_estados)){       //recorre cada uno de los elementos del array $venezuela_estados y imprime cada uno de ellos
        echo "<h4>" . "*" . $venezuela_estados[$i] . "</h4>";              //usa una variable de incremento   
        $i++;
    }

    //imprimiendo array #2 con ciclo for          // recorre cada uno de los elementos del array $precios_productos y imprime cada uno de ellos
    for($i=0;$i<sizeof($precios_productos);$i++){ //usa una variable de incremento 
        echo "<h4>" . "*" . $precios_productos[$i] . "</h4>";       
    }

    //imprimiendo array #3 con ciclo foreach      // recorre cada uno de los elementos del array $marcas_carros y imprime cada uno de ellos
    foreach($marcas_carros as $valor){            //no contiene variable de incremento
        echo "<h4>" . "*" . $valor . "</h4>";       
    }

    //imprimiendo array #4 normalmente        //imprimiendo todos los elementos que ha en el array $precios_productos
    echo "<h4>" . "*" . $precios_productos[0] . "</h4>";
    echo "<h4>" . "*" . $precios_productos[1] . "</h4>";
    echo "<h4>" . "*" . $precios_productos[2] . "</h4>";
    echo "<h4>" . "*" . $precios_productos[3] . "</h4>";
    echo "<h4>" . "*" . $precios_productos[4] . "</h4>";
    echo "<h4>" . "*" . $precios_productos[5] . "</h4>";

?>