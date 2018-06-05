<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:27 PM
 */

namespace AppData\Model;


class Registro_prendas
{
    private $tabla="Registro_prendas";
    private $id_registropren;
    private $fecha_entrega;
    private $fecha_recepcion;
    private $id_tipopren;
    private $id_estadop;

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
        $sql="insert into {$this->tabla} values('0','{$this->fecha_entrega}','{$this->fecha_recepcion},'{$this->id_tipopren},'{$this->id_estadop}'";

        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT Registro_prendas.id_registropren, Registro_prendas.fecha_entrega, Registro_prendas.fecha_recepcion, Tipos_prendas.id_tipopren, Estados_prendas.descripcion, Tipos_tela.descripcion_tela, Colores.descripcion_color, Tratamientos.descripcion_trata, Precios.descripcion_precio 
        FROM Registro_prendas,Tipos_prendas, estados_prendas, Tipos_tela, Colores, Tratamientos, Precios
        
        WHERE Registro_prendas.id_tipopren=Tipos_prendas.id_tipopren 
        AND Registro_prendas.id_estadop = Estados_prendas.id_estadop
        
        AND Registro_prendas.id_tipopren = Tipos_prendas.id_tipopren
        AND Tipos_prendas.id_tela = Tipos_tela.id_tela 
        
        AND Registro_prendas.id_tipopren = Tipos_prendas.id_tipopren
        AND Tipos_prendas.id_color = Colores.id_color 
        
        AND Registro_prendas.id_tipopren = Tipos_prendas.id_tipopren
        AND Tipos_prendas.id_tratamiento = Tratamientos.id_tratamiento
        
        AND Tratamientos.id_precio = Precios.id_precio 
        
        ORDER BY id_registropren ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_registropren='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_registropren='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update(){
        $sql="update Registro_prendas set fecha_entrega='{$this->fecha_entrega}',
               fecha_recepcion='{$this->fecha_recepcion}',
               id_tipopren='{$this->id_tipopren}',
               id_estadop='{$this->id_estadop}',
                  where id_registropren='{$this->id_registropren}'";
        $this->conexion->QuerySimple($sql);
    }


}