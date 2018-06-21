<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 19/06/2018
 * Time: 05:33 PM
 */

namespace AppData\Model;


class Settings
{
    public function __construct()
    {
        $this->conexion= new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
}