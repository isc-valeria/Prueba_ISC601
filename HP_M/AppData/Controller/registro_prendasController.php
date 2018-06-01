<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 10:52 PM
 */

namespace AppData\Controller;


class registro_prendasController
{
    private $registro_prendas;

    public function __construct()
    {
        $this->registro_prendas= new \AppData\Model\Registro_prendas();
    }

    public function index()
    {
        $datos=$this->registro_prendas->getAll();
        return $datos;
    }

}