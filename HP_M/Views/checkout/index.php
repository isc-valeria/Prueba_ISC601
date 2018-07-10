<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/05/2018
 * Time: 06:00 PM
 */
?>

<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_checkout" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Check Out</h4>
                <div class="divider"></div>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="numero_habitacion" type="number" class="validate" readonly="readonly" >
                            <label for="numero_habitacion"   disabled="numero_habitacion" >Número de Habitación</label>
                        </div>
                        <div class="input-field col s1"></div>
                        <div class="input-field col s5">
                            <input id="descripcion_estado" type="text" class="validate center" >
                            <label for="descripcion_estado"  data-error="Incorrecto" data-success="Correcto">Descripción</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s5">
                            <select  id="tipohabitacion" type="text" class="validate" >
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
                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_tipo_habitacion" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s5">
                            <input id="clave_cli" type="text" class="validate" name="clave_cli">
                            <label for="clave_cli"  data-error="incorrecto" data-success="Correcto">Folio del Cliente</label>
                        </div>
                        <div class="input-field col s5">
                            <i class="mdi-action-verified-user prefix icon-calendar"></i>
                            <label >Fecha de salida</label>
                            <input id="fechaentrada" type="text" class="datepicker" >
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_checkout_ok" class="btn modal-close">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_checkout_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card-panel">
    <h4 align="center">Salidas Registradas <span class="right"><a href="#modal_registro"class="btn green white-text modal-trigger" id="add_checkin">
                <i class="material-icons">add</i>
            </a></span></h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s5 offset-s6">
            <i class="mdi-action-verified-user prefix icon-search "></i>
            <input id="buscar1" placeholder= "Buscar folio de reservación" type="text">
        </div>
    </div>
    <table class="responsive-table">
        <thead>
        <tr>
            <td>Número de Habitación</td>
            <td>Descripción</td>
            <td>Tipo Habitación</td>
            <td>Folio del Cliente</td>
            <td>Fecha de Salida</td>
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
        $('.datepicker').pickadate();
        $(".modal").modal();
        $("#add_checkin").click(function () {
            $("#update_checkout_ok").hide();
            $("#save_checkout_ok").show();
        });
        $("#save_checkout_ok").click(function () {
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