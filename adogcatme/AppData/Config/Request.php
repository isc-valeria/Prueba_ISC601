<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 10/05/2018
 * Time: 12:56 PM
 */

namespace AppData\Config;


use AppData\Model\login;

class Request
{
    private $controlador;
    private $metodo;
    private $argumento;
//    private $log=URL.Login;
    public function __construct()
    {
        if (isset($_SESSION["nombre"]))
        {
            if (isset($_GET['url'])) {
                $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
                $ruta = explode("/", $ruta);
                $ruta = array_filter($ruta);
                //print_r($ruta); //sirve para imprimir arreglos
                if ($ruta[0] == "index.php") {
                    $this->controlador = "animales";
                } else {
                    $this->controlador = strtolower(array_shift($ruta));
                }
                $this->metodo = strtolower(array_shift($ruta));
                if (!$this->metodo)
                    $this->metodo = "index";
                $this->argumento = $ruta;
            }else {
                $this->controlador = "animales";
                $this->metodo = "index";
            }
        }
        else
            if (isset($_GET['url'])?stristr($_GET['url'],'login'):false)
            {
                $this->controlador="login";
                if(isset($_POST["nombre"]))
                    $this->metodo = "verify";
                else if(isset($_POST["numero"]))
                    $this->metodo = "reset";
                else
                    $this->metodo = "index";
            }
            else if (isset($_GET['url'])?stristr($_GET['url'],'inicio'):false)
            {
                $this->controlador="inicio";
                if(isset($_POST["id"]))
                    $this->metodo = "show";
                else if(isset($_POST["datos"]))
                    $this->metodo = "datos";
                else if(isset($_POST["img"]))
                    $this->metodo = "getimg";
                else
                    $this->metodo = "index";

            }
            else if (isset($_GET['url'])?stristr($_GET['url'],'quienessomos'):false)
            {
                $this->controlador="quienessomos";
                $this->metodo = "index";
            }
            else if (isset($_GET['url'])?stristr($_GET['url'],'ver_mas'):false)
            {
                $this->controlador="ver_mas";
                $this->metodo = "index";
            }
            else
            {
                $this->controlador="inicio";
                $this->metodo = "index";

            }

    }
    public function getControlador()
    {
        return $this->controlador;
    }
    public function getMetodo()
    {
        return $this->metodo;
    }
    public function getArgumento()
    {
        return $this->argumento;
    }
}