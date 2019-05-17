<?php

require_once("utils.php");
    $result = getAccidents();
    if (mysqli_num_rows($result)>0)
    {
        
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr> <td style = 'width: 33%;text-align:center'>".$row['fecha']."</td> 
                    <td style = 'width: 33%;text-align:center'>".$row['lugar']."</td> 
                    <td style = 'width: 33%;text-align:center'>".$row['tipo']."</td> 
                  </tr>";
            $i=$i+1;
        }
    }

?>