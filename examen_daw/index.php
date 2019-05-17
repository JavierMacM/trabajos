<?php
    session_start();
    $httpProtocol = "https://";
    $host = $_SERVER['SERVER_NAME'];
    $url = "/examen_daw/";
    // Revisa si se llegó al índice gracias a que se apretó el botón de cerrar sesión
    if(isset($_GET['logout']) && $_GET['logout'] == true)
    {
    	session_destroy();
    	// Redirige a la misma página, pero sin los atributos get
    	header("location:index.php");
    	exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Entrar a Jurassic Park
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta Name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" type="images/ico" href="<?php echo $httpProtocol.$host.$url.'img/favicon/favicon.ico'?>">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/materialize.min.css'?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/main.css'?>" type="text/css" />
    </head>
    <body>
        <?php include("sections/_login.php")?>
        <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/jquery-3.3.1.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/materialize.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/init.js'?>"></script>
        <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/bridge.js'?>"></script>
    </body>
</html>
