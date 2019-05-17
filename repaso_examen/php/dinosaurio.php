<?php
    require_once("utils.php");
    
    // echo "<script>alert('Hola')</script>";
    if (isset($_POST["dinosaurio"]) && isset($_POST["dinosaurio"]) != "")
    {
        $dinosaurio = $_POST['dinosaurio'];
        $dinosaurio = htmlspecialchars($dinosaurio);
        if(strlen($dinosaurio) > 0)
        {
            if (insertDinosaur($dinosaurio))
            {
                echo "<script>alert('Éxito al insertar $dinosaurio')</script>";
            }
            else
            {
                echo "<script>alert('Falla al insertar')</script>";
            }
        }
    }
?>