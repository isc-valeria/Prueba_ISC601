<?php
namespace AppData\Controller;
class estado_habitacionesController
{
    private $estado_habitacion;
    public function __construct()
    {
        $this->estado_habitacion= new \AppData\Model\EstadoHabitaciones();
    }
    public function index()
    {
        $datos1=$this->estado_habitacion->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function crear(){
        if($_POST)
        {
            $this->estado_habitacion->set('estado_ha',$_POST["descripcion_estado"]);
            $this->estado_habitacion->add();
            $datos1=$this->estado_habitacion->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function eliminar($id)
    {
        $this->estado_habitacion->delete($id[0]);
        $datos1=$this->estado_habitacion->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->estado_habitacion->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->estado_habitacion->set("id_estadoh",$id[0]);
            $this->estado_habitacion->set('estado_ha',$_POST["descripcion_estado"]);
            $this->estado_habitacion->update();
            $datos1=$this->estado_habitacion->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
}