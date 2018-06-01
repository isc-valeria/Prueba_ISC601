<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 05:45 PM
 */

namespace AppData\Controller;


class almacenController
{
    private $almacen;

    public function __construct()
    {
        $this->almacen= new \AppData\Model\Almacen();
    }

    public function index()
    {
        $datos=$this->almacen->getAll();
        return $datos;
    }

}