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
    private $tabla="Equipo_seguridad";
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
    function getAll()
    {
        $sql="select * from {$this->tabla}";
        $datos= $this->conexion ->queryResultado($sql);
        return $datos;
    }
    function update()
    {

    }
    function delete()
    {

    }
}