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
        $result=$this->check_in->check();

        $datos[0]=$datos1;
        $datos[2]=$result;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->check_in->getOne($id[0]);
        return $datos;
    }
}