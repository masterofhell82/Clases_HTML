var slideIndex = 1;// se declara la variable slideIndex con valor 1
showSlides(slideIndex);//Se llama a la funcion showSlides enviandole como parametro el valor de slideIndex

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 
function formload(){
alert('Js cargado.');
}
function objetoAjax(){
  var xmlhttp=false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
 
  try {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  } catch (E) {
    xmlhttp = false;
  }
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

function formload(){
  alert ("Iniciando registro de datos");
// div donde se mostraran los resultados
  divformulario = document.getElementById('formcontent');

  codigo = 2;
// instanciamos el objeto ajax
  ajax = objetoAjax();
// se abre el archivo que realizara la operacion de registro usando el metodo post
  ajax.open("POST","form.php",false);
// cuando el objeto XMLHttpRequest cambia el estado, la funcion inicia
  ajax.onreadystatechange = function () {
// la funcion responseText tiene todos los datos pedidos al servidor    
      if(ajax.readyState ==4){
//Mostrar los resultados en la pagina principal en esta capa        
          divformulario.innerHTML = ajax.responseText;

      }
  }
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
//Enviando los datos a form.php para insertar los datos en la bd
  ajax.send("codigo="+codigo);
// primero va nombre de la varible que sera adquirida por POST
//lUEGO la variable que se esta adquiriendo por js
}
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
function formload(){
  alert ('js cargado.');
}
function objetoAjax(){
  var xmlhttp=false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
 
  try {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  } catch (E) {
    xmlhttp = false;
  }
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

function formload(){
  alert ("Iniciando registro de datos");
// div donde se mostraran los resultados
  divformulario = document.getElementById('formcontent');

  codigo = 2;
// instanciamos el objeto ajax
  ajax = objetoAjax();
// se abre el archivo que realizara la operacion de registro usando el metodo post
  ajax.open("POST","form.php",false);
// cuando el objeto XMLHttpRequest cambia el estado, la funcion inicia
  ajax.onreadystatechange = function () {
// la funcion responseText tiene todos los datos pedidos al servidor    
      if(ajax.readyState ==4){
//Mostrar los resultados en la pagina principal en esta capa        
          divformulario.innerHTML = ajax.responseText;

      }
  }
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
//Enviando los datos a form.php para insertar los datos en la bd
  ajax.send("codigo="+codigo);
// primero va nombre de la varible que sera adquirida por POST
//lUEGO la variable que se esta adquiriendo por js
}