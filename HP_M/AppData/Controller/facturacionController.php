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
        $datos[0] = $this->facturacion->getAll();
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

}
    ?>


