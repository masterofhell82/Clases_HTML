function datos(){
    var nombre = document.getElementById('nombre').value;
    console.log(nombre);
     var contraseña = document.getElementById('contraseña').value;
    console.log(contraseña);
}
function verificar(){
    var nombre = document.getElementById('nombre').value;
    var contraseña = document.getElementById('contraseña').value;
    var r = confirm("¿Desea enviar los datos?");
    if (r == true) {
        txt = "Listo";
        console.log(nombre);
        console.log(contraseña);
    } else {
        txt = "Se ha cancelado";
    }}