<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 18/06/2018
 * Time: 10:31 AM
 */

namespace AppData\Controller;


class clasificacion_kiloController
{
    private $clasi_kilo;

    public function __construct()
    {
        $this->clasi_kilo= new \AppData\Model\Clasificacion_kilo();
    }

    public function index(){
        $datos3=$this->clasi_kilo->getAll();
        $datos["clasi_kilo"]=$datos3;
        return $datos;
    }

    public function crear(){
        //echo "asdasdsadasd";
        if(isset($_POST))
        {
           //echo "asdasdadasdasd";
           $this->clasi_kilo->set('id_serviciolav', $_POST["descripcion_servicio"]);
           $this->clasi_kilo->set('cantidadkg', $_POST["cantidadkg"]);
           $this->clasi_kilo->set('id_observacion', $_POST["descripcion_observacion"]);
           $this->clasi_kilo->add();
           $datos3=$this->clasi_kilo->getAll();
           $datos["clasi_kilo"]=$datos3;
           return $datos;
        }
    }

}