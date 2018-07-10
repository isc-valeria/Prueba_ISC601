<div id="modal_registro" class="modal">
    <title>
        <?php echo "Clientes" ?>
    </title>
    <div class="modal-content">
        <div class="card-panel">
                <form action="" id="save_clientes" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Clientes</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="nombre_cli" type="text" name="nombre_cli" >
                            <label for="nombre_cli" >Nombre de Cliente</label>
                        </div>

                        <div class="input-field col s1">

                        </div>
                        <div class="input-field col s5">
                            <input id="ap_cli" type="text" name="ap_cli">
                            <label for="ap_cli"  >Apellido Paterno</label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s5">
                            <input id="am_cli" type="text" name="am_cli">
                            <label for="am_cli"  >Apellido Materno</label>
                        </div>

                        <div class="input-field col s1">

                        </div>

                        <div class="input-field col s5">
                            <input id="telefono" type="text" name="telefono">
                            <label for="telefono">Telefono</label>

                        </div>

                        <div class="input-field col s1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s5">
                            <input id="email" type="email"  name="email">
                            <label for="email"  >Correo Electronico</label>
                        </div>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_clientes_ok" class="btn orange accent-3" font color="#f6f2cc" ">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_clientes_ok" class="btn modal-close orange accent-3" font color="#f6f2cc" data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="card-panel">
    <h4 align="center">Clientes Registrados <span class="right"><a href="#modal_registro" class="btn orange accent-3 modal-trigger" font color="#f6f2cc" id="add_cliente">
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
            <th>Nombre del Cliente</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
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
        <a href="<?php echo URL ?>clientes/print_pdf" target="_blank" id="imprime_pdf" class="btn orange accent-3 accent-3 tooltipped" font color="#f6f2cc" data-position="bottom" data-delay="50" data-tooltip="Imprimir" ><i class="material-icons">picture_as_pdf</i></a>
        <a href="#!"  id="graficar_habitaciones" class="btn orange accent-3 accent-3 tooltipped" font color="#f6f2cc" data-position="bottom" data-delay="50" data-tooltip="Graficar"><i class="material-icons">equalizer</i></a>
    </div>
</div>
<div id="modal_grafica" class="modal">
    <div class="modal-content">
        <h5>Gráfica de clientes frecuentes</h5>
        <p>

        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" id="cancelar" class="modal-close red white-text waves-effect waves-green btn-flat">Cerrar</a>
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
                $("#email").val(datos["email"]);
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


        ///validar formulario
        $("#save_clientes").validate({

            rules:{
                nombre_cli:{
                    required:true,
                    maxlength: 8,
                    minlength: 4,
                    lettersonly:true,
                },
                ap_cli:{
                    required:true,
                    lettersonly:true,
                },
                am_cli:{
                    required:true,
                    lettersonly:true,
                },
                telefono:{
                    required:true,
                    number:true,
                    maxlength: 10,
                    minlength: 10,
                },
                email:{
                    required:true,
                    email:true,
                }
            },
            messages:{
                nombre_cli:{
                    required:"Ingresa un nombre",
                    maxlength:"Maximo 30 caracteres",
                    minlength:"Minimo 2 caracteres"

                },
                ap_cli:{
                    required:"Ingresa un apellido",
                    maxlength:"Maximo 12 caracteres",
                    minlength:"Minimo 2 caracteres"

                },
                am_cli:{
                    required:"Ingresa un apellido",
                    maxlength:"Maximo 12 caracteres",
                    minlength:"Minimo 2 caracteres"

                },
                telefono:{
                    number:"Sólo números",
                    required:"Ingresa un número",
                    maxlength:"Maximo 10 numeros",
                    minlength:"Minimo 10 numeros"
                },
                email:{
                    required:"Ingresa un correo electrónico",
                    email:"Correo no válido",
                },
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>clientes/crear",$("#save_clientes").serialize(),function(res){
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

        $("#graficar_habitaciones").click(function(){
            $.get("<?php echo URL?>clientes/graficar",function(res){
                $("#modal_grafica .modal-content p").empty().append(res);
                $("#modal_grafica").modal("open");
            });
        });
    });
</script>
