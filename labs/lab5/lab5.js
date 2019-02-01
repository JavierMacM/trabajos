//funcion para el ejercicio 1 validar contrasena
function validatePassword(){
  var contrasena = document.getElementById("contrasena").value;
  var contrasenaV = document.getElementById("contrasenaV").value;
  var message;

  if(contrasena==="" || contrasenaV===""){
    message = "Favor de llenar ambos campos";
  }else
  if(contrasena === contrasenaV){
    message = "Acceso obtenido";
  }else
  if(contrasena !== contrasenaV){
    message="Las contrasenas no coinciden";
  }
  document.getElementById("accessMessage").innerHTML = message;
}

//funcion para el ejercicio 2 compra de productos
function payProducts(){
  var mayonesa = document.getElementById("mayonesa").value;
  var mostaza = document.getElementById("mostaza").value;
  var jamon = document.getElementById("jamon").value;
  var pan = document.getElementById("pan").value;
  var lechuga = document.getElementById("lechuga").value;
  var jitomate = document.getElementById("jitomate").value;
  var cebolla = document.getElementById("cebolla").value;
  var iva = document.getElementById("iva").value;
  var total;

  total = mayonesa * 15 + mostaza * 13 + jamon * 35 + pan * 34 + lechuga * 21 + jitomate * 2 + cebolla * 5;
  total = total + (total * iva)/100;
  document.getElementById("totalPay").innerHTML = total;
}

//funcion para el ejercicio 3 genrar historia
function createStory(){
  var nombre = document.getElementById("name").value;
  var edad = document.getElementById("age").value;
  var animal = document.getElementById("animal").value;
  var deporte = document.getElementById("sport").value;
  var videojuego = document.getElementById("videogame").value;
  var ocupacion = document.getElementById("ocupation").value;
  var historia;

  historia = "Habia una vez una persona de nombre " + nombre + " de " + edad + " anios de edad que a pesar de su edad no dejaba de hacer lo que le gusta,
  jugaba " + videojuego + " y practicaba " + deporte + ", pero su verdadera pasion era " + ocupacion + ", asi vivio feliz con su mascota " + animal;

  document.getElementById("history").innerHTML = historia;
}
