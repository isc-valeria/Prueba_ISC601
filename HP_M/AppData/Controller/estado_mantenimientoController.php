<?php


namespace AppData\Controller;


class estado_mantenimientoController
{
    private $estado_mantenimiento;
    public function __construct()
    {

        $this->estado_mantenimiento=new \AppData\Model\Estado_mantenimiento();

    }

    public function index()
    {

        $datos1=$this->estado_mantenimiento->getAll();
        $datos[0]=$datos1;

        return $datos;
    }
    public function crear()
    {
        if($_POST)
        {
            $this->estado_mantenimiento->set('descripcion_estadomantenimiento',$_POST["descripcion_estadomantenimiento"]);
            $this->estado_mantenimiento->add();
            $datos1=$this->estado_mantenimiento->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->estado_mantenimiento->delete($id[0]);
        $datos1=$this->estado_mantenimiento->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->estado_mantenimiento->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->estado_mantenimiento->set("id_estadomantenimiento",$id[0]);
            $this->estado_mantenimiento->set('descripcion_estadomantenimiento',$_POST["descripcion_estadomantenimiento"]);
            $this->estado_mantenimiento->update();
            $datos1=$this->estado_mantenimiento->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }


}