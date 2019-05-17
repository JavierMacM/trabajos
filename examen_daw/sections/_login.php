
        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn modal-trigger amber darken-4" data-target="modal1"><i class="material-icons">help</i></a>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content black-text center-align">
                <h4>¡Bienvenido a Jurassic Park!</h4>
                <p>¡Hola, soy John Hammond!</p>
                <img src="<?php echo $httpProtocol.$host.$url.'img/john.png'?>"></img>
                <p>Inicia sesión con el siguiente usuario y contraseña:</p>
                <p><strong>Usuario:</strong> 123456</p>
                <p><strong>Contraseña:</strong> parquejurasico</p>
            </div>
            <div class="modal-footer">
                <a data-target="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
            </div>
        </div>
    
    <form id="loginform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="row login">
            <div class="col s12 14 offset-14">
                <div class="card">
                    <div class="card-action black white-text center-align"> 
                    <img src="<?php echo $httpProtocol.$host.$url.'img/login/banner.png'?>"></img>
                    </div>
                    <div class="card-content">
                        <div class="form-field">
                            <label for="user">Usuario</label>
                            <input type="text" id="username" name="username">
                        </div><br>

                        <div class="form-field">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password">
                        </div><br>

                        <div class="form-field">
                            <label>
                            <input type="checkbox" class="filled-in" checked="checked" />
                            <span>Recuérdame</span>
                            </label>
                        </div><br>
                        <div class="form-field center-align">
                        <button type="submit" name="submit" class="btn-large waves-effect waves-light amber darken-4">Entrar</button>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
    </form>
          