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
        case "crearUsuario":
            crearUsuario($_POST["name"], $_POST["age"], $_POST["email"]);
            break;
        case "editarUsuario":
            editarUsuario($_POST["id"], $_POST["name"], $_POST["age"], $_POST["email"]);
            break;
        case "eliminarUsuario":
            eliminarUsuario($_POST["id"]);
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
        if ($res["id"] > 0) {
            echo "<tr id='user" . $res['id'] .  "'>";
            echo "<td class='name'>" . $res['name'] . "</td>";
            echo "<td class='age'>" . $res['age'] . "</td>";
            echo "<td class='email'>" . $res['email'] . "</td>";
            echo "<td>
                <button class='btn-edit' onclick='editarUsuario(" . $res['id'] . ")'>Edit</button> | 
                <button class='btn-delete' onclick='eliminarUsuario(" . $res["id"] . ")'>Delete</button>
              </td>";
            echo "<tr>";
        }
    }
}

function crearUsuario($name, $age, $email)
{
    global $conn;

    $query = "INSERT INTO ldg_users(name,age,email) VALUES('$name','$age','$email')";
    $result = $conn->query($query);
    if ($result) {
        echo "true";
    } else {
        echo "false";
    }
}

function editarUsuario($id, $name, $age, $email)
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



function eliminarUsuario($id)
{
    global $conn;

    $query = "DELETE FROM ldg_users WHERE id=$id";
    $result = $conn->query($query);
    if ($result) {
        echo "true";
    } else {
        echo "false";
    }
}
