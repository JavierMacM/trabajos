<?php include("../sections/_header.php")?>
<?php include("../sections/_nav.php")?>
<?php include("../sections/_registro.php")?>
    <footer class="page-footer black">
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
            <h5 class="white-text">Enlaces</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" 
                href="<?php echo $httpProtocol.$host.$url.'views/registros.php'?>">Registros</a>
              </li>
              <li><a class="grey-text text-lighten-3" 
                href="<?php echo $httpProtocol.$host.$url.'views/reportes.php'?>">Reportes</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2019 A'BAK TEAM - Powered by Tecnológico de Monterrey
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/jquery-3.3.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/materialize.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/init.js'?>"></script>
  </body>
</html>