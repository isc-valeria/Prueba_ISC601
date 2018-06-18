<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 18/06/2018
 * Time: 10:31 AM
 */

namespace AppData\Controller;


class clasificacionkiloController
{
    private $clasi_kilo;

    public function __construct()
    {
        $this->clasi_kilo= new \AppData\Model\Clasificacion_kilo();
    }

    public function index(){
        $datos3=$this->clasi_kilo->getAll();
        $datos[2]=$datos3;
        return $datos;
    }

    public function crear(){
        if(isset($_POST))
        {
            //echo "asdasdadasdasd";
           $this->clasi_kilo->set('descripcion_serviciokilo', $_POST["descripcion_servicio"]);
           $this->clasi_kilo->set('cantidadkg', $_POST["cantidadkg"]);
           $this->clasi_kilo->set('descripcion_observacionkilo', $_POST["descripcion_observacion"]);
           $this->clasi_kilo->add();
           $datos3=$this->clasi_kilo->getAll();
           $datos[2]=$datos3;
           return $datos;
        }
    }


}