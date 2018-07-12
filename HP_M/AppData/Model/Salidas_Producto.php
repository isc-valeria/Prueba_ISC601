<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 09/05/2018
 * Time: 10:22 PM
 */

namespace AppData\Model;


class Salidas
{
    private $tabla="Salidas";
    private $id_salida;
    private $fecha_sal;
    private $cantidad_sal;
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
        $sql = "insert into {$this->tabla} values('0','{$this->fecha_sal}',
         '{$this->cantidad_sal}','{$this->id_producto}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql = "SELECT Salidas.id_salida, Salidas.fecha_sal, Salidas.cantidad_sal, productos.id_producto
        FROM Salidas,productos 
        WHERE Salidas.id_producto=productos.id_producto  ORDER BY id_salida ASC ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql = "delete from {$this->tabla} where id_salida='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql = "select * from  {$this->tabla} where id_salida='{$id}'";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update()
    {
        $sql = "update {$this->tabla} set fecha_sal='{$this->fecha_sal}',
               cantidad_sal='{$this->cantidad_sal}', id_producto='{$this->id_producto}'";
        $this->conexion->QuerySimple($sql);
    }

}