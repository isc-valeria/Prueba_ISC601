<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 09:51 PM
 */

namespace AppData\Controller;


class checkoutController
{
    private $check_out;

    public function __construct()
    {
        $this->check_out = new \AppData\Model\Checkout();
    }

    public function index()
    {
        $datos1=$this->check_out->getAll();
        $datos2=$this->check_out->getDatos();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        return $datos;
    }

}