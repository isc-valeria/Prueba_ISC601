<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 05:45 PM
 */

namespace AppData\Controller;


class productosController
{
    private $productos;
    private $categorias_productos;
    private $tipo_producto;

    public function __construct()
    {
        $this->productos= new \AppData\Model\Productos();
        $this->categorias_productos=new \AppData\Model\Categorias_producto();
        $this->tipo_producto= new \AppData\Model\Tipos_producto();
    }

    public function index()
    {
        $datos=$this->productos->getAll();
        return $datos;
    }

}