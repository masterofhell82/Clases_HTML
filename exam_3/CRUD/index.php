
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
  <!-- se crea un formulario para mandar los datos y una tabla para mostrar los datos traidos de la base de datos-->
  <form action="create.php" method="post">
    <table width="50%" border="0" align="center">
      <!-- este es el encabezado mostrando titulo y los titulos de las comlumnas   -->
    	<thead>
        <tr>
          <th class="fila" scope="col" colspan="6" id="titulo">VALET PARKING</th>
        </tr>
      
        <tr>
          <th class="fila" scope="col" header="titulo">CI</th>
          <th class="fila" scope="col" header="titulo">Nombre del Carro</th>
          <th class="fila" scope="col" header="titulo">Marca</th>
          <th class="fila" scope="col" header="titulo">Modelo</th>
          <th class="fila" scope="col" header="titulo">Placa</th>
          <th class="fila" scope="col" header="titulo">Lugar De Estacionamiento</th>
          <td class="sin">&nbsp;</td>
          <td class="sin">&nbsp;</td>
          <td class="sin">&nbsp;</td>
        </tr>  
      </thead>
      <!-- este codigo php unido con html trae los datos de la base de datos y los mustra en su debida columna y fila-->
      <!-- ademas crea unos botones Actualizar y Borrar para cada uno de los registro que se imprimen en pantalla-->
      <?php
        require("Conexionbd.php");
        $consulta="SELECT * FROM gap_datos_tabla";
        
        if($resultado=mysqli_query($miConexion,$consulta)){
            while ($registro=mysqli_fetch_assoc($resultado)){

      ?>
        <input type="hidden" name="id" id="id" value="<?php echo $registro["id"]?>">
        <tr>
          <td class="fila"><?php echo $registro["ci"]?></td>
          <td class="fila"><?php echo $registro["nombre_carro"]?></td>
          <td class="fila"><?php echo $registro["marca"]?></td>
          <td class="fila"><?php echo $registro["modelo_carro"]?></td>
          <td class="fila"><?php echo $registro["placa"]?></td>
          <td class="fila"><?php echo $registro["lugar_estacionamiento"]?></td>
          <td class="bot"><a href="delete.php?id=<?php echo $registro["id"]?>"><input type="button" name="Eliminar" id="eliminar" value="Borrar"></a></td>
          <td class="bot"><a href="update.php?id=<?php echo $registro["id"]?>"><input type="button" name="actualizar" id="actualizar" value="Actualizar"></a></td>
        </tr>  

      <?php
            }
        } 
        mysqli_close($miConexion);   
      ?>

      <!-- se crea los inputs del formulario para insertar datos en la base de datos y un boton para insertar los mismos -->    
      <tr>
        <td><input type="number" min="0" name="CI" size="10" class="centrado" placeholder="CI" required></td>
        <td><input type="text" maxlength="50" name="Nombre" size="10" class="centrado" placeholder="Nombre" required></td>
        <td><input type="text" maxlength="50" name="Marca" size="10" class="centrado" placeholder="Marca" required></td>
        <td><input type="text" maxlength="50" name="Modelo" size="10" class="centrado" placeholder="Modelo" required></td>
        <td><input type="text" maxlength="50" name="Placa" size="10" class="centrado" placeholder="Placa" required></td>
        <td><input type="text" maxlength="6" name="lde" size="10" class="centrado" placeholder="lde" required></td>
        <td class="bot"><input type="submit" name="Insertar" id="cr" value="Insertar"></td>
      </tr> 

    </table>
  </form>      
  <p>&nbsp;</p>
</body>
</html>
