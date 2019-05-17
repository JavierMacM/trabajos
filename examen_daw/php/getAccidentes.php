<?php

require_once("utils.php");
$result = select_accidentes();

if (mysqli_num_rows($result)>0)
{
    echo "<table style='position: relative;left: 50%;transform: translateX(-50%);width: 100%;color: #fff;'>";
    echo "<tr>
            <td style = 'width: 33%;text-align:center;background:#ff6f00'>Lugar</td>
            <td style = 'width: 33%;text-align:center;background:#ff6f00'>Tipo</td>
            <td style = 'width: 33%;text-align:center;background:#ff6f00'>Fecha</td>
          </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
    echo "<tr> <td style = 'width: 33%;text-align:center'>".$row['lugar']."</td> 
            <td style = 'width: 33%;text-align:center'>".$row['tipo']."</td> 
            <td style = 'width: 33%;text-align:center'>".$row['fecha']."</td> 
          </tr>";
    }
    echo "</table>";
}

?>