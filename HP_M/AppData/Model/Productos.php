<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 09/05/2018
 * Time: 09:50 PM
 */

namespace AppData\Model;


class Productos
{
    private $tabla="Productos";
    private $id_producto;
    private $nombre_pro;
    private $id_categoriapro;
    private $id_tipopro;
    private $existencias;
    private $stock_min;
    private $stock_max;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Productos";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}