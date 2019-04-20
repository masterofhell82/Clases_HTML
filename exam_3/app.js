$(document).ready(traerDatos); //al estar listo el DOM traer los datos

//todas las funciones siguen un mismo patron, por ende no se redundara al documentar.

//Funcion que carga los datos y los actualiza
function traerDatos() {
  $.ajax({
    // aqui va la ubicación de la página PHP
    url: "app.php",
    //el metodo a utilizar para hacer el request
    type: "POST",
    //tipo de dato que se va a recibir
    dataType: "html",
    //php recibiria es $_POST["condicion"] el valor indicado, asi como este se puede enviar cualquier cantidad de datos via POST
    data: {
      //con esta condicion le indicaremos en un swich a php que funcion debe llamar
      condicion: "traerDatos"
    },
    //Si la solicitud es exitosa en el parametro "resultado" obtendremos el html preprocesado por php
    success: function(resultado) {
      //insertamos el resultado en la tabla
      $(".table-users tbody").html(resultado);
    }
  });
}

//funcion que crea el usuario
function crearUsuario() {
  //pedimos al usuario los datos que desea registrar
  var name = prompt("inserte el nombre");
  var age = prompt("inserte la edad");
  var email = prompt("inserte el correo", "text@example.com");

  //debido a que la tabla no permite almacenar valores nulos comprobamos si el usuario ingreso los datos
  if (name != null && age != null && email != null) {
    //si estan todos los datos hacemos el request via ajax
    $.ajax({
      url: "app.php",
      type: "POST",
      dataType: "html",
      data: {
        condicion: "crearUsuario",
        //dentro de los datos enviados via post mandamos el nombre la edad y el correo para que php los almacene en la base de datos
        name: name,
        age: age,
        email: email
      },
      success: function(resultado) {
        //si resultado devuelve true cargamos de nuevo los datos y le indicamos al usuario que ha sucedido
        if (resultado == "true") {
          traerDatos();
          alert("usuario creado con exito");
        } else {
          alert("fallo al editar");
        }
      }
    });
  }
  //en caso de que alguno de los campos sean vacios se lo indicamos al usuario para que sepa lo que debe hacer
  else if (name == null) {
    alert("debe escribir un nombre");
  } else if (age == null) {
    alert("debe escribir una edad");
  } else if (email == null) {
    alert("debe escribir un email");
  }
}

//recibe el id del usuario para poder identificarlo en la base de datos
function editarUsuario(id) {
  //creamos las variables tag para mostrar al usuario los que estan por defecto, asi ahorramos el tener que reescribir datos en dado caso que solo desees cambiar un solo campo.
  var nametag = $("#user" + id + " .name");
  var agetag = $("#user" + id + " .age");
  var emailtag = $("#user" + id + " .email");
  var name = prompt("inserte el nombre", nametag.html());
  var age = prompt("inserte la edad", agetag.html());
  var email = prompt("inserte el correo", emailtag.html());
  if (name != null && age != null && email != null) {
    $.ajax({
      url: "app.php",
      type: "POST",
      dataType: "html",
      data: {
        condicion: "editarUsuario",
        //le pasamos el id a php para que sepa que es lo que debe borrar en la base de datos
        id: id,
        name: name,
        age: age,
        email: email
      },
      success: function(resultado) {
        if (resultado == "true") {
          //actualizamos la tabla y le decimos al usuario lo sucedido
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

//usamos el id para el mismo proposito que en la funcion anterior, solo que esta vez eliminaremos el campo de la base de datos
function eliminarUsuario(id) {
  $.ajax({
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
