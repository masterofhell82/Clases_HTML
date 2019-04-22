function obtenerDatos(formulario)
{
	var nom = formulario.nom.value
    var ape = formulario.ape.value
    var fecha = formulario.fecha.value
    var edad = formulario.edad.value
    var e = formulario.e.value
    var pass = formulario.pass.value
    var tel = formulario.tel.value
    var color = formulario.color.value
    var mens = formulario.mens.value
    var dire = formulario.dire.value
    var sexo = formulario.sexo.value
    alert(nom+" "+ape+" "+fecha+""+edad+" "+e+" "+pass+" "+tel+" "++dire+" "+mens+" "color+" "+sexo);
}

var formulario=document.getElementById('formulario');
var respuesta=document.getElementById('respuesta');
formulario.addEventListener('submit',function(e){
    e.preventDefault();
    console.log('Diste Click')
    var datos=new FormData(formulario);
    console.log(datos.get('name'))
    console.log(datos.get('ape'))
    console.log(datos.get('fecha'))
    console.log(datos.get('edad'))
    console.log(datos.get('pass'))
    console.log(datos.get('e'))
    console.log(datos.get('dire'))
    console.log(datos.get('mens'))
    console.log(datos.get('sexo'))
    console.log(datos.get('color'))
    console.log(datos.get('tel'))

    fetch('../imp.php',{
        method: 'POST',
        body: datos
    } )
        .then(res => res.json())
        .then(dara => {
            console.log(data)
            if (dara=='error'){
                respuesta.innerHTML=`
                <div class="alert alert-danger" role="alert">
                LLena todos los campos marcados con (*)!
                </div>
                `            
            }else{
                respuesta.innerHTML=`
                <div class="alert alert-primary" role="alert">
                 ${data}                         
                </div>
                ` 
            }           
    })   
})