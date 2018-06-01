<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 22/05/2018
 * Time: 05:01 AM
 */

namespace AppData\Controller;


class asigna_serviciosController
{
    private $asigna_servicios;

    public function __construct()
    {
        $this->asigna_servicios= new \AppData\Model\Asigna_servicios();
    }

    public function index()
    {
        $datos1=$this->asigna_servicios->getAll();
        $datos2=$this->asigna_servicios->getDatos1();
        $datos3=$this->asigna_servicios->getDatos2();
        $datos4=$this->asigna_servicios->getDatos3();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;

        return $datos;
    }

}