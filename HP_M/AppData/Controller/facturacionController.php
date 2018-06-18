<?php
/**
 * Created by PhpStorm.
 * User: VALERIA
 * Date: 13/06/2018
 * Time: 04:55 PM
 */

namespace AppData\Controller;


class facturacionController
{
    private $facturacion;

    public function __construct()
    {
        $this->facturacion=new \AppData\Model\Facturacion();
    }
    public function index()
    {
        $datos[0]=$this->facturacion->getAll();
        return $datos;
    }
    public function crear()
    {
        if ($_POST) {
            $this->facturacion->set('id_factura', $_POST["id_factura"]);
            $this->facturacion->set('id_asignares', $_POST["id_asignares"]);
            $this->facturacion->set('total', $_POST["total"]);
            $datos[1] = false;
            if (mysqli_num_rows($this->facturacion->verify()) == 0) {
                $this->facturacion->add();
                $datos[1] = true;
            }
            $datos[0] = $this->facturacion->getAll();
            return $datos;
        }
    }
    public function eliminar($id)
    {
        $this->facturacion->delete($id[0]);
        $datos[0]=$this->facturacion->getAll();
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->facturacion->getOne($id[0]);
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
}