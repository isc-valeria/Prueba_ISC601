<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 11:56 AM
 */

namespace Views;


use http\Url;

class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Habitaciones</title>
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="<?php echo URL?>Public/css/materialize.min.css"  media="screen,projection"/>

            <link type="text/css" rel="stylesheet" href="<?php echo URL?>Public/fonts/material-icons.css">

            <link type="text/css" rel="stylesheet" href="<?php echo URL?>Public/css/style.min.css" media="screen,projection"/>


            <!--Aquí van los escripts-->
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/materialize.min.js"></script>

            <!--            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>-->
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/pagination.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/pagination.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/jquery.validate.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/uifilter.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/highcharts.js"></script>

            <script type="text/javascript">
                $('document').ready(function () {
                    $(".button-collapse").sideNav();

                    $('.collapsible').collapsible();

                    $('.tooltipped').tooltip();

                })

                $.validator.setDefaults({ ignore: [],
                    errorClass: 'invalid',
                    validClass: "valid",
                });
                jQuery.validator.addMethod("lettersonly", function(value, element) {
                    return this.optional(element) || /^[a-z, ]+$/i.test(value);
                }, "Solo Letras");
            </script>
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        </head>

        <body>


        <nav id="menusito">
            <div class="nav-wrapper teal">
                <a href="<?php echo URL?>inicio" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#!">Reservaciones</a></li>
                    <li><a href="#!">Mi Reserva</a></li>
                    <li><a href="<?php echo URL?>Login">Login</a></li>
                </ul>
            </div>
        </nav>

        <?php

        if (isset($_SESSION["username"]))

        {
        ?>

        <ul id="slide-out" class="side-nav collapsible" data-collapsible="accordion" style="overflow-y: auto;">
            <li><div class="user-view">
                    <div class="background">
                        <img src="<?php echo URL?>Public/imagenes/user-bg.jpg">
                    </div>
                    <a href="#!user"><img class="circle" src="<?php echo URL?>Public/imagenes/cesar.png"></a>
                    <a href="#!name"><span class="white-text name">John Doe</span></a>
                    <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div></li>
            <li>
                <div class="collapsible-header"><i class="material-icons">airline_seat_individual_suite</i>Reservaciones</div>
                <div class="collapsible-body"><a href="<?php echo URL?>clientes"  ><i class="material-icons">chevron_right</i>Clientes</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>reservaciones"  ><i class="material-icons">chevron_right</i>Reservaciones</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>habitaciones"  ><i class="material-icons">chevron_right</i>Habitaciones</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>checkin"  ><i class="material-icons">chevron_right</i>Check-In</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>checkout"  ><i class="material-icons">chevron_right</i>Check-Out</a></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">business_center</i>Servicios</div>
                <div class="collapsible-body"><a href="<?php echo URL?>servicios"  ><i class="material-icons">chevron_right</i>Servicios</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>asigna_servicios"  ><i class="material-icons">chevron_right</i>Asignar Servicios</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>ticket"  ><i class="material-icons">chevron_right</i>Lavanderia</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>tareas"  ><i class="material-icons">chevron_right</i>Tareas</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>equipo_seguridad"  ><i class="material-icons">chevron_right</i>Equipo de Seguridad</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>registro_prendas"  ><i class="material-icons">chevron_right</i>Lavanderia</a></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">dns</i>Almacen</div>
                <div class="collapsible-body"><a href="<?php echo URL?>productos"  ><i class="material-icons">chevron_right</i>Admin Almacen</a></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">directions_run</i>Empleados</div>
                <div class="collapsible-body"><a href="<?php echo URL?>empleados"  ><i class="material-icons">chevron_right</i>Configuración</a></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">local_convenience_store</i>Mantenimiento</div>
                <div class="collapsible-body"><a href="<?php echo URL?>tareas"  ><i class="material-icons">chevron_right</i>Control Tarea</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>Equipo_seguridad"  ><i class="material-icons">chevron_right</i>Equipo de Seguridad</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>"  ><i class="material-icons">chevron_right</i>Tipos de Equipo</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>"  ><i class="material-icons">chevron_right</i>Estados</a></div>
                <div class="collapsible-body"><a href="<?php echo URL?>tipo_tarea"  ><i class="material-icons">chevron_right</i>Tipo de Tarea</a></div>
            </li>

            <li>
                <a class="waves-effect" href="<?php echo URL?>login/logout">Salir</a>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

        <!--Import jQuery before materialize.js-->

        <?php
        }
        ?>


        <?php
    }
    public static function footer()
    {
        ?>
        <footer class="page-footer teal">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Ubicación</h5>
                        <p class="grey-text text-lighten-4">Carretera Federal Valle de Bravo Km 30,
                            Ejido San Antonio Laguna, 51200 Valle de Bravo, Méx.</p>

                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Redes Sociales</h5>
                        <ul>
                            <i class="material-icons">group</i>
                            <i class="material-icons">group</i>
                            <i class="material-icons">group</i>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    2018
                </div>
            </div>
        </footer>
        </body>
        </html>
        <?php
    }
}