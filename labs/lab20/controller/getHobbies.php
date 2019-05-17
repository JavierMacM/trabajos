<?php
    require_once("model/utils.php");
    $result = getHobbies();
    
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<option value='".$row['idhobbie']."'>".$row['nombre']."</option>";
    }
?>