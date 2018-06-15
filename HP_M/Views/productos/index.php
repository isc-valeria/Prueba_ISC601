<?php
?>
<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_productos_almacen" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Productos</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">

                    <div class="row">
                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s5">
                            <input id="nombre_pro" type="text"  name="nombre_pro">
                            <label for="nombre_pro"  >Nombre</label>
                        </div>

                        <dikkv class="input-field col s5">
                            <select id="id_categoriapro" type="text"  name="id_categoriapro">
                                <option  disabled selected>Selecciona Categoria del producto</option>
                                <?php
                                $result22=$datos[1];
                                while ($row=mysqli_fetch_array($result22))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="id_categoriapro" >Categoria producto</label>
                        </dikkv>
                    </div>

                    <div class="row">
                        <div class="input-field col s1">
                        </div>

                        <div class="input-field col s5">
                            <select id="id_tipopro" type="text"  name="id_tipopro">
                                <option  disabled selected>Selecciona Tipo de producto</option>
                                <?php
                                $result23=$datos[2];
                                while ($row=mysqli_fetch_array($result23))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="id_tipopro" >Tipo producto</label>
                        </div>


                        <div class="input-field col s5">
                            <input id="existencias" type="number"  name="existencias">
                            <label for="existencias"  >Existencias</label>
                        </div>



                    </div>
                    <div class="row">
                        <div class="input-field col s5">
                            <input id="stock_min" type="number"  name="stock_min">
                            <label for="stock_min" >Stock minimo</label>
                        </div>

                        <div class="input-field col s5">
                            <input id="stock_max" type="number"  name="stock_max">
                            <label for="stock_max"  >Stock maximo</label>
                        </div>

                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_productos_ok" class="btn ">Registrar</a>
                        </div>

                        <div class="input-field col s12">
                            <a href="#!" id="update_productos_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card-panel">
    <h4 align="center">Registro de Productos <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_producto"><i class="material-icons">add</i></a></span></h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>


    <!-- Modal eliminar -->

    <!--*********************final modal eliminar***********-->
    <table class="responsive-table" id="tabla_content">
        <thead>
        <tr>

            <th>Id </th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Tipo </th>
            <th>Existencias</th>
            <th>Stock Max</th>
            <th>Stock Min</th>
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
        <a href="<?php echo URL?>productos/print_pdf" target="_blank" id="imprimir_pdf" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Imprimir"><i class="material-icons">picture_as_pdf</i></a>
    </div>
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
        $("#add_producto").click(function(){
            $("#update_productos_ok").hide();
            $("#save_productos_ok").show();
        });
        $("#save_productos_ok").click(function() {
            $("#save_productos_almacen").submit();
        });

        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>productos/eliminar/'+id;
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
            $("#save_productos_ok").hide();
            $("#update_productos_ok").show();
            var id=$(this).data("id");

            $.get("<?php echo URL?>productos/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_productos_ok").data("id",datos["id_producto"]);
                $("#nombre_pro").val(datos["nombre_pro"]);
                $("#id_categoriapro").val(datos["id_categoriapro"]);
                $("#id_tipopro").val(datos["id_tipopro"]);
                $("#existencias").val(datos["existencias"]);
                $("#stock_min").val(datos["stock_min"]);
                $("#stock_max").val(datos["stock_max"]);
                Materialize.updateTextFields();
                //$('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_productos_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>productos/actualizar/"+id,$("#save_productos_almacen").serialize(),function(res){
                $('#save_productos_almacen').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });



        ///validar formulario
        $("#save_productos_almacen").validate({

            rules:{
                nombre_pro:{
                    required:true,
                    maxlength: 30,
                    minlength: 10,
                    lettersonly:true,
                },
                id_categoriapro:{
                    required:true,
                    lettersonly:true,
                },
                id_tipopro:{
                    required:true,
                },
                existencias:{
                    required:true,
                    number:true,
                },
                stock_min:{
                    required:true,
                    number:true,
                },
                stock_max:{
                    required:true,
                    number:true,
                }
            },

            messages:{
                nombre_pro:{
                    required:"Nombre del producto",
                    maxlength:"Maximo 30 caracteres",
                    minlength:"Minimo 10 caracteres"
                },
                existencias:{
                    number:"Solo Numeros"
                },
                stock_min:{
                    number:"Solo Numeros",
                },
                stock_max:{
                    number:"Solo Numeros",
                }
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },

            submitHandler:function(form){
                console.log($("#save_productos_almacen").serialize());
                $.post("<?php echo URL?>productos/crear",$("#save_productos_almacen").serialize(),function(res){

                    $("#body_table").empty().append(res);
                    $('#save_productos_almacen').find('input, select, textarea').val('');
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
