<?php

 $link = 'mysql:host=localhost;dbname=mg_libros_base_datos';
 $usuario = 'root';
 $password = '';

 try{
     $pdo = new PDO($link,$usuario,$password); 

     //echo 'Conectado';

     //foreach($pdo->query('SELECT * FROM `mag_libros_tabla`') as $fila) {
        //print_r($fila);
     //}

 }catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}