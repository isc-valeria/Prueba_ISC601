
<div class="container center">
    <div>
        <h5 class="red-text">
            <?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?>
        </h5>
    </div>
    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

        <form class="col s12" method="post" action="<?php echo URL?>login/verify">
            <div class='row'>
                <div class='col s12'>
                </div>
            </div>
            <h5 class="black-text ">Por favor, inicia sesión en tu cuenta</h5><br>
            <div class='row'>
                <div class='input-field col s12'>
                    <i class="icon-user-solid-circle prefix  indigo-text"></i>
                    <input class='validate' type='email' name='email' id='email' />
                    <label for='email'>  Ingresa tu email</label>
                </div>
            </div>

            <div class='row'>
                <div class='input-field col s12'>
                    <i class="icon-lock-closed prefix #3f51b5 indigo-text"></i>
                    <input class='validate' type='password' name='password' id='password' />
                    <label for='password'>  Ingresa tu contraseña</label>
                </div>
            </div>

            <br />
            <center>
                <div class='row'>
                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Entrar</button>
                </div>

            </center>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        Materialize.updateTextFields();
    });
</script>
