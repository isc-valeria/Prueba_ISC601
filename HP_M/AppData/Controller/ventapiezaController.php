<?php

namespace AppData\Controller;


class ventapiezaController
{
    private $venta_pieza;

    public function __construct()
    {
        $this->venta_pieza= new \AppData\Model\Ventahab_pieza();
    }

    public function index(){
        $datos6=$this->venta_pieza->getAll();
        $datos[5]=$datos6;
        return $datos;
    }

    public function crear(){
        if(isset($_POST))
        {
            //echo "asdasdadasdasd";
           $this->venta_pieza->set('num_habitacion', $_POST["num_habitacion"]);
           $this->venta_pieza->set('cantidad', $_POST["cantidad"]);
           $this->venta_pieza->set('total', $_POST["total"]);
           $this->venta_pieza->set('subtotal', $_POST["subtotal"]);
           $this->venta_pieza->add();
           $datos6=$this->venta_pieza->getAll();
           $datos[5]=$datos6;
           return $datos;
        }
    }


}