<?php

namespace AppData\Model;

class Puestos
{

    private  $tabla="puestos";
    private $id_puesto;
    private $descripcion_puesto;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {

        $sql="insert into {$this->tabla} values('0','{$this->descripcion_puesto}')";
        $this->conexion->QuerySimple($sql);

    }
    function getAll(){
        $sql="select *from {$this->tabla}";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update puestos set descripcion_puesto='{$this->descripcion_puesto}'
                where id_puesto='{$this->id_puesto}'";
        $this->conexion->QuerySimple($sql);

    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_puesto='{$id}'";
        $this->conexion->QuerySimple($sql);

    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_puesto='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

}