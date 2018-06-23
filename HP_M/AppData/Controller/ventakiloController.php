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
           $datos["venta_kilo"]=$datos5;
           return $datos;
        }
    }

    public function eliminar($id)
    {
        $this->venta_kilo->delete($id[0]);
        $datos3=$this->venta_kilo->getAll();
        $datos["venta_kilo"]=$datos3;
        return $datos;
    }

    public function modificar($id)
    {
        $datos3=$this->clasi_kilo->getOne($id[0]);
        return $datos3;
    }

    public function actualizar($id)
    {
        if ($_POST) {

            $this->venta_kilo->set("id_ventahabkilo", $id[0]);
            $this->venta_kilo>set('cantidadkg', $_POST["cantidadkg"]);
            $this->venta_kilo->set('id_ticket', $_POST["total"]);
            $this->venta_kilo->set('subtotal', $_POST["subtotal"]);

            $this->venta_kilo>update();
            $datos3 = $this->venta_kilo->getAll();
            $datos["venta_kilo"] = $datos3;
            return $datos;
        }
    }


}