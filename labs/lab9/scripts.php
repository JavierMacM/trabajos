<?php
  function trial123(){
    $nums = array($_POST["n1"], $_POST["n2"], $_POST["n3"], $_POST["n4"], $_POST["n5"]);
    $avg = 0;
    sort($nums);

    for ($i=0; $i <count($nums) ; $i++) {
      $avg += $nums[$i];
    }
    $avg = $avg/5;

    echo "El promedio es: " . $avg . "<br>";

    echo "La mediana es: " . $nums[2] . "<br>";

    echo "Los numeros en orden ascendente son: ";
    for ($i=0; $i <count($nums) ; $i++) {
      echo $nums[$i] . " ";
    }

    echo "<br>" . "Los numeros en orden descendente son: ";
    for ($i=count($nums) - 1; $i >= 0 ; $i--) {
      echo $nums[$i] . " ";
    }

  }

  function trial4(){
    $n6 = $_POST["n6"];

    echo "<table border='1' class='stats' cellspacing='0'>
      <tr><th>numero</th><th>cuadrado</th><th>cubo</th></tr>";
    for ($i=0; $i <= $n6; $i++) {
      $cube = $i*$i*$i;
      $square = $i*$i;
      echo"<tr><td>$i</td><td>$square</td><td>$cube</td><tr>";
    }
    echo "</table>";

  }

  function trial5(){
    $n7 = $_POST["n7"];
    $reverse = 0;

    while ($n7 > 1)
    {
      $n = $n7 % 10;
      $reverse = ($reverse * 10) + $n;
      $n7 = ($n7 / 10);
    }

    echo "El numero $n7 al reves es: " . $reverse;
  }

  include "index.html";

?>
<section class="content">
  <?php
    trial123();
    trial4();
    trial5();
  ?>
</section>
