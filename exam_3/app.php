<?php
$link='mysql:host=localhost;dbname=da_examen3';//variable con la direccion de la BDD para metodo PDO
$user='root';//usuario mysql
$password='root';//contraseña mysql
try {//traer de la BDD
    $mbd = new PDO($link,$user,$password);//variable donde se establece la conexcion a la BDD, tiene variable ya mensionadas
}  catch (PDOException $e) {//mensaje de error cuando no se conecte a la BDD por PDO
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
$leer='SELECT * FROM dja_prueba';//variable con sentencia selecionar todo de la tabla
$gsent=$mbd->prepare($leer);//variable donde se prepara la variable anterior con la BDD
$gsent->execute();//ejecutar la variable
$resultado = $gsent->fetchAll();//guardar en esta variable todos los datos 
if($_POST){//Si se utiliza metodo POST
    $Nombre=$_POST['nom'];//nombre por POST
    $Apellido=$_POST['ape'];//apellido por POST
    $CI=$_POST['ci'];//ci por POST
    $agregar = 'INSERT INTO dja_prueba (Nombre,Apellido,CI) VALUES (?,?,?)';//variable con sentencia insertar en la tabla con sus datos de tabla en espesifico y orden. evalua en los "?" ya que son una manera de darle seguridad al codigo
    $s_agregar = $mbd->prepare($agregar);//variable donde se prepara la variable anterior con la BDD
    $s_agregar->execute(array($Nombre,$Apellido,$CI));//ejecutar la variable en un array los cuales son los componentes necesarios para agregar un nuevo elemento, no se usa "id" ya que es auto incrementable
    header('location:index.php');//manda directamente a la pagina principal, asi no se tiene que recargar la pagina
}
if ($_GET) {//Si se utiliza metodo GET
    $id=$_GET['id'];//id por POST
    $leer_2='SELECT * FROM dja_prueba WHERE id=?';//variable con sentencia selecionar de la tabla cuado tiene un id espesifico
    $gsent_2=$mbd->prepare($leer_2);//variable donde se prepara la variable anterior con la BDD
    $gsent_2->execute(array($id));//ejecutar la variable en un array el cual identifica un fila en espesifico
    $resultado_2 = $gsent_2->fetch();//guardar en esta variable los datos con el id espesifico
}
