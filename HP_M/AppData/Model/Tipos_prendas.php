<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:27 PM
 */

namespace AppData\Model;


class Tipos_prendas
{
    private $tabla="Tipos_prendas";
    private $id_tipopren,$id_tela,$id_tratamiento,$id_color,$id_ropa,$cantidad;

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

    function add()
    {
        $sql="insert into {$this->tabla} values('0','{$this->id_tela}','{$this->id_tratamiento}','{$this->id_color}','{$this->id_ropa}','{$this->cantidad}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT Tipos_prendas.id_tipopren, Tipos_tela.id_tela, Tratamientos.id_tratatamiento, Colores.id_color, Ropa.id_ropa, Tipos_prendas.cantidad 
        FROM Tipos_prendas,Tipos_tela,Tratamientos,Colores, Ropa
        WHERE Tipos_prendas.id_tela=Tipos_tela.id_tela AND Tipos_prendas.id_tratamiento=tratamientos.id_tratamiento AND
        Tipos_prendas.id_color=Colores.id_color AND Tipos_prendas.id_ropa=Ropa.id_ropa  ORDER BY id_tipopren ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_tipopren='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_tipopren='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update(){
        $sql="update Tipos_prendas set id_tela='{$this->id_tela}',
               id_tratamiento='{$this->id_tratamiento}', id_color='{$this->id_color}',
               id_ropa='{$this->id_ropa}', cantidad='{$this->cantidad}'  where id_tipopren='{$this->id_tipopren}'";
        $this->conexion->QuerySimple($sql);
    }
}