$(document).ready(traerDatos);
function traerDatos() {
  $.ajax({
    // aqui va la ubicación de la página PHP
    url: "app.php",
    type: "POST",
    dataType: "html",
    data: {
      condicion: "traerDatos"
    },
    success: function(resultado) {
      $(".table-users tbody").html(resultado);
    }
  });
}

function editar(id) {
  var nametag = $("#user" + id + " .name");
  var agetag = $("#user" + id + " .age");
  var emailtag = $("#user" + id + " .email");
  var name = prompt("inserte el nombre", nametag.html());
  var age = prompt("inserte la edad", agetag.html());
  var email = prompt("inserte el correo", emailtag.html());
  if (name != null && age != null && email != null) {
    $.ajax({
      // aqui va la ubicación de la página PHP
      url: "app.php",
      type: "POST",
      dataType: "html",
      data: {
        condicion: "editarDatos",
        id: id,
        name: name,
        age: age,
        email: email
      },
      success: function(resultado) {
        if (resultado == "true") {
          traerDatos();
          alert("actualizacion exitosa");
        } else {
          alert("fallo al editar");
        }
      }
    });
  } else if (name == null) {
    alert("debe escribir un nombre, o dejar el que esta por defecto");
  } else if (age == null) {
    alert("debe escribir una edad, o dejar el que esta por defecto");
  } else if (email == null) {
    alert("debe escribir un email, o dejar el que esta por defecto");
  }
}
