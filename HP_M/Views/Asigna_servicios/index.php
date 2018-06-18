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
                        <div class="input-field col s4 offset-s8">
                            <i class="mdi-action-verified-user prefix icon-search"></i>
                            <input id="Folio" type="text">
                            <label for="Folio"  data-error="incorrecto" data-success="Correcto">Folio</label>
                        </div>
                        <div class="input-field col s4">
<<<<<<< HEAD

=======
                            <select id="tipohabitacion" type="text" class="validate">
                                <option value="" disabled selected>Selecciona Tipo de Habitación</option>
                                <?php
                                $returnhab=$datos[1];
                                while ($row=mysqli_fetch_array($returnhab))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
>>>>>>> 1c1d11be138960cfe5c208557624153679824ff5
                            <label for="tipohabitacion" data-error="incorrecto" data-success="Correcto" >Habitacion</label>

                        </div>
                        <div class="col s1"></div>
                        <div class="input-field col s4">
<<<<<<< HEAD

=======
                            <select id="servicios1" type="text" class="validate">
                                <option value="" disabled selected>Selecciona servicio</option>
                                <?php
                                $returnser=$datos[2];
                                while ($row=mysqli_fetch_array($returnser))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
>>>>>>> 1c1d11be138960cfe5c208557624153679824ff5
                            <label for="servicios1" data-error="incorrecto" data-success="Correcto">Servcios</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
<<<<<<< HEAD

=======
                            <select id="estadohabitacion" type="text" class="validate">
                                <option value="" disabled selected>Selecciona estado</option>
                                <?php
                                $returnest=$datos[3];
                                while ($row=mysqli_fetch_array($returnest))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
>>>>>>> 1c1d11be138960cfe5c208557624153679824ff5
                            <label for="nomestadohabitacion" data-error="incorrecto" data-success="Correcto">Estados</label>
                        </div>
                        <div class="col s2"></div>
                        <div class="input-field col s4 ">
                            <label>Fecha de registro</label>
                            <input type="text" class="datepicker">
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <a href="#!" class="btn" id="save_asigna_servicios_ok">Aceptar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="paneltablas" class="row">
    <div class="col l12 s12 m10 offset-m1">
        <div class="card-panel">

            <h4 align="center">Salidas Registradas <span class="right" ><a href="#modal_registro" class="btn green white-text" id="add_asigna_servicios"><i class="material-icons"><add></add></i></a></span></h4>

            <div class="divider"></div>
            <!--*********************final modal eliminar***********-->


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

                <tbody>
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

    });
    $('#add_asigna_servicios').click(function () {

    });
    $('#save_asigna_servicios_ok').click(function () {
       $('#save_asigna_servicios').submit();
    });

</script>
