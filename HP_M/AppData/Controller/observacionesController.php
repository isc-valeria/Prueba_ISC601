<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15/06/2018
 * Time: 08:12 PM
 */

namespace AppData\Controller;


class observacioneslavanderiaController
{
    private $observacion;

    public function __construct()
    {
        $this->observacion= new \AppData\Model\Observaciones();
    }

    public function index(){
        $datos2=$this->observacion->getAll();

        $datos[0]=$datos2;

        return $datos;
    }

    public function crear(){
        //echo "fsdfsdfasdasdasas";
        if(isset($_POST))
        {
            //echo "asdasdadasdasd";
            $this->observacion->set('descripcion_observacion', $_POST["nombre_observa"]);
            $this->observacion->set('cargo', $_POST["precio_car"]);
            $this->observacion->add();
            $datos2=$this->observacion->getAll();
            $datos[0]=$datos2;
            return $datos;
        }
    }
}