<div id="modal_servicio" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_servicios" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Servicios</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="id_servicio" type="text" class="validate" name="id_servicio">
                            <label for="id_servicio"  data-error="incorrecto" data-success="Correcto">Folio</label>
                        </div>

                        <div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <input id="descripcion_ser" type="text" class="validate" name="descripcion_ser">
                            <label for="descripcion_ser"  data-error="incorrecto" data-success="Correcto">Descripción</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field cols 5">

                        </div>
                        <div class="input-field col s5">
                            <label for="hora_inicio"><i class="icon-clock"></i>Hora Inicio</label>
                            <input id="hora_inicio" type="text" class="timepicker" name="hora_inicio">
                        </div>
                        <div class="input-field col s1"></div>
                        <div class="input-field col s5">
                            <label for="hora_fin"><i class="icon-clock"></i>Hora de Fin</label>
                            <input id="hora_fin" type="text" class="timepicker" name="hora_fin">
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_servicios_ok" class="btn modal-close">Registrar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card-panel">
    <h4 align="center">Servicios que se Ofrecen
        <span class="right">
            <a href="#modal_servicio" class="btn green white-text modal-trigger" id="add_servicios">
                <i class="material-icons">add</i>
            </a>
        </span>
    </h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" type="text">
            <label for="buscar"  data-error="incorrecto" data-success="Correcto">Buscar</label>
        </div>
    </div>
    <table class="responsive-table">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Descripción</th>
                    <th>Hora de Inicio</th>
                    <th>Hora de fin</th>
                </tr>
            </thead>
        <tbody id="body_table">
        <?php
            require_once ('tabla.php');
        ?>
        </tbody>
        <div class="divider"></div>
    </table>
</div>
<div id="modal_eliminar" class="modal">
    <div class="modal-content">
        <h5>¿Desea Eliminar el Registro?</h5>

    </div>
    <div class="modal-footer">
        <a href="#!" id="eliminar_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
        <a href="#!" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $(".modal").modal();
        $(".timepicker").pickatime();
        $("#add_servicios").click(function () {
            $("#update_servicios_ok").hide();
            $("#save_servicios_ok").show();
        });
        $("#save_servicios_ok").click(function () {

            //console.log("ok")
           console.log($("#save_servicios").serialize());
            $.post("<?php echo URL?>servicios/crear",$("#save_servicios").serialize(),function (res) {
                console.log(res)
            //console.log($("#save_servcios_ok").serialize());
                $("#body_table").empty().append(res);

               $('#save_servicios').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
            });
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>servicios/eliminar/'+id;
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
            $("#save_servicios_ok").hide();
            $("#update_servicios_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>servicios/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_servicios_ok").data("id",datos["id_servicio"]);
                $("#Folio").val(datos["num_habitacion"]);
                $("#descripcion").val(datos["descripcion_hab"]);
                $("#tipohabitacion").val(datos["id_tipoh"]);
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
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

    });
</script>