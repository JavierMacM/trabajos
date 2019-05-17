<?php
    require_once("utils.php");
    $result = getAccidentType();
    
    $i=1;
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<option value='$i'>".$row['tipo']."</option>";
      $i=$i+1;
    }
?>