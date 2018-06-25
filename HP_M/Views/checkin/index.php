<div class="modal" id="muestreo">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="hacer_checkin" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Datos del Cliente</h4>
                <div class="divider"></div>
                <code class="language-markup"></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" id="clave_reserva" name="clave_reserva">
                            <label for="clave_reserva">Clave de Reservación</label>
                        </div>
                        <div class="input-field col s3 offset-s1">
                            <input type="text" id="nombre_cli" name="nombre_cli">
                            <label for="nombre_cli">Nombre</label>
                        </div>
                        <div class="input-field col s3 offset-s1">
                            <input type="text" id="ap_cli" name="ap_cli">
                            <label for="ap_cli">Apellido Paterno</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" id="am_cli" name="am_cli">
                            <label for="am_cli">Apellido Materno</label>
                        </div>
                        <div class="input-field col s3 offset-s1">
                            <input type="text" id="telefono" name="telefono">
                            <label for="telefono">Teléfono</label>
                        </div>
                        <div class="input-field col s3 offset-s1">
                            <input type="text" id="email" name="email">
                            <label for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" id="fecha_reserva" name="fecha_reserva">
                            <label for="fecha_reserva">Fecha de Reservación</label>
                        </div>
                        <div class="input-field col s3 offset-s1">
                            <input type="text" id="fecha_llegada" name="fecha_llegada">
                            <label for="fecha_llegada">Fecha de Llegada</label>
                        </div>
                        <div class="input-field col s3 offset-s1">
                            <input type="text" id="fecha_salida" name="fecha_salida">
                            <label for="fecha_salida">Fecha de Salida</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" id="no_personas" name="no_personas">
                            <label for="no_personas">Número de Personas</label>
                        </div>
                        <div class="input-field col s3 offset-s1">
                            <input type="text" id="tipo_ha" name="tipo_ha">
                            <label for="tipo_ha">Tipo de Habitación</label>
                        </div>
                        <div class="input-field col s3 offset-s1">
                            <input type="text" id="precio" name="precio">
                            <label for="precio">Precio</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" id="estado_ha" name="estado_ha">
                            <label for="estado_ha">Estado Habitación</label>
                        </div>
                        <div class="input-field col s3 offset-s2">
                            <input type="text" id="estador" name="estador">
                            <label for="estador">Estado de la Reservación</label>
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s5 offset-s1">
                            <a href="#!" id="checkate" class="btn">Hacer Check-in</a>
                        </div>
                        <div class="input-field col s5 offset-s1">
                            <a href="#!" id="update_habitaciones_ok" class="btn modal-close " data-id="">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="card-panel">
    <h4 align="center"></h4>
    <div class="divider"></div>
    <h3 class="center">Check-In Pendientes<span class="right">
            <a href="tabla.php" class="btn green white-text modal-trigger btn tooltipped" id="add_habitacion" data-position="bottom" data-delay="50" data-tooltip="Todas las reservaciones registradas">
                <i class="material-icons">event_note</i>
            </a>
        </span></h3>
    <div class="divider"></div>
z

            <div class="card-action">
                <a href="#!" id="save_asigna_servicios_ok" class="btn modal-close">Ver</a>

        </div>
    </div>

    <div style="overflow-x: auto">
        <table id="tabla_conten">
            <thead>
            <tr>
                <th>Clave de Reservación</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>E-mail</th>
                <th>Ver datos</th>
            </tr>
            </thead>
            <tbody id="bodtable">
            <?php require_once ("tabla.php");
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="card-panel">
    <h4 align="center"></h4>
    <div class="divider"></div>
    <h3 class="center">Check-In Realizados<span class="right">
            <a href="tabla.php" class="btn green white-text modal-trigger btn tooltipped" id="add_habitacion" data-position="bottom" data-delay="50" data-tooltip="Todas las reservaciones registradas">
                <i class="material-icons">event_note</i>
            </a>
        </span></h3>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>
    <div style="overflow-x: auto">
        <table id="tabla_content">
            <thead>
            <tr>
                <th>Clave de Reservación</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>E-mail</th>
                <th>Ver datos</th>
            </tr>
            </thead>
            <tbody id="body_table">
            <?php
            $datos1=$datos[2];
            while ($row=mysqli_fetch_array($datos1))
            {
                echo "
                <tr>
                    <td>{$row[0]}</td>
                    <td>{$row[1]}</td>
                    <td>{$row[2]}</td>
                    <td>{$row[3]}</td>
                    <td>{$row[4]}</td>
                    <td>{$row[5]}</td>
                    <td><a class='btn-flat blue-text btn_mostrar2 tooltipped' data-id='{$row['clave_reserva']}' href='#!' data-position='bottom' data-delay='50' data-tooltip='Ver Datos del Huesped'><i class='material-icons'>remove_red_eye</i></td>
                </tr>  
                
            ";
            }?>
            </tbody>
        </table>
    </div>
</div>


</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".modal").modal();
        $('.tooltipped').tooltip();
        $("#body_table").on("click","btn_mostrar",function () {
            var id=$(this).data("id");
            $.get("<?php echo URL?>checkin/modificar"+id,$("#muestreo").serialize(),function (res) {
                var datos=JSON.parse(res);
                $("#checkate").date("id",datos["id_asignares"]);
                $("#clave_reserva").val(datos["clave_reserva"]);
                $("#nombre_cli").val(datos["nombre_cli"]);
                $("#ap_cli").val(datos["ap_cli"]);
                $("#am_cli").val(datos["am_cli"]);
                $("#telefono").val(datos["telefono"]);
                $("#email").val(datos["email"]);
                $("#fecha_reserva").val(datos["fecha_reserva"]);
                $("#fecha_llegada").val(datos["fecha_llegada"]);
                $("#fecha_salida").val(datos["fecha_salida"]);
                $("#no_personas").val(datos["no_personas"]);
                $("#tipo_ha").val(datos["tipo_ha"]);
                $("#precio").val(datos["precio"]);
                $("#estado_ha").val(datos["estado_ha"]);
                $("#estador").val(datos["estador"]);
                Materialize.updateTextFields();
                $("#muestreo").open();
            })
        })
        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });
        $("#busca").keyup(function() {
            $.uiTableFilter($("#tabla_conten"), this.value);
        });
    });
</script>






</div>
