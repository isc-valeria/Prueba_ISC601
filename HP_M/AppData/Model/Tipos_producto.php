<?php
/**
 * Created by PhpStorm.
 * User: adriana gonzalez
 * Date: 09/05/2018
 * Time: 09:52 PM
 */

namespace AppData\Model;


class Tipos_producto
{
    private $tabla="Tipos_producto";
    private $id_tipopro,$descripcion_pro;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }
    public function get($atributo,$valor)
    {
        $this->$atributo=$valor;
    }
    public function set($atributo)
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
        $sql="update tipos_producto set descripcion_pro='{$this->descripcion_pro}')";
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