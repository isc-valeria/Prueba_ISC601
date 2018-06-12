<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 08/06/2018
 * Time: 07:28 AM
 */

namespace AppData\Model;


class tipo_usuario
{
    private $tipo_usuario;
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

    function getAll()
    {
        $sql="SELECT * FROM tipo_usuario";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
}