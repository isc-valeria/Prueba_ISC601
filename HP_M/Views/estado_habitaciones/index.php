<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_estadohabitacion" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Estado de habitacion</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="descripcion_estado" type="text"  name="descripcion_estado">
                            <label for="descripcion_estado"  >Descripcion del estado</label>
                        </div>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_estadohabitacion_ok" class="btn ">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_estadohabitacion_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card-panel">
    <h4 align="center">Estados de Habitaciones<span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_estadohabitacion"><i class="material-icons">add</i></a></span></h4>
    <div class="divider"></div>
    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>
    <table class="responsive-table" id="tabla_content">
        <thead>
            <tr>
                <th>Id</th>
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
        <a href="#!" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();
        $("#add_estadohabitacion").click(function(){
            $("#update_estadohabitacion_ok").hide();
            $("#save_estadohabitacion_ok").show();
        });

        $("#save_estadohabitacion_ok").click(function() {
            $("#save_estadohabitacion").submit();
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>estado_habitaciones/eliminar/'+id;
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
            $("#update_estadohabitacion_ok").show();
            $("#save_estadohabitacion_ok").hide();
            var id=$(this).data("id");
            $.get("<?php echo URL?>estado_habitaciones/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_estadohabitacion_ok").data("id",datos["id_estadoh"]);
                $("#descripcion_estado").val(datos["estado_ha"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });

        $("#update_estadohabitacion_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>estado_habitaciones/actualizar/"+id,$("#save_estadohabitacion").serialize(),function(res){
                $('#save_estadohabitacion').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });


        $("#save_estadohabitacion").validate({

            rules:{
                descripcion_estado:{
                    required:true,
                },
            },
            messages:{
                descripcion_estado:{
                    required:"Campo obligatorio",

                },
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>estado_habitaciones/crear",$("#save_estadohabitacion").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_estadohabitacion').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    $("#modal_registro").modal("close");
                })
            }
        });
        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });

    });
</script>


