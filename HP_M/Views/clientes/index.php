<?php
?>

<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_clientes" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Clientes</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="nombre_cli" type="text" class="validate" name="nombre_cli">
                            <label for="nombre_cli"  data-error="Incorrecto" data-success="Correcto" >Nombre de Cliente</label>
                        </div>

                        <div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <input id="ap_cli" type="text" class="validate" name="ap_cli">
                            <label for="ap_cli"  data-error="incorrecto" data-success="Correcto">Apellido Paterno</label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s5">
                            <input id="am_cli" type="text" class="validate" name="am_cli">
                            <label for="am_cli" data-error="incorrecto" data-success="Correcto" >Apellido Materno</label>
                        </div>

                        <div class="input-field col s1">

                        </div>

                        <div class="input-field col s5">
                            <input id="telefono" type="text" class="validate" name="telefono">
                            <label for="telefono" data-error="incorrecto" data-success="Correcto">Telefono</label>

                        </div>

                        <div class="input-field col s1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s5">
                            <input id="clave_cli" type="text" class="validate" name="clave_cli">
                            <label for="clave_cli" data-error="incorrecto" data-success="Correcto" >Clave Cliente</label>
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_clientes_ok" class="btn modal-close">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_clientes_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card-panel">
    <h4 align="center">Clientes Registrados <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_cliente">
                <i class="material-icons">add</i>
            </a></span></h4>
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
            <th>Nombre del Cliente</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
            <th>Clave Cliente</th>
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
        $(".modal").modal();
        $("#add_cliente").click(function(){
            $("#update_clientes_ok").hide();
            $("#save_clientes_ok").show();
        });
        $("#save_clientes_ok").click(function(){
            //console.log("ok")
            //console.log($("#save_habitacion").serialize());
            $.post("<?php echo URL?>clientes/crear",$("#save_clientes").serialize(),function(res){
                $("#body_table").empty().append(res);
                $('#save_clientes').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
            })
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>clientes/eliminar/'+id;
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
            $("#save_clientes_ok").hide();
            $("#update_clientes_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>clientes/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_clientes_ok").data("id",datos["id_cliente"]);
                $("#nombre_cli").val(datos["nombre_cli"]);
                $("#ap_cli").val(datos["ap_cli"]);
                $("#am_cli").val(datos["am_cli"]);
                $("#telefono").val(datos["telefono"]);
                $("#clave_cli").val(datos["clave_cli"]);
                Materialize.updateTextFields();
                //$('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_clientes_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>clientes/actualizar/"+id,$("#save_clientes").serialize(),function(res){
                $('#save_clientes').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

    });
</script>