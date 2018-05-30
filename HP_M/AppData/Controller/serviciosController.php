<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 05:30 PM
 */

namespace AppData\Controller;


class serviciosController
{
    private $servicios;
    public function __construct()
    {
        $this->servicios= new \AppData\Model\Servicios();
    }

    public function index()
    {
        $datos=$this->servicios->getAll();
        return $datos;
    }
}