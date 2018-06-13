<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 12/06/2018
 * Time: 16:24
 */

namespace AppData\Model;


class Ventahab_pieza
{
    private  $id_ventahabpieza;
    private  $id_habitacion;
    private  $id_clasificacionpieza;
    private  $id_ticket;
    private  $subtotal;


    private $tabla="Ventahab_pieza";


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
        $sql="insert into {$this->tabla} values('0','{$this->id_habitacion}','{$this->id_clasificacionpieza}','{$this->id_ticket}','{$this->subtotal}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select id_ventahabpieza,habitaciones.num_habitacion, clasificacion_pieza.id_clasificacionpieza,ticket.id_ticket,subtotal
              from ventahab_pieza, habitaciones,clasificacion_pieza,ticket 
              WHERE ventahab_pieza.id_habitacion=habitaciones.id_habitacion 
              and ventahab_pieza.id_clasificacionpieza=clasificacion_pieza.id_clasificacionpieza
              and ventahab_pieza.id_ticket=ticket.id_ticket";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from ventahab_pieza where id_ventahabpieza='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  ventahab_pieza where id_ventahabpieza='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

        $sql="update {$this->tabla} set id_habitacion='{$this->id_habitacion}', id_clasificacionpieza='{$this->id_clasificacionpieza}',
               id_ticket='{$this->id_ticket}', subtotal='{$this->subtotal}'";
        $this->conexion->QuerySimple($sql);
    }
}