<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_tipo" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Usuarios</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="email"  type="email"  name="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field input-field col s5">
                            <input id="pass" type="text"  name="pass">
                            <label for="pass">Contraseña</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="id_empleado" type="text"  name="id_empleado">
                            <label for="id_empleado">Codigo empleado</label>
                        </div>

                    </div>


                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_tipo_ok" class="btn">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_tipo_ok" class="btn modal-close" data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


    <nav>
        <div class="nav-wrapper cyan lighten-2">

            <ul class="left hide-on-med-and-down">
                <li><a href="<?php echo URL?>empleados" class="white-text modal-trigger" id="add_servicios">Empleados                                                                                             </a></li>
                <a  href="#modal_registro"  class="btn blue accent-3 white-text tooltipped modal-trigger  " data-position="bottom" data-delay="50"
                    data-tooltip="Registro cuenta" id="add_usuario" ><i class="material-icons">email</i></a>


            </ul>

        </div>

    </nav>
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

            <th>Email</th>
            <th>Contraseña</th>
            <th>Codigo empleado</th>
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
        $("#add_usuario").click(function(){
            $("#update_tipo_ok").hide();
            $("#save_tipo_ok").show();
        });
        $("#save_tipo_ok").click(function(){
            $("#save_tipo").submit();


        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Usuarios/eliminar/'+id;
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
            $.get("<?php echo URL?>Usuarios/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_tipo_ok").data("id",datos["id_usuario"]);
                $("#email").val(datos["email"]);
                $("#pass").val(datos["pass"]);
                $("#id_empleado").val(datos["id_empleado"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_tipo_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>Usuarios/actualizar/"+id,$("#save_tipo").serialize(),function(res){
                $('#save_tipo_ok').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);

                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });
        ///validar formulario
        $("#save_tipo").validate({

            rules: {
                email:{
                    required: true,
                },
                pass:{
                    required: true,
                    minlength: 5,
                },
                id_empleado: {
                    required: true,
                    maxlength: 30,
                    minlength: 4,
                    number: true,

                }
            },
            messages:{
                email:{
                    required:"Direccion no valida",
                    email:"Direccion no valida(ejemplo@tesvb.com)",
                },
                pass:{
                    required:"Ingresa contraseña",
                    minlength:"Contraseña muy corta, poco segura"
                },
                id_empleado:{
                    required:"Ingresa código",
                    maxlength:"Código muy largo",
                    minlength:"Código muy corto",
                    number:"Solo numeros"

                }
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>Usuarios/crear",$("#save_tipo").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_tipo').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    $("#modal_registro").modal("close");
                    Materialize.toast('Se ha insertado correctamente', 2500);

                })
            }
        });


        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });

    });
</script>
