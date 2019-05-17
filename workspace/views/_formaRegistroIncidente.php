<h2>Registra un incidente</h2>
<div class="row">
    <form id="id_form" class="col s12" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
      <div class="row">
          <div class="input-field col s12">
            <select name="lugar">
              <option value="" disabled selected>Selecciona una opción</option>
              <?php
                require("../model_controller/getPlaces.php");
              ?>
            </select>
            <label>¿Dónde es el incidente?</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <select name="tipo">
              <option value="" disabled selected>Selecciona una opción</option>
              <?php
                require("../model_controller/getAccidentTypes.php");
              ?>
            </select>
            <label>¿Cuál es el incidente?</label>
        </div>
      </div>
      <div class="row">
          <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                <i class="material-icons right">send</i>
          </button>
      </div>
    </form>
  </div>