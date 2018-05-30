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
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Entradas";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(

    ){

    }
    function delete(){

    }

}