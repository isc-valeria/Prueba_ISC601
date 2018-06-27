<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_turno" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Turnos</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s3.5">
                            <input id="descripcion_turno" type="text" name="descripcion_turno">
                            <label for="descripcion_turno"   >Descripcion Turno</label>
                        </div>
                        <div class="input-field col s3.5">
                            <input id="hr_entrada" type="text"  name="hr_entrada">
                            <label for="hr_entrada"  >Hora de Entrada</label>
                        </div>

                        <div class="input-field col s3.5">
                            <input id="hr_salida" type="text"  name="hr_salida">
                            <label for="hr_salida"  >Hora de Salida</label>
                        </div>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_turno_ok" class="btn modal-close">Registrar</a>
                        </div>

                        <div class="input-field col s12">
                            <a href="#!" id="update_turno_ok" class="btn modal-close " data-id="">Actualizar</a>
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
                <li><a href="<?php echo URL?>empleados" class="white-text modal-trigger" id="add_servicios">Empleados</a></li>
                <li><a   href="<?php echo URL?>Puestos" class="white-text modal-trigger" id="add_observaciones">Puestos</a></li>

                <a  href="#modal_registro"  class="btn blue accent-3 white-text tooltipped modal-trigger  " data-position="bottom" data-delay="50"
                       data-tooltip="Turnos" id="add_turno" ><i class="material-icons">access_time</i></a>


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

    <!--*********************final modal eliminar***********-->
    <table class="responsive-table" id="tabla_content">
        <thead>
        <tr>

            <th>Descripcion del puesto</th>
            <th>Hora de Entrada</th>
            <th>Hora de Salida</th>
            <th>Eliminar</th>
            <th>Actualizar</th>

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
        $("#add_turno").click(function(){

            $("#update_turno_ok").hide();
            $("#save_turno_ok").show();

        });
        $("#save_turno_ok").click(function(){
            $.post("<?php echo URL?>Turnos/crear",$("#save_turno").serialize(),function(res){
                $("#body_table").empty().append(res);
                $('#save_turno').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
            })
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Turnos/eliminar/'+id;
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
            $("#save_turno_ok").hide();
            $("#update_turno_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>Turnos/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_turno_ok").data("id",datos["id_turno"]);
                $("#descripcion_turno").val(datos["descripcion_turno"]);
                $("#hr_entrada").val(datos["hr_entrada"]);
                $("#hr_salida").val(datos["hr_salida"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_turno_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>Turnos/actualizar/"+id,$("#save_turno").serialize(),function(res){
                $('#save_turno_ok').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });


        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });

    });
</script>