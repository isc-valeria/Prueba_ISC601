<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 03:54 PM
 */

namespace AppData\Controller;


class reservacionesController
{
    private $habitaciones,$tipo_habitaciones,$estado_habitaciones;

    public function __construct()
    {
        $this->habitaciones= new \AppData\Model\Reservaciones();
        $this->tipo_habitaciones=new \AppData\Model\Tipos_habitacion();
        $this->estado_habitaciones= new \AppData\Model\EstadoHabitacion();
    }

    public function index()
    {
        $datos1=$this->habitaciones->getAll();
        $datos2=$this->tipo_habitaciones->getAll();
        $datos3=$this->estado_habitaciones->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[3]=$datos3;
        return $datos;
    }
    public function crear(){
        if($_POST)
        {
            $this->habitaciones->set('num_habitacion',$_POST["numero_habitacion"]);
            $this->habitaciones->set('descripcion_hab',$_POST["descripcion"]);
            $this->habitaciones->set('id_tipoh',$_POST["id_tipoh"]);
            $this->habitaciones->set('id_estadoh',$_POST["nomestadohabitacion"]);
            $this->habitaciones->add();
            $datos1=$this->habitaciones->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }

    public function eliminar($id)
    {
        $this->habitaciones->delete($id[0]);
        $datos1=$this->habitaciones->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->habitaciones->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->habitaciones->set("id_habitacion",$id[0]);
            $this->habitaciones->set('num_habitacion',$_POST["numero_habitacion"]);
            $this->habitaciones->set('descripcion_hab',$_POST["descripcion"]);
            $this->habitaciones->set('id_tipoh',$_POST["id_tipoh"]);
            $this->habitaciones->set('id_estadoh',$_POST["nomestadohabitacion"]);
            $this->habitaciones->update();
            $datos1=$this->habitaciones->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
}