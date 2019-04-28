<?php
$link = 'mysql:host=localhost;dbname=vt_bebidas_base_de_datos';
$usuario = 'root';
$contraseña = '';
try{
    $pdo = new PDO($link,$usuario,$contraseña); 
  
    /*Ayuda para mostrar un query*/
    //echo 'Conectado'; 
    //foreach($pdo->query('SELECT * FROM `vdt_bebidas_tabla`') as $fila) {
    //   print_r($fila);
    //}
   
}catch (PDOException $e) {
   print "¡Error!: " . $e->getMessage() . "<br/>";
   die();
} 
?>
