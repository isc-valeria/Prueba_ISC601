<?php
namespace AppData\Controller;
class tareasController
{
    private $Tareas,$Tipo_tarea,$empleados,$habitaciones,$herramientas;
    public function __construct()
    {
        $this->Tareas= new \AppData\Model\Tareas();
        $this->Tipo_tarea=new \AppData\Model\Tipo_tarea();
        $this->empleados=new \AppData\Model\Empleados();
        $this->habitaciones=new \AppData\Model\Habitaciones();
        $this->herramientas=new \AppData\Model\Equipo_seguridad();

    }
    public function index()
    {
        $datos1=$this->Tareas->getAll();
        $datos2=$this->Tipo_tarea->getAll();
        $datos3=$this->empleados->getAll();
        $datos4=$this->habitaciones->getAll();
        $datos5=$this->herramientas->getAll();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;
        $datos[4]=$datos5;

        return $datos;
    }
    public function crear(){
       // print_r($_POST);
        if(isset($_POST))
        {
            $herramientas=$_POST["eq"];
           for($i=0;$i<count($herramientas);$i++)
           {
               $id_herramineta=$herramientas[$i];
               echo $id_herramineta;
               $this->herramientas->update();

           }

            $this->Tareas->set('id_tipotarea',$_POST["tareas"]);
            $this->Tareas->set('id_empleado',$_POST["empleados"]);
            $this->Tareas->set('id_habitacion',$_POST["habitacion"]);
            $this->Tareas->set('fecha_inicio',$_POST["fecha_i"]);
            $this->Tareas->set('fecha_fin',$_POST["fecha_f"]);
            $this->Tareas->add();

            $datos1=$this->Tareas->getAll();
            $datos[0]=$datos1;
            //console.log("mensaje");
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
            $this->Tareas->set('id_tipotarea',$_POST["tareas"]);
            $this->Tareas->set('id_empleado',$_POST["empleados"]);
            $this->Tareas->set('id_habitacion',$_POST["habitacion"]);
            $this->Tareas->set('fecha_inicio',$_POST["fecha_i"]);
            $this->Tareas->set('fecha_fin',$_POST["fecha_f"]);
            $this->Tareas->update();
            $datos1=$this->Tareas->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function print_pdf()
    {
        $datos=$this->Tareas->getAll();
        return $datos;
    }

    public function graficar()
    {
        $datos=$this->Tareas->graficar();
        return $datos;

    }
}