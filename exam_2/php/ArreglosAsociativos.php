   
    <?php

        //arreglos asociaivos:

        echo '</br> </br>';
        echo 'Asientos Disponibles: </br>';
        
        $Asientos[0]=[

            'Fila'=> 1,
            'Columna'=> 'G',
            'Puesto'=> 'Libre'

        ];

        $Asientos[1]=[

            'Fila'=> 2,
            'Columna'=> 'E',
            'Puesto'=> 'Ocupado'

        ];

        $Asientos[2]=[

            'Fila'=> 3,
            'Columna'=> 'H',
            'Puesto'=> 'Personal'

        ];
        $Asientos[3]=[

            'Fila'=> 4,
            'Columna'=> 'L',
            'Puesto'=> 'Administrativo'

        ];

        $Asientos[4]=[

            'Fila'=> 5,
            'Columna'=> 'D',
            'Puesto'=> 'Puesto Doble'

        ];
        
        //la diferencia del for y el foreach es que el for trabaja directamente con el nombre que ya poseen las variables
        //en cambio el foreach debe crear una nueva variable para almacenar las anterioires y poder ejecutar el ciclo

        foreach($Asientos as $valor){
            echo '<br/>Fila: '.$valor['Fila'].'<br/>';
            echo 'Columna: '.$valor['Columna'].'<br/>';
            echo 'Puesto: '.$valor['Puesto'].'<br/>';
            
        }

        // los arreglos asociativos son los que le dicen al cliente los puestos disponibles 
        //que hay ubicando la posicion exacta del lugar
    ?>