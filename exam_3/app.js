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

function crearUsuario(id) {
  var name = prompt("inserte el nombre");
  var age = prompt("inserte la edad");
  var email = prompt("inserte el correo", "text@example.com");
  if (name != null && age != null && email != null) {
    $.ajax({
      // aqui va la ubicación de la página PHP
      url: "app.php",
      type: "POST",
      dataType: "html",
      data: {
        condicion: "crearUsuario",
        name: name,
        age: age,
        email: email
      },
      success: function(resultado) {
        if (resultado == "true") {
          traerDatos();
          alert("usuario creado con exito");
        } else {
          alert("fallo al editar");
        }
      }
    });
  } else if (name == null) {
    alert("debe escribir un nombre");
  } else if (age == null) {
    alert("debe escribir una edad");
  } else if (email == null) {
    alert("debe escribir un email");
  }
}

function editarUsuario(id) {
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
        condicion: "editarUsuario",
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

function eliminarUsuario(id) {
  $.ajax({
    // aqui va la ubicación de la página PHP
    url: "app.php",
    type: "POST",
    dataType: "html",
    data: {
      condicion: "eliminarUsuario",
      id: id
    },
    success: function(resultado) {
      if (resultado == "true") {
        traerDatos();
        alert("eliminación exitosa");
      } else {
        alert("fallo al eliminar");
      }
    }
  });
}
