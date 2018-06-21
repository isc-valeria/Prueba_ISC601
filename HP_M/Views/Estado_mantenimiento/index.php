<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_estado" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Estados Mantenimiento</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="descripcion_estadomantenimiento" type="text" class="validate" name="descripcion_estadomantenimiento">
                            <label for="descripcion_estadomantenimiento"  data-error="Incorrecto" data-success="Correcto" >Tipo  De Estado</label>
                        </div>
                        <!--<div class="input-field col s5">
                            <select id="descripcion_tipo" type="text" class="validate" name="descripcion_tipo">
                                <option value="" disabled selected>Selecciona La Descripcion</option>

                                /*$result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";*/

                            </select>
                            <label for="descripcion_tipo" data-error="incorrecto" data-success="Correcto" >Descripción</label>
                        </div>-->

                        <!--<div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <input id="descripcion" type="text" class="validate" name="descripcion">
                            <label for="descripcion"  data-error="incorrecto" data-success="Correcto">Descripción</label>
                        </div>-->
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_estado_ok" class="btn modal-close">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_estado_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card-panel">
    <h4 align="center">Tipo De Estado <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_estado">
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
    <table class="responsive-table" id="tabla_estado">
        <thead>
        <tr>
            <th>id</th>
            <th>Tipo De Estado</th>
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
        <a href="#!"  class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>




<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();
        $("#add_estado").click(function(){
            $("#update_estado_ok").hide();
            $("#save_estado_ok").show();
        });
        $("#save_estado_ok").click(function(){
            //console.log("ok")
            //console.log($("#save_habitacion").serialize());
            $.post("<?php echo URL?>Estado_mantenimiento/crear",$("#save_estado").serialize(),function(res){
                $("#body_table").empty().append(res);
                $('#save_estado').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
            })
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Estado_mantenimiento/eliminar/'+id;
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
            $("#save_estado_ok").hide();
            $("#update_estado_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>Estado_mantenimiento/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_estado_ok").data("id",datos["id_estadomantenimiento"]);
                $("#descripcion_estadomantenimiento").val(datos["descripcion_estadomantenimiento"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_estado_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>Estado_mantenimiento/actualizar/"+id,$("#save_estado").serialize(),function(res){
                $('#save_estado_ok').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_estado"), this.value);
        });

    });
</script>
