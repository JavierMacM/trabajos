var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  var t = d.toLocaleTimeString();
  document.getElementById("timeDisplay").innerHTML = "La hora es: " + t;
}

function changeFont() {
  document.getElementById("font2change").style.fontFamily = "Impact,Charcoal,sans-serif";
}

function changeFontBack() {
  document.getElementById("font2change").style.fontFamily = "Helvetica, sans-serif, Arial";
}

function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var age = document.forms["myForm"]["age"].value;
  var gender = document.forms["myForm"]["gender"].value;
  var message = "";
  if (name === "") {
    message = "Por favor escribe tu nombre \n";
  }
  if (age === "") {
    message += "Por favor ingresa tu edad\n";
  }
  if (gender === "") {
    message += "Por favor dame tu genero";
  }else
  if(name !== "" && age !== "" && gender !== ""){
    message = "Gracias, datos completos"
  }
  alert(message);
  return;
}

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
