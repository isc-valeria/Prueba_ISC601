<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 31/05/2018
 * Time: 09:49 AM
 */

namespace AppData\Controller;


class clientesController
{
    private $clientes;

    public function __construct()
    {
        $this->clientes= new \AppData\Model\Clientes();
    }

    public function index()
    {
        $datos=$this->clientes->getAll();
        return $datos;
    }

    public function crear(){
        if($_POST)
        {
            $this->clientes->set('nombre_cli',$_POST["nombre_cli"]);
            $this->clientes->set('ap_cli',$_POST["ap_cli"]);
            $this->clientes->set('am_cli',$_POST["am_cli"]);
            $this->clientes->set('telefono',$_POST["telefono"]);
            $this->clientes->set('clave_cli',$_POST["clave_cli"]);
            $this->clientes->add();
            $datos=$this->clientes->getAll();
            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->clientes->delete($id[0]);
        $datos=$this->clientes->getAll();
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->clientes->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->clientes->set("id_cliente",$id[0]);
            $this->clientes->set('nombre_cli',$_POST["nombre_cli"]);
            $this->clientes->set('ap_cli',$_POST["ap_cli"]);
            $this->clientes->set('am_cli',$_POST["am_cli"]);
            $this->clientes->set('telefono',$_POST["telefono"]);
            $this->clientes->set('clave_cli',$_POST["clave_cli"]);
            $this->clientes->update();
            $datos=$this->clientes->getAll();
            return $datos;
        }
    }
}