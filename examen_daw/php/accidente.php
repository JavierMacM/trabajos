<?php
    require_once("utils.php");
    
    // echo "<script>alert('Hola')</script>";
    if (isset($_POST["lugar"]) && isset($_POST["lugar"]) != "" &&
    isset($_POST["tipo"]) && isset($_POST["tipo"]) != "")
    {
        $lugar = $_POST['lugar'];
        $tipo = $_POST['tipo'];
        $lugar = htmlspecialchars($lugar);
        $tipo = htmlspecialchars($tipo);
        if(strlen($lugar) > 0 and strlen($tipo) > 0)
        {
            if (insertAccidente($lugar, $tipo))
            {
                echo "<script>alert('Éxito al registrar accidente)</script>";
            }
            else
            {
                echo "<script>alert('Falla al registrar accidente')</script>";
            }
        }
    }
?>