<?php
    require_once("utils.php");
    
if (isset($_POST["lugar"]) && isset($_POST["tipo"]))    {
        $lugar = $_POST['lugar'];
        $tipo = $_POST['tipo'];
        $lugar = htmlspecialchars($lugar);
        $tipo = htmlspecialchars($tipo);
        if(strlen($lugar) > 0 and strlen($tipo) > 0)
        {
            insertAccident($lugar, $tipo);
        }
    }
?>