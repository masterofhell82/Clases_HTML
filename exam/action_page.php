<!DOCTYPE html>
<html lang="es">
<head>
    <title>Datos</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Examen</title>
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <!-- jquery -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <!-- popper -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <!-- estilos locales -->
    <link rel="stylesheet" href="css/style2.css" />
    <!-- bootstrap js -->
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!-- js local -->
    <script src="js/app.js"></script>
</head>
<body>
    <!-- trayendo datos desde el formulario y almacenandolos en variables php -->
    <?php
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
    ?>    
   
    <div class="info">
        <h1>Datos del Formulario</h1>
        <!-- tabla para mostrar los datos -->
        <table class="table table-light table-bordered">
              <thead class="thead-dark">
                    <tr>
                        <th scope="col">Campo</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <th scope="row">Nombre</th>
                    <td><?= $name  ?></td> <!-- imprimiendo variable con el dato traido desde el formulario -->
                    </tr>
                    <tr>
                    <th scope="row">email</th>
                    <td><?= $email  ?></td> <!-- imprimiendo variable con el dato traido desde el formulario -->
                    </tr>
                    <tr>
                    <th scope="row">telefono</th>
                    <td><?= $phone  ?></td> <!-- imprimiendo variable con el dato traido desde el formulario -->
                </tr>
            </tbody>
        </table>
        <!-- centrando el boton y dandole color con clases de bootstrap -->
        <div class="d-flex justify-content-center">
            <button class="btn btn-light"><a href="examen.html">Volver al Formulario</a></button></p>
        </div>
    </div>
</body>

</html>

