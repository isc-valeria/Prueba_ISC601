<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 09/05/2018
 * Time: 10:17 PM
 */

namespace AppData\Model;


class Categorias_producto
{
    private $tabla="Categorias_producto";
    private $id_categoriapro,$descripcion_cat;

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
        $sql="insert into {$this->tabla} values('0','{$this->descripcion_cat}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll(){
        $sql="select * from categorias_producto";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update {$this->tabla} set descripcion_cat='{$this->descripcion_cat}'where id_categoriapro='{$this->id_categoriapro}'";
        $this->conexion->QuerySimple($sql);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_categoriapro='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_categoriapro='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
}