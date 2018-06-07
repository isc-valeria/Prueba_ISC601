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
        $datos1=$this->productos->getAll();
        $datos2=$this->categorias_productos->getAll();
        $datos3=$this->tipo_producto->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        return $datos;
    }
    public function crear(){
        if($_POST)
        {
            $this->productos->set('nombre_pro',$_POST["nombre_producto"]);
            $this->productos->set('descripcion_cat',$_POST["descripcion_categoria"]);
            $this->productos->set('id_tipoh',$_POST["id_tipoh"]);
            $this->productos->set('id_estadoh',$_POST["nomestadohabitacion"]);
            $this->productos->add();
            $datos1=$this->productos->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }
    public function modificar($id)
    {
        $datos=$this->productos->getOne($id[0]);
        return $datos;
    }

    public function eliminar($id)
    {
        $this->productos->delete($id[0]);
        $datos=$this->productos->getAll();
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->habitaciones->set("id_producto",$id[0]);
            $this->habitaciones->set('nombre_pro',$_POST["nombre_producto"]);
            $this->habitaciones->set('id_categoriapro',$_POST["id_categoria"]);
            $this->habitaciones->set('id_tipopro',$_POST["id_tipopro"]);
            $this->habitaciones->set('existencia',$_POST["existencia"]);
            $this->habitaciones->set('stock_min',$_POST["stock_min"]);
            $this->habitaciones->set('stock_min',$_POST["stock_max"]);
            $this->habitaciones->update();
            $datos1=$this->habitaciones->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }

}