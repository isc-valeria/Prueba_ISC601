<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 11:56 AM
 */

namespace Views;


new Template();
class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <title>Parallax Template - Materialize</title>

            <!-- CSS  -->

            <link rel="stylesheet" type="text/css" href="Public/css/Normalize.css">
            <link rel="stylesheet" type="text/css" href="Public/css/materialize.css">
            <link rel="stylesheet" type="text/css" href="Public/css/stylo.css">
            <script type="text/javascript" src="<?php echo URL?>/Public/js/jquery.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
            <link rel="stylesheet" href="Public/style.css">
            <link rel="stylesheet" href="<?php echo URL?>/Public/fonts/material-icons.css" />
            <link rel="stylesheet" href="<?php echo URL?>/Public/css/elcss.css" type="text/css">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
            <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

            <script type="text/javascript">
                $(document).ready(function(){
                    $('.sidenav').sidenav();
                    $('.parallax').parallax();
                });
            </script>
            <script type="text/javascript">
                $.validator.setDefaults({ ignore: [],
                    errorClass: 'invalid',
                    validClass: "valid",
                });
                jQuery.validator.addMethod("lettersonly", function(value, element) {
                    return this.optional(element) || /^[a-z, ]+$/i.test(value);
                }, "Solo Letras");
                jQuery.validator.addMethod( "ValidateEmail" , function(mail)
                {
                    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
                    {
                        return (true)
                    }
                    alert("You have entered an invalid email address!")
                    return (false)
                })
            </script>


        </head>
        <body>
        <!------------------------------------------------------------>
        <nav class="teal" role="navigation">
            <div class="nav-wrapper container">
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo URL?>Habitaciones">Reservaciones</a></li>
                    <li><a href="#">Mi Reserva</a></li>
                    <li><a href="<?php echo URL?>Login">Login</a></li>

                </ul>
            </div>
        </nav>


        <main class="container">

        <?php
    }
    public static function footer()
    {
        ?>

        </main>
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

