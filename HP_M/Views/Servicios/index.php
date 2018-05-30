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
                <div class="card-panel">
                    <h4 class="left"><a class="icon-loop2 black-text"></a></h4>
                    <h4 align="center">Servicios</h4>
                    <div class="divider"></div>
                    <code class=" language-markup"><!--********************************--></code>
                    <div class="row">
                        <!--********************************-->
                        <form class="col s12 right-alert">

                            <!--********************************-->
                            <div class="row">
                                <div class="input-field col s4">
                                    <i class="mdi-action-verified-user prefix  icon-folder-open"></i>
                                    <input id="Folio" type="text" class="validate">
                                    <label for="Folio"  data-error="incorrecto" data-success="Correcto">Folio</label>
                                </div>
                            </div>

                            <!--********************************-->
                            <div class="row">
                                <div class="input-field col s9">
                                    <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                    <input id="descripcion" type="text" class="validate">
                                    <label for="descripcion"  data-error="incorrecto" data-success="Correcto">Descripción</label>
                                </div>
                            </div>

                            <!--***************m*****************-->
                            <div class="row">
                                <div class="col l3 offset-l3">
                                    <i class="icon-calendar"></i>

                                    <label>Fecha de Inicio</label>
                                    <input type="text" class="datepicker">
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $('.datepicker').datepicker();
                                        });
                                    </script>
                                </div>
                                <div class="col l3 offset-l1">
                                    <i class="icon-clock"></i>
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
                                    <i class="icon-calendar"></i>

                                    <label>Fecha de Fin</label>
                                    <input type="text" class="datepicker">
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $('.datepicker').datepicker();
                                        });
                                    </script>
                                </div>
                                <div class="col l3 offset-l1">
                                    <i class="icon-clock"></i>

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
                                    <h4>Registro exitoso</h4>
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
                    <h4 align="center">Servicios que se Ofrecen</h4>
                    <div class="divider"></div>

                    <div class="row">
                        <div class="input-field col s4 offset-s8">
                            <i class="mdi-action-verified-user prefix icon-search"></i>
                            <input id="buscar" type="text">
                            <label for="hora_fin"  data-error="incorrecto" data-success="Correcto">Buscar</label>
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
                            <th>Folio</th>
                            <th>Descripción</th>
                            <th>Hora de Inicio</th>
                            <th>Hora de fin</th>
                            <th></th>
                            <th></th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        while ($row=mysqli_fetch_array($datos))
                        echo "<tr><td>{$row['0']}</td><td>{$row['descripcion_ser']}</td><td>{$row['hora_inicio']}</td>
                        <td>{$row['hora_fin']}</td><td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></a></td></tr>";
                        ?>
                        </tbody>
                        <div class="divider"></div>
                    </table>
                    <div class="divider"></div>
                    <!--********************************-->

                </div>
            </div>
        </div>
    </div>
</body>