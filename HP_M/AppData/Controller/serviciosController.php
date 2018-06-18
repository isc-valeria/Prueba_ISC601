<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 05:30 PM
 */

namespace AppData\Controller;


class serviciosController
{
    private $servicios;
    public function __construct()
    {
        $this->servicios= new \AppData\Model\Servicios();
    }

    public function index()
    {
        $datos[0]=$this->servicios->getAll();
        return $datos;
    }

    public function crear(){
        if(isset($_POST))
        {
            $this->servicios->set('descripcion_ser',$_POST["descripcion_ser"]);
            $this->servicios->set('hora_inicio',$_POST["hora_inicio"]);
            $this->servicios->set('hora_fin',$_POST["hora_fin"]);

            //$datos[1]=false;

            $this->servicios->add();
            $datos[0]=$this->servicios->getAll();
            return $datos;
        }
    }

    public function eliminar($id)
    {
        $this->servicios->delete($id[0]);
        $datos[0]=$this->servicios->getAll();
        return $datos;
    }

    public function modificar($id)
    {
        $datos=$this->servicios->getOne($id[0]);
        return $datos;
    }

    public function actualizar($id)
    {
        if($_POST)
        {
            $this->servicios->set("id_servicio",$id[0]);
            $this->servicios->set("descripcion_ser",$_POST["descripcion_ser"]);
            $this->servicios->set("hora_inicio",$_POST["hora_inicio"]);
            $this->servicios->set("hora_fin",$_POST["hora_fin"]);
            $this->servicios->update();
            $datos[0]=$this->servicios->getAll();
            return $datos;
        }
    }

    public function print_pdf()
    {
        $datos=$this->servicios->getAll();
        return $datos;
    }
}