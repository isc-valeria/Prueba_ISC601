<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 21/06/2018
 * Time: 12:13 PM
 */

namespace AppData\Controller;


class reservacionesclienteController
{
    private $reservacionescliente;

    public function __construct()
    {
        $this->reservacionescliente= new \AppData\Model\ReservacionesCliente();
    }

    public function index()
    {
        //session_destroy();
    }
}