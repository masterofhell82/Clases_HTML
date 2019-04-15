//al estar el documento cargado se asignan los handlers
$(document).ready(function() {
  $("#contact-form").submit(verificar); //al hacer click en enviar se llama a la funcion  verificar
  $("#cleaner").click(limpiar); //al hacer click en limpiar se llama a la funcion limpiar
});

//funcion handler para verificar los campos
function verificar(event) {
  //se comparan los valores de los inputs con una cadena vacia, si devuelve true se ejecutan los condicionales
  var nameCondition = $("#name").val() === "";
  var emailCondition = $("#email").val() === "";
  var phoneCondition = $("#phone").val() == "";

  if (nameCondition) {
    event.preventDefault(); // se cancela el comportamiento por defecto para que no se recague la pagina o se vaya a la siguiente
    //insertamos texto de alerta dentro de la etiqueta #nameError
    $("#nameError").html(
      "Debe escribir un nombre,este campo no puede quedar vacio."
    );
    $("#nameError").addClass("alert alert-danger"); //se añaden las clases de bootstrap para dar color rojo de alerta
    $("#nameError").show(); // hacemos display: block; para que se muestre la alerta
    //TODO validate email and phone
  } else {
    $("#nameError").hide(); //si el campo esta lleno escondemos la alerta
  }
  //se cumple el mismo patron del condicional anterior
  if (emailCondition) {
    event.preventDefault();
    $("#emailError").html(
      "Debe escribir un email,este campo no puede quedar vacio."
    );
    $("#emailError").addClass("alert alert-danger");
    $("#emailError").show();
  } else {
    $("#emailError").hide();
  }
  //se cumple el mismo patron del condicional anterior
  if (phoneCondition) {
    event.preventDefault();
    $("#phoneError").html(
      "Debe escribir un numero de telefono,este campo no puede quedar vacio."
    );
    $("#phoneError").addClass("alert alert-danger");
    $("#phoneError").show();
  } else {
    $("#phoneError").hide();
  }
}

function limpiar() {
  //asignamos valores vacios a los inputs para limpiarlos
  $("#name").val("");
  $("#email").val("");
  $("#phone").val("");
}
