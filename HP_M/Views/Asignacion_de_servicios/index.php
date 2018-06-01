<div id="modal_asigna" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_asignacion_de_servicios" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Asginar servicios</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                         <div class="input-field col s5">
                            <select id="tipohabitacion" type="text" class="validate" name="id_tipoh">
                                <option value="" disabled selected>Selecciona Tipo de la Habitacion</option>
                                <?php
                                $result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="tipohabitacion" data-error="incorrecto" data-success="Correcto" >Tipo de Habitación</label>
                          </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_servicios_ok" class="btn modal-close">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_servicios_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card-panel">
    <h4 align="center">Servicios asignados <span class="right"><a href="#modal_asigna" class="btn green white-text modal-trigger" id="add_asigna_servicio">
                <i class="material-icons">add</i>
            </a></span></h4>
    <div class="divider"></div>
    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
</div>

    <table class="responsive-table">
        <thead>
        <tr>
            <th>Habitaciónes</th>
            <th>Servicios</th>
            <th>Estado</th>
            <th>Fecha</th>
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
    $("document").ready(function () {
        $(".modal").modal();
        $(".datepicker").pickadate();
        $(".timepicker").pickatime();
        $("#add_servicios").click(function () {
            $("#update_servicios_ok").hide();
            $("#save_servicios_ok").show();
        });
        $("#save_servicios_ok").click(function () {
            $.post("<?php echo URL?>servicios/crear"),$("#save_servicios").serialize(),function (res) {
                $("#body_table").empty().append(res);
                $('#save_servicios').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
            }
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

