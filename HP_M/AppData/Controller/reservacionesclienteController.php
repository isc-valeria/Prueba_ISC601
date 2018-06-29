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
    private $habitaciones,$tipos_habitacion,$estado_habitaciones;

    public function __construct()
    {
        $this->habitaciones= new \AppData\Model\ReservacionesCliente();
    }

    public function index()
    {
        $datos1=$this->habitaciones->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function consulta()
    {
        $this->habitaciones->set('id_inicio',$_GET["id_inicio"]);
        $this->habitaciones->set('id_final',$_GET["id_final"]);
        $datos2=$this->habitaciones->getAllHabitaciones();
        $datos1[0]=$datos2;
        return $datos1;
    }
}