<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 10/07/2018
 * Time: 01:40 PM
 */

namespace AppData\Controller;


class elexaController
{
    private $elexa;

    public function __construct()
    {
        $this->elexa=new \AppData\Model\Elexa();
    }

    public function index()
    {
        $datos=$this->elexa->getAll();
        return $datos;
    }
}