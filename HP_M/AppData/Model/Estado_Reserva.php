<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 09/05/2018
 * Time: 10:57 PM
 */

namespace AppData\Model;


class Estado_Reserva
{
    private $id_estador;
    private $estador;


    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Estado_reserva";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}