<?php

namespace AppData\Controller;


class ventakiloController
{
    private $venta_kilo;

    public function __construct()
    {
        $this->venta_kilo= new \AppData\Model\Ventahab_kilo();
    }

    public function index(){
        $datos5=$this->venta_kilo->getAll();
        $datos[4]=$datos5;
        return $datos;
    }

    public function crear(){
        if(isset($_POST))
        {
            //echo "asdasdadasdasd";
           $this->venta_kilo->set('num_habitacion', $_POST["num_habitacion"]);
           $this->venta_kilo->set('cantidadkg', $_POST["cantidadkg"]);
           $this->venta_kilo->set('total', $_POST["total"]);
           $this->venta_kilo->set('subtotal', $_POST["subtotal"]);
           $this->venta_kilo->add();
           $datos5=$this->venta_kilo->getAll();
           $datos[4]=$datos5;
           return $datos;
        }
    }


}