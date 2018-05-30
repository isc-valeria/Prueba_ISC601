<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 22/05/2018
 * Time: 05:01 AM
 */

namespace AppData\Controller;


class asignacion_de_serviciosController
{
    private $asignacion_de_servicios;

    public function __construct()
    {
        $this->asignacion_de_servicios= new \AppData\Model\Asigna_servicios();
    }

    public function index()
    {
        $datos1=$this->asignacion_de_servicios->getAll();
        $datos2=$this->asignacion_de_servicios->getDatos1();
        $datos3=$this->asignacion_de_servicios->getDatos2();
        $datos4=$this->asignacion_de_servicios->getDatos3();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;

        return $datos;
    }

}