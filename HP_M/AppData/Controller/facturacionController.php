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

}
    ?>