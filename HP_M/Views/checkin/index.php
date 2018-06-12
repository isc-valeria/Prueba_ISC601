<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_checkin" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Check In
                    <span class="right"><a href="#modal_registro_res" class="btn green white-text modal-trigger" id="add_reserva">
                    <i class="material-icons">add</i>
                    </a></span></h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input type="text" id="numero_habitacion" class="validate" name="numero_habitacion">
                            <label for="numero_habitacion" data-error="Incorrecto" data-success="Correcto">Número de Hábitación</label>
                        </div>
                        <div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <input id="descripcion" type="text" class="validate" name="descripcion">
                            <label for="descripcion"  data-error="incorrecto" data-success="Correcto">Descripción</label>
                        </div>
                    </div>
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
                        <div class="input-field col s1">
                            <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_tipo_habitacion" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s5">
                            <div class="input-field col s5">
                                <input id="clave_cli" type="text" class="validate" name="clave_cli">
                                <label for="clave_cli"  data-error="incorrecto" data-success="Correcto">Folio del Cliente</label>
                            </div>
                        </div>
                        <div class="input-field col s5">
                            <i class="mdi-action-verified-user prefix icon-calendar"></i>
                            <label >Fecha de entrada</label>
                            <input id="fechaentrada" type="text" class="datepicker" >
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_checkin_ok" class="btn modal-close">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_checkin_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card-panel">
    <h4 align="center">Entradas Registradas <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_checkin">
                <i class="material-icons">add</i>
            </a></span></h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>
    <div style="overflow-x: auto">
        <table class="responsive-table">
            <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Telefono</th>
                <th>Clave Cliente</th>
                <th>Numero de Habitacion</th>
                <th>Tipo de Habitacion</th>
                <th>Clave de Reservacion</th>
                <th>Fecha de Reservación</th>
                <th>Fecha de Check In</th>
                <th>Fecha de Salida</th>
                <th>Estado</th>
                <th>delete</th>
                <th>update</th>
            </tr>
            </thead>
            <tbody id="body_table">
            <?php
                require_once ("tabla.php");
            ?>
            </tbody>
            <div class="divider"></div>
        </table>
    </div>
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



<!--asdgf-->
<div id="modal_registro_res" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_reserva" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Reservación

                    <span class="right"><a href="#modal_registro2" class="btn green white-text modal-trigger" id="add_cliente">
                    <i class="material-icons">add</i>
                    </a></span>

                </h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="no_personas" type="text" class="validate" name="no_personas">
                            <label for="no_personas"  data-error="Incorrecto" data-success="Correcto" >No. de Personas</label>
                        </div>

                        <div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <select id="tipohabitacion" type="text" class="validate" name="id_tipoh">
                                <option value="" disabled selected>Selecciona Tipo de la Habitacion</option>
                                <?php
                                $result3=$datos[2];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row['id_tipoh']}'>{$row['tipo_ha']}</option>";
                                ?>
                            </select>
                            <label for="tipohabitacion" data-error="incorrecto" data-success="Correcto" >Tipo de Habitación</label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s5">
                            <select id="num_habitacion" type="text" class="validate" name="num_habitacion">
                                <option value="" disabled selected>Selecciona Numero de la Habitacion</option>
                                <?php
                                $result3=$datos[3];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row['num_habitacion']}'>{$row['num_habitacion']}</option>";
                                ?>
                            </select>
                            <label for="num_habitacion" data-error="incorrecto" data-success="Correcto" >Numero de Habitación</label>
                        </div>

                        <div class="input-field col s1">
                            <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_tipo_habitacion" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                        </div>

                        <div class="input-field col s5">
                            <input type="text" class="datepicker" id="fecha_llegada">
                            <label for="fecha_llegada" data-error="incorrecto" data-success="Correcto"> Fecha de Llegada</label>
                        </div>

                        <div class="input-field col s1">

                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s5">
                            <input type="text" class="datepicker" id="fecha_salida">
                            <label for="fecha_salida" data-error="incorrecto" data-success="Correcto"> Fecha de Salida</label>
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_reserva_ok" class="btn modal-close">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="up_reserva_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!---->

<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $('.datepicker').pickadate();
        $(".modal").modal();
        $("#add_checkin").click(function () {
            $("#update_checkin_ok").hide();
            $("#save_checkin_ok").show();
        });
        $("#save_checkin_ok").click(function () {
            alert("Aqui Agregas amigo");
            //$.post("<?php //echo URL?>//Checkin/crear",$("#save_checkin").serialize(),function(res){
            //    $("#body_table").empty().append(res);
            //    $('#save_checkin').find('input, select, textarea').val('');
            //    Materialize.updateTextFields();
            //    //$("#modal_registro").modal("close");
            //    Materialize.toast('Se ha insertado correctamente', 2500);
            });
        $("#body_table").on("click","a.btn_eliminar",function(){
            //var id=$(this).data("id");
            //var url='<?php echo URL?>habitaciones/eliminar/'+id;
            // $("#eliminar_ok").attr("url",url);
            $("#modal_eliminar").modal("open");
        });
        $("#eliminar_ok").click(function(){
            alert("Eliminas amiko")
            $.get($(this).attr("url"),function(res){
            //     $("#body_table").empty().append(res);
            //     Materialize.toast('Se ha eliminado correctamente', 2500);
            });
        });
        //$("#body_table").on("click","a.btn_modificar",function(){
        //    $("#save_checkin_ok").hide();
        //    $("#update_checkin_ok").show();
        //    var id=$(this).data("id");
        //    $.get("<?php //echo URL?>//Checkin/modificar/"+id,function(/*res*/){
        //        var datos=JSON.parse(res);
        //        $("#update_habitaciones_ok").data("id",datos["id_habitacion"]);
        //        $("#numero_habitacion").val(datos["num_habitacion"]);
        //        $("#descripcion").val(datos["descripcion_hab"]);
        //        $("#tipohabitacion").val(datos["id_tipoh"]);
        //        $("#nomestadohabitacion").val(datos["id_estadoh"]);
        //        Materialize.updateTextFields();
        //        $('select').material_select();
        //        $("#modal_registro").modal("open");
        //    });
        //});

        })
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
        $(".datepicker").pickadate();
        $(".modal").modal();
        $("#add_reserva").click(function () {
            $("#up_reserva_ok").hide();
            $("#save_reserva_ok").show();
        });
        $("#save_reserva_ok").click(function () {
            //console.log("ok")
            //console.log($("#save_habitacion").serialize());
            $.post("<?php echo URL?>reservaciones/crear", $("#save_reserva").serialize(), function (res) {
                $("#body_table").empty().append(res);
                $('#save_reserva').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
            })
        });
    };
</script>