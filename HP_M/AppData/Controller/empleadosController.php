<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 11:14 PM
 */

namespace AppData\Controller;


class empleadosController
{
    private $empleados;

    public function __construct()
    {
        $this->empleados= new \AppData\Model\Empleados();
    }

    public function index()
    {
        $datos=$this->empleados->getAll();
        return $datos;
    }

}