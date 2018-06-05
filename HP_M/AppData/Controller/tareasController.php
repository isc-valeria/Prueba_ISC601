<?php
namespace AppData\Controller;
class tareasController
{
    private $Tareas,$Tipo_tarea,$empleados,$habitaciones;
    public function __construct()
    {
        $this->Tareas= new \AppData\Model\Tareas();
        $this->Tipo_tarea=new \AppData\Model\Tipo_tarea();
        $this->empleados=new \AppData\Model\Empleados();
        $this->habitaciones=new \AppData\Model\Habitaciones();
    }
    public function index()
    {
        $datos1=$this->Tareas->getAll();
        $datos2=$this->Tipo_tarea->getAll();
        $datos3=$this->empleados->getAll();
        $datos4=$this->habitaciones->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;

        return $datos;
    }
    public function crear(){
        if($_POST)
        {
            $this->Tareas->set('descripcion_tarea',$_POST["tipotarea"]);
            $this->Tareas->set('nombre_emp',$_POST["empleado"]);
            $this->Tareas->set('num_habitacion',$_POST["habitacion"]);
            $this->Tareas->set('fecha_inicio',$_POST["fechai"]);
            $this->Tareas->set('fecha_fin',$_POST["fechaf"]);
            $this->Tareas->add();
            $datos1=$this->Tareas->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }

    public function eliminar($id)
    {
        $this->Tareas->delete($id[0]);

        $datos1=$this->Tareas->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function modificar($id)
    {
        $datos=$this->Tareas->getOne($id[0]);

        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->Tareas->set("id_tarea",$id[0]);
            $this->Tareas->set('descripcion_tarea',$_POST["tipotarea"]);
            $this->Tareas->set('nombre_emp',$_POST["empleado"]);
            $this->Tareas->set('num_habitacion',$_POST["habitacion"]);
            $this->Tareas->set('fecha_inicio',$_POST["fechai"]);
            $this->Tareas->set('fecha_fin',$_POST["fechaf"]);
            $this->Tareas->update();
            $datos1=$this->Tareas->getAll();
            $datos[0]=$datos1;
            return $datos;

        }
    }
}