<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 01:56 PM
 */

    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);

    define('URL',"http://localhost/Prueba_isc601/HP_M/");


    require_once ("AppData/Config/Autoload.php");
    \AppData\Config\Autoload::run();

    //require_once ("Views/Template.php);
    if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"]))
    Views\Template::header();
    AppData\Config\Enrutador::run(new AppData\Config\Request());
    if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"]))
    Views\Template::footer();
?>