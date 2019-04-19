<?php
    $opcion=1;    //se realizo un menu con esta estructura con una variable entera
                                                                    
    switch ($opcion) {
                    
        case 1:
            echo "<h4>" . "* Usted entro en el login del sistema" . "</h4>";
            break;
        case 2:
            echo "<h4>" . "* Usted entro en el registro del sistema" . "</h4>";
            break;
        case 3:
            echo "<h4>" . "* Usted ha salido del sistema" . "</h4>";
            break;        
        default:
            echo "<h4>" . "* Digite un opcion valida" . "</h4>";
            break;
    }
?>