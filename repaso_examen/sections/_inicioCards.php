<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger red darken-4" data-target="modal1"><i class="material-icons">help</i></a>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content black-text center-align">
        <p>Puedes pausar el video con el siguiente botón:</p>
            <button id="myBtn" onclick="myFunction()">Pause</button>
    </div>
    <div class="modal-footer">
        <a data-target="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
</div>
<!-- The video -->
<div id = "videoContainer">
    <video autoplay muted loop id="myVideo">
      <source src="<?php echo $httpProtocol.$host.$url.'resources/dino.mp4'?>" type="video/mp4">
    </video>
</div>

<!-- Optional: some overlay text to describe the video -->
<div class="content center-align">
  <h4 class="welcome white-text center-align">Bienvenido A Isla Nublar</h4>
  <!-- Use a button to pause/play the video with JavaScript -->
  <a href="<?php echo $httpProtocol.$host.$url.'views/registros.php'?>" class="waves-effect waves-light btn red darken-4"><i class="material-icons right">library_add</i>Dinosaurios</a>
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
<div class="container">
    <div class="row">
        <div class="carousel">
            <a class="carousel-item" href="#five!"><img src="https://urbancomunicacion.com/wp-content/uploads/2018/07/Historia-logo-Jurassic-park-Urban-Comunicacion.jpg"></a>
            <a class="carousel-item" href="#one!"><img src="https://i-h2.pinimg.com/474x/f1/6f/80/f16f8068fc5e7562e7106ca5ce78eae1--jurassic-world-dinosaurs-jurassic-park.jpg"></a>
            <a class="carousel-item" href="#two!"><img src="https://i.pinimg.com/474x/20/8c/cd/208ccd2d7ed38812bef80a69d19284d9.jpg?b=t"></a>
            <a class="carousel-item" href="#four!"><img src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA4MS85MjAvb3JpZ2luYWwvYW1uaC1kaW5vc2F1ci1leGhpYml0LTNiLVl1dHlyYW5udXMuanBn"></a>
        </div>
    </div>
</div>