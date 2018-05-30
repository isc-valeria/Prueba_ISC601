<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;


class estado_habitacionesController
{
    private $estado_habitacion;
    public function __construct()
    {
        $this->estado_habitacion=new \AppData\Model\EstadoHabitacion();
    }

    public function index()
    {
        $datos= $this->estado_habitacion->getAll();
        return $datos;
       // echo "Hola desde mi controlador";
    }
    public function crear()
    {
        if($_POST)
        {
            $this->estado_habitacion->set("estado_ha",$_POST['estado_habitacion']);
            $this->estado_habitacion->add();
            header("Location:".URL."estado_habitaciones?msg=ok");
        }
    }
    public function hola()
    {

    }
}