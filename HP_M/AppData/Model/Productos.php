<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 09/05/2018
 * Time: 09:50 PM
 */

namespace AppData\Model;


class Productos
{
    private $tabla="Productos";
    private $id_producto;
    private $nombre_pro;
    private $id_categoriapro;
    private $id_tipopro;
    private $existencias;
    private $stock_min;
    private $stock_max;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
    function add()
    {
        $sql="insert into {$this->tabla} values('0','{$this->nombre_pro}','{$this->id_categoriapro}',
          '{$this->id_tipopro}', '{$this->existencias}', '{$this->stock_min}', '{$this->stock_max}')";
        $this->conexion->QuerySimple($sql);
    }
    function getAll(){
        $sql="SELECT productos.id_producto, productos.nombre_pro, categorias_producto.descripcion_cat, 
        tipos_producto.descripcion_pro, productos.existencias, productos.stock_min, productos.stock_max FROM 
        productos, categorias_producto, tipos_producto WHERE productos.id_categoriapro=categorias_producto.id_categoriapro AND 
        tipos_producto.id_tipopro=productos.id_tipopro ORDER BY `productos`.`id_producto` ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update productos set nombre_pro='{$this->nombre_pro}',
               id_categoriapro='{$this->id_categoriapro}', id_tipopro='{$this->id_tipopro}',
               existencias='{$this->existencias}',stock_min='{$this->stock_min}',
               stock_max='{$this->stock_max}'where id_producto='{$this->id_producto}'";
        $this->conexion->QuerySimple($sql);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_producto='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_producto='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
}