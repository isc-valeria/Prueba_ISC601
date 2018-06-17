<?php
/**
 * Created by PhpStorm.
 * User: Sullivan
 * Date: 17/06/2018
 * Time: 02:28 PM
 */


namespace AppData\Controller;


class asigna_serviciosController
{
    private $asignacion_de_servicios,$habitaciones,$servicios,$estado_habitacion,$tipos_habitacion;

    public function __construct()
    {
        $this->asignacion_de_servicios= new \AppData\Model\Asigna_servicios();
        $this->habitaciones=new \AppData\Model\Habitaciones();
        $this->servicios=new \AppData\Model\Servicios();
        $this->estado_habitacion=new \AppData\Model\EstadoHabitaciones();
        $this->tipos_habitacion=new \AppData\Model\Tipo_habitacion();
    }

    public function index()
    {

        $datos1=$this->asignacion_de_servicios->getAll();
        $datos2=$this->habitaciones->getAll();
        $datos3=$this->servicios->getAll();
        $datos4=$this->estado_habitacion->getAll();
        $datos5=$this->tipos_habitacion->getAll();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;
        $datos[4]=$datos5;

        return $datos;
    }
}
