<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:25 PM
 */

namespace AppData\Model;


class Tipos_tela
{
    private $id_tela;
    private $descripcion_tela;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Tipos_tela";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}