<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 01:56 PM
 */

    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);
<<<<<<< HEAD

    define('URL',"http://localhost/Prueba_ISC601/HP_M/");

=======
    define('URL',"http://localhost/601_prograWeb/Prueba_ISC601/HP_M/");
    define('URL',"http://localhost/Prueba_ISC601/HP_M/");
>>>>>>> e9375531650c32d60bf0267e61640667d449fe87
    require_once ("AppData/Config/Autoload.php");
    \AppData\Config\Autoload::run();
    //require_once ("Views/Template.php);
    if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"]))
    Views\Template::header();
    AppData\Config\Enrutador::run(new AppData\Config\Request());
    if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"]))
    Views\Template::footer();
?>