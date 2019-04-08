function datos(){
    var usuario = document.getElementById('usuario').value;
    var contraseña = document.getElementById('contraseña').value;
    console.log(usuario);
    console.log(contraseña);
}
function verificar(){
    var usuario = document.getElementById('usuario').value;
    var contraseña = document.getElementById('contraseña').value;
    var mensaje;
    var pregunta = confirm("¿Desea enviar los datos?");
    if (pregunta == true) {
        mensaje = "Se han enviado los datos correctamente";
        console.log(usuario);
        console.log(contraseña);
    } else {
        mensaje = "Se ha cancelado el envío de los datos";
}
    document.getElementById("mensaje").innerHTML = mensaje;
}
