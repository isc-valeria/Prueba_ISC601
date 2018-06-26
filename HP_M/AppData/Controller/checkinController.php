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
    private $checkin;
    private $tipos_habitacion;

    public function __construct()
    {
        $this->checkin= new \AppData\Model\Checkin();
        $this->tipos_habitacion= new \AppData\Model\tipos_habitacion();
    }

    public function mod($id)
    {
        $datos=$this->checkin->getTwo($id[0]);
        $datos=mysqli_fetch_array($datos);
        print_r(json_encode($datos));
    }

    public function index()
    {
        $datos1=$this->checkin->getAll();
        $result=$this->checkin->check();
        $datos2=$this->tipos_habitacion->getAll();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$result;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->checkin->getOne($id[0]);
        return $datos;
    }
}