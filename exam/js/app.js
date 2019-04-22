//** Your code **
// el codigo que se hace a continuacion es para poder dejar el input fijo cuando tiene el campo con datos (fijarlo) y asi no se ligue la palabra con el input
var inputs = document.getElementsByClassName('formulario__input');
for (var i=0; i < inputs.length; i++) {
    inputs[i].addEventListener('keyup',function(){
    if (this.value.length >=1) {
        this.nextElementSibling.classlist.add('fijar');
    }
    else {
        this.nextElementSibling.classlist.remove('fijar');
    }      
    })
}
