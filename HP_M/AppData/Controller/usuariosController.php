<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 26/06/2018
 * Time: 09:13 AM
 */

namespace AppData\Controller;


class usuariosController
{
    private $Usuarios;

    public function __construct()
    {
        $this->Usuarios= new \AppData\Model\Usuarios();
    }

    public function index()
    {
        $datos[0]=$this->Usuarios->getAll();
        return $datos;
    }

    public function crear(){
        if($_POST)
        {
            $this->Usuarios->set('email',$_POST["email"]);
            $this->Usuarios->set('pass',$_POST["pass"]);
            $this->Usuarios->set('id_empleado',$_POST["id_empleado"]);

            $this->Usuarios->add();
            $datos1=$this->Usuarios->getAll();
            $datos[0]=$datos1;

            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->Usuarios->delete($id[0]);
        $datos1=$this->Usuarios->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->Usuarios->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->Usuarios->set("id_usuario",$id[0]);
            $this->Usuarios->set('email',$_POST["email"]);
            $this->Usuarios->set('pass',$_POST["pass"]);
            $this->Usuarios->set('id_empleado',$_POST["id_empleado"]);
            $this->Usuarios->update();
            $datos[0]=$this->Usuarios->getAll();
            return $datos;
        }
    }

}