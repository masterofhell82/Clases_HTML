function verificar(){
    var palabra = document.getElementById('palabra').value;
    var r = confirm("¿Desea enviar los datos?");
    if (r == true) {
        txt = "Listo";
        console.log(palabra);
       
    } else {
        txt = "cancelado";
    }}