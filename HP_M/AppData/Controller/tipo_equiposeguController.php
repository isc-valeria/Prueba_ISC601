<?php

namespace AppData\Controller;


class tipo_equiposeguController
{
    private $tipo_equiposegu;

    public function __construct()
    {

        $this->tipo_equiposegu=new \AppData\Model\Tipo_equiposegu();

    }

    public function index()
    {

        $datos1=$this->tipo_equiposegu->getAll();
        $datos[0]=$datos1;

        return $datos;
    }
    public function crear()
    {
        if($_POST)
        {
            $this->tipo_equiposegu->set('descripcion_tipo',$_POST["descripcion_tipo"]);
            $this->tipo_equiposegu->add();
            $datos1=$this->tipo_equiposegu->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->tipo_equiposegu->delete($id[0]);
        $datos1=$this->tipo_equiposegu->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->tipo_equiposegu->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->tipo_equiposegu->set("id_tipoequisegu",$id[0]);
            $this->tipo_equiposegu->set('descripcion_tipo',$_POST["descripcion_tipo"]);
            $this->tipo_equiposegu->update();
            $datos1=$this->tipo_equiposegu->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function print_pdf()
    {

    }


}