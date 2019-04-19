<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</head>

<body>
  <a id=link href="#" onclick="ir()">Ejecutar función PHP</a>
  <table class="table table-striped mt-2 table-users">
    <thead>
      <tr>
        <th>Nombres</th>
        <th>Edad</th>
        <th>Correo</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
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
</body>

</html>