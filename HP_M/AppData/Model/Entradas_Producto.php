<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 09/05/2018
 * Time: 10:20 PM
 */

namespace AppData\Model;


class Entradas
{
    private $tabla="Entradas";
    private $id_entrada;
    private $fecha_ent;
    private $cantidad_ent;
    private $id_producto;

    function __construct()
    {
        $this->conexion = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {
        $sql = "insert into {$this->tabla} values('0','{$this->fecha_ent}',
         '{$this->cantidad_ent}','{$this->id_producto}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql = "SELECT Entradas.id_entrada, Entradas.fecha_ent, Entradas.cantidad_ent, productos.id_producto
        FROM Entradas,productos 
        WHERE Entradas.id_producto=productos.id_producto  ORDER BY id_entrada ASC ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql = "delete from {$this->tabla} where id_entrada='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql = "select * from  {$this->tabla} where id_entrada='{$id}'";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update()
    {
        $sql = "update {$this->tabla} set fecha_ent='{$this->fecha_ent}',
               cantidad_ent='{$this->cantidad_ent}', id_producto='{$this->id_producto}'";
        $this->conexion->QuerySimple($sql);
    }

}