<div id="modal_registro" class="modal"  >
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_empleado" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Empleados</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s3.5">
                            <input id="nombre_emp" type="text" name="nombre_emp">
                            <label for="nombre_emp"   >Nombre del Empleado</label>
                        </div>
                        <div class="input-field col s3.5">
                            <input id="ap_emp" type="text"  name="ap_emp">
                            <label for="ap_emp"  >Apellido Paterno</label>
                        </div>

                        <div class="input-field col s3.5">
                            <input id="am_emp" type="text"  name="am_emp">
                            <label for="am_emp"  >Apellido Materno</label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s5">
                            <select id="id_puesto" type="text" name="id_puesto">
                                <option value="" disabled selected>Selecciona Puesto</option>
                                <?php
                                $result2=$datos[1];
                                while ($row=mysqli_fetch_array($result2))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="id_puesto" >Tipo de Puestos</label>

                        </div>
                        <div class="input-field ">
                            <div class="input-field col s1">
                                <a class="btn-floating waves-effect waves-light btn modal-trigger" href="<?php echo URL?>Puestos" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                            </div>
                        </div>

                        <div class="input-field col s5">
                            <select id="id_turno" type="text"  name="id_turno">
                                <option value="" disabled selected>Selecciona turno</option>
                                <?php
                                $result3=$datos[2];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="id_turno" >Tipo de Turnos </label>
                        </div>
                        <div class="input-field ">
                            <div class="input-field col s1">
                                <a class="btn-floating waves-effect waves-light btn modal-trigger" href="<?php echo URL?>Turnos " ><i class="icon-plus #00838f cyan darken-3"></i></a>
                            </div>
                        </div>
                        <div class="input-field col s3.5">
                            <input id="codigo" type="text"  name="codigo">
                            <label for="codigo"  >Codigo</label>
                        </div>
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
                                <a href="#!" id="save_empleados_ok" class="btn">Registrar</a>
                        </div>
                        <div class="input-field col s12" >

                            <a href="#!" id="update_empleados_ok" class="btn modal-close "   data-id="" >Actualizar</a>


                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<nav>
    <div class="nav-wrapper cyan lighten-2">

        <ul class="left hide-on-med-and-down">
            <li><a href="<?php echo URL?>Turnos" class="white-text modal-trigger" id="add_servicios">Turnos</a></li>
            <li><a   href="<?php echo URL?>Puestos" class="white-text modal-trigger" id="add_observaciones">Puestos</a></li>
            <li><a  href="<?php echo URL?>Entrada" class="white-text modal-trigger" id="add_venkilo">Entradas</a></li>
            <li><a  href="<?php echo URL?>Salida" class="white-text modal-trigger" id="add_venpieza">Salidas</a></li>
            <a href="<?php echo URL?>empleados/print_pdf" target="_blank" id="imprimir_pdf" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Imprimir"><i class="material-icons">picture_as_pdf</i></a>
            <a href="#!"  id="graficar_empleados" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Graficar"><i class="material-icons">equalizer</i></a>
            <a href="#modal_registro" class="btn blue accent-3 white-text modal-trigger" id="add_empleado" ><i class="material-icons">person_add</i></a>
            <a href="<?php echo URL?>Usuarios" target="_blank" id="imprimir_pdf" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Crear cuenta"><i class="material-icons">add</i></a>

        </ul>
    </div>

</nav>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>


    <!-- Modal eliminar -->

</div>
    <!--*********************final modal eliminar***********-->
    <table class="responsive-table" id="tabla_content">
        <thead>
        <tr>

            <th>Nombre</th>
            <th>Apellido</th>
            <th>Apellido</th>
            <th>Puesto</th>
            <th>Turno</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Codigo</th>
            <th></th>
            <th></th>


        </tr>
        </thead>

        <tbody id="body_table">
        <?php
        require_once ("tabla.php");
        ?>
        </tbody>
    </table>

<div id="modal_grafica" class="modal">
    <div class="modal-content">
        <h5>Gráfica de Empleados</h5>
        <p>

        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" id="cancelar" class="modal-close red white-text waves-effect waves-green btn-flat">Cerrar</a>
    </div>
</div>

<div id="modal_eliminar" class="modal">
    <div class="modal-content">
        <h5>¿Desea Eliminar el Registro?</h5>
        <hr />
    </div>
    <div class="modal-footer">
        <a href="#!" id="eliminar_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
        <a href="#!" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();
        $("#add_empleado").click(function(){

            $("#update_empleados_ok").hide();
            $("#save_empleados_ok").show();
        });


        $("#save_empleados_ok").click(function(){

                $("#save_empleado").submit();
            /*

             */

        });


        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>empleados/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#modal_eliminar").modal("open");
        });
        $("#eliminar_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table").empty().append(res);
                Materialize.toast('Se ha eliminado correctamente', 2500);
            });
        });
        $("#body_table").on("click","a.btn_modificar",function(){
            $("#save_empleados_ok").hide();
            $("#update_empleados_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>empleados/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_empleados_ok").data("id",datos["id_empleado"]);
                $("#nombre_emp").val(datos["nombre_emp"]);
                $("#ap_emp").val(datos["ap_emp"]);
                $("#am_emp").val(datos["am_emp"]);
                $("#id_puesto").val(datos["id_puesto"]);
                $("#id_turno").val(datos["id_turno"]);
                $("#codigo").val(datos["codigo"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_empleados_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>empleados/actualizar/"+id,$("#save_empleado").serialize(),function(res){
                $('#save_empleado').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });


        ///validar formulario
        $("#save_empleado").validate({

            rules:{
                nombre_emp:{
                    required:true,
                    maxlength: 13,
                    minlength: 4,
                    lettersonly:true,
                },
                ap_emp:{
                    required:true,
                    maxlength: 12,
                    minlength: 4,
                    lettersonly:true,
                },
                am_emp:{
                    required:true,
                    maxlength: 12,
                    minlength: 4,
                    lettersonly:true,
                },
                id_puesto:{
                    required:true,
                },
                id_turno:{
                    required:true,
                },
                codigo:{
                    required:true,
                    maxlength: 12,
                    minlength: 4,
                    number:true,
                }
            },
            messages:{
                nombre_emp:{
                    required:"Ingresa un nombre",
                    maxlength:"Maximo 13 caracteres",
                    minlength:"Minimo 4 caracteres",

                },
                ap_emp:{
                    required:"Ingresa un Apellido",
                    maxlength:"Maximo 12 caracteres",
                    minlength:"Minimo 4 caracteres",

                },
                am_emp:{
                    required:"Ingresa un Apellido",
                    maxlength:"Maximo 12 caracteres",
                    minlength:"Minimo 4 caracteres",

                },
                id_puesto:{
                    required:"Selecciona un Puesto",
                },
                id_turno:{
                    required:"Selecciona Un Turno",
                },
                codigo:{
                    required:"Ingresa un codigo numerico",
                    maxlength:"Maximo 10 numero",
                    minlength:"Minimo 4 numeros",
                    number:"solo numeros",


                },

            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>empleados/crear",$("#save_empleado").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_empleado').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    $("#modal_registro").modal("close");
                    Materialize.toast('Se ha insertado correctamente', 2500);

                })
            }
        });
        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });


        $("#graficar_empleados").click(function(){
            $.get("<?php echo URL?>empleados/graficar",function(res){
                $("#modal_grafica .modal-content p").empty().append(res);
                $("#modal_grafica").modal("open");

            });
        });

    });
</script>
