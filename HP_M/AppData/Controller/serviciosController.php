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

    public function crear()
    {
        $this->servicios->set('descripcion_ser',$_POST["descripcion"]);
        $this->servicios->set('hora_inicio',$_POST["horaini"]);
        $this->servicios->set('hora_fin',$_POST["horafin"]);
        $this->servicios->add();
        $datos=$this->servicios->getAll();
        return $datos;
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
            $this->servicios->set("id_habitacion",$id[0]);
            $this->servicios->set('num_habitacion',$_POST["numero_habitacion"]);
            $this->servicios->set('descripcion_hab',$_POST["descripcion"]);
            $this->servicios->set('id_tipoh',$_POST["id_tipoh"]);
            $this->servicios->update();
            $datos=$this->servicios->getAll();
            return $datos;
        }
    }
}