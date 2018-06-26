<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 11:14 PM
 */

namespace AppData\Controller;


class SalidaController
{
    private $Salida;

    public function __construct()
    {

        $this->Salida=new \AppData\Model\Salida();

    }

    public function index()
    {

        $datos1=$this->Salida->getAll();
        $datos[0]=$datos1;

        return $datos;
    }
    public function crear()
    {
        if($_POST)
        {
            $this->Salida->set('id_empleado',$_POST["id_empleado"]);
            $this->Salida->set('fecha_salida',$_POST["fecha_salida"]);
            $this->Salida->add();
            $datos1=$this->Salida->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }
    public function print_pdf1()
    {

        $datos=$this->Salida->getAll();

        return $datos;
    }


}