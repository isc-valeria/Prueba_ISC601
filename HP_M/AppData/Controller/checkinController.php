<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 08:10 PM
 */

namespace AppData\Controller;


class checkinController
{
    private $check_in;

    public function __construct()
    {
        $this->check_in= new \AppData\Model\Checkin();
    }

    public function crear()
    {
        $this->check_in->set('num_habitacion',$_POST["numero_habitacion"]);
        $this->check_in->set('descripcion_hab',$_POST["descripcion"]);
        $this->check_in->set('id_tipoh',$_POST["id_tipoh"]);
        $this->check_in->set('id_estadoh',$_POST["nomestadohabitacion"]);
        $this->check_in->add();
        $datos1=$this->check_in->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function index()
    {
        $datos1=$this->check_in->getAll();
        $datos2=$this->check_in->getDatos();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        return $datos;
    }
}