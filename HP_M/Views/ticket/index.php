<div>
    <div class="row" align="center"></div>
    <div class="col s12"><div class="row"></div></div>
    <div class="row">
        <div class="col s12 m9 l2">
            <div class="card #26c6da cyan lighten-1 black-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5" >
                            <i class="mdi-action-verified-user prefix icon-paste #26c6da cyan lighten-1"></i>
                        </a>
                        <p class="center">Servicios Hoy</p>

                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>
                                <?php
                                $link = mysqli_connect("localhost", "root", "", "hotel");
                                $consul=mysqli_query($link,"select COUNT(id_ventahabkilo) from ventahab_kilo");

                                $fila = mysqli_fetch_row($consul);
                                echo $fila[0];
                                ?>


                        </p></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m9 l2">
            <div class="card #00bcd4 cyan black-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="mdi-action-verified-user prefix icon-bell #00bcd4 cyan"></i>
                        </a>
                        <p class="center">Pendientes</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>8</p></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m9 l2">
            <div class="card #00acc1 cyan darken-1 black-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="mdi-action-verified-user prefix icon-aid-kit #00acc1 cyan darken-1"></i>
                        </a>
                        <p class="center">Entregados</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>4</p></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m9 l2">
            <div class="card #0097a7 cyan darken-2 black-text">
                <div class="padding-4">
                    <div class="col s7 m6">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="mdi-action-verified-user prefix icon-accessibility #0097a7 cyan darken-2"></i>
                        </a>
                        <p class="center">Clientes</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>
                                <?php
                                $link = mysqli_connect("localhost", "root", "", "hotel");
                                $consul=mysqli_query($link,"select COUNT(id_habitacion) from habitaciones");

                                $fila = mysqli_fetch_row($consul);
                                echo $fila[0];
                                ?>
                            </p></h4>
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
                Observaciónes
            </a>

            <a href="#modal_rekilo" class="btn #7bb1b3 white-text modal-trigger" id="add_rekilo">
                Registrar por kilo
            </a>

            <a href="#modal_repieza" class="btn #7bb1b3 white-text modal-trigger" id="add_repieza">
                Registrar por pieza
            </a>

            <a href="#modal_venkilo" class="btn #7bb1b3 white-text modal-trigger" id="add_ventakilo">
                Ventas kilo
            </a>

            <a href="#modal_venpieza" class="btn #7bb1b3 white-text modal-trigger" id="add_ventapieza">
                Ventas pieza
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
<div id="modal_servicios" class="modal modal_s">
    <div class="modal-content">
        <form action="" id="sava_servicioslav" enctype="multipart/form-data" autocomplete="off">
            <ul id="tabs-swipe-demo" class="tabs black-text" >
                <h4 align="center">Servicios lavanderia</h4>
            </ul>
            <div class="divider"></div>
            <code class="language-markup" ></code>
            <div id="test-swipe-1" class="col s12 white">
                <div class="card-panel">

                    <div class="row">
                        <div>
                            <a href="#modal_servicios_agregar" class="btn green white-text modal-trigger right" id="add_servicios">
                                <i class="material-icons">add</i>
                            </a>
                        </div>

                        <table id="example" class="mdl-data-table">
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
                    <div class="input-field input-field col s5 center">
                        <input id="nombre_servi" type="text"  name="nombre_servi">
                        <label for="nombre_servi" >Nombre del Servicio</label>
                    </div>

                    <div class="input-field input-field col s5 center">
                        <input id="precio" type="number"  name="precio">
                        <label for="precio"  >Precio</label>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <div>

                            </div>
                            <a href="#!" id="save_servicioslav_ok" class="btn green white-text btn center"">
                            Registrar
                            </a>
                            <a href="#!" id="update_servicioslav_ok" class="btn modal-close" data-id="">Actualizar </a>
                            <a href="#!" id="cancelar_pieza" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
                        </div>


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
                <h4 align="center">observaciónes</h4>
            </ul>
            <div class="divider"></div>
            <code class="language-markup" ></code>
            <div id="test-swipe-1" class="col s12 white">
                <div class="card-panel">

                    <div class="input-field col s4 offset-s0">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <input id="buscar1" placeholder="Buscar" type="text">
                    </div>

                    <div class="row">
                        <div>
                            <a href="#modal_observaciones_agregar" class="btn green white-text modal-trigger right" id="add_observaciones">
                                <i class="material-icons">add</i>
                            </a>
                        </div>

                        <table   class="responsive-table" id="tabla_observacion" >
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
                    <h4>Nueva observación</h4>
                    <div class="input-field input-field col s5 center">
                        <input id="descripcion_observacion" type="text"  name="descripcion_observacion">
                        <label for="descripcion_observacion"  >Nombre de observación</label>
                    </div>

                    <div class="input-field input-field col s5 center">
                        <input id="cargo" type="text"  name="cargo">
                        <label for="cargo"   >Cargo</label>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_observacion_ok" class="btn green white-text btn center"">
                            Registrar
                            </a>
                            <a href="#!" id="update_observacion_ok" class="btn modal-close" data-id="">Actualizar </a>
                            <a href="#!" id="cancelar_pieza" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
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
                        <input id="buscar2" placeholder="Buscar" type="text">
                    </div>

                    <div class="row">
                        <div>
                            <a href="#modal_clasikilo_agregar" class="btn green white-text modal-trigger right" id="add_clasikilo">
                                <i class="material-icons">add</i>
                            </a>
                        </div>

                        <table   class="responsive-table" id="tabla_clasikilo" >
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Servicio</th>
                                <th>Cantidad</th>
                                <th>Observaciones</th>
                                <th>Fecha registro</th>
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
                <form action="" id="save_clasificacionkilo" method="post" enctype="multipart/form-data" autocomplete="off">
                    <h4>Nuevo registro por kilo</h4>

                    <div class="divider"></div>
                    <div class="input-field col s5">


                        <select id="id_serviciolav"  type="text" name="descripcion_servicio">
                            <option value="" disabled selected>Selecciona servicio</option>
                            <?php
                            $dato=$datos["servicio"];
                            while($row=mysqli_fetch_array($dato))
                                echo "<option value='{$row[0]}'> {$row[1]} </option>";
                            $dato->data_seek(0);
                            ?>
                        </select>
                        <label for="descripcion_servicio" >Tipo de servicio</label>
                    </div>

                    <div class="input-field input-field col s5 center">
                        <input id="cantidadkg" type="text"  name="cantidadkg">
                        <label for="cantidadkg" >Cantidad (KG)</label>
                    </div>

                    <div class="input-field col s5">
                        <select id="id_observacion" type="text" name="descripcion_observacion">
                            <option disabled selected>Selecciona observacion</option>
                            <?php
                            $dato=$datos["observaciones"];
                            while($row=mysqli_fetch_array($dato))
                                echo "<option value='{$row[0]}'> {$row[1]} </option>";
                            $dato->data_seek(0);
                            ?>
                        </select>
                        <label for="descripcion_observacion">Tipo de observacion</label>
                    </div>

                    <div class="input-field input-field col s3.5">
                        <input id="fecha_registro" type="datetime-local" class="validate" name="fecha_registro" value="<?php date_default_timezone_set('america/mexico_city'); echo date('Y-m-d H:i:s', time()); ?>">
                        <label for="fecha_registro"  data-error="Incorrecto" data-success="Correcto" ></label>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_clasikilo_ok" class="btn green white-text btn center"">
                            Registrar
                            </a>
                            <a href="#!" id="update_clasikilo_ok" class="btn modal-close" data-id="">Actualizar </a>
                            <a href="#!" id="cancelar_pieza" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="modal_eliminar_kilo" class="modal">
    <div class="modal-content">
        <h5>¿Desea Eliminar el Registro?</h5>
        <hr />
    </div>
    <div class="modal-footer">
        <a href="#!" id="eliminar_kilo_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
        <a href="#!" id="cancelar_kilo" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>

<!-- //////////////////CLASIFICACION POR pieza////////////////////////////// -->
<div id="modal_repieza" class="modal modal_c">
    <div class="modal-content">
        <form action="" id="sava_clasipieza" enctype="multipart/form-data" autocomplete="off">
            <ul id="tabs-swipe-demo" class="tabs black-text" >
                <h4 align="center">Registrar por pieza </h4>
            </ul>
            <div class="divider"></div>
            <code class="language-markup" ></code>
            <div id="test-swipe-1" class="col s12 white">
                <div class="card-panel">

                    <div class="input-field col s4 offset-s0">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <input id="buscar3" placeholder="Buscar" type="text">
                    </div>

                    <div class="row">
                        <div>
                            <a href="#modal_clasipieza_agregar" class="btn green white-text modal-trigger right" id="add_clasipieza">
                                <i class="material-icons">add</i>
                            </a>
                        </div>

                        <table   class="responsive-table"  id="tabla_clasipieza" >
                            <thead>
                            <tr>

                                <th>Id</th>
                                <th>Descripción pieza</th>
                                <th>Cantidad</th>
                                <th>Servicio</th>
                                <th>Observaciones</th>
                                <th>Fecha registro</th>
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
                        <input id="descripcion_pieza" type="text"  name="descripcion_pieza">
                        <label for="descripcion_pieza" >Descripcion de la pieza</label>
                    </div>

                    <div class="input-field input-field col s5 center">
                        <input id="cantidad" type="text"  name="cantidad">
                        <label for="cantidad">Cantidad </label>
                    </div>
                    <div class="divider"></div>
                    <div class="input-field col s5">
                        <select id="descripcion_serviciopieza" type="text" name="descripcion_serviciopieza">
                            <option disabled selected>Selecciona servicio</option>

                            <?php
                            $dato=$datos["servicio"];
                            while($row=mysqli_fetch_array($dato))
                                echo "<option value='{$row[0]}'> {$row[1]} </option>";
                            $dato->data_seek(0);
                            ?>

                        </select>
                        <label for="descripcion_serviciopieza">Tipo de servicio</label>
                    </div>

                    <div class="input-field col s5">
                        <select id="descripcion_observacionpieza" type="text" name="descripcion_observacionpieza">
                            <option disabled selected>Selecciona observacion</option>
                            <?php
                            $dato=$datos["observaciones"];
                            while($row=mysqli_fetch_array($dato))
                                echo "<option value='{$row[0]}'> {$row[1]} </option>";
                            $dato->data_seek(0);
                            ?>

                        </select>
                        <label for="descripcion_observacionpieza">Tipo de observacion</label>
                    </div>

                    <div class="input-field input-field col s3.5">
                        <input id="fecha_registro_pieza" type="datetime-local" class="validate" name="fecha_registro_pieza" value="<?php date_default_timezone_set('america/mexico_city'); echo date('Y-m-d H:i:s', time()); ?>">
                        <label for="fecha_registro_pieza"  data-error="Incorrecto" data-success="Correcto" ></label>
                    </div>


                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_clasipieza_ok" class="btn green white-text btn center"">
                            Registrar
                            </a>
                            <a href="#!" id="update_clasipieza_ok" class="btn modal-close" data-id="">Actualizar </a>
                            <a href="#!" id="cancelar_pieza" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="modal_eliminar_pieza" class="modal">
    <div class="modal-content">
        <h5>¿Desea Eliminar el Registro?</h5>
        <hr />
    </div>
    <div class="modal-footer">
        <a href="#!" id="eliminar_pieza_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
        <a href="#!" id="cancelar_pieza" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>

<!-- //////////////////VENTA POR PIEZA////////////////////////////// -->

<div id="modal_venpieza" class="modal modal_c">
    <div class="modal-content">
        <form action="" id="sava_venpieza" enctype="multipart/form-data" autocomplete="off">
            <ul id="tabs-swipe-demo" class="tabs black-text" >
                <h4 align="center">Ventas de prendas por pieza </h4>
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
                            <a href="#modal_venpieza_agregar" class="btn green white-text modal-trigger right" id="add_ventapieza">
                                <i class="material-icons">add</i>
                            </a>
                        </div>

                        <table   class="responsive-table" id="buscar3" >
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Numero de habitación</th>
                                <th>Número de servicio</th>
                                <th>Subtotal</th>
                                <th>Total</th>
                                <th>Eliminar</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody id="body_table_venpieza" >
                            <?php
                            include(ROOT."Views/venta_pieza/tabla.php");
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

<div id="modal_venpieza_agregar" class="modal">
    <div class="modal-content">
        <div class="row center-align">
            <div class="row">
                <form action="" id="save_ventapieza" enctype="multipart/form-data" autocomplete="off">
                    <h4>Nuevo registro de venta por pieza</h4>

                    
                    <div class="divider"></div>
                    <div class="input-field col s5">
                        <select id="num_habitacion" type="text" name="num_habitacion">
                            <option disabled selected>Numero de habitacion</option>
                            <?php
                            $link = mysqli_connect("localhost", "root", "", "hotel");
                            $result3=mysqli_query($link,"select * from Habitaciones");
                            while ($row=mysqli_fetch_array($result5))
                                echo "<option value='{$row[0]}'>{$row[1]}</option>";
                            $dato->data_seek(0);
                            ?>
                        </select>
                        <label for="num_habitacion">Numero de habitación </label>
                    </div>
                   <div class="divider"></div>
                    <div class="input-field col s5">
                        <select id="cantidad" type="text" name="cantidad">
                            <option disabled selected>selecciona la cantidad </option>
                            <?php
                            $link = mysqli_connect("localhost", "root", "", "hotel");
                            $result3=mysqli_query($link,"select * from clasificacion_pieza");
                            while ($row=mysqli_fetch_array($result5))
                                echo "<option value='{$row[0]}'>{$row[1]}</option>";
                            ?>
                        </select>
                        <label for="num_habitacion">Cantidad de piezas</label>
                    </div>

                   
                    <div class="divider"></div>
                    <div class="input-field col s5">
                        <select id="total" type="text" name="total">
                            <option disabled selected>Total</option>
                            <?php
                            $link = mysqli_connect("localhost", "root", "", "hotel");
                            $result3=mysqli_query($link,"select * from Ticket");
                            while ($row=mysqli_fetch_array($result5))
                                echo "<option value='{$row[0]}'>{$row[1]}</option>";
                            ?>
                        </select>
                        <label for="total">Total</label>
                    </div>
                    <div class="input-field input-field col s5 center">
                        <input id="subtotal" type="text" class="validate" name="subtotal">
                        <label for="subtotal"  data-error="Incorrecto" data-success="Correcto" >Subtotal</label>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_venpieza_ok" class="btn green white-text btn center"">
                            Registrar
                            </a>
                            <a href="#!" id="update_venpieza_ok" class="btn modal-close" data-id="">Actualizar </a>
                            <a href="#!" id="cancelar_pieza" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //////////////////////////////VENTA POR KILO////////////////////////////////////////////// -->

<div id="modal_venkilo" class="modal modal_c">
    <div class="modal-content">
        <form action="" id="sava_venkilo" enctype="multipart/form-data" autocomplete="off">
            <ul id="tabs-swipe-demo" class="tabs black-text" >
                <h4 align="center">Ventas de prendas por kilo </h4>
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
                            <a href="#modal_venkilo_agregar" class="btn green white-text modal-trigger right" id="add_ventakilo">
                                <i class="material-icons">add</i>
                            </a>
                        </div>

                        <table   class="responsive-table"  >
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Numero de habitación </th>
                                <th>Número de servicio</th>
                                <th>Subtotal</th>
                                <th>Total</th>
                                <th>Eliminar</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody id="body_table_venkilo" >
                            <?php
                            include(ROOT."Views/venta_kilo/tabla.php");
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

<div id="modal_venkilo_agregar" class="modal">
    <div class="modal-content">
        <div class="row center-align">
            <div class="row">
                <form action="" id="save_ventakilo" enctype="multipart/form-data" autocomplete="off">
                    <h4>Nuevo registro de venta por kilos</h4>

                    <div class="divider"></div>
                    <div class="input-field col s5">
                        <select id="num_habitacion" type="text" name="num_habitacion">
                            <option disabled selected>Selecciona habitación </option>

                            <?php
                            $dato=$datos["habitacion"];
                            while($row=mysqli_fetch_array($dato))
                                echo "<option value='{$row[0]}'> {$row[1]} </option>";
                            $dato->data_seek(0);
                            ?>

                        </select>
                        <label for="num_habitacion">Numero de habitación </label>
                    </div>
                    <div class="divider"></div>


                    <div class="input-field col s5">
                        <select id="cantidadkg" type="text" name="cantidadkg">
                            <option disabled selected>Selecciona servicio</option>

                            <?php
                            $dato=$datos["clasi_kilo"];
                            while($row=mysqli_fetch_array($dato))
                                echo "<option value='{$row[0]}'> {$row[0]} </option>";
                            $dato->data_seek(0);
                            ?>

                        </select>
                        <label for="cantidadkg">Número de servicio</label>
                    </div>

                    <div class="divider"></div>
                    <div class="divider"></div>


                    <div class="input-field input-field col s5 center">
                        <input id="subtotal" type="text" disabled="disabled"  name="subtotal">
                        <label for="subtotal"   >Subtotal</label>
                    </div>

                    <div class="input-field col s5">
                        <input id="total" type="text" disabled="disabled" name="total">
                        <label for="total"  >Total</label>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_venpieza_ok" class="btn green white-text btn center"">
                            Registrar
                            </a>
                            <a href="#!" id="update_venkilo_ok" class="btn modal-close" data-id="">Actualizar </a>
                            <a href="#!" id="cancelar_pieza" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </dIV>
</div>

<!-- //////////////////////////////////Servicio////////////////////////////////////////// -->
<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();

        $("#add_servicios").click(function(){
            $("#update_servicioslav_ok").hide();
            $("#save_servicioslav_ok").show();
        });

        $("#save_servicioslav_ok").click(function(){
            $("#save_servicio_lavanderia").submit();

        });

        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        download: 'open'
                    }
                ]
            } );
        } );

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
                $("#fecha_registro").val(datos["fecha_registro"]);
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
            $("#save_observaciones_lavanderia").submit();

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
            $("#update_clasikilo_ok").hide();
            $("#save_clasikilo_ok").show();
        });

        $("#save_clasikilo_ok").click(function(){
            $("#save_clasificacionkilo").submit();

        });

        $("#body_table_clasikilo").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>clasificacion_kilo/eliminar/'+id;
            $("#eliminar_kilo_ok").attr("url",url);
            $("#modal_eliminar_kilo").modal("open");
        });

        $("#eliminar_kilo_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table_clasikilo").empty().append(res);
                Materialize.toast('Se ha eliminado correctamente', 2500);
            });
        });

        $("#body_table_clasikilo").on("click","a.btn_modificar",function(){
            $("#save_clasikilo_ok").hide();
            $("#update_clasikilo_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>clasificacion_kilo/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_clasikilo_ok").data("id",datos["id_clasificacionkilo"]);
                $("#id_serviciolav").val(datos["id_serviciolav"]);
                $("#cantidadkg").val(datos["cantidadkg"]);
                $("#id_observacion").val(datos["id_observacion"]);
                $("#fecha_registro").val(datos["fecha_registro"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_clasikilo_agregar").modal("open");
            });
        });

        $("#update_clasikilo_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>clasificacion_kilo/actualizar/"+id,$("#save_clasificacionkilo").serialize(),function(res){
                $('#save_clasificacionkilo').find('input, select, textarea').val('');
                $("#body_table_clasikilo").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });



        //--------------------------CLASIFICACION POR PIEZA-------------------------------------------

        $("#add_clasipieza").click(function(){
            $("#update_clasipieza_ok").hide();
            $("#save_clasipieza_ok").show();
        });

        $("#save_clasipieza_ok").click(function(){
            $("#save_clasificacionpieza").submit();

        });

        $("#body_table_clasipieza").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>clasificacion_pieza/eliminar/'+id;
            $("#eliminar_pieza_ok").attr("url",url);
            $("#modal_eliminar_pieza").modal("open");
        });

        $("#eliminar_pieza_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table_clasipieza").empty().append(res);
                Materialize.toast('Se ha eliminado correctamente', 2500);
            });
        });

        $("#body_table_clasipieza").on("click","a.btn_modificar",function(){
            $("#save_clasipieza_ok").hide();
            $("#update_clasipieza_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>clasificacion_pieza/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_clasipieza_ok").data("id",datos["id_clasificacionpieza"]);
                $("#descripcion_pieza").val(datos["descripcion_pieza"]);
                $("#cantidad").val(datos["cantidad"]);
                $("#descripcion_serviciopieza").val(datos["id_serviciolav"]);
                $("#descripcion_observacionpieza").val(datos["id_observacion"]);
                $("#fecha_registro_pieza").val(datos["fecha_registro"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_clasipieza_agregar").modal("open");
            });
        });

        $("#update_clasipieza_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>clasificacion_pieza/actualizar/"+id,$("#save_clasificacionpieza").serialize(),function(res){
                $('#save_clasificacionpieza').find('input, select, textarea').val('');
                $("#body_table_clasipieza").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

         //--------------------------VENTA POR PIEZA-------------------------------------------

        $("#add_ventapieza").click(function(){
            $("#update_venpieza_ok").hide();
            $("#save_venpieza_ok").show();
        });

        $("#save_venpieza_ok").click(function(){
            $.post("<?php echo URL?>ventahab_pieza/crear",$("#save_ventapieza").serialize(),function(res){
                $("#body_table_ventapieza").empty().append(res);
                $('#save_ventapieza').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                Materialize.toast('Se ha insertado correctamente', 2500);
                $("#modal_venpieza_agregar").modal("close");
            })
        });
        //--------------------------VENTA POR KILO-------------------------------------------

        $("#add_ventakilo").click(function(){
            $("#update_venkilo_ok").hide();
            $("#save_venkilo_ok").show();
        });

        $("#save_venkilo_ok").click(function(){
            $.post("<?php echo URL?>ventahab_kilo/crear",$("#save_ventakilo").serialize(),function(res){
                $("#body_table_ventakilo").empty().append(res);
                $('#save_ventakilo').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                Materialize.toast('Se ha insertado correctamente', 2500);
                $("#modal_venkilo_agregar").modal("close");
            })
        });


        //--------------------------Validacion servicio-------------------------------------------
        $("#save_servicio_lavanderia").validate({
            rules:{
                nombre_servi:{
                    required:true,
                    maxlength: 20,
                    minlength: 5,
                    lettersonly:true,
                },
                precio:{
                    required:true,
                    maxlength: 3,
                    minlength: 1,
                    number:true,
                },

            },

            messages:{
                nombre_servi:{
                    required:"Agrega una descripción",
                    maxlength:"Maximo 12 caracteres",
                    minlength:"Minimo 4 caracteres",
                },

                precio:{
                    required:"Ingresa  número",
                    maxlength:"Maximo 5 caracteres",
                    minlength:"Minimo 1 caracteres",
                    number:"Solo números",

                }

            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },

            submitHandler:function(form){
                $.post("<?php echo URL?>servicioslavanderia/crear",$("#save_servicio_lavanderia").serialize(),function(res){
                    $("#body_table_ser").empty().append(res);
                    $('#save_servicio_lavanderia').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    $("#modal_servicios_agregar").modal("close");
                    Materialize.toast('Se ha insertado correctamente', 2500);

                })
            }
        });






        //--------------------------Validacion Obsrvaciones-------------------------------------------
        $("#save_observaciones_lavanderia").validate({
            rules:{
                descripcion_observacion:{
                    required:true,
                    maxlength: 20,
                    minlength: 5,
                    lettersonly:true,
                },
                cargo:{
                    required:true,
                    maxlength: 3,
                    minlength: 1,
                    number:true,
                },

            },

            messages:{
                descripcion_observacion:{
                    required:"Agrega una descripción",
                    maxlength:"Maximo 12 caracteres",
                    minlength:"Minimo 4 caracteres",
                },

                cargo:{
                    required:"Ingresa  número",
                    maxlength:"Maximo 5 caracteres",
                    minlength:"Minimo 1 caracteres",
                    number:"Solo números",

                }

            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>observaciones/crear",$("#save_observaciones_lavanderia").serialize(),function(res){
                    $("#body_table_obser").empty().append(res);
                    $('#save_observaciones_lavanderia').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    //$("#modal_registro").modal("close");
                    $("#modal_observaciones_agregar").modal("close");
                    Materialize.toast('Se ha insertado correctamente', 2500);
                })
            }
        });





//--------------------------Validacion clasificasion kilo-------------------------------------------
        $("#save_clasificacionkilo").validate({
                rules:{
                    descripcion_servicio:{
                        required:true,

                    },
                    cantidadkg:{
                        required:true,
                        maxlength: 3,
                        minlength: 1,
                        number:true,
                    },
                    descripcion_observacion:{
                        required:true,

                    },
                    fecha_registro: {
                        required: true,


                    }
                },

                messages:{
                    descripcion_servicio:{
                    required:"Agrega una descripción",

                },

                cantidadkg:{
                    required:"Ingresa  número",
                    maxlength:"Maximo 5 caracteres",
                    minlength:"Minimo 1 caracteres",
                    number:"Solo números",

                },

                descripcion_observacion:{
                    required:"Agrega una descripción",

                },

                fecha_registro:{
                    required:"Agrega una descripción",

                }

            },
            errorPlacement: function(error, element) {
            $(element)
                .closest("form")
                .find("label[for='" + element.attr("id") + "']")
                .attr('data-error', error.text());
        },

        submitHandler:function(form){
            $.post("<?php echo URL?>clasificacion_kilo/crear",$("#save_clasificacionkilo").serialize(),function(res){
                $("#body_table_clasikilo").empty().append(res);
                $('#save_clasificacionkilo').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
                $("#modal_clasikilo_agregar").modal("close");
            })
        }
    });


        //--------------------------Validacion clasificasion pieza-------------------------------------------
        $("#save_clasificacionpieza").validate({
            rules:{
                descripcion_pieza:{
                    required:true,
                    maxlength: 20,
                    minlength: 5,
                    lettersonly:true,

                },
                cantidad:{
                    required:true,
                    maxlength: 3,
                    minlength: 1,
                    number:true,

                },
                descripcion_serviciopieza:{
                    required:true,

                },

                descripcion_observacionpieza:{
                    required:true,

                },

                fecha_registro_pieza:{
                    required:true,

                },

            },

            messages:{
                descripcion_pieza:{
                    required:"Agrega una descripción",
                    maxlength:"Maximo 12 caracteres",
                    minlength:"Minimo 4 caracteres",

                },

                cantidad:{
                    required:"Ingresa  número",
                    maxlength:"Maximo 5 caracteres",
                    minlength:"Minimo 1 caracteres",
                    number:"Solo números",

                },

                descripcion_serviciopieza:{
                    required:"Agrega una descripción",

                },

                descripcion_observacionpieza: {
                    required:"Agrega una descripción",
                },
                fecha_registro_pieza:{
                    required:"Agrega una fecha",
                }

            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },

            submitHandler:function(form){
                $.post("<?php echo URL?>clasificacion_pieza/crear",$("#save_clasificacionpieza").serialize(),function(res){
                    $("#body_table_clasipieza").empty().append(res);
                    $('#save_clasificacionpieza').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    //$("#modal_registro").modal("close");
                    Materialize.toast('Se ha insertado correctamente', 2500);
                    $("#modal_clasipieza_agregar").modal("close");
                })
            }
        });






//---------------------------------------------------------------------------









//--------------------------Buscar-------------------------------------------

        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_servicio"), this.value);
        });

        $("#buscar1").keyup(function() {
            $.uiTableFilter($("#tabla_observacion"), this.value);
        });

        $("#buscar2").keyup(function() {
            $.uiTableFilter($("#tabla_clasikilo"), this.value);
        });

        $("#buscar3").keyup(function() {
            $.uiTableFilter($("#tabla_clasipieza"), this.value);
        });
    });
</script>




