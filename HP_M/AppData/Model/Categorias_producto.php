<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 09/05/2018
 * Time: 10:17 PM
 */

namespace AppData\Model;


class Categorias_producto
{
    private $tabla="Categorias_producto";
    private $id_categoriapro;
    private $descripcion_cat;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Categorias_producto";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}