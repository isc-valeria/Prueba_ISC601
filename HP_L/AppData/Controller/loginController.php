<?php

namespace AppData\Controller;


class loginController
{
    private $login, $tipo_usuario;

    public function __construct()
    {
        $this->login= new \AppData\Model\login();
        $this->tipo_usuario= new \AppData\Model\tipo_usuario();

    }
    public function index()
    {
        $datos1=$this->login->getAll();
        $datos2=$this->tipo_usuario->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        return $datos;
    }
    public function crear(){
        if($_POST)
        {
            $this->login->set('email',$_POST["email"]);
            $this->login->set('pass',$_POST["pass"]);
            $this->login->set('tipo_user',$_POST["tipo_user"]);
            $this->login->set('id_persona',$_POST["id_persona"]);
            $datos1=$this->login->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }

    public function eliminar($id)
    {
        $this->login->delete($id[0]);
        $datos1=$this->login->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->login->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->login->set("id_habitacion",$id[0]);
            $this->login->set('num_habitacion',$_POST["numero_habitacion"]);
            $this->login->set('descripcion_hab',$_POST["descripcion"]);
            $this->login->set('id_tipoh',$_POST["id_tipoh"]);
            $this->login->set('id_estadoh',$_POST["nomestadohabitacion"]);
            $this->login->update();
            $datos1=$this->login->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }

}