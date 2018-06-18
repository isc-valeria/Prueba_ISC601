<body background="<?php echo URL?>/Public/imagenes/fondohotel.jpg" >
<div></div>
<div class="section"></div>
<main >
    <center>
        <img class="responsive-img" style="width: 250px;" src="<?php echo URL?>/Public/imagenes/hotel.gif" />
        <div class="section"></div>


        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                <form class="col s12" method="post">
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


                        <label style='float: right;'>
                            <a class='red-text' href='#!'><b>Olvidaste tu contraseña?</b></a>
                        </label>
                    </div>

                    <br />
                    <center>
                        <div class='row'>
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Entrar</button>
                        </div>
                        <a href="#!">Crear una cuenta</a>
                    </center>
                </form>
            </div>
        </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>
</body>
<div id="modal_eliminar" class="modal center-align ">
    <div class="modal-content">
        <div class="card-panel teal #00b8d4"><h4 class="left"><a class=" text-black"></a></h4><h4 align="center">Tipo Habitación</h4></div>


    </div>
</div>

<div id="modal_registro" class="modal"  >
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_empleados" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Empleados</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s3.5">
                            <input id="nombre_emp" type="text" class="validate" name="nombre_emp">
                            <label for="nombre_emp"  data-error="Incorrecto" data-success="Correcto" >Nombre del Empleado</label>
                        </div>
                        <div class="input-field col s3.5">
                            <input id="ap_emp" type="text" class="validate" name="ap_emp">
                            <label for="ap_emp"  data-error="incorrecto" data-success="Correcto">Apellido Paterno</label>
                        </div>

                        <div class="input-field col s3.5">
                            <input id="am_emp" type="text" class="validate" name="am_emp">
                            <label for="am_emp"  data-error="incorrecto" data-success="Correcto">Apellido Materno</label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s5">
                            <select id="descripcion_puesto" type="text" class="validate" name="id_puesto">
                                <option value="" disabled selected>Selecciona Puesto</option>
                                <?php
                                $result2=$datos[1];
                                while ($row=mysqli_fetch_array($result2))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="descripcion_puesto" data-error="incorrecto" data-success="Correcto" >Tipo de Puestos</label>
                        </div>

                        <div class="input-field col s1">
                            <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_tipo_Puesto" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                        </div>

                        <div class="input-field col s5">
                            <select id="" type="text" class="validate" name="nomestadohabitacion">
                                <option value="" disabled selected>Selecciona turno</option>
                                <?php
                                $result3=$datos[2];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="nomestadohabitacion" data-error="incorrecto" data-success="Correcto">Tipo de Turnos </label>

                        </div>

                        <div class="input-field col s1">
                            <a class="btn-floating disabled waves-effect waves-light btn modal-trigger " href="#modal_turnos" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="Correo_Empleado" type="text" class="validate" name="Correo_Empleado">
                            <label for="Correo_Empleado"  data-error="Incorrecto" data-success="Correcto" >Correo</label>
                        </div>
                        <div class="input-field col s3.5">
                            <input id="Contraseña_Empleado" type='text' class="validate" name="Contraseña_Empleado">
                            <label for="Contraseña_Empleado"  data-error="incorrecto" data-success="Correcto">Contraseña</label>
                        </div>

                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_habitaciones_ok" class="btn modal-close">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_empleados_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="modal_registro_turno" class="modal"  >
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_habitacion" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Empleados</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">

                    <div class="row">

                        <div class="input-field col s5">
                            <select id="descripcion_puesto" type="text" class="validate" name="id_puesto">
                                <option value="" disabled selected>Selecciona Puesto</option>
                                <?php
                                $result2=$datos[1];
                                while ($row=mysqli_fetch_array($result2))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="descripcion_puesto" data-error="incorrecto" data-success="Correcto" >Tipo de Puestos</label>
                        </div>

                        <div class="input-field col s1">
                            <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_tipo_Puesto" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                        </div>

                        <div class="input-field col s5">
                            <select id="" type="text" class="validate" name="nomestadohabitacion">
                                <option value="" disabled selected>Selecciona turno</option>
                                <?php
                                $result3=$datos[2];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="nomestadohabitacion" data-error="incorrecto" data-success="Correcto">Tipo de Turnos </label>

                        </div>

                        <div class="input-field col s1">
                            <a class="btn-floating disabled waves-effect waves-light btn modal-trigger " href="#modal_turnos" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                        </div>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_habitaciones_ok" class="btn modal-close">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_empleados_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        $(".modal").modal();
        $("#add_empleado").click(function(){
            $("#update_empleados_ok").hide();
            $("#save_habitaciones_ok").show();
        });
        $("#save_habitaciones_ok").click(function(){
            //console.log("ok")
            //console.log($("#save_habitacion").serialize());
            //$.post("<?php //echo URL?>//empleados/crear",$("#save_habitacion").serialize(),function(res){
            //    $("#body_table").empty().append(res);
            //    $('#save_habitacion').find('input, select, textarea').val('');
            //    Materialize.updateTextFields();
            //    //$("#modal_registro").modal("close");
            //    Materialize.toast('Se ha insertado correctamente', 2500);
            })
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>empleados/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#modal_eliminar").modal("open");
        });
        $("#add_empleado").validate({
            rules:{
                email:{
                    required:true,
                    //ValidateEmail:true,
                },
                password:{
                    required:true,
                },
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function (form) {
                console.log("okis");
            }
        })

    });
</script>

