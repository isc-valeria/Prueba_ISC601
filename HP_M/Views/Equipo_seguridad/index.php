<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_equipo" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Equipo</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="nombre_equisegu" type="text" name="nombre_equisegu">
                            <label for="nombre_equisegu" >Nombre De Equipo</label>
                        </div>
                        <div class="input-field col s5">
                            <select id="descripcion_tipo" type="text"  name="descripcion_tipo">
                                <option value="" disabled selected>Selecciona La Descripcion</option>
                                <?php
                                $result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="descripcion_tipo" >Descripción</label>
                        </div>
                        <div class="input-field input-field col s5">
                            <input id="cantidad" type="text" name="cantidad">
                            <label for="cantidad">Cantidad De Equipo</label>
                        </div>
                        <div class="input-field col s5">
                            <select id="descripcion_estadomantenimiento" type="text" name="descripcion_estadomantenimiento">
                                <option value="" disabled selected>Selecciona El Estado</option>
                                <?php
                                $result2=$datos[2];
                                while ($row=mysqli_fetch_array($result2))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="descripcion_estadomantenimiento" >Estado</label>
                        </div>

                        <!--<div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <input id="descripcion" type="text" class="validate" name="descripcion">
                            <label for="descripcion"  data-error="incorrecto" data-success="Correcto">Descripción</label>
                        </div>-->
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_equipo_ok" class="btn">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_equipo_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card-panel">
    <h4 align="center">Equipo De Seguridad <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_equipo">
                <i class="material-icons">add</i>
            </a></span></h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>


    <!-- Modal eliminar -->

    <!--*********************final modal eliminar***********-->
    <table class="responsive-table" id="tabla_equipo">
        <thead>
        <tr>
            <th>id</th>
            <th>Nombre de Equipo</th>
            <th>Descripción</th>
            <th>Cantidad</th>
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
</div>


<div id="modal_eliminar" class="modal">
    <div class="modal-content">
        <h5>¿Desea Eliminar el Registro?</h5>
        <hr />
    </div>
    <div class="modal-footer">
        <a href="#!" id="eliminar_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
        <a href="#!"  class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>




<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();
        $("#add_equipo").click(function(){
            $("#update_equipo_ok").hide();
            $("#save_equipo_ok").show();
        });
        $("#save_equipo_ok").click(function(){
            $("#save_equipo").submit();
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Equipo_seguridad/eliminar/'+id;
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
            $("#save_equipo_ok").hide();
            $("#update_equipo_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>Equipo_seguridad/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_equipo_ok").data("id",datos["id_equiposegu"]);
                $("#nombre_equisegu").val(datos["nombre_equisegu"]);
                $("#descripcion_tipo").val(datos["id_tipoequisegu"]);
                $("#cantidad").val(datos["cantidad"]);
                $("#descripcion_estadomantenimiento").val(datos["id_estadomantenimiento"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_equipo_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>Equipo_seguridad/actualizar/"+id,$("#save_equipo").serialize(),function(res){
                $('#save_equipo_ok').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

        ///validar formulario
        $("#save_equipo").validate({

            rules: {
                nombre_equisegu: {
                    required: true,
                    maxlength: 30,
                    minlength: 4,
                    lettersonly: true,
                },
                descripcion_tipo: {
                    required: true,

                },
                cantidad: {
                    required:true,
                    number:true,
                    maxlength: 3,
                    minlength: 1,

                },
                descripcion_estadomantenimiento: {
                    required: true,

                }
            },
            messages:{
                nombre_equisegu:{
                    required:"Ingresa un nombre",
                    maxlength:"Nombre muy largo",
                    minlength:"Minimo 4 caracteres",

                },
                descripcion_tipo:{
                    required:"selecciona un tipo",


                },
                cantidad:{
                    number:"Sólo números",
                    required:"Ingresa un número",
                    maxlength:"Maximo 3 numeros",
                    minlength:"Minimo 1 numeros"

                },
                descripcion_estadomantenimiento:{
                    required:"Selecciona un Puesto",
                }
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>Equipo_seguridad/crear",$("#save_equipo").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_equipo').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    $("#modal_registro").modal("close");
                    Materialize.toast('Se ha insertado correctamente', 2500);

                })
            }
        });

        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_equipo"), this.value);
        });

    });
</script>