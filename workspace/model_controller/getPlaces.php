<?php
    require_once("utils.php");
    $result = getPlaces();
    
    $i=1;
    if (mysqli_num_rows($result)>0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        echo "<option value='$i'>".$row['lugar']."</option>";
        $i=$i+1;
      }
    }
?>