<?php
/**
 * Created by PhpStorm.
 * Date: 09/05/2018
 * Time: 10:17 PM
 */

namespace AppData\Model;


class Tipos_producto
{
    private $tabla="Tipos_producto";
    private $id_tipopro,$descripcion_cat;

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
        $sql="insert into {$this->tabla} values('0','{$this->descripcion_pro}')";
        $this->conexion->QuerySimple($sql);
    }
    function getAll(){
        $sql="select * from tipos_producto";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update {$this->tabla} set descripcion_pro='{$this->descripcion_pro}'where id_tipopro='{$this->id_tipopro}'";
        $this->conexion->QuerySimple($sql);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_tipopro='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_tipopro='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
}

