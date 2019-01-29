function deployPrompt2()
{
  var txt;
  var myPrompt = prompt("Ingresa el resultado de la suma de " ":", "ingresa tu numero aqui");
  var number = parseInt(myPrompt);
  if (number == null) {
      txt = "No me diste ningun numero";
  } else {
      txt = "Correcto"
  }
  document.getElementById("operationTable").innerHTML = txt;
}
