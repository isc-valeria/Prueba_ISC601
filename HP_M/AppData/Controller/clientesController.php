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
        $datos[0]=$this->clientes->getAll();
        return $datos;
    }

    public function crear(){
        if($_POST)
        {
            $this->clientes->set('nombre_cli',$_POST["nombre_cli"]);
            $this->clientes->set('ap_cli',$_POST["ap_cli"]);
            $this->clientes->set('am_cli',$_POST["am_cli"]);
            $this->clientes->set('telefono',$_POST["telefono"]);
            $this->clientes->set('email',$_POST["email"]);

            $datos[1]=false;

            if(mysqli_num_rows($this->clientes->verify())==0) {

                $this->clientes->add();
                $datos[1]=true;

            }

            $datos[0]=$this->clientes->getAll();
            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->clientes->delete($id[0]);
        $datos[0]=$this->clientes->getAll();
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
            $this->clientes->set('email',$_POST["email"]);
            $this->clientes->update();
            $datos[0]=$this->clientes->getAll();
            return $datos;
        }
    }
    public function print_pdf()
    {
        $datos=$this->clientes->getAll();
        return $datos;
    }


}