<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <?php
    //variable de conexion
    $con = mysqli_connect("localhost","root","","verowtattos") or die("error en la conexxion");
    
    ?>
<head>
    <meta charset="UTF-8">
    <title>VerowTATTOS</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/titulos.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <script type="text/javascript" src="../js/datos.js"></script>
    
    <!letra de google fonts para el menu>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <! icono de desplazamiento para el menu>
    <link rel="stylesheet" href="../css/fontello.css">
    <title>VerowTTATOS</title>
</head>

<body>
	
    <!LISTA DEL MENU DE NAVEGACION>
    <div class="navegacion">
    <nav>
    <ul>
    <!lista del menu y enlaces>
        <li><a href="../index.php">Inicio <span class="icon icon-up-dir"></span></a></li>
        <li><a href="../html/Nosotros.php">Nosotros <span class="icon icon-up-dir"></span></a></li>
        <li>
            <a href="#">Contactos <span class="icon icon-up-dir"></span></a>
            <!submenu>
        <div class="submenu">
            <div class="submenu-items">
            <p><a href="../html/Telefonos.php">Telefonos</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="../html/Correos_electronicos.php">Correos Electronicos</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="https://www.facebook.com/iTattos/" target="new">Redes sociales</a></p>
            </div> 
            <div class="submenu-items">
            <p><a href="../html/Formulario.php" >Formulario</a></p>
            </div> 
            </div>    
            
        </li>
        
        <li><a href="../html/Direccion.php">Direccion <span class="icon icon-up-dir"></span></a></li>
    </ul>
    </nav>
    <!FIN DE LA LISTA DE NAVEGACION>
    <div>
        <h1> Informacion</h1>
            <h2>Por favor, deja tus datos para mayor informacion</h2>
            <br>
        <form method="POST" action="../html/Formulario.php">
            <label> Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre"><br/>
            <label> Email</label>
            <input type="text" name="correo" placeholder="Correo electronico"><br/>
            <label> Telefono</label>
            <input type="text" name="telefono" placeholder="Telefono"><br/>
            <label> Descripcion</label>
            <input type="text" name="descripcion" placeholder="Descripcion"><br/>
            <input type="submit" name="insert" placeholder="INSERTAR DATOS">
            
            
            <!--input type="submit" name="insert "onclick="verificar()" placeholder="INSERTAR DATOS"-->

           
        </form>    
    </div>    
    <?php
    
//recogiendo los campos de las variables declaradas
        if(isset($_POST['insert'])){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $descripcion = $_POST['descripcion'];

            $insertar= "INSERT INTO informacion (nombre,correo,telefono,descripcion) VALUES ( '$nombre' , '$correo' , '$telefono' , '$descripcion')";
            // ejectar consukta
            $ejecutar = mysqli_query($con, $insertar);
            //validcion
            if ($ejecutar){
                
                echo "<h3  Datos insertados correctamente</h3>";

            }
        }
    ?>
    <div style="text-align:center;">
    <br/>
    <table border-radius=5px, border=1>
        <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Descripcion</th>
        </tr>
        <?php
            $consulta = "SELECT * FROM informacion";

            $ejecutar = mysqli_query($con, $consulta);

            $i = 0;

            while ($fila = mysqli_fetch_array($ejecutar)){
                $id = $fila['id'];
                $nombre = $fila['nombre'];
                $correo = $fila['correo'];
                $telefono = $fila['telefono'];
                $descripcion = $fila['descripcion'];

                $i++;

            
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $correo; ?></td>
            <td><?php echo $telefono; ?></td>
            <td><?php echo $descripcion; ?></td>
            <td><a href="Formulario.php?modificar=<?php echo $id; ?>">Modificar</a></td>
            <td><a href="Formulario.php?eliminar=<?php echo $id; ?>">Eliminar</a></td>
        </tr>
            <?php } ?>
    </table>
            </div>
    <?php
    // incluir archivos
    if(isset($_GET['modificar'])){
        include("../html/modificar.php");
    
    }
    ?>
     <?php
    // incluir archivos
    if(isset($_GET['eliminar'])){
       
        $eliminar_id = $_GET['eliminar'];
        
        $eliminar = "DELETE FROM informacion WHERE id='$eliminar_id'";
       
        $ejecutar= mysqli_query($con, $eliminar);
        
        if($ejecutar){
            echo "<script>alert('Datos elminados!')</script>";
            echo "<script>window.open('../html/Formulario.php','_self')</script>";
        }

    }
    ?>
</body>
</html>