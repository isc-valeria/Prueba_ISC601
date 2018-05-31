<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;


class tipos_productoController
{
    private $descripcion_pro;
    public function __construct()
    {
        $this->descripcion_pro=new \AppData\Model\Tipos_producto();
    }

    public function index()
    {
        $datos= $this->descripcion_pro->getAll();
        return $datos;
       // echo "Hola desde mi controlador";
    }
    public function crear()
    {
        if($_POST)
        {
            $this->descripcion_pro->set("descripcion_pro",$_POST['descripcion_producto']);
            $this->descripcion_pro->add();
            header("Location:".URL."descripcion_producto?msg=ok");
        }
    }

}