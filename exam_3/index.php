<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PHP</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- estilos locales -->
    <link rel="stylesheet" href="style.css" />
    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- js local -->
    <script src="app.js"></script>
</head>

<body>
    <!-- barra de navegacion -->
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <!-- titulo centrado -->
        <h1 class="mx-auto text-light">CRUD PHP</h1>
    </nav>
    <!-- contenedor principal -->
    <div class="container crud-table">
        <!-- boton de crear usuario a la derecha -->
        <div class="clearfix">
            <div class="form-inline float-right">
                <!-- cuando se pulsa el boton se llama a crearUsuario() -->
                <button class="btn btn-success" onclick="crearUsuario()">
                    <!-- icono de añadir -->
                    <i class="fas fa-user-plus"></i><span class="ml-1">Añadir usuario</span>
                </button>
            </div>
        </div>
        <!-- tabla para mostrar los datos bordeada y con margin top 2em -->
        <table class="table-users table-bordered table mt-2">
            <!-- cabecera de la tabla -->
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Edad</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <!-- en este elemento tbody la funcion de javascript cargarDatos() se encargara de insertar los datos en la tabla-->
            <tbody>
            </tbody>
        </table>
    </div>
</body>

</html>