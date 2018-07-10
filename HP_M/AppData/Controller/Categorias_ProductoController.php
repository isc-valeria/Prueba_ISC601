<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;

class categorias_ProductoController
{
    private $categorias;
    public function __construct()
    {
        $this->categorias=new \AppData\Model\Categorias_producto();
}

    public function index()
    {
        $datos1= $this->categorias->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function crear()
    {
        print_r($_POST);
        if($_POST)
        {

            $this->categorias->set("descripcion_cat",$_POST['descripcion_cat']);
            $this->categorias->add();
            $datos1=$this->categorias->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function eliminar($id)
    {
        $this->categorias->delete($id[0]);
        $datos1=$this->categorias->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->categorias->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->categorias->set("id_categoriapro",$id[0]);
            $this->categorias->set('descripcion_cat',$_POST["descripcion_cat"]);
            $this->categorias->update();
            $datos1=$this->categorias->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }

    public function print_pdf()
    {
        $datos=$this->categorias->getAll();
        return $datos;
    }

}