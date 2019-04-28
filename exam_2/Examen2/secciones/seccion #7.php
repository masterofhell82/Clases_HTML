<?php
    //seccion #7

    //creando arreglo asociativo
    $usuario[0]=["nombre_usuario"=>"Gabriel","contraseña"=>"gabriel_paz21","CI"=>"27376962"];
            
    $usuario[1]=["nombre_usuario"=>"Juan","contraseña"=>"Juan.2114","CI"=>"29345985"];
            
    $usuario[2]=["nombre_usuario"=>"Carlos","contraseña"=>"Carlos905","CI"=>"25574672"];
        
    $usuario[3]=["nombre_usuario"=>"Ana","contraseña"=>"Ana797","CI"=>"24896438"]; 
            
    $usuario[4]=["nombre_usuario"=>"Omaira", "contraseña"=>"Omaira.%126","CI"=>"21572543"];
                
        
    foreach($usuario as $valor){
        echo "<h4>" . "* el nombre del usuario es " . $valor["nombre_usuario"] . "</h4>";
        echo "<h4>" . "* la contraseña del usuario es " . $valor["contraseña"] . "</h4>";
        echo "<h4>" . "* la contraseña del usuario es " . $valor["CI"] . "</h4>";
    }
    //con  el ciclo for deberiamos tener una variable incrementadora para poder recorrer cada propiedad del array asociativo

?>