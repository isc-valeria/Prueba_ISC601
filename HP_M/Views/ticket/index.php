<div>
    <div class="row"></div>
    <div class="col s12"><div class="row"></div></div>
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card #26c6da cyan lighten-1 white-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="material-icons">local_laundry_service</i>
                        </a>
                        <p class="center">Servicios Hoy</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>1</p></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card #00bcd4 cyan white-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="material-icons">priority_high</i>
                        </a>
                        <p class="center">Pendientes</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>8</p></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card #00acc1 cyan darken-1 white-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="material-icons">playlist_add_check</i>
                        </a>
                        <p class="center">Entregados</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>4</p></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card #0097a7 cyan darken-2 white-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="material-icons">people_outline</i>
                        </a>
                        <p class="center">Clientes</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>13</p></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //////////////////////////////////////////////////////////////////////////// -->





<div class="card-panel">
    <div class="row">
        <div>
            <a href="#modal_servicios" class="btn #7bb1b3 white-text modal-trigger" id="add_servicios">
                Servicios
            </a>

            <a href="#modal_observaciones" class="btn #7bb1b3 white-text modal-trigger" id="add_observaciones">
                Observaciones
            </a>

            <a href="#modal_rekilo" class="btn #7bb1b3 white-text modal-trigger" id="add_rekilo">
               Registrar por kilo
            </a>

            <a href="#modal_repieza" class="btn #7bb1b3 white-text modal-trigger" id="add_repieza">
                Registrar por pieza
            </a>

            <a href="#modal_reportes" class="btn #7bb1b3 white-text modal-trigger" id="add_orden">
                Reportes
            </a>
        </div>
        <div class="row"></div>
        <div class="divider"></div>
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="search" placeholder="Buscar" type="text">
        </div>
        <table class="responsive-table" id="tabla_prin">
            <thead>
            <tr>
                <th>Id</th>
                <!--<th>Número habitación</th> -->
                <th>Fecha recepción</th>
                <th>Fecha entrega</th>
                <th>Habitación</th>
                <th>Cantidad</th>
                <th>Servicio</th>
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
        <div id="container"></div>
        <div class="col-md-12 center text-center">
            <span class="left" id="total_reg"></span>
            <ul class="pagination pager" id="myPager"></ul>
        </div>
    </div>
</div>


<!-- /////////////////////MODAL SERVICIOS--------//////////////////////////////////////// -->
<div id="modal_servicios" class="modal modal_c">
    <div class="modal-content">
        <form action="" id="sava_servicioslav" enctype="multipart/form-data" autocomplete="off">
            <ul id="tabs-swipe-demo" class="tabs black-text" >
                <h4 align="center">Servicios lavanderia</h4>
            </ul>
            <div class="divider"></div>
            <code class="language-markup" ></code>
            <div id="test-swipe-1" class="col s12 white">
                <div class="card-panel">

                    <div class="input-field col s4 offset-s0">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <input id="search" placeholder="Buscar" type="text">
                    </div>

                    <div class="row">
                        <div>
                            <a href="#modal_servicios_agregar" class="btn green white-text modal-trigger right" id="add_servicios">
                                Agregar
                            </a>
                        </div>

                        <table   class="responsive-table"  >
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre del Servicio</th>
                                <th>Precio</th>
                                <th>Eliminar</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody id="body_table_ser" >
                            <?php
                                include(ROOT."Views/servicioslavanderia/tabla.php");
                            ?>
                            </tbody>

                        </table>

                        <div >
                            <a href="<?php echo URL?>servicioslavanderia/print_pdf " class="btn blue white-text modal-trigger right" id="imprimir">
                                Imprimir
                            </a>
                        </div>

                        <div id="container"></div>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="myPager"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>


<!-- //////////////////////////////////////////////////////////////////////////// -->
<div id="modal_servicios_agregar" class="modal">
    <div class="modal-content">
        <div class="row center-align">
            <div class="row">
                <form action="" id="save_servicio_lavanderia" enctype="multipart/form-data" autocomplete="off">
                    <h4>Nuevo servicio</h4>
                    <div class="divider"></div>
                    <div class="input-field input-field col s5 center">
                        <input id="nombre_servi" type="text" class="validate" name="nombre_servi">
                        <label for="nombre_servi"  data-error="Incorrecto" data-success="Correcto" >Nombre del Servicio</label>
                    </div>

                    <div class="input-field input-field col s5 center">
                        <input id="precio" type="text" class="validate" name="precio">
                        <label for="precio"  data-error="Incorrecto" data-success="Correcto" >Precio</label>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_servicioslav_ok" class="btn green white-text btn center"">
                            Registrar nuevo servicio
                            </a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_servicioslav_ok" class="btn modal-close" data-id="">Actualizar </a>
                        </div>

                    </div>

                </form>
            </div>
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
        <a href="#!" id="cancelar" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>


<!-- ////////////////////////////////////OBSERVACIONES//////////////////////////////////////// -->

<div id="modal_observaciones" class="modal modal_c">
    <div class="modal-content">
        <form action="" id="sava_observacionlav" enctype="multipart/form-data" autocomplete="off">
            <ul id="tabs-swipe-demo" class="tabs black-text" >
                <h4 align="center">Observaciones</h4>
            </ul>
            <div class="divider"></div>
            <code class="language-markup" ></code>
            <div id="test-swipe-1" class="col s12 white">
                <div class="card-panel">

                    <div class="input-field col s4 offset-s0">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <input id="search" placeholder="Buscar" type="text">
                    </div>

                    <div class="row">
                        <div>
                            <a href="#modal_observaciones_agregar" class="btn green white-text modal-trigger right" id="add_observaciones">
                                Agregar
                            </a>
                        </div>

                        <table   class="responsive-table"  >
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre de la observación</th>
                                <th>Cargo</th>
                                <th>Eliminar</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody id="body_table_obser" >
                            <?php
                            include(ROOT."Views/observaciones/tabla.php");
                            ?>
                            </tbody>

                        </table>

                        <div >
                            <a href="<?php echo URL?>observaciones_lav/print_pdf " class="btn blue white-text modal-trigger right" id="impri">
                                Imprimir
                            </a>
                        </div>

                        <div id="container"></div>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="myPager"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>


<div id="modal_observaciones_agregar" class="modal">
    <div class="modal-content">
        <div class="row center-align">
            <div class="row">
                <form action="" id="save_observaciones_lavanderia" enctype="multipart/form-data" autocomplete="off">
                    <h4>Nueva observacion</h4>
                    <div class="divider"></div>
                    <div class="input-field input-field col s5 center">
                        <input id="descripcion_observacion" type="text" class="validate" name="descripcion_observacion">
                        <label for="descripcion_observacion"  data-error="Incorrecto" data-success="Correcto" >Nombre de observación</label>
                    </div>

                    <div class="input-field input-field col s5 center">
                        <input id="cargo" type="text" class="validate" name="cargo">
                        <label for="cargo"  data-error="Incorrecto" data-success="Correcto" >Cargo</label>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_observacion_ok" class="btn green white-text btn center"">
                            Registrar nueva observación
                            </a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_observacion_ok" class="btn modal-close" data-id="">Actualizar </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="modal_eliminar_obs" class="modal">
    <div class="modal-content">
        <h5>¿Desea Eliminar el Registro?</h5>
        <hr />
    </div>
    <div class="modal-footer">
        <a href="#!" id="eliminar_obs_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
        <a href="#!" id="cancelar_obs" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>


 <!-- //////////////////CLASIFICACION POR KILO////////////////////////////// -->



<div id="modal_rekilo" class="modal modal_c">
    <div class="modal-content">
        <form action="" id="sava_clasikilo" enctype="multipart/form-data" autocomplete="off">
            <ul id="tabs-swipe-demo" class="tabs black-text" >
                <h4 align="center">Registrar prendas por kilo</h4>
            </ul>
            <div class="divider"></div>
            <code class="language-markup" ></code>
            <div id="test-swipe-1" class="col s12 white">
                <div class="card-panel">

                    <div class="input-field col s4 offset-s0">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <input id="search" placeholder="Buscar" type="text">
                    </div>

                    <div class="row">
                        <div>
                            <a href="#modal_clasikilo_agregar" class="btn green white-text modal-trigger right" id="add_clasikilo">
                                Agregar
                            </a>
                        </div>

                        <table   class="responsive-table"  >
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Servicio</th>
                                <th>Cantidad</th>
                                <th>Observaciones</th>
                                <th>Eliminar</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody id="body_table_clasikilo" >
                            <?php
                            include(ROOT."Views/clasificacion_kilo/tabla.php");
                            ?>
                            </tbody>

                        </table>

                        <div >
                            <a href="<?php echo URL?>servicioslavanderia/print_pdf " class="btn blue white-text modal-trigger right" id="imprimir">
                                Imprimir
                            </a>
                        </div>

                        <div id="container"></div>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="myPager"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

<div id="modal_clasikilo_agregar" class="modal">
    <div class="modal-content">
        <div class="row center-align">
            <div class="row">
                <form action="" id="save_clasificacionkilo" enctype="multipart/form-data" autocomplete="off">
                    <h4>Nuevo registro por kilo</h4>

                    <div class="divider"></div>
                    <div class="input-field col s5">
                        <select id="descripcion_serviciokilo" type="text" name="descripcion_serviciokilo">
                            <option disabled selected>Selecciona serviciio</option>
                            <?php
                            $link = mysqli_connect("localhost", "root", "", "hotel");
                            $result3=mysqli_query($link,"select * from servicios_lavanderia");
                            while ($row=mysqli_fetch_array($result3))
                                echo "<option value='{$row[0]}'>{$row[1]}</option>";
                            ?>
                        </select>
                        <label for="descripcion_serviciokilo">Tipo de servicio</label>
                    </div>

                    <div class="input-field input-field col s5 center">
                        <input id="cantidadkg" type="text" class="validate" name="cantidadkg">
                        <label for="cantidadkg"  data-error="Incorrecto" data-success="Correcto" >Cantidad (KG)</label>
                    </div>

                    <div class="input-field col s5">
                        <select id="descripcion_observacionkilo" type="text" name="descripcion_observacionkilo">
                            <option disabled selected>Selecciona observacion</option>
                            <?php
                            $link = mysqli_connect("localhost", "root", "", "hotel");
                            $result4=mysqli_query($link,"select * from observaciones");
                            while ($row=mysqli_fetch_array($result4))
                                echo "<option value='{$row[0]}'>{$row[1]}</option>";
                            ?>
                        </select>
                        <label for="descripcion_observacionkilo">Tipo de observacion</label>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_clasikilo_ok" class="btn green white-text btn center"">
                            Registrar por kilo
                            </a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_clasikilo_ok" class="btn modal-close" data-id="">Actualizar </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<div id="modal_repieza" class="modal modal_c">
    <div class="modal-content">
        <form action="" id="sava_clasipieza" enctype="multipart/form-data" autocomplete="off">
            <ul id="tabs-swipe-demo" class="tabs black-text" >
                <h4 align="center">Registrar prendas por pieza </h4>
            </ul>
            <div class="divider"></div>
            <code class="language-markup" ></code>
            <div id="test-swipe-1" class="col s12 white">
                <div class="card-panel">

                    <div class="input-field col s4 offset-s0">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <input id="search" placeholder="Buscar" type="text">
                    </div>

                    <div class="row">
                        <div>
                            <a href="#modal_clasipieza_agregar" class="btn green white-text modal-trigger right" id="add_clasipieza">
                                Agregar
                            </a>
                        </div>

                        <table   class="responsive-table"  >
                            <thead>
                            <tr>
                               
                                <th>Id</th>
                                <th>Descripcion pieza</th>
                                <th>Cantidad</th>
                                <th>Servicio</th>
                                <th>Observaciones</th>
                                <th>Eliminar</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody id="body_table_clasipieza" >
                            <?php
                            include(ROOT."Views/clasificacion_pieza/tabla.php");
                            ?>
                            </tbody>

                        </table>

                        

                        <div id="container"></div>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="myPager"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

<div id="modal_clasipieza_agregar" class="modal">
    <div class="modal-content">
        <div class="row center-align">
            <div class="row">
                <form action="" id="save_clasificacionpieza" enctype="multipart/form-data" autocomplete="off">
                    <h4>Nuevo registro por pieza</h4>

                  

                    <div class="input-field input-field col s5 center">
                        <input id="Descripcion_pieza" type="text" class="validate" name="descripcion_pieza">
                        <label for="descripcion_pieza"  data-error="Incorrecto" data-success="Correcto" >Descripcion de la pieza</label>
                    </div>

                    <div class="input-field input-field col s5 center">
                        <input id="cantidad" type="text" class="validate" name="cantidad">
                        <label for="cantidad"  data-error="Incorrecto" data-success="Correcto" >Cantidad </label>
                    </div>
                      <div class="divider"></div>
                    <div class="input-field col s5">
                        <select id="descripcion_serviciopieza" type="text" name="descripcion_serviciopieza">
                            <option disabled selected>Selecciona servicio</option>
                            <?php
                            $link = mysqli_connect("localhost", "root", "", "hotel");
                            $result3=mysqli_query($link,"select * from servicios_lavanderia");
                            while ($row=mysqli_fetch_array($result3))
                                echo "<option value='{$row[0]}'>{$row[1]}</option>";
                            ?>
                        </select>
                        <label for="descripcion_serviciopieza">Tipo de servicio</label>
                    </div>

                    <div class="input-field col s5">
                        <select id="descripcion_observacionpieza" type="text" name="descripcion_observacionpieza">
                            <option disabled selected>Selecciona observacion</option>
                            <?php
                            $link = mysqli_connect("localhost", "root", "", "hotel");
                            $result4=mysqli_query($link,"select * from observaciones");
                            while ($row=mysqli_fetch_array($result4))
                                echo "<option value='{$row[0]}'>{$row[1]}</option>";
                            ?>
                        </select>
                        <label for="descripcion_observacionpieza">Tipo de observacion</label>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_clasipieza_ok" class="btn green white-text btn center"">
                            Registrar por pieza
                            </a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_clasipieza_ok" class="btn modal-close" data-id="">Actualizar </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- //////////////////////////////////////////////////////////////////////////// -->
<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();

        $("#add_servicios").click(function(){
            $("#update_servicioslav_ok").hide();
            $("#save_servicioslav_ok").show();
        });

        $("#save_servicioslav_ok").click(function(){
            $.post("<?php echo URL?>servicioslavanderia/crear",$("#save_servicio_lavanderia").serialize(),function(res){
                $("#body_table_ser").empty().append(res);
                $('#save_servicio_lavanderia').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
                $("#modal_servicios_agregar").modal("close");
            })
        });

        $("#body_table_ser").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>servicioslavanderia/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#modal_eliminar").modal("open");
        });

        $("#eliminar_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table_ser").empty().append(res);
                Materialize.toast('Se ha eliminado correctamente', 2500);
            });
        });

        $("#body_table_ser").on("click","a.btn_modificar",function(){
            $("#save_servicioslav_ok").hide();
            $("#update_servicioslav_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>servicioslavanderia/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_servicioslav_ok").data("id",datos["id_serviciolav"]);
                $("#nombre_servi").val(datos["descripcion_servicio"]);
                $("#precio").val(datos["precio"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_servicios_agregar").modal("open");
            });
        });

        $("#update_servicioslav_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>servicioslavanderia/actualizar/"+id,$("#save_servicio_lavanderia").serialize(),function(res){
                $('#save_servicio_lavanderia').find('input, select, textarea').val('');
                $("#body_table_ser").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

        //--------------------------OBSERVACIONES-------------------------------------------
        $("#add_observaciones").click(function(){
            $("#update_observacion_ok").hide();
            $("#save_observacion_ok").show();
        });

        $("#save_observacion_ok").click(function(){
            $.post("<?php echo URL?>observaciones/crear",$("#save_observaciones_lavanderia").serialize(),function(res){
                $("#body_table_obser").empty().append(res);
                $('#save_observaciones_lavanderia').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                $("#modal_observaciones_agregar").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
            })
        });

        $("#body_table_obser").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>observaciones/eliminar/'+id;
            $("#eliminar_obs_ok").attr("url",url);
            $("#modal_eliminar_obs").modal("open");
        });

        $("#eliminar_obs_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table_obser").empty().append(res);
                Materialize.toast('Se ha eliminado correctamente', 2500);
            });
        });

        $("#body_table_obser").on("click","a.btn_modificar",function(){
            $("#save_observacion_ok").hide();
            $("#update_observacion_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>observaciones/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_observacion_ok").data("id",datos["id_observacion"]);
                $("#descripcion_observacion").val(datos["descripcion_observacion"]);
                $("#cargo").val(datos["cargo"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_observaciones_agregar").modal("open");
            });
        });
        $("#update_observacion_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>observaciones/actualizar/"+id,$("#save_observaciones_lavanderia").serialize(),function(res){
                $('#save_observaciones_lavanderia').find('input, select, textarea').val('');
                $("#body_table_obser").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

        //--------------------------CLASIFICACION POR KILO-------------------------------------------

        $("#add_clasikilo").click(function(){
            $("#update_servicioslav_ok").hide();
            $("#save_servicioslav_ok").show();
        });

        $("#save_clasikilo_ok").click(function(){
            $.post("<?php echo URL?>clasificacion_kilo/crear",$("#save_clasificacionkilo").serialize(),function(res){
                $("#body_table_clasikilo").empty().append(res);
                $('#save_clasificacionkilo').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
                $("#modal_clasikilo_agregar").modal("close");
            })
        });

         //--------------------------CLASIFICACION POR PIEZA-------------------------------------------

        $("#add_clasipieza").click(function(){
            $("#update_servicioslav_ok").hide();
            $("#save_servicioslav_ok").show();
        });

        $("#save_clasipieza_ok").click(function(){
            $.post("<?php echo URL?>clasificacion_pieza/crear",$("#save_clasificacionpieza").serialize(),function(res){
                $("#body_table_clasipieza").empty().append(res);
                $('#save_clasificacionpieza').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
                $("#modal_clasipieza_agregar").modal("close");
            })
        });


        $('#body_table').pageMe({
            pagerSelector:'#myPager',
            activeColor: 'blue',
            prevText:'Anterior',
            nextText:'Siguiente',
            showPrevNext:true,
            hidePageNumbers:false,
            perPage:3
        });

    });
</script>




