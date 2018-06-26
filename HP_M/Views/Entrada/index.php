<div class="container center" id="modal_registro" class="modal">
    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

        <form class="col s12" id="save_salida" enctype="multipart/form-data" autocomplete="off" >
            <div class='row'>
                <div class='col s12'>
                </div>
            </div>
            <h5 class="black-text ">Por favor, Registra tu Entrada</h5><br>
            <div class="row" >
                <div class="row" >

                    <div class="input-field input-field col s3.5">
                        <input id="id_empleado" type="text"  name="id_empleado" >
                        <label for="id_empleado"  >codigo</label>
                    </div>

                    <div class="input-field input-field col s3.5">
                        <input id="fecha_entrada" type="datetime-local"  name="fecha_entrada"
                               value="<?php date_default_timezone_set('america/mexico_city');
                               echo date('Y-m-d H:i:s', time()); ?>">
                        <label for="fecha_entrada"   ></label>
                    </div>

                </div>
                <div class="modal-fixed-footer">
                    <div class="input-field col s12"  >
                        <a id="save_Salida_ok" class="btn modal-close" href="<?php echo URL?>empleados"   >Registrar</a>

                    </div>

                </div>
            </div>

            <br />

        </form>
    </div>
</div>
<div class="card-panel">

    <div class="divider"></div>


    <!-- Modal eliminar -->

    <!--*********************final modal eliminar***********-->
    <table class="responsive-table" id="tabla_content">
        <thead>
        <tr>

            <th>Codigo</th>
            <th>Fecha</th>

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


<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();;
        $("#save_Salida_ok").click(function(){


            $("#save_Salida_ok").show();
        });
        $("#save_Salida_ok").click(function(){
            $("#save_salida").submit();
        });
        ///validar formulario
        $("#save_salida").validate({
            rules:{
                id_empleado:{
                    required:true,
                    maxlength: 12,
                    number:true,
                }
            },
            messages:{
                id_empleado:{
                    required:"Ingresa un codigo numerico",
                    maxlength:"Maximo 10 numero",
                    number:"solo numeros",
                },
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>Entrada/crear",$("#save_salida").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_salida').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    Materialize.toast('Se ha insertado correctamente', 2500);
                })
            }
        });
    });
</script>
