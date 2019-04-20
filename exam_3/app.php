<?php
require("config.php");

//conectar con la base de datos
$conn = coneccion();

// verificar que si llegue el parámetro que le estas enviando
if (isset($_POST["condicion"])) {
    // si llega la condicion, y es igual a la condicion que necesitas para entrar ejecuta la función y devuelve el resultado
    switch ($_POST["condicion"]) {
        case "traerDatos":
            traerDatos();
            break;
        case "editarDatos":
            editarDatos($_POST["id"], $_POST["name"], $_POST["age"], $_POST["email"]);
            break;
    }
    exit();
}


function traerDatos()
{
    global $conn;

    $query = "SELECT * FROM ldg_users ORDER BY id DESC";
    $result = $conn->query($query);
    while ($res = $result->fetch_assoc()) {
        echo "<tr id='user" . $res['id'] .  "'>";
        echo "<td class='name'>" . $res['name'] . "</td>";
        echo "<td class='age'>" . $res['age'] . "</td>";
        echo "<td class='email'>" . $res['email'] . "</td>";
        echo "<td>
                <button class='btn-edit' onclick='editar(" . $res['id'] . ")'>Edit</button> | 
                <button class='btn-delete'><a href='delete.php?id=" . $res["id"] . "' onClick='confirm('Are you sure you want to delete?')'>Delete</a></button>
              </td>";
        echo "<tr>";
    }
}

function editarDatos($id, $name, $age, $email)
{
    global $conn;

    $query = "UPDATE ldg_users SET name='$name',age='$age',email='$email' WHERE id=$id";
    $result = $conn->query($query);
    if ($result) {
        echo "true";
    } else {
        echo "false";
    }
}
