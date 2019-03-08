<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laboratorio 11</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
  </head>
  <body>
    <!--Barra de navegacion-->
    <a href="../index.php">Otros labs</a> |
    <a href="questions.html">Preguntas</a>

    <section class="content">
      <h1>Laboratorio de PHP</h1>
      <h3>Llenado de datos personales</h3>
      <p class="error">* Campo requerido</p>

      <?php require 'scripts.php'; ?>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Nombre: <input type="text" name="name">
        <span class="error">* <?php echo $nameError;?></span>
        <br><br>
        Apellidos: <input type="text" name="lastname">
        <br><br>
        Fecha de nacimiento: <input type="date" name="birth">
        <span class="error">* <?php echo $birthError;?></span>
        <br><br>
        Genero:
        <input type="radio" name="gender" value="female">Femenino
        <input type="radio" name="gender" value="male">Masculino
        <br><br>
        Correo: <input type="email" name="email">
        <span class="error">* <?php echo $emailError;?></span>
        <br><br>
        Contrasena: <input type="password" name="password">
        <span class="error">* <?php echo $passwordError;?></span>
        <br><br>
        <button type="submit" name="button">Registrar mi cuenta</button>
      </form>

      <?php
        require 'done.php';
      ?>

    </section>
  </body>
</html>
