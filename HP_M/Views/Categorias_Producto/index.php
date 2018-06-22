<div id="modal_registro" class="modal">
<div class="modal-content">
    <div class="card-panel">
        <form action="" id="save_categoriapro" enctype="multipart/form-data" autocomplete="off">
            <h4 align="center">Agregar un nueva categoría de producto</h4>
            <div class="divider"></div>
            <code class=" language-markup"><!--********************************--></code>
            <div class="row">
                <div class="row">
                    <div class="input-field input-field col s5">
                        <input id="descripcion_cat" type="text"  name="descripcion_cat">
                        <label for="descripcion_cat">Descripción de categoría</label>
                    </div>
                </div>

                <div class="modal-fixed-footer">
                    <div class="input-field col s12">
                        <a href="#!" id="save_categoria_ok" class="btn ">Registrar</a>
                    </div>
                    <div class="input-field col s12">
                        <a href="#!" id="update_categoria_ok" class="btn modal-close " data-id="">Actualizar</a>
                        <a href="#!" id="cancelar" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<div class="card-panel">
    <h4 align="center">Categorías producto<span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_categoria"><i class="material-icons">add</i></a></span></h4>
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
            <th>Id</th>
            <th>Categoría</th>
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
        <a href="<?php echo URL?>Categorias_Producto/print_pdf" target="_blank" id="imprimir_pdf" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Imprimir"><i class="material-icons">picture_as_pdf</i></a>
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

<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();
        $("#add_categoria").click(function(){
            $("#update_categoria_ok").hide();
            $("#save_categoria_ok").show();
        });
        console.log($("#save_categoriapro").serialize());

        $("#save_categoria_ok").click(function() {
            $("#save_categoriapro").submit();

        });

        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Categorias_Producto/eliminar/'+id;
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
            $("#update_categoria_ok").show();
            $("#save_categoria_ok").hide();
            var id=$(this).data("id");
            $.get("<?php echo URL?>Categorias_Producto/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_categoria_ok").data("id",datos["id_categoriapro"]);
                $("#descripcion_cat").val(datos["descripcion_cat"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });

        $("#update_categoria_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>Categorias_Producto/actualizar/"+id,$("#save_categoriapro").serialize(),function(res){
                $('#save_categoriapro').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });


        //VALIDACIONES
        $("#save_categoriapro").validate({

            rules:{
                descripcion_cat:{
                    required:true,
                    maxlength: 20,
                    minlength: 5,
                    lettersonly:true,
                }
                  
            },

            messages:{
                descripcion_cat:{
                required:"Campo Obligatorio",
                maxlength:"Maximo 20 caracteres",
                minlength:"Minimo 5 caracteres"
                },
             },


            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>Categorias_Producto/crear",$("#save_categoriapro").serialize(),function(res){

                    $("#body_table").empty().append(res);
                    $('#save_categoriapro').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    Materialize.toast('Se a insertado correctamente', 2500);
                    $("#modal_registro").modal("close");
                })
            }
        });


        //BUSQUEDAS
        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });

    });
</script>


