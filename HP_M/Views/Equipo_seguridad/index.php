<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_equipo" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Equipo</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="nombre_equisegu" type="text" class="validate" name="nombre_equisegu">
                            <label for="nombre_equisegu"  data-error="Incorrecto" data-success="Correcto" >Nombre De Equipo</label>
                        </div>
                        <div class="input-field col s5">
                            <select id="descripcion_tipo" type="text" class="validate" name="descripcion_tipo">
                                <option value="" disabled selected>Selecciona La Descripcion</option>
                                <?php
                                $result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="descripcion_tipo" data-error="incorrecto" data-success="Correcto" >Descripción</label>
                        </div>

                        <!--<div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <input id="descripcion" type="text" class="validate" name="descripcion">
                            <label for="descripcion"  data-error="incorrecto" data-success="Correcto">Descripción</label>
                        </div>-->
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_equipo_ok" class="btn modal-close">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_equipo_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card-panel">
    <h4 align="center">Equipo De Seguridad <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_equipo">
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
            <th>id</th>
            <th>Nombre de Equipo</th>
            <th>Descripción</th>
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
<!--<div id="modal_estado_habitacion" class="modal center-align ">
    <div class="modal-content">
        <div class="card-panel teal #00b8d4"><h4 class="left"><a class=" text-black"></a></h4><h4 align="center">Estado de la Habitación</h4></div>


        <div class="row">
            <form class="col s12 pad" autocomplete="off">
                <div class="row">
                    <div class="input-field input-field col s10">
                        <i class="mdi-action-verified-user prefix icon-circleci"></i>
                        <input id="descripcion_estado" type="number" class="validate center" >
                        <label for="descripcion_estado"  data-error="Incorrecto" data-success="Correcto">Descripción</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s9">
                        <button class="btn green waves-effect waves-light right #00838f cyan darken-3" type="submit" name="action">Registar

                        </button>
                    </div>
                    <div class="input-field col s3">
                        <button class="btn red waves-effect waves-light righ #00838f cyan darken-3" type="submit" name="action">Limpiar

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>-->


<!--<div id="modal_registro" class="modal center-align ">
    <div class="modal-content">
        <div class="card-panel teal #00b8d4"><h4 class="left"><a class=" text-black"></a></h4><h4 align="center">Tipo Habitación</h4></div>

        <div class="row">
            <form class="col s12 " autocomplete="off">
                <div class="row">
                    <div class="input-field col s10">
                        <i class="mdi-action-verified-user prefix icon-pencil"></i>
                        <input id="nonmbretipohabitacion" type="text" class="validate center">
                        <label for="nonmbretipohabitacion"  data-error="incorrecto" data-success="Correcto">Tipo de Habitación</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field input-field col s10 text">
                        <i class="mdi-action-verified-user prefix icon-coin-dollar"></i>
                        <input id="precio" type="number" class="validate center" >
                        <label for="precio"  data-error="Incorrecto" data-success="Correcto" >Precio</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s9">
                        <button class="btn waves-effect waves-light right #00838f cyan darken-3" type="submit">Registar

                        </button>
                    </div>
                    <div class="input-field col s3">
                        <button class="btn waves-effect waves-light righ #00838f cyan darken-3" type="submit" name="action">Limpiar

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>-->



<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();
        $("#add_equipo").click(function(){
            $("#update_equipo_ok").hide();
            $("#save_equipo_ok").show();
        });
        $("#save_equipo_ok").click(function(){
            //console.log("ok")
            //console.log($("#save_habitacion").serialize());
            $.post("<?php echo URL?>Equipo_seguridad/crear",$("#save_equipo").serialize(),function(res){
                $("#body_table").empty().append(res);
                $('#save_equipo').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
            })
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Equipo_seguridad/eliminar/'+id;
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
            $("#save_equipo_ok").hide();
            $("#update_equipo_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>Equipo_seguridad/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_equipo_ok").data("id",datos["id_equiposegu"]);
                $("#nombre_equisegu").val(datos["nombre_equisegu"]);
                $("#descripcion_tipo").val(datos["id_tipoequisegu"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_equipo_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>Equipo_seguridad/actualizar/"+id,$("#save_equipo").serialize(),function(res){
                $('#save_equipo_ok').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

    });
</script>











