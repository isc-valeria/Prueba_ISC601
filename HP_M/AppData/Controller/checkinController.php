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
    private $reservaciones;

    public function __construct()
    {
        $this->check_in= new \AppData\Model\Checkin();

    }

    public function crear()
    {

    }

    public function index()
    {
        $datos1=$this->check_in->getAll();
        $datos2=$this->check_in->getDatos();
        $datos3=$this->check_in->tabs();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->check_in->getOne($id[0]);
        return $datos;
    }

    public function getOut($id)
    {
        $datos=$this->check_in->tabs($id[0]);
        $datos=mysqli_fetch_array($datos);
        print_r(json_encode($datos));
    }
}