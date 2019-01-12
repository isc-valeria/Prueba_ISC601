<?php

namespace AppData\Controller;


class salidasproductoController
{
    private $Salida;

    public function __construct()
    {

        //$this->Entrada=new \AppData\Model\Entradas();

        $this->Salida=new \AppData\Model\Salida_producto();
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
            $this->Salida->set('id_salida',$_POST["id_salida"]);
            $this->Salida->set('fecha_sal',$_POST["fecha_sal"]);
            $this->Salida->set('cantidad_sal',$_POST["cantidad_sal"]);
            $this->Salida->set('id_producto'),$_POST["id_producto"];
            $this->Salida->add();
            $datos1=$this->Salida->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }

}