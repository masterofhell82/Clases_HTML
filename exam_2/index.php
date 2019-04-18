<?php
include('header.php')
//include inserta en nuestro programa un código procedente de otro archivo, en caso de que dicho archivo no exista o tenga errores en su interior nuestro programa mostrará un  warning pero seguirá funcionando.

?>


<body>
    <?php
    require('container.php')
    //Require

    //Funciona de manera similar a include, pero en este caso, si el archivo no existe o contiene errores, nuestro programa no funcionará y obtendremos un fatal error
    ?>

</body>

</html>