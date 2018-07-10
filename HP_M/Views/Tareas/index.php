<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_tarea" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Agregar tarea</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field col s6">
                            <select id="tareas" type="text" name="tareas">
                                <option value="" disabled selected>Selecciona la Tarea</option>
                                <?php
                                $result1=$datos[1];
                                while ($row=mysqli_fetch_array($result1))
                                {
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                }
                                ?>

                            </select>
                            <label for="tareas"  >Seleciona Tarea</label>
                        </div>

                        <div class="input-field col s6">
                            <select id="empleados" type="text"  name="empleados">
                                <option  disabled selected>Selecciona Empleado</option>
                                <?php
                                $result2=$datos[2];
                                while ($row=mysqli_fetch_array($result2))
                                    echo "<option value='{$row[0]}'>{$row[1]} {$row[2]} {$row[3]}</option>";
                                ?>
                            </select>
                            <label for="empleados">Seleciona Empleado</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select id="habitacion" type="text"  name="habitacion">
                                <option value="" disabled selected>Habitacion</option>
                                <?php
                                $result3=$datos[3];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="habitacion"  >No. Habitación</label>
                        </div>


                        <div class="input-field col l3">
                            <label>Fecha de Inicio</label>
                            <input id="fecha_i" type="text" class="datepicker" name="fecha_i">
                        </div>

                        <div class="input-field col l3">
                            <label>Fecha de Fiin</label>
                            <input id="fecha_f" type="text" class="datepicker" name="fecha_f">
                        </div>
                    </div>
                    <div class=" col s12">
                        <label><b>Seleciona las herramientas</b></label>
                    </div>
                    <div class=" col s12">
                        <?php
                        $result4=$datos[4];
                        while ($row=mysqli_fetch_array($result4)) {
                            echo "<input type='checkbox' id='$row[0]' name='eq[]' value='$row[0]'><label for='$row[0]'>{$row[1]}</label>";
                        }
                        ?>
                    </div>
                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_tarea_ok" class="btn ">Registrar</a>
                        </div>

                        <div class="input-field col s12">
                            <a href="#!" id="update_tarea_ok" class="btn modal-close " data-id="">Actualizar</a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card-panel">
    <h4 align="center">Control Tareas<span class="right"><a href="#modal_registro" class="btn cyan lighten-2 black-text modal-trigger" id="add_tarea"><i class="material-icons">add</i></a></span></h4>
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
            <th>Tarea</th>
            <th>Empleado</th>
            <th>Habitacion</th>
            <th>Inicio</th>
            <th>Fin</th>
            <th>Equipo Utilizado</th>
            <th>Eliminar</th>
            <th>Actualizar</th>
        </tr>
        </thead>
        <tbody id="body_table">
        <?php
        require_once ("tabla.php");
        ?>
        </tbody>
    </table>
    <div class ="center">
        <a href="#!" id="imprimir_pdf" class="btn cyan lighten-2 accent-3 black-text tooltipped " data-position="bottom" data-delay="50" data-tooltip="Imprimir">
            <i class="material-icons">picture_as_pdf</i></a>
        <a href="#!"  id="graficar_tareas" class="btn cyan lighten-2 accent-3 black-text tooltipped " data-position="bottom" data-delay="50" data-tooltip="Graficar">
            <i class="material-icons">equalizer     </i></a>
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

<div id="modal_grafica" class="modal">
    <div class="modal-content">
        <h5>Gráfica de Tareas</h5>
        <p>

        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" id="cancelar" class="modal-close red white-text waves-effect waves-green btn-flat">Cerrar</a>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function(){

        $('select').material_select();
        $(".modal").modal();
        $("#add_tarea").click(function(){
            $("#update_tarea_ok").hide();
            $("#save_tarea_ok").show();
            $("#habitacion_nueva").hide();

            $("#habitacion").click(function(){
                //$("#hbitacion_nueva").hide();
                $("#habitacion_nueva").hide();
            });
        });

        $("#save_tarea_ok").click(function() {
            $("#save_tarea").submit();
        });
        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Tareas/eliminar/'+id;
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
            $("#update_tarea_ok").show();
            $("#save_tarea_ok").hide();
            var id=$(this).data("id");
            $.get("<?php echo URL?>Tareas/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_tarea_ok").data("id",datos["id_tarea"]);
                $("#tareas").val(datos["id_tipotarea"]);
                $("#empleados").val(datos["id_empleado"]);
                $("#habitacion").val(datos["id_habitacion"]);
                $("#fecha_i").val(datos["fecha_inicio"]);
                $("#fecha_f").val(datos["fecha_fin"]);
                var cadena = datos["equipo"],
                    separador = ",", // un espacio en blanco
                    arregloDeSubCadenas = cadena.split(separador);
                $().val(datos["fecha_fin"]);
                $("#save_tarea input[type=checkbox]").each(function(){
                    $(this).prop("checked", false);

                    for (var i=0;i<arregloDeSubCadenas.length;i++) {
                        if (arregloDeSubCadenas[i] == $(this).val())
                            $(this).prop("checked", true);
                    }
                })
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
            });
        });
        $("#update_tarea_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>tareas/actualizar/"+id,$("#save_tarea").serialize(),function(res){
                $('#save_tarea').find('input[type="text"], select, textarea').val('');
                $("#body_table").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });
        $("#save_tarea").validate({

            rules:{
                empleados:{
                    required:true,
                },
                tareas:{
                    required:true,
                },
                habitacion:{
                    required:true,
                },
                fecha_i:{
                    required:true,
                },
                fecha_f:{
                    required:true,
                }
            },
            messages:{
                tareas:{
                    required:"Deves selecionar uno",
                },
                empleados:{
                    required:"Deves selecionar uno",
                },
                habitacion:{
                    required:"Deves selecionar uno",
                },
                fecha_i:{
                    required:"Deves selecionar una fecha",
                },
                fecha_f:{
                    required:"Deves selecionar una fecha",
                },
            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>tareas/crear",$("#save_tarea").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_tarea').find('input[type="text"], select, textarea').val('');
                    Materialize.updateTextFields();
                    // $('input:checkbox[name=eq]').removeAttr('checked');
                    $("#modal_registro").modal("close");

                })
            }
        });
        $('select').material_select();
        $('.datepicker').pickadate();

        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });
        $("#graficar_tareas").click(function(){
            $.get("<?php echo URL?>tareas/graficar",function(res){
                $("#modal_grafica .modal-content p").empty().append(res);
                $("#modal_grafica").modal("open");
            });
        });
        $("#imprimir_pdf").click(function(){
            var campo1;//, campo2, campo3;
            var campo=[];
            var tabla=[];
            $("#body_table tr:visible").each(function (index) {
                $(this).children("td").each(function (index2) {
                    campo[index2]=$(this).text();
                    //$(this).css("background-color", "#ECF8E0");
                })
                tabla[index]=campo;
            })
            campo1=JSON.stringify(tabla);
            //alert (campo1);
            window.open("<?php echo URL?>tareas/print_pdf/?campo1="+campo1);
        });
    });

</script>