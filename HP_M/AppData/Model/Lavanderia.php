<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 10:53 PM
 */

namespace AppData\Model;


class Lavanderia
{
    private $lavanderia;

    public function __construct()
    {
        $this->conexion= new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    public function getAll()
    {
        $sql="SELECT ropa.descripcion_ropa, tipos_tela.descripcion_tela, colores.descripcion_color, tratamientos.descripcion_trata, precios.descripcion_precio FROM ropa, tipos_prendas, tipos_tela, colores, tratamientos, precios WHERE ropa.id_ropa=tipos_prendas.id_ropa AND tipos_tela.id_tela=tipos_prendas.id_tela AND colores.id_color=tipos_prendas.id_color AND tratamientos.id_tratamiento=tipos_prendas.id_tratamiento AND tratamientos.id_precio=precios.id_precio ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

}