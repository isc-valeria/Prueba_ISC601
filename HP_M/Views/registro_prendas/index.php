<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_Lavanderia" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Registrar prendas</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="input-field col s1">
                    </div>
                    <div class="input-field col s1">
                    </div>
                    <div class="input-field col s1">
                    </div>
                    <div class="input-field col s1">
                    </div>
                    <div class="row">
                       <!-- <div class="input-field col l4">
                            <select id="numerotipohabitacion" type="text" class="validate">
                                <option value="" disabled selected>Selecciona la habitación</option>

                            </select>
                            <label for="numerotipohabitacion" data-error="incorrecto" data-success="Correcto" >Número de Habitación</label>
                        </div>  -->

                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s1">
                        </div>
                        <div class="input-field col s1">
                        </div>

                        <div class="row">
                            <div class="input-field col l3 offset-l3 ">
                                <label>Fecha de recepción</label>
                                <input id="fecha_recep" type="text" class="datepicker">
                            </div>

                            <div class="input-field col s1">
                            </div>

                            <div class="input-field col l3">
                                <label>Fecha de Entrega</label>
                                <input id="fecha_entre" type="text" class="datepicker">
                            </div>
                        </div>

                        <div class="row">
                            <div>
                                <div class="input-field col l2 offset-l1">
                                    <select id="tiporopa" type="text" class="validate">

                                        <option value="" disabled selected>Selecciona</option>
                                        <?php
                                        $result1=$datos[2];
                                        while ($row=mysqli_fetch_array($result1))
                                            echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                        ?>
                                    </select>
                                    <label for="tiporopa" data-error="incorrecto" data-success="Correcto" >Tipo de Ropa </label>
                                </div>
                                <div class="input-field col s1">
                                    <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_tiporopa" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                                </div>
                            </div>

                            <div class="input-field col s1">
                            </div>

                            <div>
                                <div class="input-field col l2 ">
                                    <select id="estadoprenda" type="text" class="validate">
                                        <option value="" disabled selected>Selecciona</option>
                                        <?php
                                        $result2=$datos[3];
                                        while ($row=mysqli_fetch_array($result2))
                                            echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                        ?>
                                    </select>
                                    <label for="estadoprenda" data-error="incorrecto" data-success="Correcto"> Estado de la Prenda</label>
                                </div>
                                <div class="input-field col s1">
                                    <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_estadoprenda" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                                </div>
                            </div>

                            <div class="input-field col s1">
                            </div>

                            <div>
                                <div class="input-field col l2 ">
                                    <select id="tipotela" type="text" class="validate">
                                        <option value="" disabled selected>Selecciona</option>
                                        <?php
                                        $result3=$datos[4];
                                        while ($row=mysqli_fetch_array($result3))
                                            echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                        ?>
                                    </select>
                                    <label for="opciontipotela" data-error="incorrecto" data-success="Correcto"> Tipo de Tela</label>
                                </div>
                                <div class="input-field col s1">
                                    <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_tipotela" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div>
                                <div class="input-field col l2 offset-l1">
                                    <select id="color" type="text" class="validate">
                                        <option value="" disabled selected>Selecciona</option>
                                        <?php
                                        $result4=$datos[5];
                                        while ($row=mysqli_fetch_array($result4))
                                            echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                        ?>
                                    </select>
                                    <label for="color" data-error="incorrecto" data-success="Correcto"> Color de la prenda</label>
                                </div>
                                <div class="input-field col s1">
                                    <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_color" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                                </div>
                            </div>

                            <div class="input-field col s1">
                            </div>

                            <div>
                                <div class="input-field col l2 ">
                                    <select id="tratamiento" type="text" class="validate">
                                        <option value="" disabled selected>Selecciona</option>
                                        <?php
                                        $result5=$datos[6];
                                        while ($row=mysqli_fetch_array($result5))
                                            echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                        ?>
                                    </select>
                                    <label for="tratamiento" data-error="incorrecto" data-success="Correcto"> Tratamiento</label>
                                </div>
                                <div class="input-field col s1">
                                    <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_tratamiento" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                                </div>
                            </div>

                            <div class="input-field col s1">
                            </div>

                            <div>
                                <div class="input-field col l2 ">
                                    <select id="precio" type="text" class="validate">
                                        <option value="" disabled selected>Selecciona</option>
                                        <?php
                                        $result6=$datos[7];
                                        while ($row=mysqli_fetch_array($result6))
                                            echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                        ?>
                                    </select>
                                    <label for="precio" data-error="incorrecto" data-success="Correcto"> Precio</label>
                                </div>
                                <div class="input-field col s1">
                                    <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_precio" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-fixed-footer center">
                            <div class="input-field col s12">
                                <a href="#!" id="save_lavanderia_ok" class="btn modal-close">Registrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="card-panel">
    <span class="right"><a href="#modal_registro" class="btn green white-text modal-trigger" id="add_prenda">
            <i class="material-icons">add</i>
            </a></span></h4>
        <form action="" id="save_lava" enctype="multipart/form-data" autocomplete="off">
        <h4 align="center">Prendas registradas</h4>
        <div class="divider"></div>
        <code class=" language-markup"><!--********************************--></code>
        <div class="row">
            <div class="row">
                <div class="input-field col s4 offset-s8">
                    <i class="mdi-action-verified-user prefix icon-search"></i>
                    <input id="buscar" placeholder="Buscar" type="text">
                </div>

                <table class="responsive-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <!--<th>Número habitación</th> -->
                        <th>Fecha recepción</th>
                        <th>Fecha entrega</th>
                        <th>Estado prenda</th>

                        <th>Tela</th>
                        <th>Color</th>
                        <th>Tratamiento</th>
                        <th>Precio</th>
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
    </form>
</div>



<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $('.datepicker').pickadate();
        $(".modal").modal();
        $("#add_prendas").click(function(){
            $("#update_Lavanderia_ok").hide();
            $("#save_Lavanderia_ok").show();
        });
    });

    $("#save_lavanderia_ok").click(function(){
        //console.log("ok")
        //console.log($("#save_habitacion").serialize());
        $.post("<?php echo URL?>registro_prendas/crear",$("#save_Lavanderia").serialize(),function(res){
            $("#body_table").empty().append(res);
            $('#save_Lavanderia').find('input, select, textarea').val('');
            Materialize.updateTextFields();
            //$("#modal_registro").modal("close");
            Materialize.toast('Se ha insertado correctamente', 2500);
        })
    });
</script>



