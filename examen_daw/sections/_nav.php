    <div class="navbar-fixed"> 
        <nav>
            <div class="nav-wrapper amber">
              <a href="<?php echo $httpProtocol.$host.$url.'views/inicio.php'?>" class="brand-logo">
                  <img src="<?php //echo $httpProtocol.$host.$url.'img/logo.png'?>">
              </a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a class="black-text" href="<?php echo $httpProtocol.$host.$url.'views/index.php'?>">Inicio</a></li>
                <li><a class="black-text" href="<?php echo $httpProtocol.$host.$url.'views/registros.php'?>">Registro de incidentes</a></li>
                <li><a class="black-text" href="<?php echo $httpProtocol.$host.$url.'views/reportes.php'?>">Historial de incidentes</a></li>
                <li>
                    <a class="waves-effect waves-light btn amber darken-4" href="<?php echo $httpProtocol.$host.$url.'index.php?logout=true';?>">
                        Cerrar sesión <i class="material-icons right">close</i>
                    </a>
                </li>
              </ul>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
        <li><a class="black-text" href="<?php echo $httpProtocol.$host.$url.'views/index.php'?>">Inicio</a></li>
        <li><a class="black-text" href="<?php echo $httpProtocol.$host.$url.'views/registros.php'?>">Registro de incidentes</a></li>
        <li><a class="black-text" href="<?php echo $httpProtocol.$host.$url.'views/reportes.php'?>">Historial de incidentes</a></li>
        <li>
            <a class="waves-effect waves-light btn amber darken-4" href="<?php echo $httpProtocol.$host.$url.'index.php?logout=true';?>">
                Cerrar sesión <i class="material-icons right">close</i>
            </a>
        </li>
    </ul>
       