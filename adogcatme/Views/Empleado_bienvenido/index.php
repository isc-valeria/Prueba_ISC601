<br>
<br>
<br>
<link type="text/css" href="<?php echo URL?>Public/css/modern-business.css" rel="stylesheet">
<div class="row justify-content-md-center">
    <h1>Bienvenido Empleado</h1>
</div>
<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-12">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Control de Empleados</h5>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="nav-link btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#agregar">+</button>
                            <a href="<?php echo URL?>Empleado_bienvenido/print_pdf" target="_blank" class="nav-link btn btn-sm btn-outline-secondary">PDF</a>
                            <a href="#!" id="graficar_habitaciones" class="nav-link btn btn-sm btn-outline-secondary">Gráfica</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>

                    <tbody id="body_table">
                    <?php
                    require_once ("tabla.php");
                    ?>
                    </tbody>
                </table>
            </div>

        </main>

    </div>
</div>

<div class="modal fade" id="agregar" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation"  id="save_emp" method="POST" action="<?php echo URL ?>Empleado_bienvenido/crear"  autocomplete="off" novalidate>
                    <div class="form-row">

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                            <div class="invalid-feedback">
                                Ingresa un Nombre
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="pass">Contraseña</label>
                            <input type="password" class="form-control" id="pass" name="pass" required>
                            <div class="invalid-feedback">
                                Contraseña
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit" href="#!" id="save_emp_ok">Registrar</button>
                        <button class="btn btn-success" type="submit" href="#!" id="update_emp_ok" data-dismiss="modal">Actualizar</button>
                        <script type="text/javascript">$("#update_emp_ok").hide();</script>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="modal_eliminar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¿Desea eliminar el registro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="eliminar_ok" data-dismiss="modal" >
                    Aceptar
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);


                $("#body_table").on("click","a.btn_eliminar",function(){
                    var id=$(this).data("id");
                    var url='<?php echo URL?>Empleado_bienvenido/eliminar/'+id;
                    $("#eliminar_ok").attr("url",url);
                    $("#modal_eliminar").modal('show');
                });
                $("#eliminar_ok").click(function(){
                    $.get($(this).attr("url"),function(res){
                        $("#body_table").empty().append(res);
                    });
                });

                $("#body_table").on("click","a.btn_modificar",function(){
                    $("#save_emp_ok").hide();
                    $("#update_emp_ok").show();
                    var id=$(this).data("id");
                    $.get("<?php echo URL?>Empleado_bienvenido/modificar/"+id,function(res){
                        var datos=JSON.parse(res);
                        $("#update_emp_ok").data("id",datos["id_persona"]);
                        $("#Nombre").val(datos["Nombre"]);
                        $("#Apellido_patern").val(datos["Apellido_patern"]);
                        $("#Apellido_matern").val(datos["Apellido_matern"]);
                        $("#email").val(datos["email"]);
                        $("#pass").val(datos["pass"]);

                        $("#agregar").modal('show');
                    });
                });
                $("#update_emp_ok").click(function(){
                    var id=$(this).data("id");
                    $.post("<?php echo URL?>Empleado_bienvenido/actualizar/"+id,$("#save_emp").serialize(),function(res){
                        $('#save_emp').find('input, select, textarea').val('');
                        $("#body_table").empty().append(res);

                        swal("Actualización completa", " ", "success");
                    })
                });

                $("#graficar_habitaciones").click(function(){
                    $.get("<?php echo URL?>Empleado_bienvenido/graficar",function(res){
                        $("#modal_grafica .modal-content p").empty().append(res);
                        $("#modal_grafica").modal('show');
                    });
                });

            });
        }, false);
    })();

</script>