<?php

namespace AppData\Controller;

class facturacionController
{
    private $facturacion;

    public function __construct()
    {
        $this->facturacion = new \AppData\Model\Facturacion();

    }

    public function index()
    {
        $datos1=$this->facturacion->getAll();
        $datos2=$this->facturacion->consultahabitacion();
        $datos[0]=$datos1;
        $datos[2]=$datos2;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->facturacion->getOne($id[0]);
        return $datos;

    }
    public function eliminar($id)
    {
        $this->facturacion->delete($id[0]);
        $datos[0]=$this->facturacion->getAll();
        return $datos;
    }
    public function consultahabitaciones()
    {

        $datos[2]=$this->facturacion->consultahabitacion();
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->facturacion->set("id_factura",$id[0]);
            $this->facturacion->set('id_asignares',$_POST["id_asignares"]);
            $this->facturacion->set('total',$_POST["total"]);
            $this->facturacion->update();
            $datos[0]=$this->facturacion->getAll();
            return $datos;
        }
    }
    public function print_pdf()
    {
        $datos=$this->facturacion->getAll();
        return $datos;
    }

}
    ?>


