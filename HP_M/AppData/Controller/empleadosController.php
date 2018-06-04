<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 11:14 PM
 */

namespace AppData\Controller;


class empleadosController
{
    private $empleados;

    public function __construct()
    {
        $this->empleados= new \AppData\Model\Empleados();
        $this->Puestos= new \AppData\Model\Empleados();
    }

    public function index()
    {
        $datos1=$this->empleados->getAll();
        $datos2=$this->Puestos->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;

        return $datos;
    }
    public function crear(){
        if($_POST)
        {
            $this->empleados->set('nombre_emp',$_POST["nombre_emp"]);
            $this->empleados->set('ap_emp',$_POST["ap_emp"]);
            $this->empleados->set('am_emp',$_POST["am_emp"]);
            $this->empleados->set('descripcion_puesto',$_POST["descripcion_puesto"]);
            $this->empleados->add();
            $datos1=$this->empleados->getAll();
            $datos[0]=$datos1;
            return $datos;


        }

    }

    public function eliminar($id)
    {
        $this->empleados->delete($id[0]);
        $datos1=$this->empleados->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->empleados->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->empleados->set("id_empleado",$id[0]);
            $this->empleados->set('nombre_emp',$_POST["nombre_emp"]);
            $this->empleados->set('ap_emp',$_POST["ap_emp"]);
            $this->empleados->set('am_emp',$_POST["am_emp"]);
            $this->empleados->set('descripcion_puesto',$_POST["descripcion_puesto"]);
            $this->empleados->update();
            $datos1=$this->empleados->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
}