<?php
    require_once("../php/dinosaurio.php");
?>

    <div class="row login">
        <div class="col s12 14 offset-14">
            <div class="card">
                <div class="card-action black white-text center-align"> 
                    <img src="<?php echo $httpProtocol.$host.$url.'img/login/banner.png'?>"></img>
                </div>
                <div class="card-content">
                    <form id="registro" action="<?=$_SERVER['PHP_SELF']?>" method="post" >
                        <div class="input-field">
                            <input type="text" id="dinosaurio" name="dinosaurio" value= "">
                            <label for="dinosaurio">Dinosaurio</label>
                        </div><br>
                        <div class="form-field center-align">
                            <button type="submit" name="submit" class="btn-large red darken-4 waves-effect waves-light">Registrar</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>

          