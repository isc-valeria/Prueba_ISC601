<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 12/06/2018
 * Time: 16:23
 */

namespace AppData\Model;


class Ticket
{
    private $tabla="Ticket";
    private $id_ticket;
    private $fecha_entrada;
    private $fecha_salida;
    private $total;


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
        $sql="insert into {$this->tabla} values('0','{$this->fecha_entrada}','{$this->fecha_salida},'{$this->total})'";

        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select * from {$this->tabla} order by id_observacion ASC  ";
        $datos= $this->conexion ->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="DELETE FROM {$this->tabla} WHERE id_ticket='{$id}'";
        $this->conexion ->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="SELECT * FROM {$this->tabla} where id_ticket='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update()
    {
        $sql="UPDATE {$this->tabla} SET fecha_entrada='{$this->fecha_entrada}', fecha_salida='{$this->fecha_salida}', total='{$this->total}'";
        $this->conexion->QuerySimple($sql);

    }

}