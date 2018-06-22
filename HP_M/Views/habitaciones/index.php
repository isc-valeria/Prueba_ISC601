<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_habitacion" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Habitación</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="numero_habitacion" type="text"  name="numero_habitacion">
                            <label for="numero_habitacion"  >Número de Habitación</label>
                        </div>

                        <div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <input id="descripcion" type="text"  name="descripcion">
                            <label for="descripcion" >Descripción</label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s5">
                            <select id="id_tipoh" type="text" name="id_tipoh">
                                <option disabled selected>Selecciona Tipo de la Habitacion</option>
                                <?php
                                $result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="id_tipoh">Tipo de Habitación</label>
                        </div>
                        <div class="input-field col s1">
                            <div class="input-field col s1">
                                <a class="btn-floating waves-effect waves-light btn modal-trigger" href="#modal_tipo_habitacion" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_habitaciones_ok" class="btn">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_habitaciones_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card-panel">
    <h4 align="center">Habitaciones Registradas
        <span class="right">
            <a href="#modal_registro" class="btn green white-text modal-trigger" id="add_habitacion">
                <i class="material-icons">add</i>
            </a>
        </span>
    </h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>


    <!-- Modal eliminar -->

    <!--*********************final modal eliminar***********-->
    <table class="responsive-table" id="tabla_content">
        <thead>
        <tr>
            <th>Número de Habitación</th>
            <th>Descripción</th>
            <th>Tipo Habitación</th>
            <th>Estado</th>
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


    <div class="center">
        <a href="<?php echo URL?>habitaciones/print_pdf" target="_blank" id="imprimir_pdf" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Imprimir"><i class="material-icons">picture_as_pdf</i></a>
        <a href="#!"  id="graficar_habitaciones" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Graficar"><i class="material-icons">equalizer</i></a>
    </div>
</div>

<div id="modal_grafica" class="modal">
    <div class="modal-content">
        <h5>Gráfica de habitaciones</h5>
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
        <a href="#!" id="cancelar" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>
<div id="modal_estado_habitacion" class="modal center-align ">
    <div class="modal-content">
        <div class="card-panel teal #00b8d4"><h4 class="left"><a class=" text-black"></a></h4><h4 align="center">Estado de la Habitación</h4></div>


        <div class="row">
            <form class="col s12 pad" autocomplete="off">
                <div class="row">
                    <div class="input-field input-field col s10">
                        <i class="mdi-action-verified-user prefix icon-circleci"></i>
                        <input id="descripcion_estado" type="number" class="validate center" >
                        <label for="descripcion_estado"  data-error="Incorrecto" data-success="Correcto">Descripción</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s9">
                        <button class="btn green waves-effect waves-light right #00838f cyan darken-3" type="submit" name="action">Registar</button>
                    </div>
                    <div class="input-field col s3">
                        <button class="btn red waves-effect waves-light righ #00838f cyan darken-3" type="submit" name="action">Limpiar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="modal_tipo_habitacion" class="modal center-align ">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_tipo" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Tipo de habitaciones</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="tipo_ha" type="text" name="tipo_ha" >
                            <label for="tipo_ha" >Tipo de habitación</label>
                        </div>

                        <div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <input id="precio" type="text" name="precio">
                            <label for="precio">Precio</label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s5">
                            <input id="maximo_personas" type="text" name="maximo_personas">
                            <label for="maximo_personas"  >Máximo de personas</label>
                        </div>

                        <div class="input-field col s1">

                        </div>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_tipo_ok" class="btn ">Registrar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        $('select').material_select();
        $(".modal").modal();
        $("#add_habitacion").click(function(){
            $("#update_habitaciones_ok").hide();
            $("#save_habitaciones_ok").show();
        });
        $("#save_habitaciones_ok").click(function(){
            $("#save_habitacion").submit();

        });

        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>habitaciones/eliminar/'+id;
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
            $("#save_habitaciones_ok").hide();
            $("#update_habitaciones_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>habitaciones/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_habitaciones_ok").data("id",datos["id_habitacion"]);
                $("#numero_habitacion").val(datos["num_habitacion"]);
                $("#descripcion").val(datos["descripcion_hab"]);
                $("#id_tipoh").val(datos["id_tipoh"]);
                $("#nomestadohabitacion").val(datos["id_estadoh"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_habitaciones_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>habitaciones/actualizar/"+id,$("#save_habitacion").serialize(),function(res){
                $('#save_habitacion').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

        $("#save_habitacion").validate({
            rules:{
                numero_habitacion:{
                    required:true,
                    maxlength: 3,
                    number:true,
                },
                descripcion:{
                    required:true,
                    maxlength: 20,
                    minlength: 5,
                    lettersonly:true,
                },
                id_tipoh:{
                    required:true,
                },
                nomestadohabitacion:{
                    required:true,
                },

            },
            messages:{
                numero_habitacion:{
                    required:"Ingresa un número",
                    maxlength:"Máximo 3 digitos",
                    number:"Solo números",


                },
                descripcion:{
                    required:"Agrega una descripción",
                    minlength: "Descripcion insuficiente",

                },
                id_tipoh:{
                    required:"Selecciona un tipo ",
                },
                nomestadohabitacion:{
                    required:"Selecciona un estado ",
                }

            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>habitaciones/crear",$("#save_habitacion").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_habitacion').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    $("#modal_registro").modal("close");
                })
            }
        });

        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });

        $("#graficar_habitaciones").click(function(){
            $.get("<?php echo URL?>habitaciones/graficar",function(res){
                $("#modal_grafica .modal-content p").empty().append(res);
                $("#modal_grafica").modal("open");

            });
        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#add_tipo").click(function(){
            $("#save_tipo_ok").show();
        });
        $("#save_tipo_ok").click(function(){
            $.post("<?php echo URL?>habitaciones/creartipo",$("#save_tipo").serialize(),function(res){
                $("#body_table").empty().append(res);
                $('#save_tipo').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                Materialize.toast('Se ha insertado correctamente', 2500);
            })
        });
    });
    $("#save_tipo").validate({

        rules:{
            tipo_ha:{
                required:true,
                maxlength: 20,
                minlength: 4,
                lettersonly:true,
            },
            precio:{
                required:true,
                maxlength: 4,
                minlength: 3,
                number:true,
            },
            maximo_personas:{
                required:true,
                maxlength: 2,
                minlength: 1,
                number:true,
            },
        },
        messages:{
            tipo_ha:{
                required:"Ingresa descripción",
                maxlength:"Maximo 20 caracteres",
                minlength:"Minimo 4 caracteres",

            },
            precio:{
                required:"Ingresa un precio",
                number:"Sólo números",
                maxlength:"Maximo 4 digitos",
                minlength:"Minimo 3 digitos",

            },
            maximo_personas:{
                required:"Ingresa el máximo de personas",
                number:"Sólo números",
                maxlength:"Maximo 2 digitos",
                minlength:"Minimo 1 digitos",
            },
        },
        errorPlacement: function(error, element) {
            $(element)
                .closest("form")
                .find("label[for='" + element.attr("id") + "']")
                .attr('data-error', error.text());
        },
        submitHandler:function(form){
            $.post("<?php echo URL?>tipos_habitacion/crear",$("#save_tipo").serialize(),function(res){
                $("#body_table").empty().append(res);
                $('#save_tipo').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                $("#modal_registro").modal("close");
            })
        }
    });
</script>