<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 20/06/2018
 * Time: 03:57 PM
 */

namespace AppData\Controller;


class EntradaController
{
    private $Entrada;

    public function __construct()
    {

        $this->Entrada=new \AppData\Model\Entrada();

    }

    public function index()
    {

        $datos1=$this->Entrada->getAll();
        $datos[0]=$datos1;

        return $datos;
    }
    public function crear()
    {
        if($_POST)
        {
            $this->Entrada->set('id_empleado',$_POST["id_empleado"]);
            $this->Entrada->set('fecha_entrada',$_POST["fecha_entrada"]);
            $this->Entrada->add();
            $datos1=$this->Entrada->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }



}