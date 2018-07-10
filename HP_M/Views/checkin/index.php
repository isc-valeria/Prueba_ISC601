<?php
//print_r($datos[1]);

?>
<div class="row">
    <div class="col s12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Checkin</span>
                <p></p>
            </div>
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#test4">Check-In's pendientes</a></li>
                    <li class="tab"><a  href="#test5">Check-In's Realizados</a></li>
                </ul>
            </div>
            <div class="card-content grey lighten-4">
                <div id="test4"><div class="card-panel">
                        <h4 align="center"></h4>
                        <div class="divider"></div>
                        <h3 class="center">Check-In Pendientes<span class="right">
            <a href="tabla.php" class="btn cyan lighten-2 black-text modal-trigger btn tooltipped" id="add_habitacion" data-position="bottom" data-delay="50" data-tooltip="Todas las reservaciones registradas">
                <i class="material-icons">event_note</i>
            </a>
        </span></h3>
                        <div class="divider"></div>

                        <div class="row">
                            <div class="input-field col s4 offset-s8">
                                <i class="mdi-action-verified-user prefix icon-search"></i>
                                <input id="busqueda" placeholder="Buscar" type="text">
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
                                <tbody id="body_table">
                                <?php require_once ("tabla.php");
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div></div>
                <div id="test5"><div class="card-panel">
                        <h4 align="center"></h4>
                        <div class="divider"></div>
                        <h3 class="center">Check-In Realizados<span class="right">
            <a href="tabla.php" class="btn cyan lighten-2 black-text modal-trigger btn tooltipped" id="add_habitacion" data-position="bottom" data-delay="50" data-tooltip="Todas las reservaciones registradas">
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
                                <tbody id="body_table2">
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
                    </div></div>
            </div>
        </div>
    </div>
</div>

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
                            <input type="text" class="datepicker" id="fecha_llegada" name="fecha_llegada">
                            <label for="fecha_llegada">Fecha de Llegada</label>
                        </div>
                        <div class="input-field col s3 offset-s1">
                            <input type="text" class="datepicker" id="fecha_salida" name="fecha_salida">
                            <label for="fecha_salida">Fecha de Salida</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" id="no_personas" name="no_personas">
                            <label for="no_personas">Número de Personas</label>
                        </div>
                        <div class="input-field col s3 offset-s1">
                            <select name="tipo_ha" id="tipo_ha" class="select">
                                <option disabled selected>Tipo de Habitacion</option>
                                <?php
                                print_r($datos);
                                  //  $datos=$datos[1];
                                while ($row=mysqli_fetch_array($datos[1]))
                                echo "<option value='{$row['id_tipoh']}'>{$row['tipo_ha']}</option>";
                                ?>
                            </select>
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
                            <select name="tipo_ha" id="tipo_ha" class="select">
                                <option disabled selected>Tipo de Habitacion</option>
                                <?php
                                print_r($datos);
                                //  $datos=$datos[1];
                                while ($row=mysqli_fetch_array($datos[3]))
                                    echo "<option value='{$row['id_estador']}'>{$row['estador']}</option>";
                                ?>
                            </select>
                            <label for="tipo_ha">Tipo de Habitación</label>
                        </div>
                        <div class="input-field col s3 offset-s2">
                            <input type="text" class="datepicker" id="fecha_checkin" name="fecha_checkin">
                            <label for="fecha_checkin" id="fc">Fecha de Checkin</label>
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="row">
                            <div class="input-field col s5 offset-s1">
                                <a href="#!" id="checkate" class="btn">Hacer Check-in</a>
                            </div>
                            <div class="input-field col s5 offset-s1">
                                <a href="#!" class="btn modal-close " id="cero" data-id="">Cancelar</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s5 offset-s1">
                                <a href="#!" id="update_checkin_ok" class="btn">Actualiza Datos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>








<script type="text/javascript">
    $(document).ready(function(){
        $(".modal").modal();
        $(".datepicker").pickadate();
        $('.tooltipped').tooltip();
        $(".select").material_select();
        $("#body_table").on("click","a.btn_mostrar",function () {
            $("#fecha_checkin").hide();
            $("#fc").hide();
            var id = $(this).data("id");
            $.get("<?php echo URL?>checkin/mod/"+ id, function (res) {
                console.log(res);
                $("#clave_reserva").prop("readOnly",true);
                $("#nombre_cli").prop("readOnly",true);
                $("#ap_cli").prop("readOnly",true);
                $("#am_cli").prop("readOnly",true);
                $("#telefono").prop("readOnly",true);
                $("#email").prop("readOnly",true);
                $("#precio").prop("readOnly",true);
                $("#estado_ha").prop("readOnly",true);
                $("#fecha_reserva").prop("readOnly",true);
                var datos = JSON.parse(res);
                $("#checkate").data("id", datos["clave_reserva"]);
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
                $("#tipo_ha").val(datos["id_tipoh"]);
                $("#precio").val(datos["precio"]);
                $("#estado_ha").val(datos["estado_ha"]);
                $("#estador").val(datos["estador"]);
                Materialize.updateTextFields();
                $("#muestreo").modal("open");
            });
            $("#update_habitaciones_ok").click(function(){
                $("#hacer_checkin").submit();
                })
            });
        });

        $("#body_table2").on("click","a.btn_mostrar2",function () {
            $("#fecha_checkin").show();
            $("#fc").show();
            $("#update_checkin_ok").hide();
            // $("#cero").hide();
            $("#checkate").hide();
            var id = $(this).data("id");
            $.get("<?php echo URL?>checkin/modificar/"+ id, $("#muestreo").serialize(), function (res) {
                console.log("datos: "+res);
                $("#clave_reserva").prop("readOnly",true);
                $("#fecha_checkin").prop("readOnly",true);
                $("#fecha_llegada").prop("readOnly",true);
                $("#fecha_salida").prop("readOnly",true);
                $("#fecha_reserva").prop("readOnly",true);

                var datos = JSON.parse(res);
                $("#checkate").data("id", datos["clave_reserva"]);
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
                $("#fecha_checkin").val(datos['fecha_checkin'])
                Materialize.updateTextFields();
                $("#muestreo").modal("open");
            });
        });

        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });
        $("#busqueda").keyup(function() {
            $.uiTableFilter($("#tabla_conten"), this.value);
        });
        $("#hacer_checkin").validate({
            rules:{
                no_personas:{
                    required:true,
                    maxlength: 3,
                    number: true,
                },
            },
            messages: {
                numero_habitacion: {
                    required: "Ingresa un número",
                    maxlength: "Máximo 3 digitos",
                    number: "Solo números",
                },
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                var id=$(this).data("id");
                $.post("<?php echo URL?>checkin/actualizar/"+id,$("#hacer_checkin").serialize(),function(res){
                    $('#hacer_checkin').find('input, select, textarea').val('');
                    $("#body_table").empty().append(res);
                    Materialize.updateTextFields();
                    Materialize.toast('Se ha modificado correctamente', 2500);
                })
            }
        });

</script>