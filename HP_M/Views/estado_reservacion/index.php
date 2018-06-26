<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_estadoreserva" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Estado de reservacion</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="descripcion_estadoreserva" type="text"  name="descripcion_estadoreserva">
                            <label for="descripcion_estadoreserva" >Descripcion del estado de reservación</label>
                        </div>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_estadoreserva_ok" class="btn cyan lighten-2 black-text">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_estadoreserva_ok" class="btn modal-close cyan lighten-2 black-text " data-id="">Actualizar</a>
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
            <h4 align="center">Estados de Reservación<span class="right"><a href="#modal_registro" class="btn cyan lighten-2 black-text modal-trigger" id="add_estadoreserva"><i class="material-icons">add</i></a></span></h4>
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
                    <th>Estado de Reservación</th>
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
        $("#add_estadoreserva").click(function(){
            $("#update_estadoreserva_ok").hide();
            $("#save_estadoreserva_ok").show();
        });

        $("#save_estadoreserva_ok").click(function() {
            $("#save_estadoreserva").submit();
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>estado_reservacion/eliminar/'+id;
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
            $("#update_estadoreserva_ok").show();
            $("#save_estadoreserva_ok").hide();
            var id=$(this).data("id");
            $.get("<?php echo URL?>estado_reservacion/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_estadoreserva_ok").data("id",datos["id_estador"]);
                $("#descripcion_estadoreserva").val(datos["estador"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });

        $("#update_estadoreserva_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>estado_reservacion/actualizar/"+id,$("#save_estadoreserva").serialize(),function(res){
                $('#save_estadoreserva').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });



        $("#save_estadoreserva").validate({

            rules:{
                descripcion_estadoreserva:{
                    required:true,
                    maxlength: 20,
                    minlength: 4,
                    lettersonly:true,
                },
            },
            messages:{
                descripcion_estadoreserva:{
                    required:"Ingresa descripción",
                    maxlength:"Maximo 20 caracteres",
                    minlength:"Minimo 4 caracteres"

                },
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>estado_reservacion/crear",$("#save_estadoreserva").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_estadoreserva').find('input, select, textarea').val('');
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


