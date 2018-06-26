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
    private $reservaciones;

    public function __construct()
    {
        $this->checkin= new \AppData\Model\Checkin();

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

        $datos[0]=$datos1;
        $datos[2]=$result;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->checkin->getOne($id[0]);
        return $datos;
    }
}