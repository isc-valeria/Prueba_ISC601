<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;


class categoriasController
{
    private $descripcion_cat;
    public function __construct()
    {
        $this->descripcion_cat=new \AppData\Model\Categorias_producto();
    }

    public function index()
    {
        $datos= $this->descripcion_cat->getAll();
        return $datos;
       // echo "Hola desde mi controlador";
    }
    public function crear()
    {
        if($_POST)
        {
            $this->descripcion_cat->set("descripcion_cat",$_POST['descripcion_categoria']);
            $this->descripcion_cat->add();
            header("Location:".URL."descripcion_categoria?msg=ok");
        }
    }
    public function hola()
    {

    }
}