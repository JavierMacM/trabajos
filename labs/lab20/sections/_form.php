<section class="container">
    <form id="usuarioreg" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="row center">
        <h1>Crea tu cuenta en mi sistema</h1>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">person</i>
          <input id="first_name" type="text" class="validate" name="name">
          <label for="first_name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="lastname">
          <label for="last_name">Apellido Paterno</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Correo</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">music_note</i>
          <select name="hobbie">
            <option value="" disabled selected>Selecciona tu hobbie</option>
            <?php include'controller/getHobbies.php'; ?>
          </select>
          <label>Hobbie</label>
        </div>
      </div>
      <div class="row center">
        <button class="btn" type="submit">Crear mi cuenta</button>
      </div>
    </form>
</section>