<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo Isaac
 * Date: 18/06/2018
 * Time: 01:20 PM
 */

namespace AppData\Controller;


class turnosController
{
    private $Turnos;

    public function __construct()
    {
        $this->Turnos=new \AppData\Model\Turnos();
    }
    public function index()
    {
        $datos1=$this->Turnos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function crear()
    {
        if($_POST)
        {
            $this->Turnos->set('descripcion_turno',$_POST["descripcion_turno"]);
            $this->Turnos->set('hr_entrada',$_POST["hr_entrada"]);
            $this->Turnos->set('hr_salida',$_POST["hr_salida"]);
            $this->Turnos->add();
            $datos1=$this->Turnos->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function eliminar($id)
    {
        $this->Turnos->delete($id[0]);
        $datos1=$this->Turnos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->Turnos->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->Turnos->set("id_turno",$id[0]);
            $this->Turnos->set('descripcion_turno',$_POST["descripcion_turno"]);
            $this->Turnos->set('hr_entrada',$_POST["hr_entrada"]);
            $this->Turnos->set('hr_salida',$_POST["hr_salida"]);
            $this->Turnos->update();
            $datos1=$this->Turnos->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }

}