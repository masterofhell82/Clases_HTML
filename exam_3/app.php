<?php
//requerimos el archivo config para llamar a la funcion coneccion() la cual devuelve el objeto de conexion 
require("config.php");

//conectar con la base de datos
$conn = coneccion();

// verificar que lleguen por post los datos enviados desde app.js
//la variable $_POST["condicion"] indica al switch desde que funcion se esta llamando en app.js y depediendo de esto se hara el proceso indicado
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

//todas las funciones siguen un mismo patron, por ende no se redundara al documentar.

//todas las funciones son llamadas desde el swtich el cual se encarga de indicar de donde viene el llamado

//esta funcion hace un select a la base de datos
function traerDatos()
{
    //usamos global $conn para usar la variable global que almacena al objeto msqli
    global $conn;

    $query = "SELECT * FROM ldg_users ORDER BY id ASC"; //trae todos los datos de la tabla de manera ascendiente
    $result = $conn->query($query); //hacemos la consulta y el resultado lo almacenamos en result
    while ($res = $result->fetch_assoc()) { //en res se iteraran las filas de la tabla
        if ($res["id"] > 0) {
            //se imprime una fila para cada registro de la tabla
            echo "<tr id='user" . $res['id'] .  "'>"; //almacena el id de cada registro
            echo "<td scoped=row>" . $res['id'] . "</td>";
            echo "<td class='name'>" . $res['name'] . "</td>"; //almacena el nombre de cada registro
            echo "<td class='age'>" . $res['age'] . "</td>"; //almacena la edad de cada registro
            echo "<td class='email'>" . $res['email'] . "</td>"; //almacena el email de cada registro
            echo "<td>
                <button class='btn-edit btn btn-primary' onclick='editarUsuario(" . $res['id'] . ")'><span>Editar </span><i class=' fas fa-user-edit'></i></button> 
                <button class='btn-delete btn btn-danger' onclick='eliminarUsuario(" . $res["id"] . ")'><span>Eliminar </span><i class=' fas fa-user-minus'></i></button>
              </td>"; //botones para añadir y eliminar registros que al hacer click llaman a funciones en javascript
            echo "<tr>";
        }
    }
}

function crearUsuario($name, $age, $email)
{
    global $conn;

    $query = "INSERT INTO ldg_users(name,age,email) VALUES('$name','$age','$email')"; //insertarmos los valores dados por el usuario y obtenidos mediante $_POST
    $result = $conn->query($query); //ejecutar la consulta y si es exitosa se imprime true y si no se imprime false, lo cual despues en javascript sera utilizado para mostrar al usuario que esta sucediendo
    if ($result) {
        echo "true";
    } else {
        echo "false";
    }
}

function editarUsuario($id, $name, $age, $email)
{
    global $conn;

    $query = "UPDATE ldg_users SET name='$name',age='$age',email='$email' WHERE id=$id"; //actualizamos el campo que tenga el id recibido por $_POST
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

    $query = "DELETE FROM ldg_users WHERE id=$id"; //eliminamos el campo que tenga el id recibido por $_POST
    $result = $conn->query($query);
    if ($result) {
        echo "true";
    } else {
        echo "false";
    }
}
