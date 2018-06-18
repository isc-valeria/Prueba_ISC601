<?php
namespace AppData\Controller;
class estado_reservacionController
{
    private $estado_reserva;
    public function __construct()
    {
        $this->estado_reserva= new \AppData\Model\Estado_Reservacion();
    }
    public function index()
    {
        $datos1=$this->estado_reserva->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function crear(){
        if($_POST)
        {
            $this->estado_reserva->set('estador',$_POST["descripcion_estadoreserva"]);
            $this->estado_reserva->getAll();
            $datos1=$this->estado_reserva->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function eliminar($id)
    {
        $this->estado_reserva->delete($id[0]);
        $datos1=$this->estado_reserva->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->estado_reserva->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->estado_reserva->set("id_estador",$id[0]);
            $this->estado_reserva->set('estador',$_POST["descripcion_estadoreserva"]);
            $this->estado_reserva->update();
            $datos1=$this->estado_reserva->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
}