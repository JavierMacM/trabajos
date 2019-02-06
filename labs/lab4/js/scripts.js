function deployTest1()
{
  var txt;
  var myPrompt = prompt("Ingresa tu numero:", "ingresa tu numero aqui");
  var number = parseInt(myPrompt);
  if (number == null) {
      txt = "No me diste ningun numero";
      document.getElementById("operationTable").innerHTML = txt;
  } else {
      createTable(number);
  }
}

function createTable(number)
{
  var operationTable = document.getElementById("operationTable");
  var tbl = document.createElement("TABLE");
  var cellText, row, cell;

  for(var i = 0; i < number; i++) {
        row = document.createElement("TR");

        for(var j = 0; j < 3; j++) {
            cell = document.createElement("TD");
            if(i == 0){
                if(j == 0){
                  cellText = document.createTextNode("numero");
                }else
                if(j == 1) {
                  cellText = document.createTextNode("cuadrado");
                }else{
                  cellText = document.createTextNode("cubo");
                }
            }else{ //imprimir los numeros
                if(j == 1) {
                  i = i * i;
                }else
                if(j == 2){
                  i = i * i * i;
                }
                cellText = document.createTextNode(i.toString());
            }
            cell.appendChild(cellText);
            row.appendChild(cell);
        }

	    tbl.appendChild(row);
  }
  operationTable.appendChild(tb1);
}

function deployTest2()
{
  var txt;
  var myPrompt = prompt("Ingresa el resultado de la suma aleatoria");
  var number = parseInt(myPrompt);
  if (number == null) {
      txt = "No me diste ningun numero";
  } else {
      txt = "Correcto"
  }
  document.getElementById("operationTable").innerHTML = txt;
}

function deployTest3()
{

}

function deployTest4()
{

}

function deployTest5()
{

}

function deployTest6()
{

}
