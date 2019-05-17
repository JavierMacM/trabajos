<?php
    session_start();
    $httpProtocol = "https://";
    $host = $_SERVER['SERVER_NAME'];
    $url = "/Examen-DAW/";
    if(!isset($_SESSION['idrol']))
	{
		header('location: '.$httpProtocol.$host.$url.'index.php');
		exit;
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Jurassic Park
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta Name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="author" content="A'BAK TEAM">
        <link rel="shortcut icon" type="images/ico" href="<?php echo $httpProtocol.$host.$url.'img/favicon/favicon.ico'?>">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/materialize.min.css'?>" type="text/css" />
        <link type="text/css" rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/video.css'?>"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/viewstyles.css'?>"  media="screen,projection"/>
    </head>
    <body class="black">