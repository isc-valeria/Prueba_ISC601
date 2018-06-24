<?php

namespace AppData\Controller;


class habitacionesController
{
    private $habitaciones,$tipos_habitacion,$estado_habitaciones;

    public function __construct()
    {
        $this->habitaciones= new \AppData\Model\Habitaciones();
        $this->tipos_habitacion=new \AppData\Model\tipos_habitacion();
        $this->estado_habitaciones= new \AppData\Model\EstadoHabitaciones();
    }

    public function index()
    {
        $datos1=$this->habitaciones->getAll();
        $datos2=$this->tipos_habitacion->getAll();
        $datos3=$this->estado_habitaciones->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        return $datos;
    }
    public function crear(){
        if($_POST)
        {
            $this->habitaciones->set('num_habitacion',$_POST["numero_habitacion"]);
            $this->habitaciones->set('descripcion_hab',$_POST["descripcion"]);
            $this->habitaciones->set('id_tipoh',$_POST["id_tipoh"]);

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



    public function print_pdf()
    {
        $datos=$this->habitaciones->getAll();
        return $datos;
    }


    public function graficar()
    {
        $datos=$this->habitaciones->graficar();
        return $datos;

    }
    public function creartipo(){
        if($_POST)
        {
            $this->tipos_habitacion->set('tipo_ha',$_POST["tipo_ha"]);
            $this->tipos_habitacion->set('precio',$_POST["precio"]);
            $this->tipos_habitacion->set('maximo_personas',$_POST["maximo_personas"]);

            $this->tipos_habitacion->add();
            $datos=$this->tipos_habitacion->getAll();
            return $datos;
        }

    }
}