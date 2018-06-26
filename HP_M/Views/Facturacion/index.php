<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_factura" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Facturacion</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="id_factura" type="text" name="id_factura" >
                            <label for="id_factura" >Facturaciones Existentes</label>
                        </div>
                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s5">
                            <!--<input id="id_asignares" type="text" name="id_asignares">-->
                            <select name="id_asignares" id="id_asignares">
                                <option diseable selected>Selecciona Habitacion</option>
                                <?php
                                $dato=$datos[2] ;
                                while ($row=mysqli_fetch_assoc($dato))
                                echo "<option value='{$row["id_asignares"]}'>{$row["num_habiacion"]} {$row["clave_reserva"]}</option>";
                                ?>
                            </select>
                            <label for="id_asignares">Id_Asignares</label>


                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s5">
                            <input id="total" type="text" name="total">
                            <label for="total"  >Total</label>
                        </div>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_factura_ok" class="btn ">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_factura_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="card-panel">
    <h4 align="center">Facturaciones Registradas <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_factura">
                <i class="material-icons">add</i>
            </a></span></h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>

    <table class="responsive-table" id="tabla_content">
        <thead>
        <tr>
            <th>id_factura</th>
            <th>id_asignares</th>
            <th>Total</th>

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
        <a href="#!" id="cancelar" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();
        $("#add_factura").click(function(){
            $("#update_factura_ok").hide();
            $("#save_factura_ok").show();

            Materialize.updateTextFields();
        });
})
    $("#body_table").on("click","a.btn_eliminar",function(){
        var id=$(this).data("id");
        var url='<?php echo URL?>facturacion/eliminar/'+id;
        $("#eliminar_ok").attr("url",url);
        $("#modal_eliminar").modal("open");
    });
    $("#eliminar_ok").click(function(){
        $.get($(this).attr("url"),function(res){
            $("#body_table").empty().append(res);
            Materialize.toast('Se ha eliminado correctamente', 2500);
        });
    });
////////////////////////////////////////////////////////
    $("#body_table").on("click","a.btn_modificar",function(){
        $("#save_factura_ok").hide();
        $("#update_factura_ok").show();
        var id=$(this).data("id");
        $.get("<?php echo URL?>Facturacion/modificar/"+id,function(res){
            var datos=JSON.parse(res);
            $("#update_factura_ok").data("id",datos["id_factura"]);
            $("#id_asignares").val(datos["id_asignares"]);
            $("#total").val(datos["total"]);

            Materialize.updateTextFields();
            //$('select').material_select();
            $("#modal_registro").modal("open");
        });
    });

    $("#update_factura_ok").click(function(){
        var id=$(this).data("id");
        $.post("<?php echo URL?>facturacion/actualizar/"+id,$("#save_factura").serialize(),function(res){
            $('#save_factura').find('input, select, textarea').val('');
            $("#body_table").empty().append(res);

            Materialize.updateTextFields();
            //$("#modal_registro").modal("close");
            Materialize.toast('Se ha modificado correctamente', 2500);
        })
    });
    $("#buscar").keyup(function() {
        $.uiTableFilter($("#tabla_content"), this.value);
    });

</script>
