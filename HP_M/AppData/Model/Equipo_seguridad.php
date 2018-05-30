<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:05 PM
 */

namespace AppData\Model;


class Equipo_seguridad
{
    private $id_equiposegu;
    private $nombre_equisegu;
    private $id_tipoequisegu;

    function __construct()
    {
        $this->conexion= new conexion();
    }
    function add()
    {

    }
    function get()
    {
        $sql="select * from Equipo_seguridad";
        $datos= $this->conexion ->queryResultados($sql);
        return $datos;
    }
    function update()
    {

    }
    function delete()
    {

    }
}