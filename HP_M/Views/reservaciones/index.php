<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 30/05/2018
 * Time: 11:33 AM
 */
?>

<div class="card-panel">
    <h4 align="center">Reservaciones Registradas <span class="right"></span>
    </h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>


    <!-- Modal eliminar -->
<div class="modal" id="modal_cancela">
    <div class="modal-container">
        <div class="card-panel">

        </div>
    </div>
</div>
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
        <form action="" autocomplete="off" enctype="multipart/form-data" id="delete_this">
            <h4 align="center">Cancelar Reservación</h4>
            <div class="divider"></div>
            <code class=" language-markup"><!--********************************--></code>
            <div class="row">
                <div class="row">
                    <div class="input-field col s5">
                        <input id="clave_reserva" type="text" name="clave_reserva" readonly>
                        <label for="clave_reserva" >Clave de la Reserva</label>
                    </div>
                    <div class="col s1"></div>
                    <div class="input-field col s5">
                        <input type="text" id="nombre_cli" name="nombre_cli" readonly>
                        <label for="nombre_cli">Nombre del Cliente</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input id="ap_cli" type="text" name="ap_cli" readonly>
                        <label for="ap_cli" >Apellido Paterno</label>
                    </div>
                    <div class="col s1"></div>
                    <div class="input-field col s5">
                        <input id="am_cli" type="text" name="am_cli" readonly>
                        <label for="am_cli" >Apellido Materno</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input id="fecha_reserva" type="text" name="fecha_reserva" readonly>
                        <label for="fecha_reserva" >Fecha de la Reserva</label>
                    </div>
                    <div class="col s1"></div>
                    <div class="input-field col s5">
                        <input id="fecha_llegada" type="text" name="fecha_llegada" readonly>
                        <label for="fecha_llegada" >Fecha de la Llegada</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input id="fecha_salida" type="text" name="fecha_salida" readonly>
                        <label for="fecha_salida" >Fecha de Salida</label>
                    </div>
                    <div class="col s1"></div>
                    <div class="input-field col s5">
                        <input id="no_personas" type="text" name="no_personas" readonly>
                        <label for="no_personas" >Numero de Personas</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" id="eliminar_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
                <a href="#!" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
            </div>
        </form>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $(".modal").modal();
    });
    $("#body_table").on("click","a.btn_eliminar",function (){
        var id=$(this).data("id");
        $.get("<?php echo URL?>reservaciones/delite/"+id,function(res){
          //  console.log(res+"ok");
            var datos=JSON.parse(res);
            // console.log(datos);
            $("#eliminar_ok").data("id",datos["id_reservacion"]);
            $("#clave_reserva").val(datos["clave_reserva"]);
            $("#nombre_cli").val(datos["nombre_cli"]);
            $("#ap_cli").val(datos["ap_cli"]);
            $("#am_cli").val(datos["am_cli"]);
            $("#fecha_reserva").val(datos["fecha_reserva"]);
            $("#fecha_llegada").val(datos["fecha_llegada"]);
            $("#fecha_salida").val(datos["fecha_salida"]);
            $("#no_personas").val(datos["no_personas"]);
            Materialize.updateTextFields();
            $("#modal_eliminar").modal("open");

        });
    });
    $("#eliminar_ok").click(function(){
        var id=$(this).data("id");
        $.post("<?php echo URL?>reservaciones/eliminar/"+id,$("#modal_eliminar").serialize(),function(res){
            $('#modal_eliminar').find('input, select, textarea').val('');
            $("#body_table").empty().append(res);
            Materialize.updateTextFields();
            //$("#modal_registro").modal("close");
            Materialize.toast('Se ha cancelado correctamente', 2500);
        })
    });
</script>