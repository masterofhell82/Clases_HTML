<?php
require("config.php");

//conectar con la base de datos
$conn = coneccion();

// verificar que si llegue el parámetro que le estas enviando
if (isset($_REQUEST["condicion"])) {
    // si llega la condicion, y es igual a la condicion que necesitas para entrar ejecuta la función y devuelve el resultado
    switch ($_REQUEST["condicion"]) {
        case "ejecutarFuncion":
            //editar
            funcionPHP();
            break;
        case "traerDatos":
            traerDatos();
    }
    exit();
}


function traerDatos()
{
    global $conn;
    $query = "SELECT * FROM ldg_users ORDER BY id DESC";
    $result = $conn->query($query);
    while ($res = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $res['name'] . "</td>";
        echo "<td>" . $res['age'] . "</td>";
        echo "<td>" . $res['email'] . "</td>";
        echo "<td>
                <button href='edit.php?id=" . $res["id"] . "'>Edit</button> | 
                <a href='delete.php?id=" . $res["id"] . "' onClick='confirm('Are you sure you want to delete?')'>Delete</a></td>";
        echo "<tr>";
    }
}
