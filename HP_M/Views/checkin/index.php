<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/05/2018
 * Time: 06:00 PM
 */
?>

<body>
<div id="main">

    <div id="panel1" class="row col pad">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel ">
                <h4 class="left"><a class="icon-bell black-text"></a></h4>
                <h4 align="center">Check In</h4>

                <div class="divider"></div><!--ESTA LINEA DE CODIGO SE UTILIZA PARA CREAR LINEAS  -->
                <div class="row">
                    <div class="row">
                        <div class="input-field col s5 offset-s6">
                            <i class="mdi-action-verified-user prefix icon-search "></i>
                            <input id="buscar1" placeholder= "Buscar folio de Reservación" type="text">
                        </div>
                    </div>
                    <!--********************************-->

                    <div class="row">
                        <div class="input-field input-field col s4 text">
                            <i class="mdi-action-verified-user prefix icon-pagekit"></i>
                            <input id="numero_habitacion" type="number" class="validate" readonly="readonly" >
                            <label for="numero_habitacion"   disabled="numero_habitacion" >Número de Hábitación</label>
                        </div>
                    </div>

                    <div class="row">
                        <form class="col s12 pad">
                            <div class="row">
                                <div class="input-field input-field col s9 text">
                                    <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                    <input id="descripcion_estado" type="number" class="validate center" >
                                    <label for="descripcion_estado"  data-error="Incorrecto" data-success="Correcto">Descripción</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--*******************seleccionar opcion*************-->
                    <div class="row">
                        <div class="input-field col s1">
                            <a class="btn-floating disabled"><i class="icon-command #000000 black"></i></a>
                        </div>

                        <div class="input-field col s8 ">
                            <select id="tipohabitacion" type="text" class="validate" name="id_tipoh">
                                <option value="" disabled selected>Selecciona Tipo de la Habitacion</option>
                                <?php
                                $result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="tipohabitacion" data-error="incorrecto" data-success="Correcto" >Tipo de Habitación</label>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('select').formSelect();
                                });
                            </script>
                        </div>

                    </div>

                    <!--********************************-->


                    <!--******************Folio**************-->

                    <div class="row">
                        <div class="input-field col s5 offset-s1">
                            <i class="mdi-action-verified-user prefix icon-profile"></i>
                            <input id="folio" type="text" class="validate"readonly="readonly">
                            <label for="folio"  data-error="incorrecto" data-success="Correcto">Folio del Cliente</label>
                        </div>

                        <div class="input-field col s5 text">
                            <i class="mdi-action-verified-user prefix icon-calendar"></i>
                            <label >Fecha de entrada</label>
                            <input id="fechaentrada" type="text" class="datepicker" >
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('.datepicker').datepicker();
                                });
                            </script>
                        </div>
                    </div>

                    <!--********************************-->
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro" type="submit" name="action">Check in</button>
                        </div>
                    </div>


                    <!-- Modal registro -->
                    <div id="modal_registro" class="modal">
                        <div class="modal-content">
                            <h5>Mensaje</h5>
                            <hr />
                            <label><h5>Registro exitoso</h5></label>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                        </div>
                    </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <!--********************************-->
    <div id="paneltablas" class="row col ">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel">
                <h4 align="center">Entradas Registradas</h4>
                <div class="divider"></div>

                <div id="modal_eliminar" class="modal">
                    <div class="modal-content">
                        <h5>¿Desea Eliminar el Registro?</h5>
                        <hr />
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                    </div>
                </div>
                <!--*********************final modal eliminar***********-->
                <div style="overflow-x: auto">
                <table class="centered">
                    <thead>
                    <tr>
                        <th>Numero de Habitacion</th>
                        <th>Descripcion</th>
                        <th>Tipo Habitación</th>
                        <th>Folio Cliente</th>
                        <th>Fecha de Reserva</th>
                        <th>delete</th>
                        <th>update</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $datos1=$datos[0];
                    while($row=mysqli_fetch_array($datos1))
                        echo "
                    <tr>
                        <td>{$row[0]}</td>
                        <td>{$row[1]}</td>
                        <td>{$row[2]}</td>
                        <td>{$row[3]}</td>
                        <td>{$row[4]}</td>
                        <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></td>
                        <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td>
                    </tr>";
                    ?>
                    </tbody>
                    <div class="divider"></div>
                </table>
                </div>
                <div class="divider"></div>
                <!--********************************-->

            </div>
        </div>
    </div>

<!--  Aqui empieza la que yo creé  -->

<!--    <div id="paneltablas" class="row col ">-->
<!--        <div class="col s12 m10 offset-m1">-->
<!--            <div class="card-panel">-->
<!--                <h4 align="center">Entradas Registradas</h4>-->
<!--                <div class="divider"></div>-->
<!--                <!-- Modal eliminar -->
<!--                <div id="modal_eliminar" class="modal">-->
<!--                    <div class="modal-content">-->
<!--                        <h5>¿Desea Eliminar el Registro?</h5>-->
<!--                        <hr />-->
<!--                    </div>-->
<!--                    <div class="modal-footer">-->
<!--                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>-->
<!--                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <!--*********************final modal eliminar***********-->
<!--                <div style="overflow-x: auto">-->
<!--                    <table class="centered">-->
<!--                        <thead>-->
<!--                        <tr>-->
<!--                            <th>id</th>-->
<!--                            <th>Nombre</th>-->
<!--                            <th>Apellido Paterno</th>-->
<!--                            <th>Apellido Materno</th>-->
<!--                            <th>Telefono</th>-->
<!--                            <th>Clave Cliente</th>-->
<!--                            <th>Numero de Habitacion</th>-->
<!--                            <th>Tipo de Habitacion</th>-->
<!--                            <th>Clave de Reservacion</th>-->
<!--                            <th>Fecha de Reservación</th>-->
<!--                            <th>Fecha de Check In</th>-->
<!--                            <th>Fecha de Salida</th>-->
<!--                            <th>Estado</th>-->
<!--                            <th>delete</th>-->
<!--                            <th>update</th>-->
<!--                        </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                        --><?php
//                        while($row=mysqli_fetch_array($datos))
//                            echo "
//                    <tr>
//                        <td>{$row[0]}</td>
//                        <td>{$row[1]}</td>
//                        <td>{$row[2]}</td>
//                        <td>{$row[3]}</td>
//                        <td>{$row[4]}</td>
//                        <td>{$row[5]}</td>
//                        <td>{$row[6]}</td>
//                        <td>{$row[7]}</td>
//                        <td>{$row[8]}</td>
//                        <td>{$row[9]}</td>
//                        <td>{$row[10]}</td>
//                        <td>{$row[11]}</td>
//                        <td>{$row[12]}</td>
//                        <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></td>
//                        <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td>
//                    </tr>";
//                        ?>
<!--                        </tbody>-->
<!--                        <div class="divider"></div>-->
<!--                    </table>-->
<!--                </div>-->
<!--                <div class="divider"></div>-->
<!--                <!--********************************-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/plugins/materialize.min.js"></script>
<script type="text/javascript" src="js/plugins/plugins.min.js"></script>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>

</body>
</html>