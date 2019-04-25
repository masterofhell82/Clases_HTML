<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "css/require.css">
    <title>Planilla</title>
</head>

<header class="form-header">
    <h1 class="form-title">Bienvenido al Centro de Salud M.A.</h1>
</header>


<body>
<div class= "contenedor">
    <h2 class = "form-title2">Planilla para la realización de la consulta</h2>
    <section>
        <h3><p> Debe llenar los siguientes campos:</p></h3>
            <?php  // utilicé require ya que es lo normal para incluir los archivos que son necesarios para el correcto funcionamiento de la aplicación.
                require('variables.php');
            ?>
    </section>

    <section>
        <h3><p> Por favor responda las siguientes preguntas:</p></h3>
        <p>¿Es mayor de edad?</p>  
            <?php //primera condición. Si el número colocado en la variable edad es mayor o igual que 18 entonces se imprime en pantalla una respuesta afirmativa. Si el número el menor que 18 ocurre que imprime una respuesta negativa.
              if($edad>=18){
                echo 'Si. </br>';
            }else{
                echo 'No. </br>';
            }
            ?>
           
           <p>¿Tiene alergias hacia algún medicamento?</p>
            <?php //segunda condición. Guiándose por lo que esta en la variable alergias, si es verdadero se imprime una respuesta afirmativa. En caso de ser falso se imprimirá una respuesta negativa.
            if($alergias){
                echo ' Si, si tengo. </br>';
            }else{
                echo ' No, no tengo. </br>';
            }
            ?>

            <p>¿Es diabético?</p>
            <?php  //tercera condición. Guiándose por lo que esta en la variable diabetes, si es verdadero se imprime una respuesta afirmativa. En caso de ser falso se imprimirá una respuesta negativa.
            if($diabetes){
                echo ' Si, si lo soy. </br>';
            }else{
                echo ' No, no lo soy. </br>';
            }
            ?>

            <p>¿Sufre de la tensión?</p>
            <?php  //cuarta condición. Guiándose por lo que esta en la variable tension, si es verdadero se imprime una respuesta afirmativa. En caso de ser falso se imprimirá una respuesta negativa.
            if($tension){
                echo ' Si. </br>';
            }else{
                echo ' No. </br>';
            }
            ?>

            <p>¿Sufre del Síndrome del Intestino Irritable?</p>
            <?php  //quinta condición. Guiándose por lo que esta en la variable colon, si es verdadero se imprime una respuesta afirmativa. En caso de ser falso se imprimirá una respuesta negativa.
            if($colon){
                echo ' Si. </br>';
            }else{
                echo ' No. </br>';
            }
            ?>
    </section>

    <section>
    <h3>A continuación se le calcurará su IMC:</h3>
    <h4>El índice de masa corporal es la relación existente entre el peso y la altura. Sirve para identificar el sobrepeso y la obesidad en niños, jóvenes y adultos.</h4>
<div class= "imc">
<?php
    
//Usamos los operadores aritméticos para calcular el índice de masa corporal 
$IMC = ($peso / ($altura * $altura)) * 10000;

echo 'IMC= ' . $IMC . '</br>';

//Usamos operadores de comparación en el siguiente condicional 1
if($IMC<18.5){
    echo '<br> Usted tiene un peso insuficiente </br>';
}else{
    echo '<br> Usted no tiene un peso insuficiente </br>';
}

//Usamos operadores lógicos y de comparación en el siguiente condicional 2
if($IMC>=18.5 and $IMC<=24.9){
    echo '<br> Usted tiene un peso normal </br>';
}else{
    echo '<br> Usted no tiene un peso normal </br>';
}

//Usamos operadores lógicos y de comparación en el siguiente condicional 3
if($IMC>=25 and $IMC<=26.9){
    echo '<br> Usted tiene un sobrepeso de grado I </br>';
}else{
    echo '<br> Usted no tiene un sobrepeso de grado I </br>';
}

//Usamos operadores lógicos y de comparación en el siguiente condicional 4
if($IMC>=27 and $IMC<=29.9){
    echo '<br> Usted tiene un sobrepeso de grado II </br>';
}else{
    echo '<br> Usted no tiene un sobrepeso de grado II </br>';
}

//Usamos operadores lógicos y de comparación en el siguiente condicional 5
if($IMC>=30 and $IMC<=34.9){
    echo '<br> Usted tiene obesidad tipo I </br>';
}else{
    echo '<br> Usted no tiene obesidad tipo I </br>';
}

?>
</div>
    </section>    

    <section>
        <h3>Aquí se muestra lo que está en los arreglos:</h3>
    <?php
//Primera manera de hacer un arreglo:
$nombre = ['Santiago', 'Carolina','Sebastián','Alicia','Matías','Claudia'];  //posee datos tipo string
$apellido = ['Gutierrez','Alvarez','Briceño','Chacón','Colmenares','Fernández'];  //posee datos tipo string
$ocupacion = ['contador','abogada','arquitecto','diseñadora','estudiante','veterinaria'];  //posee datos tipo string
$edad = [51,44,38,25,17,40];  //posee datos tipo numérico

//Segunda manera de hacer un arreglo:
//$nombre = array('Santiago','Carolina','Sebastián','Alicia','Matías','Claudia');
//$apellido = array('Gutierrez','Alvarez','Briceño','Chacón','Colmenares','Fernández');
//$ocupacion = array('contador','abogada','arquitecto','diseñadora','estudiante','veterinaria');
//$edad = array(51,44,38,25,17,40);

echo $nombre[1];  //imprime el índice 1 correctamente

echo '</br>' . $apellido[0]; //imprime el índice 0 correctamente

echo '</br>' . $ocupacion[4]; //imprime el índice 4 correctamente

echo '</br>' . $edad[6]; //da error ya que no existe un índice 6

    ?>
    </section>

    <section>
        <h3>Esta es la lista de pacientes de hoy:</h3>
    <?php
//Este es el ciclo while:
//Lo que hace es tomar el arreglo nombre y repite la acción tantas veces se cumple la condición que está adentro del while. Entonces imprimirá en pantalla cada índice del arreglo, comenzando por 0. Por último, se incremeta el valor que está en la variable i y se repite el proceso de nuevo.
$i=0;
while($i<=5){
    echo '<br>'. $nombre[$i];
    $i++; //se tiene que colocar este operador de incremento ya que sin eso, el ciclo sería infinito
}

//Este es el ciclo for:
//Se declara la variable, luego la condición y después el incremento de esa variable
//for($i=0;$i<=5;$i++){
    //echo '<br>' . $nombre[$i];
//}

//Este es el ciclo foreach:
//Se declara el arreglo y luego otra variable, en este caso valor. Por cada ciclo valor va tomar cada índice del arreglo. No se necesita colocar ningun incremento.
//foreach($nombre as $valor){
    //echo '<br>' . $valor;
//}
    ?>
    </section>

<section>
    <h3>Horarios de los especialistas:</h3>

<?php
//Arreglos asociativos
$doctor[0]=[
    'hora' => "6:00am",
    'turno' =>'diurno',
    'especialista' =>'cardiología'
];
$doctor[1]=[
    'hora' =>'7:00am',
    'turno' =>'diurno',
    'especialista' =>'traumatología'
];
$doctor[2]=[
    'hora' =>'8:00am',
    'turno' =>'diurno',
    'especialista' =>'dermatología'
];
$doctor[3]=[
    'hora' =>'9:00am',
    'turno' =>'diurno',
    'especialista' =>'oncología'
];
$doctor[4]=[
    'hora' =>'10:00am',
    'turno' =>'diurno',
    'especialista' =>'urología'
];

//Imprimiendo en pantalla usando el ciclo foreach
foreach($doctor as $valor){
    echo '<br>' . $valor['hora'];
    echo '<br>' . $valor['turno'];
    echo '<br>' . $valor['especialista'];
}

//La diferencia está en que, usando un ciclo for, tuvieramos que dejar indicada una variable cualquiera, una condición y la variable en incremento.
?>
</section>

<section>
<h3>Aquí se muestra la sentencia switch:</h3>
    <?php 
$ocupacion = 'contador';
switch($ocupacion){
    case 'contador':
    echo 'La ocupación de Santiago Gutierrez es: '. $ocupacion;
    break;
case 'arquitecto':
    echo 'La ocupación de Sebastián Briceño es: ' . $ocupacion;
    break;
    case 'veterinaria':
    echo 'La ocupación de Claudia Fernández es: ' . $ocupacion;
    break;
default:
    echo 'Opción no válida';
    break;
}
    ?>
<section>   
<h3>Recordatorio:</h3> 
<?php //función sin parámetro
function citas(){
return 'Para poder ver al especialista que necesitas, debes de agendar una cita. Pacientes sin cita previa, no serán atendidos.';
}

echo citas();
?>
</section>

<section>
<h3>Promedio:</h3>

<?php  //función con parámetro usando los datos almacenados en la variable edad. Se calcula un promedio de todas las edades de los pacientes que realizaron la consulta hoy.
function promedio($n1,$n2,$n3,$n4,$n5,$n6){
    return ($n1+$n2+$n3+$n4+$n5+$n6)/6;
}
echo promedio(51,44,38,25,17,40);
?>
</section>
</div>
    
</body>
</html>