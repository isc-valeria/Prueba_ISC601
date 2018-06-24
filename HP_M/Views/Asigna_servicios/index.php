<?php
?>
<!-- Modal registro -->
<div id="modal_registro1" class="modal">
    <title>Asignar servicio</title>
    <div class="modal-content">
        <div class="card-pannel">
            <h4 class="left"><a class="icon-loop2 black-text"></a></h4>
            <h5 align="center">Asignación de Servicios</h5>
            <div class="divider"></div>
            <div class="row">
                <form action="" id="save_asigna_servicios" enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="input-field col s4">
                            <select id="num_habitacion" type="text" class="validate" name="num_habitacion">
                                <option value="" disabled selected>Selecciona Tipo de Habitación</option>
                                <?php
                                $returnhab=$datos[1];
                                while ($row=mysqli_fetch_array($returnhab))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="num_habitacion" data-error="incorrecto" data-success="Correcto" >Habitacion</label>
                        </div>
                        <div class="col s1"></div>
                        <div class="input-field col s4">
                            <select id="descripcion_ser" type="text" class="validate" name="descripcion_ser">

                                <option value="" disabled selected>Selecciona servicio</option>
                                <?php
                                $returnser=$datos[2];
                                while ($row=mysqli_fetch_array($returnser))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="descripcion_ser" data-error="incorrecto" data-success="Correcto">Servcios</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <select id="descripcion_est" type="text" class="validate" name="descripcion_est">
                                <option value="" disabled selected>Selecciona estado</option>
                                <?php
                                $returnest=$datos[3];
                                while ($row=mysqli_fetch_array($returnest))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="descripcion_est " data-error="incorrecto" data-success="Correcto">Estados</label>
                        </div>
                        <div class="col s2"></div>
                        <div class="input-field col s4 ">
                            <label for="fecha_reg">Fecha de registro</label>
                            <input type="text" class="datepicker" name="fecha_reg">
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_asigna_servicios_ok" class="btn modal-close">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_asigna_servicios_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="paneltablas" class="row">
    <div class="col l12 s12 m10 offset-m1">
        <div class="card-panel">

            <h4 align="center">Asignación de servicios
                <span class="right" >
                    <a href="#modal_registro1" class="btn green white-text modal-trigger" id="add_asigna_servicios">
                        <i class="material-icons">add</i>
                    </a>
                </span>
            </h4>
            <div class="input-field col s4 offset-s8">
                <i class="mdi-action-verified-user prefix icon-search"></i>
                <input id="buscar" type="text" placeholder="Buscar">
            </div>

            <table class="centered" id="tabla_content">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Habitaciónes</th>
                    <th>Servicios</th>
                    <th>Estado</th>
                    <th>fecha de registro</th>
                </tr>
                </thead>

                <tbody id="body_table">
                <?php
                    require_once("tabla.php");
                ?>
                </tbody>
                <div class="divider"></div>
            </table>
            <div class="divider"></div>
            <!--********************************-->

        </div>
    </div>
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
    $(document).ready(function() {
            $(".modal").modal();
            $('select').material_select();
            $('.datepicker').pickadate();
            $('#add_asigna_servicios').click(function () {
                $("#update_asigna_servicios_ok").hide();
                $("#save_asigna_servicios_ok").show();
        });
            $('#save_asigna_servicios_ok').click(function () {
            $.post("<?php echo URL?>asigna_servicios/crear",$("#save_asigna_servicios").serialize(),function (res) {
                $("#body_table").empty().append(res);
                $('#save_asinga_servicios').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                Materialize.toast('Se ha insertado correctamente', 2500);
                console.log( $("#save_asigna_servicios").serialize());
            });
        });

            $("#body_table").on("click", "a.btn_eliminar", function () {
            var id = $(this).data("id");
            var url = '<?php echo URL?>asigna_servicios/eliminar/' + id;
            $("#eliminar_ok").attr("url", url);
            $("#modal_eliminar").modal("open");
        });
                $("#eliminar_ok").click(function () {
            $.get($(this).attr("url"), function (res) {
                $("#body_table").empty().append(res);
                Materialize.toast('Se ha eliminado correctamente', 2500);
            });
          });


        $("#body_table").on("click","a.btn_modificar", function () {
            $("#save_asigna_servicios_ok").hide();
            $("#update_asigna_servicios_ok").show();
            var id = $(this).data("id");
            $.get("<?php echo URL?>asigna_servicios/modificar/" + id, function (res) {
                var datos=JSON.parse(res);
                $("#update_asigna_servicios_ok").data("id", datos["id_asignaser"]);
                $("#num_habitacion").val(datos["num_habitacion"]);
                $("#descripcion_est").val(datos["descripcion_est"]);
                $("#descripcion_ser").val(datos["descripcion_ser"]);
                $("#fecha_reg").val(datos["fecha_reg"]);
                Materialize.updateTextFields();
                $("#modal_registro1").modal("open");
            });
        });
        $("#update_asigna_servicios_ok").click(function () {
            var id = $(this).data("id");
            console.log( $("#save_asigna_servicios").serialize());
            $.post("<?php echo URL?>asigna_servicios/actualizar/" + id, $("#save_asigna_servicios").serialize(), function (res) {
                $('#save_asigna_servicios').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });


        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });                
    });

</script>
