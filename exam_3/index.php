<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PHP</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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

    <?php
    require("app.php"); // require para que no se ejecute las proximas acciones, en caso de error o  de no existir el archivo
    ?>
</head>

<body>
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <h1 class="mx-auto text-light">CRUD PHP</h1>
    </nav>
    <div class="container crud-table">
        <div class="clearfix">
            <div class="form-inline float-right">
                <button class="btn btn-success">
                    <i class="fas fa-user-plus"></i><span class="ml-1">Añadir usuario</span>
                </button>
            </div>
        </div>
        <table class="table table-striped mt-2">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Edad</th>
                    <th>Correo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                    <td>juanito perez</td>
                    <td>28 años</td>
                    <td>prueba@test.com</td>
                    <td>
                        <button class="btn btn-primary">
                            Editar
                        </button>
                        <button class="btn btn-danger">
                            Eliminar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>