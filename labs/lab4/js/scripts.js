function deployTest1()
{
  var result = "";
  var myPrompt = prompt("Ingresa tu numero aqui");
  var number = parseInt(myPrompt);

  if (number === null) {
      result += "No me diste ningun numero";
  } else {

      for(var i = 0; i <= number; i++) {

            for(var j = 0; j < 3; j++) {
                if(i == 0){
                    if(j == 0){
                      result += " n ";
                    }else
                    if(j == 1) {
                      result += " n^2 ";
                    }else{
                      result += " n^3 <br>";
                    }
                }else{ //imprimir los numeros
                    if(j == 0){
                      result += " " + i.toString() + " ";
                    }
                    if(j == 1) {
                      result += " " + (i * i).toString() + " ";
                    }
                    else
                    if(j == 2){
                      result += " " + (i * i * i).toString() + "<br>";
                    }
                }
            }

      }
  }//end if
  document.write(result);
}

function deployTest2()
{
  var txt;
  var num1 = Math.floor((Math.random()*10) + 1);
  var num2 = Math.floor((Math.random()*10) + 1);
  var myPrompt = prompt("Ingresa el resultado de la suma aleatoria");
  var ans = parseInt(myPrompt);
  if (ans === null) {
      txt = "No me diste ningun numero";
  }else
  if (ans === (num1+num2)) {
      txt = "Correcto";
  }else {
      txt = "La suma era " + num1.toString() + " + " + num2.toString() + " = " + (num1+num2).toString();
  }
  document.write(txt);
}

function deployTest3()
{
  var result;
  var over = 0;
  var under = 0;
  var equals = 0;
  var ans;
  ans = prompt("Ingresa un numero o una x para terminar");

  while(ans !== "x"){
    ans = prompt("Ingresa un numero o una x para terminar");
    if(ans !== "x"){
      if(ans > 0)
        over++;
      else
      if(ans === 0)
        equals++;
      else {
        under++;
      }
    }
  }
  result = "Mayores a 0: " + over + " Menores a 0: " + under + " Iguales a 0: " + equals;
  document.write(result);
}

function deployTest4()
{
  var result = "";
  var rows;
  var cols;
  rows = prompt("Cuantas filas");
  cols = prompt("Cuantas columnas");

  for(let i = 0; i < rows ; i++){
    let promedio = 0;
    for(let j = 0; j < cols ; j++){
        let nums = prompt("Introduce los numeros de la fila " + (i+1).toString());
        promedio += parseFloat(nums);
    }
    promedio = promedio / cols;
    result += "Fila " + (i+1).toString() + ": " + promedio.toString() + "<br>";
    promedio = 0;
  }
  document.write(result);
}

function deployTest5()
{
  let number = prompt("Ingresa un numero");
  let result = "";
  let numberLength = number.length;

  while(numberLength >= 0){
    result += number.charAt(numberLength);
    numberLength--;
  }

  document.write("El inverso es: " + result);
}

function deployTest6()
{
  let n = prompt("Dame un numero");
  let number;

  let b = prompt("Cual es su base");
  let base = parseInt(b);

  let base10 = 0;

  for(let i=0; i<n.length; i++){
    number = parseInt(n.charAt(i)) * (Math.pow(base,(n.length-i-1)));
    base10 += number;
  }

  document.write(n + " base " + b + " en base 10 es: " + base10.toString());
}
