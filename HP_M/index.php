<?php session_start();

    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);
//    define('URL',"http://localhost/Prueba_ISC601/HP_M/");


<<<<<<< HEAD

    define('URL',"http://localhost/posesta/Prueba_ISC601/HP_M/");
=======
    define('URL',"http://localhost/Prueba_ISC601/HP_M/");
>>>>>>> 08c5531db945e9ac89cb6925634b77419c8b0c5b

    require_once ("AppData/Config/Autoload.php");
    \AppData\Config\Autoload::run();
    //require_once ("Views/Template.php);


  //  echo $_GET["url"];
    if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
    Views\Template::header();
    AppData\Config\Enrutador::run(new AppData\Config\Request());
    if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))

    Views\Template::footer();
?>