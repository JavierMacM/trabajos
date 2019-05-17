<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger amber darken-4" data-target="modal1"><i class="material-icons">help</i></a>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content black-text center-align">
        <p>Pausa el video:</p>
            <button id="myBtn" onclick="myFunction()">Pausar</button>
    </div>
    <div class="modal-footer">
        <a data-target="#!" class="modal-close waves-effect waves-green btn-flat">Entendido</a>
    </div>
</div>
<!-- The video -->
<div id = "videoContainer">
    <video autoplay loop id="myVideo">
      <source src="<?php echo $httpProtocol.$host.$url.'resources/dino.mp4'?>" type="video/mp4">
    </video>
</div>

<!-- Optional: some overlay text to describe the video -->
<div class="content center-align">
<br>
<br>
<br>
<br>
<br>
  <h4 class="welcome white-text center-align">Bienvenido A Isla Nublar</h4>
  <!-- Use a button to pause/play the video with JavaScript -->
<br>
  <a href="<?php echo $httpProtocol.$host.$url.'views/registros.php'?>" class="waves-effect waves-light btn amber darken-4"><i class="material-icons right">library_add</i>Registra un incidente</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>