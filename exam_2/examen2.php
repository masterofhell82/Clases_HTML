<?php
    // variables tipo texto
    $nombre = $_POST['nombre'];
    $nombre_mascota = $_POST['nombre_mascota'];
    // varables tipo entero
    $cedula = $_POST['cedula'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $edad = $_POST['edad'];
    $longitud = $_POST['longitud'];
    $ejercicio = $_POST['ejercicio'];
    $comida = $_POST['comida'];
    $baño = $_POST['baño'];

    // requerimos de archivo vars.php
    require('vars.php');
    include 'hola.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Formularios</title>
</head>
<body>
	<script src="js/formularip.js"></script>
	<div class="contenedor-formulario">
		<div class="wrap">
			<form class="formulario">
                <div class="arriba">
                    <h1>Resultados</h1>
				</div>
			    <div class="arriba">
					<label class="la">
                        <?php   
                            // funsion llama el nombre de la mascota
                            hla();
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // esta condicion te indica si tu mascota va o no lo suiciente al baño
                            if ($baño < 3){
                                echo"Su mascota debe ir como minimo 3 veces al baño" .'<br />';
                            } else{
                                echo'Su mascota va demasidas veces al baño'.'<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // esta condicion te indica si tu mascota haces suficiente ejercicio
                            if ($ejercicio < 5){
                                echo"Su mascota debe hacer mas ejercicio a la semana".'<br />';
                            } else{
                                echo'Su mascota debe hacer ejercicio por lo menos 5 veces a la semana'.'<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // esya condicion te indica si tu mascota es jove o vieja
                            if ($edad < 15){
                                echo'Su perro es joven'.'<br />';
                            }else{
                                echo'Su perro es viejo'.'<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // esta condicion te indica cuanto debe aproximadamente comer tu mascota
                            if($altura < $valor1){
                                echo'Su pero debe comer entre 5 a 14 kg'.'<br />';
                            }elseif($altura>$valor1){
                                if($altura< 50){
                                    echo'Su pero debe comer entre 15 a 24 Kg'.'<br />';
                                }
                            }else{
                                echo'Su pero debe comer entre 25 a 40 Kg incluso mas si es muy grande'.'<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // esta condicion te indica cuanto aproximadamente debe pesar tu mascota
                            if($longitud < 46){
                                echo'Su pero debe pesar entre 10 a 25 kg'.'<br />';
                            }elseif($longitud>46){
                                if($longitud< 61){
                                    echo'Su pero debe comer entre 25 a 45 kg'.'<br />';
                                }
                            }else{
                                echo'Su pero debe comer entre 45 a 90 kg incluso mas si es muy grande'.'<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // esta condicion esta usando el and, el round que es para redodear, la division y la potencia
                            if (($peso < 14) and ($altura < $valor1)){
                                $a= round($peso/pow($altura, 2));
                                echo "El peso correspondiente a su altura $a".'<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                        // esta condicion esta usando 2 xor, el round que es para redodear, and, la division y la potencia
                        if ((($longitud>46) xor ($longitud< 61)) and (($altura>$valor1) xor ($altura< 50))){
                            $a= round($peso/pow($altura, 2));
                            echo "El peso correspondiente a su altura $a".'<br />';
                        }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // esta condicion esta usando el and, el round que es para redodear, la division y la potencia
                            if (($peso > 61) and ($altura > 50)){
                                $a= round($peso/pow($altura, 2));
                                echo "EL peso correspondiente a su altura $a" .'<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // esta condicion esta usando el condicional No idéntico != y la multiplicacion
                            if (($peso * 0.025) != $comida){
                                $comi = $peso * 0.025;
                                echo "Su perro debe comer duariamente $comi (kg)".'<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // esta condicion esta usando Igual ==, division y miltiplicacion
                            if ($edad == 1){
                                $pal = ($peso/12) * 52;
                                echo "Su perro prodia alcanzar una altura de $pal".'<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // posee datos tipo texto y numeros entero
                            $arreglo1 = array($nombre, $cedula, $nombre_mascota, $altura, $peso, $edad, $a);
                            $arreglo2 = array($nombre, $cedula, $nombre_mascota, $a, $comi, $baño, $ejercicio);
                            $arreglo3 = array($nombre, $cedula, $nombre_mascota, $ejercicio, $comida, $baño, $altura);
                            $arreglo4 = array($altura, $peso, $edad, $ejercicio, $comida, $baño, $a);
                            // imprime el arreglo1 en el Elemento de la posicion 1
                            echo "Elemento del arreglo en la posición 1: ".$arreglo1[1].'<br />'; 
                                // imprime el arreglo2 en el Elemento de la posicion 0
                            echo "Elemento del arreglo en la posición 0: ". $arreglo2[0].'<br />';
                            // imprime el arreglo3 en el Elemento de la posicion 4
                            echo "Elemento del arreglo en la posición 4: ". $arreglo3[4].'<br />'; 
                            // imprime el arreglo4 en el Elemento de la posicion 6
                            echo "Elemento del arreglo en la posición 6: ". $arreglo4[6].'<br />'; 
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // inprime todos los Elementos del arreglo1 usando operadores de incremento
                            $array_num = count($arreglo1);
                            echo "Elementos de while:".'<br />';
                            $i = 0;
                            while ($i < $array_num) {
                                echo "$arreglo1[$i] ";
                                $i++;  
                            }
                            
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // inprime todos los Elementos del arreglo2 usando operadores de incremento
                            echo 'Elementos de for:'.'<br />';
                            for($i = 0; $i < $array_num; ++$i) {
                                echo "$arreglo2[$i] ";
                            }
                            
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // inprime todos los Elementos del arreglo3 no usa operadores de incremento o decremento
                            echo 'Elementos del foreach:' .'<br />';
                            foreach($arreglo3 as $posicion)
                            {
                            echo"$posicion ";
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            echo 'Elementos del arreglo asociativo' .'<br />';

                            $arreglo5 = array(
                                'usuario' => array('nombre' => $nombre, 'cedula' => $cedula, 'nombre_mascota' => $nombre_mascota),
                                'mascota' => array('nombre_mascota' => $nombre_mascota, 'altura' => $altura, 'peso' => $peso),
                                'mascota1' => array('edad' => $edad, 'longitud' => $longitud, 'ejercicio' => $ejercicio),
                                'mascota2' => array('nombre_mascota' => $nombre_mascota, 'peso' => $peso, 'edad' => $edad),
                                'mascota3' => array('nombre_mascota' => $nombre_mascota, 'comida' => $comida, 'baño' => $baño)
                            );
                            // si se hiciera con un for deberia emprearse 4 for anillados para poder imprimirlos lo cual haria le codigo mas largo
                            foreach ($arreglo5 as $item){
                                foreach($item as $indice => $ide){
                                    echo "$ide " ;
                                }
                                echo '<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                            // el switch te indica de que tamaño de raza pertenece la mascota 
                            if($altura < $valor1){
                                $i=0;
                            }elseif($altura>$valor1){
                                if($altura< 50){
                                    $i=1;
                                }
                            }else{
                                if($altura)
                                $i=2;
                            }
                            switch ($i) {
                                case 0:
                                    echo "Su perro es de raza pequeña".'<br />';
                                    break;
                                case 1:
                                    echo "Su perro es de raza mediana".'<br />';
                                    break;
                                case 2:
                                    echo "Su perro es de raza grande".'<br />';
                                    break;
                                default:
                                echo "Su perro no esta clasificado".'<br />';
                            }
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                        // la funsion te dice si el peero esta obeso o no
                            echo "Si tu perro pesa = ".jeje($peso)." (kg) esta obeso".'<br />';
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                        ?>
                    </label>
                </div>
                <div class="arriba">
                    <label class="la">
                        <?php
                        ?>
                    </label>
				</div>

			</form>
		</div>
	</div>

	
</body>
</html>

<!-- require es idéntico a include excepto que en caso de fallo producirá 
un error fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene 
el script mientras que include sólo emitirá una advertencia (E_WARNING)
lo cual permite continuar el script. -->