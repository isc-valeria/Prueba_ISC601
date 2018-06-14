<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 11:56 AM
 */

namespace Views;


use http\Url;

new Template();
class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <html>
        <head>
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="<?php echo URL?>Public/css/style.min.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>Public/css/custom.min.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>Public/css/stilo.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>Public/style.css">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="<?php echo URL?>Public/css/materialize.min.css"  media="screen,projection"/>

            <!--Aquí van los escripts-->
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/pagination.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/jquery.validate.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/plugins/uifilter.js"></script>

            <script type="text/javascript">
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

        <nav>
            <div class="nav-wrapper teal">
                <a href="#!" class="brand-logo">Logo</a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="#!">Reservaciones</a></li>
                    <li><a href="#!">Mi Reserva</a></li>
                    <li><a href="<?php echo URL?>Login">Login</a></li>
                </ul>
            </div>
        </nav>



        <!--Import jQuery before materialize.js-->




        <?php
    }
    public static function footer()
    {
        ?>
        </body>
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
                </div>
            </div>
        </footer>

        </html>
        <?php
    }
}

