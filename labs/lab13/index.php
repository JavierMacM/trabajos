<?php
    session_start();
    
    if(isset($_GET['logout']) && $_GET['logout'] == true)
    {
      session_unset();
    	session_destroy();
    	header("location:index.php");
    	exit();
    }
    if(isset($_SESSION['errorMessage']))
    {
        echo '<script>alert("'.$_SESSION['errorMessage'].'");</script>';
        unset($_SESSION['errorMessage']);
    }
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laboratorio 13</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <!--Barra de navegacion-->
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper amber">
          <a href="#" class="brand-logo right">Lab 13</a>
          <ul class="left hide-on-med-and-down">
            <li><a href="../index.html">Otros labs</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <section class="container">
        <form id="usuarioreg" method="post" action="validateLogin.php">
          <div class="row center">
            <h1>Haz login en el sistema</h1>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="email" type="email" class="validate" name="email">
              <label for="email">Correo</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">lock</i>
              <input id="pass" type="text" class="validate" name="pass">
              <label for="email">Apellido</label>
            </div>
          </div>
          <div class="row center">
            <button class="btn" type="submit">Entrar</button>
          </div>
        </form>
    </section>
    <footer class="page-footer amber">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Laboratorio 13</h5>
            <p class="grey-text text-lighten-4">Manejo de sesiones con php</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2019 JavierMacM
        </div>
      </div>
    </footer>
    </body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>M.AutoInit()</script>
</html>