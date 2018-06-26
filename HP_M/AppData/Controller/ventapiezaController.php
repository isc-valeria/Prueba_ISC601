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
        $datos["venta_pieza"]=$datos6;
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
           $datos["venta_pieza"]=$datos6;
           return $datos;
        }
    }
     public function eliminar($id)
    {
        $this->venta_pieza->delete($id[0]);
        $datos6=$this->venta_pieza->getAll();
        $datos["venta_pieza"]=$datos6;
        return $datos;
    }

    public function modificar($id)
    {
        $datos6=$this->venta_pieza->getOne($id[0]);
        return $datos6;
    }

    public function actualizar($id)
    {
        if ($_POST) {
           $this->venta_pieza->set('num_habitacion', $_POST["num_habitacion"]);
           $this->venta_pieza->set('cantidad', $_POST["cantidad"]);
           $this->venta_pieza->set('total', $_POST["total"]);
           $this->venta_pieza->set('subtotal', $_POST["subtotal"]);

            $this->venta_pieza->update();
            $datos6 = $this->venta_pieza->getAll();
            $datos["venta_pieza"] = $datos6;
            return $datos;
        }
    }


}
