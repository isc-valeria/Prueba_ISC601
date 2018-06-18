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

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
            <link href="<?php echo URL?>Public/css/style.min.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>Public/js/plugins/highcharts.js" type="text/css" rel="stylesheet">

            <link rel="stylesheet" href="<?php echo URL?>Public/style.css">
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/pagination.js"></script>
        <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/pagination.js"></script>


            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="<?php echo URL?>Public/css/materialize.min.css"  media="screen,projection"/>


            <link type="text/css" rel="stylesheet" href="<?php echo URL?>Public/fonts/material-icons.css">
            <link type="text/css" rel="stylesheet" href="<?php echo URL?>Public/css/scroll.css">

            <link type="text/css" rel="stylesheet" href="<?php echo URL?>Public/css/style.min.css" media="screen,projection"/>


            <!--Aquí van los escripts-->
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/materialize.min.js"></script>
            <link rel="stylesheet" href="<?php echo URL?>/Public/style.css">
            <!--            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>-->
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/pagination.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/pagination.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/jquery.validate.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/uifilter.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/highcharts.js"></script>

            <script type="text/javascript">
                $('document').ready(function () {
                    $('.parallax').parallax();
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

            <div class="nav-wrapper cyan lighten-2"><img src="Public/imagenes/logo.gif" width="300px" height="75px"/>
                <a href="<?php echo URL?>inicio" class="brand-logo"></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#!" class="black-text">Reservaciones</a></li>
                    <li><a href="#!" class="black-text">Mi Reserva</a></li>
                    <li><a href="<?php echo URL?>Login" class="black-text">Login</a></li>
                </ul>
            </div>
        </nav>

        <?php

        if (isset($_SESSION["username"]))

        {
        ?>

            <div class="wrapper">
                <aside id="left-sidebar-nav">
                    <ul id="slide-out" class="side-nav fixed leftside-navigation">

                        <li class="user-details cyan lighten-3 ">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <img src="<?php echo URL?>/public/imagenes/cesar.PNG" alt="" class="circle responsive-img valign profile-image">
                                </div>
                                <div class="col col s8 m8 l8">
                                    <ul id="profile-dropdown" class="dropdown-content">
                                        <li><a href="#"></i> Perfil</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo URL?>login/logout">Salir</a>
                                        </li>
                                    </ul>
                                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn " href="#" data-activates="profile-dropdown">cesar Primero<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                    <p class="user-roal">Administrador</p>
                                </div>
                            </div>
                        </li>

                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="no-padding"><a class="collapsible-header waves-effect waves-cyan"><i class="icon-myspace"></i>Reservaciones</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="<?php echo URL?>clientes" class="icon-jira">   Clientes</a></li>
                                            <li><a href="<?php echo URL?>reservaciones" class="icon-jira">   Reservaciones</a></li>
                                            <li><a href="<?php echo URL?>habitaciones" class="icon-jira">   Habitaciones</a></li>

                                            <li><a href="<?php echo URL?>checkin" class="icon-jira">   Check In</a></li>
                                            <li><a href="<?php echo URL?>checkout" class="icon-jira">   Check Out</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="no-padding"><a class="collapsible-header waves-effect waves-cyan"><i class="icon-simpleicons"></i>Servicios</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="<?php echo URL?>Servicios" class="icon-jira">   Servicios</a></li>
                                            <li><a href="<?php echo URL?>Asigna_servicios" class="icon-jira">   Asignar Servicios</a></li>

                                            <li><a href="<?php echo URL?>ticket " class="icon-jira">   Lavanderia</a></li>
                                            <li><a href="<?php echo URL?>Tareas" class="icon-jira">   Tareas</a></li>
                                            <li><a href="<?php echo URL?>Equipo_seguridad" class="icon-jira">   Equipo De Seguridad</a></li>


                                        </ul>
                                    </div>
                                </li>   
                            </ul>
                        </li>



        <ul id="slide-out" class="side-nav collapsible" data-collapsible="accordion" style="overflow-y: auto;">
            <li><div class="user-view">
                    <div class="background">
                        <img src="<?php echo URL?>Public/imagenes/fondo.jpg">
                    </div>

                    <a href="#!name"><span class="black-text name">John Doe</span></a>
                    <a href="#!email"><span class="black-text email">jdandturk@gmail.com</span></a>
                </div></li>

            <li>
                <div class="collapsible-header"><i class="material-icons">airline_seat_individual_suite</i>Reservaciones</div>
                <div class="collapsible-body cyan lighten-3">
                    <ul>
                        <li><a href="<?php echo URL?>clientes" class="black-text"><i class="material-icons">chevron_right</i>Clientes</a></li>
                        <li><a href="<?php echo URL?>reservaciones" class="black-text"><i class="material-icons">chevron_right</i>Reservaciones</a></li>
                        <li><a href="<?php echo URL?>reservaciones" class="black-text"><i class="material-icons">chevron_right</i>Habitaciones</a></li>
                        <li><a href="<?php echo URL?>reservaciones" class="black-text"><i class="material-icons">chevron_right</i>Check-In</a></li>
                        <li><a href="<?php echo URL?>reservaciones" class="black-text"><i class="material-icons">chevron_right</i>Check-Out</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="collapsible-header"><i class="material-icons">business_center</i>Servicios</div>
                    <div class="collapsible-body cyan lighten-3">
                        <ul>
                            <div><a href="<?php echo URL?>servicios" class="black-text"><i class="material-icons">chevron_right</i>Servicios</a></div>
                            <div><a href="<?php echo URL?>asigna_servicios" class="black-text"><i class="material-icons">chevron_right</i>Asignar Servicios</a></div>
                            <div><a href="<?php echo URL?>ticket" class="black-text"><i class="material-icons">chevron_right</i>Lavanderia</a></div>
                            <div><a href="<?php echo URL?>tareas" class="black-text"><i class="material-icons">chevron_right</i>Tareas</a></div>
                            <div><a href="<?php echo URL?>equipo_seguridad" class="black-text"><i class="material-icons">chevron_right</i>Equipo de Seguridad</a></div>
                        </ul>
                    </div>

            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">dns</i>Almacen</div>

                    <div class="collapsible-body cyan lighten-3">
                        <ul>
                            <div><a href="<?php echo URL?>productos" class="black-text"><i class="material-icons">chevron_right</i>Admin Almacen</a></div>
                            <div><a href="<?php echo URL?>productos" class="black-text"><i class="material-icons">chevron_right</i>Tipos productos</a></div>
                            <div><a href="<?php echo URL?>productos" class="black-text"><i class="material-icons">chevron_right</i>Categorias producto</a></div>
                        </ul>
                    </div>

            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">directions_run</i>Empleados</div>
                    <div class="collapsible-body cyan lighten-3">
                            <ul>
                                <div><a href="<?php echo URL?>empleados" class="black-text"><i class="material-icons">chevron_right</i>Configuración</a></div>
                                <div><a href="<?php echo URL?>Puestos" class="black-text"><i class="material-icons">chevron_right</i>Puestos</a></div>
                            </ul>
                    </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">local_convenience_store</i>Mantenimiento</div>

                    <div class="collapsible-body cyan lighten-3">
                        <ul>
                            <div><a href="<?php echo URL?>tareas" class="black-text"><i class="material-icons">chevron_right</i>Control Tarea</a></div>
                            <div><a href="<?php echo URL?>Equipo_seguridad" class="black-text"><i class="material-icons">chevron_right</i>Equipo de Seguridad</a></div>
                            <div><a href="<?php echo URL?>" class="black-text"><i class="material-icons">chevron_right</i>Tipos de Equipo</a></div>
                            <div><a href="<?php echo URL?>" class="black-text"><i class="material-icons">chevron_right</i>Estados</a></div>
                            <div><a href="<?php echo URL?>tipo_tarea" class="black-text"><i class="material-icons">chevron_right</i>Tipo de Tarea</a></div>
                        </ul>
                    </div>


            </li>

            <li>
                <div class="collapsible-header">Cerrar sesión</div>
                    <div class="collapsible-body cyan lighten-3">
                            <ul>
                                <div><a href="<?php echo URL?>login/logout" class="black-text"">Salir</a></div>
                            </ul>
                    </div>
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
        <footer class="page-footer cyan lighten-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="black-text">Ubicación</h5>
                        <p class="grey-text black-text">Carretera Federal Valle de Bravo Km 30,
                            Ejido San Antonio Laguna, 51200 Valle de Bravo, Méx.</p>

                    </div>
                    <div class="col l3 s12">
                        <h5 class="black-text">Redes Sociales</h5>
                        <ul>
                            <a href="#!"><span class="icon-facebook"></span></a>
                            <a href="#!"><span class="icon-whatsapp"></span></a>
                            <a href="#!"><span class="icon-instagram"></span></a>
                            <a href="#!"><span class="icon-gmail"></span></a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container black-text">
                    2018
                </div>
            </div>
        </footer>
        </body>
        </html>
        <?php
    }
}