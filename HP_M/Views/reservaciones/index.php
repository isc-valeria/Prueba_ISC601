<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 30/05/2018
 * Time: 11:33 AM
 */
?>
<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_reserva" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Reservación
<!--                    <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_reserva">-->
<!--                <i class="material-icons">add</i>-->
<!--                </a></span>-->
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
<div class="card-panel">
    <h4 align="center">Reservaciones Registradas <span class="right">
            <a href="#modal_registro" class="btn green white-text modal-trigger" id="add_cliente">
                <i class="material-icons">add</i>
            </a></span>
    </h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>


    <!-- Modal eliminar -->

    <!--*********************final modal eliminar***********-->
    <table class="responsive-table">
        <thead>
        <tr>
            <th>Clave de Reservación</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha de Reservación</th>
            <th>Fecha de Llegada</th>
            <th>Fecha de Salida</th>
            <th>Estado de la reservación</th>
            <th>No. de Personas</th>
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
        $(".datepicker").pickadate();
        $(".modal").modal();
        $("#add_reserva").click(function(){
            $("#up_reserva_ok").close();
            $("#save_reserva_ok").show();
        });
        $("#save_reserva_ok").click(function(){
            //console.log("ok")
            //console.log($("#save_habitacion").serialize());
            $.post("<?php echo URL?>reservaciones/crear",$("#save_reserva").serialize(),function(res){
                $("#body_table").empty().append(res);
                $('#save_reserva').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
            })
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>reservaciones/eliminar/'+id;
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
            $("#save_reserva_ok").hide();
            $("#up_reserva_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>reservaciones/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                // $("#up_reserva_ok").data("id",datos["id_habitacion"]);
                // $("#numero_habitacion").val(datos["num_habitacion"]);
                // $("#descripcion").val(datos["descripcion_hab"]);
                // $("#tipohabitacion").val(datos["id_tipoh"]);
                // $("#nomestadohabitacion").val(datos["id_estadoh"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#up_reserva_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>reservaciones/actualizar/"+id,$("#save_reserva").serialize(),function(res){
                $('#save_reserva').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

    });
</script>

