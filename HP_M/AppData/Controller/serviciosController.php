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
        $datos=$this->servicios->getAll();
        return $datos;
    }

    public function crear(){
        if(isset($_POST))
        {
            $this->servicios->set('id_servicio',$_POST["id_servicio"]);
            $this->servicios->set('descripcion_ser',$_POST["descripcion_ser"]);
            $this->servicios->set('hora_inicio',$_POST["hora_inicio"]);
            $this->servicios->set('hora_fin',$_POST["hora_fin"]);
            $this->servicios->add();
            $datos=$this->servicios->getAll();
            return $datos;
        }
    }

    public function eliminar($id)
    {
        $this->servicios->delete($id[0]);
        $datos=$this->servicios->getAll();
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
            $datos=$this->servicios->getAll();
            return $datos;
        }
    }
}