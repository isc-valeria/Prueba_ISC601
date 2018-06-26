<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_clientes" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Tipo de habitaciones</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="tipo_ha" type="text" name="tipo_ha" >
                            <label for="tipo_ha" >Tipo de habitación</label>
                        </div>

                        <div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <input id="precio" type="text" name="precio">
                            <label for="precio">Precio</label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s5">
                            <input id="maximo_personas" type="text" name="maximo_personas">
                            <label for="maximo_personas"  >Máximo de personas</label>
                        </div>

                        <div class="input-field col s1">

                        </div>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_clientes_ok" class="btn cyan lighten-2 black-text">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_clientes_ok" class="btn modal-close cyan lighten-2 black-text" data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="row">
    <div class="col s8 offset-s2">
        <div class="card-panel">
            <h4 align="center">Tipos de habitaciones <span class="right"><a href="#modal_registro" class="btn cyan lighten-2 black-text modal-trigger" id="add_cliente">
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
                    <th>Tipo de habitación</th>
                    <th>Precio</th>
                    <th>Máximo de personas</th>
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
    </div>
</div>

<div id="modal_eliminar" class="modal">
    <div class="modal-content">
        <h5>¿Desea eliminar el Registro?</h5>
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
            $("#email").val(clave);
            Materialize.updateTextFields();
        });
        $("#save_clientes_ok").click(function(){
            $("#save_clientes").submit();
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>tipos_habitacion/eliminar/'+id;
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
            $.get("<?php echo URL?>tipos_habitacion/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_clientes_ok").data("id",datos["id_tipoh"]);
                $("#tipo_ha").val(datos["tipo_ha"]);
                $("#precio").val(datos["precio"]);
                $("#maximo_personas").val(datos["maximo_personas"]);
                Materialize.updateTextFields();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_clientes_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>tipos_habitacion/actualizar/"+id,$("#save_clientes").serialize(),function(res){
                $('#save_clientes').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });


        $("#save_clientes").validate({

            rules:{
               tipo_ha:{
                    required:true,
                    maxlength: 20,
                    minlength: 4,
                    lettersonly:true,
                },
                precio:{
                    required:true,
                    number:true,
                    maxlength: 4,
                    minlength: 3,
                },
                maximo_personas:{
                    required:true,
                    number:true,
                    maxlength: 2,
                },
            },
            messages:{
                tipo_ha:{
                    required:"Ingresa descripción",
                    maxlength:"Maximo 20 caracteres",
                    minlength:"Minimo 4 caracteres"

                },
                precio:{
                    required:"Ingresa un precio",
                    number:"Sólo números",
                    maxlength:"Maximo 4 digitos",
                    minlength:"Minimo 3 digitos",


                },
                maximo_personas:{
                    required:"Ingresa el máximo de personas",
                    number:"Sólo números",
                    maxlength:"Maximo 2 digitos",
                },
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>tipos_habitacion/crear",$("#save_clientes").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_clientes').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    $("#modal_registro").modal("close");
                })
            }
        });
        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });
    });
</script>
