<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 09/05/2018
 * Time: 09:48 PM
 */

namespace AppData\Model;


class Clientes
{
    private $tabla='clientes';
    private $id_cliente;
    private $nombre_cli;
    private $ap_cli;
    private $am_cli;
    private $telefono;
    private $email;

    private $conexion;

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

    function add(){
        $sql="insert into {$this->tabla} VALUES ('0','{$this->nombre_cli}','{$this->ap_cli}','{$this->am_cli}',{$this->telefono},'{$this->email}')";
        $this->conexion->QuerySimple($sql);
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_cliente='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="Select * from {$this->tabla}";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_cliente='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update {$this->tabla} set nombre_cli='{$this->nombre_cli}',
               ap_cli='{$this->ap_cli}', am_cli='{$this->am_cli}',
               telefono='{$this->telefono}', email='{$this->email}' where id_cliente='{$this->id_cliente}'";
        $this->conexion->QuerySimple($sql);
    }
    function verify(){
        $sql = "select * from {$this->tabla} where  telefono='{$this->telefono}' or email='{$this->email}'";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }
    function graficar()
    {
        $sql="SELECT clientes.nombre_cli,clientes.id_cliente,(select count(Asigna_reservaciones.id_asignares)
              from Asigna_reservaciones where Asigna_reservaciones.id_habitacion=Habitaciones.id_habitacion)as numero
             from habitaciones,clientes,reservaciones where clientes.id_cliente=reservaciones.id_cliente GROUP BY clientes.nombre_cli  ";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }
}