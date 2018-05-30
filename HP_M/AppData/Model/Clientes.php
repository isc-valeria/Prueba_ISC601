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

    private $id_cliente;
    private $nombre_cliente;
    private $ap_cli;
    private $am_cli;
    private $telefono;
    private $clave_cli;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        $sql="insert into Clientes VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function get(){
        $sql="select*from Clientes";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update Clientes set nombre_cliente='variable' where id_cliente='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function delete(){
        $sql="delete from Clientes WHERE id_cliente='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
}