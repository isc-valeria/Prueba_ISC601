<?php

namespace AppData\Controller;


class clasificacionpiezaController
{
    private $clasi_pieza;

    public function __construct()
    {
        $this->clasi_pieza= new \AppData\Model\Clasificacion_pieza();
    }

    public function index(){
        $datos4=$this->clasi_pieza->getAll();
        $datos[3]=$datos4;
        return $datos;
    }

    public function crear(){
        if(isset($_POST))
        {
            //echo "asdasdadasdasd";
           $this->clasi_pieza->set('descripcion_pieza', $_POST["descripcion_pieza"]);
           $this->clasi_pieza->set('cantidad', $_POST["cantidad"]);
           $this->clasi_pieza->set('descripcion_serviciopieza', $_POST["descripcion_servicio"]);
           $this->clasi_pieza->set('descripcion_observacion', $_POST["descripcion_observacion"]);
           $this->clasi_pieza->add();
           $datos4=$this->clasi_pieza->getAll();
           $datos[3]=$datos4;
           return $datos;
        }
    }


}