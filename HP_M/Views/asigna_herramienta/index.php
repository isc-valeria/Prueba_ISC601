<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/05/2018
 * Time: 06:00 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="imagenes/601.PNG" sizes="36x36">
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet">
    <link href="css/style.min.css" type="text/css" rel="stylesheet">
    <link href="css/custom.min.css" type="text/css" rel="stylesheet">

    <meta charset="UTF-8">
    <title>Asignacion de Servicios</title>
    <script type="text/javascript"src="js/plugins/chartist.min.js"></script>
    <script type="text/javascript"src="js/plugins/chartist.css"></script>
    <script type="text/javascript"src="js/plugins/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript"src="js/plugins/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="=css/normalize.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript"src="js/plugins/plugins.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <link href="js/plugins/prism.css" type="text/css" rel="stylesheet">
    <link href="js/plugins/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="js/plugins/chartist.min.css" type="text/css" rel="stylesheet">
    <title>Inicio</title>
</head>

<body>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<div id="main">

    <div id="panel1" class="row col pad">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel">
                <h4 align="center">Asignacion Herramienta </h4>
                <hr /><!--ESTA LINEA DE CODIGO SE UTILIZA PARA CREAR LINEAS  -->
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <!--********************************-->
                    <form class="col s12 right-alert">

                        <!--******************Estado habitacion*****************************************************************************************-->
                        <div class="row">
                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class=" icon-wrench #000000 black"></i></a>
                            </div>

                            <div class="input-field col s8 ">
                                <select id="herramienta" type="text" class="validate">
                                    <option value="" disabled selected>Seleccion de Herramienta</option>
                                    <option value="1">Herramienta 1</option>
                                    <option value="2">Herramienta 2</option>
                                </select>
                                <label for="herramienta" data-error="incorrecto" data-success="Correcto">Herramientas</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger " href="#modal_herra" ><i class="icon-search #00838f cyan darken-3"></i></a>
                            </div>
                        </div>
                        <!--****************fin estado habitacion********************************************************************************************************-->
                        <!--***************iniicio tareas modal********************************************************************************************************-->
                        <div id="id_tarea" class="modal center-align ">
                            <div class="modal-content">
                                <div class="card-panel teal #00b8d4"><h4 align="center">Tareas</h4></div>

                                <div class="row">
                                    <form class="col s12 ">
                                        <div class="row">
                                            <div class="input-field col s10">
                                                <i class="mdi-action-verified-user prefix icon-newspaper"></i>
                                                <input id="id_tarea" type="text" class="validate center">
                                                <label for="id_tarea"  data-error="incorrecto" data-success="Correcto">Tarea</label>
                                            </div>
                                        </div>

                                        <div  class="row">
                                            <!--*********************************tareas************************************************************************-->
                                            <div  class="row">
                                                <div class="input-field col s1">
                                                    <a class="btn-floating disabled"><i class="icon-newspaper #000000 black"></i></a>
                                                </div>
                                                <!--*********************************tipo de tarea**********************************************************************-->
                                                <div class="input-field col s8 ">
                                                    <select id="id_tipotarea" type="text" class="validate">
                                                        <option value="" disabled selected></option>
                                                        <option value="1">Tipo_Tarea 1</option>
                                                        <option value="2">Tipo_Tarea 2</option>
                                                        <option value="3">Tipo_Tarea 3</option>
                                                    </select>
                                                    <label for="id_tipotarea" data-error="incorrecto" data-success="Correcto" >Tipo Tarea</label>

                                                    <script type="text/javascript">
                                                        $(document).ready(function(){
                                                            $('select').formSelect();
                                                        });
                                                    </script>
                                                </div>
                                                <div class="input-field col s1">
                                                    <a class="btn-floating disabled waves-effect waves-light btn modal-trigger"  href="#modal_tipotarea" ><i class="icon-plus  #00838f cyan darken-3"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s9">

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr />
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                            </div>
                        </div>

                        <!--************************************************************fin modal tipo habitacion*************-->
                        <!--***************modal estado habitacion***************//*******************************************************-->
                        <div id="modal_estado_habitacion" class="modal center-align ">
                            <div class="modal-content">
                                <div class="card-panel teal #00b8d4"><h4 align="center">Habitaciones</h4></div>


                                <div class="row">
                                    <form class="col s12 pad">
                                        <div class="row">
                                            <div class="input-field col s10">
                                                <i class="mdi-action-verified-user prefix icon-search"></i>
                                                <input id="habitacion" type="text" class="validate center">
                                                <label for="habitacion"  data-error="incorrecto" data-success="Correcto">Buscar</label>
                                            </div>
                                        </div>
                                        <!--******************************************************************************************************-->
                                        <table class="centered">
                                            <thead>
                                            <tr>
                                                <th>Habitaciónes</th>
                                                <th>Servicios</th>
                                                <th>Estado</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>12</td>
                                                <td>Platino</td>
                                                <td>Ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Dorada</td>
                                                <td>Ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Estrella</td>
                                                <td>ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--************************************************************************************************************************-->
                                        <div class="row">
                                            <div class="input-field col s9">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr />
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                            </div>
                        </div>

                        <!--************************************fin modal tipo habitacion***********************************************-->
                        <!--***************modal herramntas*******************************************************************************0*-->
                        <div id="modal_herra" class="modal center-align ">
                            <div class="modal-content">
                                <div class="card-panel teal #00b8d4"><h4 align="center">Herramientas</h4></div>


                                <div class="row">
                                    <form class="col s12 pad">
                                        <div class="row">
                                            <div class="input-field col s10">
                                                <i class="mdi-action-verified-user prefix icon-search"></i>
                                                <input id="id_herramienta" type="text" class="validate center">
                                                <label for="id_herramienta"  data-error="incorrecto" data-success="Correcto">Buscar</label>
                                            </div>
                                        </div>


                                        <!--****************table herramientas*******************************************************************************-->
                                        <table class="centered">
                                            <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>Herramientas</th>
                                                <th>tipo</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>12</td>
                                                <td>Platino</td>
                                                <td>Ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Dorada</td>
                                                <td>Ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Estrella</td>
                                                <td>ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--*******************final de table herramientas*****************************************************-->

                                        <div class="row">
                                            <div class="input-field col s9">

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr />
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                            </div>
                        </div>

                        <!--*******************fin modal tipo habitacion*****************************************************************************-->
                        <!--***************empleado****************/////*************************************************************-->
                        <div id="empleado" class="modal center-align ">
                            <div class="modal-content">
                                <div class="card-panel teal #00b8d4"><h4 align="center">Empleados</h4></div>

                                <div class="row">
                                    <form class="col s12 pad">
                                        <div class="row">
                                            <div class="input-field col s10">
                                                <i class="mdi-action-verified-user prefix icon-search"></i>
                                                <input id="id_empleado" type="text" class="validate center">
                                                <label for="id_empleado"  data-error="incorrecto" data-success="Correcto">Buscar</label>
                                            </div>
                                        </div>


                                        <!--***********************************************************************************tableempleados*************-->
                                        <table class="centered">
                                            <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>Nombre</th>
                                                <th>Puesto</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>12</td>
                                                <td>Miriam</td>
                                                <td>Boton</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Rodrigo</td>
                                                <td>Boton</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>christian</td>
                                                <td>Boton</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--************final de l atabla empelado***************************************************************-->

                                        <div class="row">
                                            <div class="input-field col s9">

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr />
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                            </div>
                        </div>
                        <!--*******************final empleado**************************************************************************************-->
                        <!--*****************tareas*******************************************************************************************************-->
                        <div class="row">
                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class="icon-newspaper #000000 black"></i></a>
                            </div>

                            <div class="input-field col s8 ">
                                <select id="Tarea" type="text" class="validate">
                                    <option value="" disabled selected>Selecciona la Tarea</option>
                                    <option value="1">Tarea 1</option>
                                    <option value="2">Tarea 2</option>
                                    <option value="3">Tarea 3</option>
                                </select>
                                <label for="id_tarea" data-error="incorrecto" data-success="Correcto" >Tareas</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#id_tarea" ><i class="icon-plus  #00838f cyan darken-3"></i></a>
                            </div>
                        </div>

                        <!--***************************************************************************************************************-->
                        <!--******************Estado habitacion**************//////////*******************************************************-->
                        <div class="row">
                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class=" icon-home #000000 black"></i></a>
                            </div>

                            <div class="input-field col s8 ">
                                <select id="nomestadohabitacion" type="text" class="validate">
                                    <option value="" disabled selected>Seleccion de Habitacion</option>
                                    <option value="1">Habitacion 1</option>
                                    <option value="2">Habitacion 2</option>
                                </select>
                                <label for="nomestadohabitacion" data-error="incorrecto" data-success="Correcto">Habitaciones</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger " href="#modal_estado_habitacion" ><i class="icon-search #00838f cyan darken-3"></i></a>
                            </div>
                        </div>
                        <!--*******************************************************************************************************************************-->
                        <!--******************Empleado********************************************************************************************************-->
                        <div class="row">
                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class="  icon-user-tie #000000 black"></i></a>
                            </div>

                            <div class="input-field col s8 ">
                                <select id="empleado" type="text" class="validate">
                                    <option value="" disabled selected>Seleccion de Empleado</option>
                                    <option value="1">Empleado 1</option>
                                    <option value="2">Empleado 2</option>
                                </select>
                                <label for="id_empleado" data-error="incorrecto" data-success="Correcto">Empleados</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger " href="#empleado" ><i class="icon-search #00838f cyan darken-3"></i></a>
                            </div>
                        </div>
                        <!--********************************-->

                        <!--***************modal herramientas*******************************************************************************0*-->
                        <div id="modal_tipotarea" class="modal center-align ">
                            <div class="modal-content">
                                <div class="card-panel teal #00b8d4"><h4 align="center">Tipos de Tareas</h4></div>


                                <div class="row">
                                    <form class="col s12 pad">
                                        <div class="row">
                                            <div class="input-field col s10">
                                                <i class="mdi-action-verified-user prefix icon-newspaper"></i>
                                                <input id="id_tipotarea" type="text" class="validate center">
                                                <label for="id_tipotarea"  data-error="incorrecto" data-success="Correcto">Descripcion del Tipo de Tarea</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s9">

                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro" type="submit" name="action">Registrar</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr />
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                            </div>
                        </div>

                        <!--*******************fin modal tiipotarea*****************************************************************************-->
                        <!--********************************-->
                        <div class="row">
                            <div class="col l3 offset-l3">
                                <i class="mdi-action-verified-user prefix   icon-calendar"></i>

                                <label>Fecha de Inicio</label>
                                <input type="text" class="datepicker">
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('.datepicker').datepicker();
                                    });
                                </script>
                            </div>
                            <div class="col l3 offset-l1">
                                <i class="mdi-action-verified-user prefix   icon-clock"></i>
                                <label>Hora Inicio</label>
                                <input type="text" class="timepicker">
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('.timepicker').timepicker();
                                    });
                                </script>
                            </div>
                        </div>

                        <!--********************************-->
                        <div class="row">
                            <div class="col l3 offset-l3">
                                <i class="mdi-action-verified-user prefix   icon-calendar"></i>

                                <label>Fecha de Fin</label>
                                <input type="text" class="datepicker">
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('.datepicker').datepicker();
                                    });
                                </script>
                            </div>
                            <div class="col l3 offset-l1">
                                <i class="mdi-action-verified-user prefix   icon-clock"></i>

                                <label>Hora de Fin</label>
                                <input type="text" class="timepicker">
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('.timepicker').timepicker();
                                    });
                                </script>
                            </div>
                        </div>
                        <!--***************m*****************-->

                        <!--********************************-->
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro" type="submit" name="action">Registrar</button>
                            </div>
                        </div>


                        <!-- Modal registro -->
                        <div id="modal_registro" class="modal">
                            <div class="modal-content">
                                <h5>Mensaje</h5>
                                <hr />
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
                <h4 align="center">Herramientas Registradas</h4>
                <hr />

                <div class="row">
                    <div class="input-field col s4 offset-s8">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <label for="Buscar"  data-error="incorrecto" data-success="Correcto">Buscar</label>

                        <input id="buscar" type="text">
                    </div>
                </div>


                <!-- Modal eliminar -->
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
                <table class="centered">
                    <thead>
                    <tr>
                        <th>Herramientas</th>
                        <th>Tareas</th>
                        <th>Habitaciónes</th>
                        <th>Empleados</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Fin</th>
                        <th>Hora de Inicio</th>
                        <th>Hora de Fin</th>
                        <th></th>
                        <th></th>

                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Herramienta 1</td>
                        <td>Tarea 1</td>
                        <td>Habitacion 1</td>
                        <td>Empleados</td>
                        <td>11/05/2018</td>
                        <td>12/05/2018</td>
                        <td>9:00</td>
                        <td>12:00</td>
                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                    </tr>
                    <tr>
                        <td>Herramienta 1</td>
                        <td>Tarea 1</td>
                        <td>Habitacion 1</td>
                        <td>Empleados</td>
                        <td>11/05/2018</td>
                        <td>12/05/2018</td>
                        <td>9:00</td>
                        <td>12:00</td>

                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                    </tr>
                    <tr>
                        <td>Herramienta 1</td>
                        <td>Tarea 1</td>
                        <td>Habitacion 1</td>
                        <td>Empleados</td>
                        <td>11/05/2018</td>
                        <td>12/05/2018</td>
                        <td>9:00</td>
                        <td>12:00</td>

                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                    </tr>
                    </tbody>
                </table>
                <!--********************************-->

            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/plugins/materialize.min.js"></script>
<script type="text/javascript" src="js/plugins/prism.js"></script>
<script type="text/javascript" src="js/plugins/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/plugins/chartist.min.js"></script>
<script type="text/javascript" src="js/plugins/chartist.min.js"></script>
<script src="js/plugins/masonry.pkgd.min.js"></script>
<script src="js/plugins/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/plugins.min.js"></script>
<script type="text/javascript" src="js/custom-script.js"></script>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>

</body>
</html>