<?php
namespace AppData\Controller;
class tipo_tareaController
{
    private $tipo_tarea;
    public function __construct()
    {
        $this->tipo_tarea= new \AppData\Model\Tipo_tarea();
    }
    public function index()
    {
        $datos1=$this->tipo_tarea->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function crear(){
        if($_POST)
        {

            $this->tipo_tarea->set('descripcion_tarea',$_POST["descripcion_tarea"]);
            $this->tipo_tarea->add();
            $datos1=$this->tipo_tarea->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function eliminar($id)
    {
        $this->tipo_tarea->delete($id[0]);
        $datos1=$this->tipo_tarea->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->tipo_tarea->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->tipo_tarea->set("id_tipotarea",$id[0]);
            $this->tipo_tarea->set('descripcion_tarea',$_POST["descripcion_tarea"]);
            $this->tipo_tarea->update();
            $datos1=$this->tipo_tarea->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function print_pdf()
    {

    }
}