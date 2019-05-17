<?php
    require_once("../php/accidente.php");
?>

    <div class="row login">
        <div class="col s12 14 offset-14">
            <div class="card">
                <h2 class="center-align">Registra un incidente</h2>
                <div class="row">
                    <form class="col s12" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
                      <div class="row">
                          <div class="input-field col s10 offset-l1">
                            <select name="lugar">
                              <option value="" disabled selected>Selecciona una opción</option>
                              <option value="1">Centro turístico</option>
                              <option value="2">Laboratorios</option>
                              <option value="3">Restaurante</option>
                              <option value="4">Centro operativo</option>
                              <option value="5">Triceratops</option>
                              <option value="6">Dilofosaurios</option>
                              <option value="7">Velociraptors</option>
                              <option value="8">TRex</option>
                              <option value="9">Planicie de los herbívoros</option>
                            </select>
                            <label>¿Dónde ocurrió el incidente?</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s10 offset-l1">
                            <select name="tipo">
                              <option value="" disabled selected>Selecciona una opción</option>
                              <option value="1">Falla eléctrica</option>
                              <option value="2">Fuga de herbívoro</option>
                              <option value="3">Fuga de Velociraptor</option>
                              <option value="4">Fuga de TRex</option>
                              <option value="5">Robo de ADN</option>
                              <option value="6">Auto descompuesto</option>
                              <option value="7">Visitantes en zona no autorizada</option>
                            </select>
                            <label>¿Que ocurrió?</label>
                        </div>
                      </div>
                      <div class="row center-align">
                          <button class="btn waves-effect waves-light amber darken-4" type="submit" name="action">Registrar
                                <i class="material-icons right">send</i>
                          </button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>