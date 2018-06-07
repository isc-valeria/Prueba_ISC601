<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/05/2018
 * Time: 03:41 PM
 */
?>


<body>
        <div id="main" >
            <div id="panel1" class="row col pad">
            <div class="col s30 m16 offset-m1">
                <div class="card-panel">

                    <h4 class="left"><a class="icon-paste black-text"></a></h4>
                    <h4 align="center">Asignacion de Productos a Habitación</h4>

                   <div class="divider"></div>
                   <div class="padding-divider"></div>
                    <code class=" language-markup"><!--********************************--></code>
                    <div class="row">
                        <!--********************************-->
                        <form class="col s12 right-alert">

                            <!--********************************-->
                            <div class="row">
                                <div class="input-field input-field col s4 text">
                                    <i class="mdi-action-verified-user prefix icon-pagekit"></i>
                                    <input id="numero_habitacion" type="number" class="validate" >
                                    <label for="numero_habitacion"  data-error="Incorrecto" data-success="Correcto" >Número de Habitación</label>
                                </div>
                            </div>
                            <!--********************************-->
                            <div class="row">
                                <div class="input-field col s1">
                                    <a class="btn-floating disabled"><i class="icon-home #000000 white black-text"></i></a>
                                </div>
                                <div class="input-field col s6">
                                        <select  id="tipohabitacion" type="text" class="validate" >
                                            <option value="" disabled selected>Selecciona un Producto</option>
                                            <option value="1">Jabon de Baño</option>
                                            <option value="2">Toallas</option>
                                            <option value="3">Sabanas</option>
                                        </select>
                                        <label for="tipohabitacion" data-error="incorrecto" data-success="Correcto" >Productos</label>
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                $('select').formSelect();
                                            });
                                        </script>
                                </div>
                                <div class="input-field col s1">
                                    <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_registro" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                                </div>
                            </div>
                    </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_cargar" type="submit" name="action">Cargar</button>
                                </div>
                            </div>




                            <!--***************modal seleccion*****************-->
                            <div id="modal_registro" class="modal center-align ">
                                <div class="modal-content">
                                    <h4>Productos</h4>
                                    <div class="row">
                                        <form class="col s12 ">
                                            <div class="row">
                                                <div class="input-field col s10">
                                                    <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                    <input id="nonmbretipohabitacion" type="text" class="validate center">
                                                    <label for="nonmbretipohabitacion"  data-error="incorrecto" data-success="Correcto">Nombre del producto</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field input-field col s10 text">
                                                    <i class="mdi-action-verified-user prefix icon-coin-dollar"></i>
                                                    <input id="cantidad" type="number" class="validate center" >
                                                    <label for="cantidad"  data-error="Incorrecto" data-success="Correcto" >Cantidad</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s9">
                                                    <button class="btn waves-effect waves-light right #00838f cyan darken-3" type="submit" name="action">Registar

                                                    </button>
                                                </div>
                                                <div class="input-field col s3">
                                                    <button class="btn waves-effect waves-light righ #00838f cyan darken-3" type="submit" name="action">Limpiar

                                                    </button>
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


                            <!--***************modal cargar*****************-->

                            <div id="modal_cargar" class="modal">
                                <div class="modal-content">
                                    <h5 align="center"> Productos </h5>
                                    <div class="divider"></div>
                                    <h1>Los productos se cargaron con exito</h1>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                                </div>
                            </div>


                            <!--***************modal *****************-->
                            <div id="modal_seleccion" class="modal center-align ">
                                <div class="modal-content">
                                    <h4>Productos</h4>
                                    <div class="row">
                                        <form class="col s12 ">

                                            <div class="row">
                                                <div class="row">
                                                    <div class="input-field col s5 offset-s3">
                                                        <i class="mdi-action-verified-user prefix  text-black icon-search "></i>
                                                        <input id="buscar1" placeholder= "Buscar producto" type="text">
                                                    </div>

                                                </div>
                                            </div>

                                            <table class="centered">
                                                <thead>
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Cantidad</th>


                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>Jabon de baño</td>
                                                    <td>2</td>
                                                    <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                                                    <td><a class="btn-flat modal-trigger icon-checkmark green-text" href="#modal_seleccionar"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Sabanas</td>
                                                    <td>3</td>
                                                    <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                                                </tr>

                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div id="paneltablas" class="row col ">
                <div class="col s12 m10 offset-m1">
                    <div class="card-panel">
                        <h4 align="center">Estatus de Productos Asignados</h4>
                        <div class="divider"></div>

                        <div class="row">
                            <div class="input-field col s4 offset-s8">
                                <i class="mdi-action-verified-user prefix icon-search"></i>
                                <input id="buscar" type="text" placeholder= "Buscar producto">
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

                        <!-- Modal seleccionR-->
                        <div id="modal_seleccionar" class="modal">
                            <div class="modal-content">
                                <h5>¿Desea Obtener este producto?</h5>
                                <div class="divider"></div>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </div>
                        </div>


                        <!--*********************Tabla***********-->
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Jabon de baño</td>
                                <td>2</td>
                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                            </tr>
                            <tr>
                                <td>Sabanas</td>
                                <td>3</td>
                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                            </tr>
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