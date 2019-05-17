<?php 
  session_start();
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
      <div class="row center">
          Bienvenido <?php echo $_SESSION['mail'];?>, No olvides que tu contrasena es <?php echo $_SESSION['pass'];?> 
      </div>
      <div class="row center">
        <a href="index.php?logout=true" class="btn" type="submit">Salir</a>
      </div>
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