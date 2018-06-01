<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 10:52 PM
 */

namespace AppData\Controller;


class lavanderiaController
{
    private $lavanderia;

    public function __construct()
    {
        $this->lavanderia= new \AppData\Model\Lavanderia();
    }

    public function index()
    {
        $datos=$this->lavanderia->getAll();
        return $datos;
    }

}