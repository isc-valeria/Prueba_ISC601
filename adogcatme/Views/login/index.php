<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-5"></div>
    <div>
        <h5 class="">
            <?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?>
        </h5>
    </div>
    <div class="card card-container">

        <img id="profile-img" class="profile-img-card" src="<?php echo URL ?>Public/imagenes/u.jpg"/>
        <p id="profile-name" class="profile-name-card"></p>
        <form class="needs-validation"  method="POST" action="<?php echo URL?>login/verify" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
            <div class="mb-3">
                <label for="nombre">Usuario</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="nombre" name="nombre" placeholder="Usuario" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Nombre requerido
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="pass">Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Contraseña requerida
                    </div>
                </div>
            </div>
            <div class="">
                <button href="#!" class="btn btn-primary" id="enviar" data-id="" type="submit">Enviar</button>
            </div>
        </form>
        <a href="#" class="forgot-password" data-toggle="modal" data-target="#exampleModalCenter">
            Ha olvidado la contraseña?
        </a>
    </div>
    </div>
</div>
<br>
<br>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Recuperar contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class=" col-mb-12 modal-body row justify-content-md-center">
                <form id="restaurar" class="was-validated">
                    <div class="col-mb-12 ">
                        <label for="user">usuario</label>
                        <input type="text" class="form-control " id="user"  name="user"value="jazi9610@hotmail.com" required>
                        <div class="invalid-feedback">Campo requerido</div>
                    </div>
                    <div class="col-mb-12">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control " id="name" name="name" value="Jazmin" required>
                        <div class="invalid-feedback">Campo requerido</div>
                    </div>
                    <div class="col-mb-12 ">
                        <label for="numero">Telefono</label>
                        <input type="number" name="numero" step="any" class="form-control" value="7227900465" id="numero" required="">
                        <div class="invalid-feedback">Campo requerido (Solo numeros)</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button"   class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" id="ok" class="btn btn-primary">Restaurar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#ok').click(function(){
            $.post("<?php echo URL?>login/reset/",$("#restaurar").serialize(),function(res){
                var datos=JSON.parse(res);
                if (($.isEmptyObject(datos))==true){
                    alert("no coinsiden los regitros");
                }else{
                    alert("tu contraseña es: " + datos['pass']);
                }
            });
        });
    });

</script>

