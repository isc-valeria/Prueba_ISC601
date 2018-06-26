<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 12/06/2018
 * Time: 16:24
 */

namespace AppData\Model;


class Ventahab_kilo
{
    private $tabla="ventahab_kilo";
    private  $id_ventahabkilo;
    private  $id_habitacion;
    private  $id_clasificacionkilo;
    private  $id_ticket;
    private  $subtotal;

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
        $sql="insert into {$this->tabla} values('0','{$this->id_habitacion}','{$this->id_clasificacionkilo}','{$this->id_ticket}','{$this->subtotal}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT Ventahab_kilo.id_ventahabkilo, Habitaciones.num_habitacion, clasificacion_kilo.id_clasificacionkilo, Ticket.total, ventahab_kilo.subtotal
            FROM Ventahab_kilo, Habitaciones, clasificacion_kilo, Ticket
            WHERE Ventahab_kilo.id_habitacion = Habitaciones.id_habitacion
            AND ventahab_kilo.id_clasificacionkilo = clasificacion_kilo.id_clasificacionkilo
            AND Ventahab_kilo.id_ticket = Ticket.id_ticket ORDER BY id_ventahabkilo";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from ventahab_kilo where id_ventahabkilo='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  ventahab_kilo where id_ventahabkilo='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

        $sql="update {$this->tabla} set id_habitacion='{$this->id_habitacion}', id_clasificacionkilo='{$this->id_clasificacionkilo}',
               id_ticket='{$this->id_ticket}', subtotal='{$this->subtotal}' where id_ventahab_kilo='{$this->id_ventahabkilo}'";
        $this->conexion->QuerySimple($sql);
    }
}