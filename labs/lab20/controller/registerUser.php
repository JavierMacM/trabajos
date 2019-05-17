<?php
    require_once("../model/utils.php");
    
    $result = registerUser($_POST['namew'], $_POST['lastnamew'], $_POST['emailw'], $_POST['hobbiew']);
    
    if ($result != "") {
        echo "Bienvenido ".$result;
    } else {
        echo "Hubo algun problema, lo siento";
    }
?>