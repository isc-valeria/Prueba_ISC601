<?php


namespace AppData\Model;


class Ordenes
{
    private $tabla="orden";
    private $id_orden;
    private $id_prenda;
    private $cantidad;
    private $id_color;
    private $id_estadoorden;
    private $subtotal;

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
        $sql="insert into {$this->tabla} values('0','{$this->id_prenda}',
         '{$this->cantidad}','{$this->id_color}','{$this->id_estadoorden}','{$this->subtotal}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT Ordenes.id_orden, Prendas.codigo_prenda, Ordenes.cantidad, Colores.descripcion_color, Estado_orden.estado_orden, Ordenes.subtotal 
        FROM Ordenes, Colores, Estado_orden  
        WHERE Ordenes.id_prenda = Prendas.id_prenda,
        AND Ordenes.id_color = Colores.id_color,
        AND Ordenes.id_estadoorden = Estado_orden.id_estadoorden ORDER BY id_orden ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_orden='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_orden='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update Ordenes set id_prenda='{$this->id_prenda}',
               cantidad='{$this->cantidad}', id_color='{$this->id_color}',
               id_estadoorden='{$this->id_estadoorden}', subtotal='{$this->subtotal}'
               where id_orden='{$this->id_orden}'";
        $this->conexion->QuerySimple($sql);
    }
}