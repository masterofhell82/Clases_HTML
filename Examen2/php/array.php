<?php
/*opcion 1, para realizar un array*/
$nombre = ['Pedro', 'Maritza','lorena','Sebastian','Mercedez','Robert'];                                   /*datos tipo string*/
$apellido = ['Perez','Rondon',' Coronil','Loreto','Gomez','Mendoza'];                                      /* datos tipo string*/
$edad = [39,35,12,25,17,57];                                                                               /* datos tipo numérico*/
$ocupacion = ['Mecanico','ama de casa','estudiante','Ing.civil','estudiante bachillerato','Medico'];       /* datos tipo string*/

echo '<br> Nombre: ' . $nombre[1];                                             /*imprime el índice 1 */
echo '<br> Apellido: ' . $apellido[0];                                      /*imprime el índice 0 */
echo '<br> Edad: ' . $edad[4];                                              /*imprime el índice 4 */
echo '<br> Ocupacion:' . $ocupacion[5];                                      /*imprime el índice 6 */

/* Opcion 2, para realizar un array */
$name = array('Pedro', 'Maritza','lorena','Sebastian','Mercedez','Robert');
$Apellido = array('Perez','Rondon',' Coronil','Loreto','Gomez','Mendoza');
$Edad = array(39,35,12,25,17,57);
$Tipo_de_integrante = array('padre','madre','nieta','hijo','hija','abuela');

echo '<br> Nombre:' .$name[0];                                                         /*imprime el índice 1 */
echo '<br> Apellido:' . $Apellido[1];                               /*imprime el índice 0 */
echo '<br> Edad: ' . $Edad[5];                                /*imprime el índice 4 */
echo '<br> Tipo de integrante: ' . $Tipo_de_integrante[3];        /*imprime el índice 6 */

/* Usar el ciclo while, para recorrer el arreglo opcio 1 */
$i= 0;
while ($i <= 4) {
    echo '<br> El apellido es: '.$Apellido[$i];
    $i++;
/* Se repetira la condicion partiendo desde cero hasta la posicion 4*/
/* incrementamos para evitar un ciclo infinito*/

/*Ciclo for */
for ($i=0; $i <=4 ; $i++) { 
    echo '<br> Integrante Familiar:  '.$Tipo_de_integrante[$i];

/*ciclo foreach */
/* se le indica el arreglo ,Tomara el valor que se declaraS que colocare bajo */
/*foreach ($Edad as $valor) {
    $valor = $Edad;
    echo '<br> La edad es: '.$valor;
    /* segun el el numero de ciclos mostrara el valor */
}
}

/*Arreglo asociativo */
$Tipo_de_integrante[0]=[
    'sexo' => "masculino",
    'tipo' =>'padre',
    'ocupacion' =>'mecanico'
];
$Tipo_de_integrante[1]=[
    'sexo' => "femenino",
    'tipo' =>'madre',
    'ocupacion' =>'ama de casa'
];
$Tipo_de_integrante[2]=[
    'sexo' => "masculino",
    'tipo' =>'hijo',
    'ocupacion' =>'Ing. civil'
];
$Tipo_de_integrante[3]=[
    'sexo' => "femenino",
    'tipo' =>'nieta',
    'ocupacion' =>'estudiante'
];
$Tipo_de_integrante[4]=[
    'sexo' => "femenino",
    'tipo' =>'abuela',
    'ocupacion' =>'Medico'
];
$Tipo_de_integrante[5]=[
    'sexo' => "masculino",
    'tipo' =>'hijo',
    'ocupacion' =>'Medico'
];
/*Imprimiendo el ciclo foreach*/
foreach($Tipo_de_integrante as $valor){
   
    echo '<hr> Tipo de sexo:  ' . $valor['sexo'].'</hr>';
    echo '<br> Tipo de integrante familiar:  ' . $valor['tipo'].'</br>';
    echo ' Cual es su ocupacion:  ' . $valor['ocupacion'];
}
/* Es sencillo, recorrer con foreach el array sin necesidad de conocer el tamaño del mismo, */
/* ademas con el ciclo for es necesario declarar una variable i*/

/* sentencia switch */
$Edad = '39';
switch($Edad){
    case '39':
    echo '<br>La edad de Pedro Perez es: '. $Edad;
    break;
case '15':
    echo 'La edad de Maritza Rondon es: ' . $Edad;
    break;
    case '12':
    echo 'La edad de Lorena Coronil es: ' . $Edad;
    break;
default:
    echo ' no es válida la opcion';
    break;
}
/* */








?>