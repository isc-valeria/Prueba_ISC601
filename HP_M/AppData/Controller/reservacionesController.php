<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 03:54 PM
 */

namespace AppData\Controller;


class reservacionesController
{
    private $reservaciones;
    private $clientes;
    private $tipos_habitacion;
    private $habitaciones;



    public function __construct()
    {
        $this->reservaciones= new \AppData\Model\Reservaciones();
        $this->clientes= new \AppData\Model\Clientes();
        $this->tipos_habitacion= new \AppData\Model\Tipos_habitacion();
        $this->habitaciones= new \AppData\Model\Habitaciones();
    }

    public function index()
    {
        $datos1=$this->reservaciones->getAll();
        $datos2=$this->clientes->getAll();
        $datos3=$this->tipos_habitacion->getAll();
        $datos4=$this->habitaciones->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;
        return $datos;
    }
    public function crear(){
        if($_POST)
        {
            $this->habitaciones->set('num_habitacion',$_POST["numero_habitacion"]);
            $this->habitaciones->set('descripcion_hab',$_POST["descripcion"]);
            $this->habitaciones->set('id_tipoh',$_POST["id_tipoh"]);
            $this->habitaciones->set('id_estadoh',$_POST["nomestadohabitacion"]);
            $this->habitaciones->add();
            $datos1=$this->habitaciones->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }

    public function crearcli(){
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
        $this->habitaciones->delete($id[0]);
        $datos1=$this->habitaciones->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->habitaciones->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->habitaciones->set("id_habitacion",$id[0]);
            $this->habitaciones->set('num_habitacion',$_POST["numero_habitacion"]);
            $this->habitaciones->set('descripcion_hab',$_POST["descripcion"]);
            $this->habitaciones->set('id_tipoh',$_POST["id_tipoh"]);
            $this->habitaciones->set('id_estadoh',$_POST["nomestadohabitacion"]);
            $this->habitaciones->update();
            $datos1=$this->habitaciones->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
}