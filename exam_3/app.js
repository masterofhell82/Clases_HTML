function ir() {
  $.ajax({
    // aqui va la ubicación de la página PHP
    url: "app.php",
    type: "POST",
    dataType: "html",
    data: {
      condicion: "traerDatos"
    },
    success: function(resultado) {
      alert(resultado);
      $(".table-users tbody").html(resultado);
    }
  });
}
