<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 14/06/2018
 * Time: 08:47 AM
 */

namespace AppData\Controller;


class servicioslavandriaController
{
    private $servicio;

    public function __construct()
    {
        $this->servicio= new \AppData\Model\Servicios_lavanderia();
    }

    public function index(){
        
    }
}