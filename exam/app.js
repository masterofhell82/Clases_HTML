
function verificar(){
    if (window.confirm('¿Los datos ingresados son correctos?')){
        enviarVariables()
        window.location.replace("examen.html");
        return false;
    }
    else{
      location.reload();
    }
}

function enviarVariables(){
    var nom = document.getElementById("Nombre").value;
    var cont = document.getElementById("Contraseña").value;
    localStorage.setItem("nombre", nom);
    localStorage.setItem("contraseña", cont);  
  
}

function recibirVariables(){
    var nomb = localStorage.getItem("nombre");
    var contr = localStorage.getItem("contraseña");
    document.getElementById("nombre").innerHTML = nomb;
    document.getElementById("contraseña").innerHTML = contr; 
}