<?php
?>
<!-- Modal registro -->
<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-pannel">
            <h4 class="left"><a class="icon-loop2 black-text"></a></h4>
            <h5 align="center">Asignación de Servicios</h5>
            <div class="divider"></div>
            <code class="languaje-markup"></code>
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
                            <label for="descripcion_est" data-error="incorrecto" data-success="Correcto">Estados</label>
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

            <h4 align="center">Salidas Registradas
                <span class="right" >
                    <a href="#modal_registro" class="btn green white-text modal-trigger" id="add_asigna_servicios">
                        <i class="material-icons">add</i>
                    </a>
                </span>
            </h4>
            <div class="input-field col s4 offset-s8">
                <i class="mdi-action-verified-user prefix icon-search"></i>
                <input id="Folio" type="text">
                <label for="Folio"  data-error="incorrecto" data-success="Correcto">Folio</label>
            </div>

            <table class="centered" id="body_table">
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
            });
        });
    });

</script>
