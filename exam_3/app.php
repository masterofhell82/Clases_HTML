
<?php

$link='mysql:host=localhost;dbname=da_cine_base_de_datos';
$usuario='root';
$pass='root';

try{

    $POD=new PDO($link,$usuario,$pass);
    //echo 'Conectado';
    //foreach($POD->query('SELECT * FROM `dca_peliculas_tabla` LIMIT 0 , 30') as $fila) {
    //    print_r($fila);
    //}

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>