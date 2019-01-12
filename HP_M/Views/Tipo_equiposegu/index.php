<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_tipo" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Tipo De Equipo</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="descripcion_tipo" type="text"  name="descripcion_tipo">
                            <label for="descripcion_tipo"   >Tipo  De Equipo</label>
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
                            <a href="#!" id="save_tipo_ok" class="btn ">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_tipo_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card-panel">
    <h4 align="center">Tipo De Equipo <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_tipo">
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
    <table class="responsive-table" id="tabla_tipo">
        <thead>
        <tr>
            <th>id</th>
            <th>Tipo De Equipo</th>
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
    <div class="center">
        <a href="#!" id="imprimir_pdf" class="btn cyan lighten-2 accent-3 black-text tooltipped " data-position="bottom" data-delay="50" data-tooltip="Imprimir">
            <i class="material-icons">picture_as_pdf</i></a>
    </div>
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
        $("#add_tipo").click(function(){
            $("#update_tipo_ok").hide();
            $("#save_tipo_ok").show();
        });
        $("#save_tipo_ok").click(function(){
            //console.log("ok")
            //console.log($("#save_habitacion").serialize());
            $("#save_tipo").submit();

        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Tipo_equiposegu/eliminar/'+id;
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
            $("#save_tipo_ok").hide();
            $("#update_tipo_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>Tipo_equiposegu/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_tipo_ok").data("id",datos["id_tipoequisegu"]);
                $("#descripcion_tipo").val(datos["descripcion_tipo"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_tipo_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>Tipo_equiposegu/actualizar/"+id,$("#save_tipo").serialize(),function(res){
                $('#save_tipo_ok').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

        $("#save_tipo").validate({
            rules:{
                descripcion_tipo:{
                    required:true,
                    maxlength:30,
                    lettersonly:true,
                }
            },
            messages:{
                descripcion_tipo:{
                    required:"Agrega un tipo",
                    maxlength:"nombre muy largo",
                }
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function (form) {
                $.post("<?php echo URL?>Tipo_equiposegu/crear",$("#save_tipo").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_tipo').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    $("#modal_registro").modal("close");
                    Materialize.toast('Se ha insertado correctamente', 2500);
                })

            }

        })

        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_tipo"), this.value);
        });
        $("#imprimir_pdf").click(function(){
            var campo1;//, campo2, campo3;
            var campo=[];
            var tabla=[];
            $("#body_table tr:visible").each(function (index) {
                campo[index]=$(this).text();
            })
            campo1=JSON.stringify(campo);
            //alert (campo1);
            window.open("<?php echo URL?>tipo_tarea/print_pdf/?campo1="+campo1);
        });

    });
</script>
