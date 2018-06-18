<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 13/06/2018
 * Time: 12:43 PM
 */

namespace AppData\Controller;


class puestosController
{
    private $puestos;

    public function __construct()
    {

        $this->puestos=new \AppData\Model\Puestos();

    }

    public function index()
    {

        $datos1=$this->puestos->getAll();
        $datos[0]=$datos1;

        return $datos;
    }
    public function crear()
    {
        if($_POST)
        {
            $this->puestos->set('descripcion_puesto',$_POST["descripcion_puesto"]);
            $this->puestos->add();
            $datos1=$this->puestos->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->puestos->delete($id[0]);
        $datos1=$this->puestos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->puestos->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->puestos->set("id_tipoequisegu",$id[0]);
            $this->puestos->set('descripcion_tipo',$_POST["descripcion_tipo"]);
            $this->puestos->update();
            $datos1=$this->puestos->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
}