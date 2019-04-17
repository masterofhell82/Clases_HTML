function verificar(){
 
	if(document.getElementById("nombre").value == "") { alert('Debes poner el Nombre') ; return false ; } 
	if(document.getElementById("cedula").value == "") { alert('Debes poner una Cedula') ; return false ; } 
	if(document.getElementById("nombre_mascota").value == "") { alert('Debes poner nombre de su mascota') ; return false ; } 
	if(document.getElementById("altura").value == "") { alert('Debes poner la altura de su mascota') ; return false ; } 
	if(document.getElementById("peso").value == "") { alert('Debes poner el peso de su mascota') ; return false ; } 
	if(document.getElementById("edad").value == "") { alert('Debes poner la edad de su mascota') ; return false ; } 
	if(document.getElementById("longitud").value == "") { alert('Debes poner la longitud de su mascota') ; return false ; } 
	if(document.getElementById("ejercicio").value == "") { alert('Debes poner el Nro de veces que se ejercita a la semana') ; return false ; } 
	if(document.getElementById("comida").value == "") { alert('Debes poner el Nro de kg de comida comsume a la semana') ; return false ; } 
	if(document.getElementById("baño").value == "") { alert('Debes poner el Nro de veces que va al baño diario') ; return false ; } 
	 
}

// Recorrer los elementos
(function(){

var formulario = document.formulario_registro,
	elementos = formulario.elements;

var enviar = function(e){
	if (!validarInputs()) {
		console.log('Falto validar los Input');
		e.preventDefault();
	} else {
		console.log('Envia');
		e.preventDefault();
	}
};

var focusInput = function(){
	this.parentElement.children[1].className = "label active";
	this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");
};

var blurInput = function(){
	if (this.value <= 0) {
		this.parentElement.children[1].className = "label";
		this.parentElement.children[0].className = this.parentElement.children[0].className + " error";
	}
};

formulario.addEventListener("submit", enviar);

for (var i = 0; i < elementos.length; i++) {
	if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password") {
		elementos[i].addEventListener("focus", focusInput);
		elementos[i].addEventListener("blur", blurInput);
	}
}

}())