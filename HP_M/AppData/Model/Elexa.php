<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 10/07/2018
 * Time: 01:40 PM
 */

namespace AppData\Model;


class Elexa
{
    public function getAll()
    {
        $datos=file_get_contents('https://api.datos.gob.mx/v1/condiciones-atmosfericas');
        $datos=json_decode($datos);
        return$datos;
    }
}