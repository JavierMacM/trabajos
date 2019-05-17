<?php
    session_start();
    require_once("utils.php");

    if(!empty($_POST['email']) && !empty($_POST['pass']))
    {
        $mail = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['pass']);
    }
    
    $_SESSION['mail'] = $mail;
    $_SESSION['pass'] = $pass;
    
    if (isUser($mail,$pass)==true)
    {
        header('location:in.php');
        echo "<script>console.log(1);</script>";
        exit();
    }
    else
    {
        $_SESSION['errorMessage'] = "Usuario o contrasena incorrectos";
        header('location:index.php');
    }
?>