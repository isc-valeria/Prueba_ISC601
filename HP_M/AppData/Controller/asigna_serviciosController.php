<?php
/**
 * Created by PhpStorm.
 * User: Sullivan
 * Date: 17/06/2018
 * Time: 02:28 PM
 */


namespace AppData\Controller;


class asigna_serviciosController
{
    private $asigna_servicios,$habitaciones,$servicios,$estado_habitacion,$tipos_habitacion;

    public function __construct()
    {
        $this->asigna_servicios= new \AppData\Model\Asigna_servicios();
        $this->habitaciones=new \AppData\Model\Habitaciones();
        $this->servicios=new \AppData\Model\Servicios();
        $this->estado_habitacion=new \AppData\Model\EstadoHabitaciones();
        $this->tipos_habitacion=new \AppData\Model\Tipos_habitacion();
    }

    public function index()
    {

        $datos1=$this->asigna_servicios->getAll();
        $datos2=$this->habitaciones->getAll();
        $datos3=$this->servicios->getAll();
        $datos4=$this->estado_habitacion->getAll();
        $datos5=$this->tipos_habitacion->getAll();

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
            $this->asigna_servicios->set('num_habitacion',$_POST["num_habitacion"]);
            $this->asigna_servicios->set('descripcion_ser',$_POST["descripcion_ser"]);
            $this->asigna_servicios->set('descripcion_est',$_POST["descripcion_est"]);
            $this->asigna_servicios->set('fecha_reg',$_POST["fecha_reg"]);
            
            $this->asigna_servicios->add();
            $datos[0]=$this->asigna_servicios->getAll();
            return $datos;
        }
    }
    public function eliminar($id)
    {
        $this->asigna_servicios->delete($id[0]);
        $datos1=$this->asigna_servicios->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->asigna_servicios->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->asigna_servicios->set("id_asignaser",$id[0]);
            $this->asigna_servicios->set('num_habitacion',$_POST["num_habitacion"]);
            $this->asigna_servicios->set('descripcion_ser',$_POST["descripcion_ser"]);
            $this->asigna_servicios->set('descripcion_est',$_POST["descripcion_est"]);
            $this->asigna_servicios->set('fecha_reg',$_POST["fecha_reg"]);
            $this->asigna_servicios->update();

            $datos1=$this->asigna_servicios->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function print_pdf()
    {
        $datos=$this->asigna_servicios->getAll();
        return $datos;
    }
}
