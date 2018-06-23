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
        $this->asigna_eq=new \AppData\Model\Asigna_equiposegu();
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
        if(isset($_POST))
        {
            $idt=$this->Tareas->getid();
            $dato=$idt;
            $row=mysqli_fetch_array($dato);
            $id=$row[0];

            $this->Tareas->set('id_tipotarea',$_POST["tareas"]);
            $this->Tareas->set('id_empleado',$_POST["empleados"]);
            $this->Tareas->set('id_habitacion',$_POST["habitacion"]);
            $this->Tareas->set('fecha_inicio',$_POST["fecha_i"]);
            $this->Tareas->set('fecha_fin',$_POST["fecha_f"]);
            $this->Tareas->add();
            $herramientas=$_POST["eq"];
            for($i=0;$i<count($herramientas);$i++)
            {
                $id_herramineta=$herramientas[$i];
                $this->asigna_eq->set('id_equiposegu',$id_herramineta);
                $this->asigna_eq->set('id_tarea',     $id);
                $this->asigna_eq->add();
            }
            $datos1=$this->Tareas->getAll();
            $datos[0]=$datos1;

            return $datos;

        }
    }
    public function eliminar($id)
    {
        $this->Tareas->delete($id[0]);
        $this->asigna_eq->delete($id[0]);
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
            {
                $this->asigna_eq->delete($id[0]);
                $this->Tareas->set("id_tarea",$id[0]);
                $this->Tareas->set('id_tipotarea',$_POST["tareas"]);
                $this->Tareas->set('id_empleado',$_POST["empleados"]);
                $this->Tareas->set('id_habitacion',$_POST["habitacion"]);
                $this->Tareas->set('fecha_inicio',$_POST["fecha_i"]);
                $this->Tareas->set('fecha_fin',$_POST["fecha_f"]);
                $this->Tareas->update();
                $herramientas=$_POST["eq"];

                for($i=0;$i<count($herramientas);$i++)
                {
                    $id_herramineta=$herramientas[$i];
                    $this->asigna_eq->set("id_tarea",$id[0]);
                    $this->asigna_eq->set('id_equiposegu',$id_herramineta);
                    $this->asigna_eq->update();
                }
                $datos1=$this->Tareas->getAll();
                $datos[0]=$datos1;
                return $datos;

            }
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