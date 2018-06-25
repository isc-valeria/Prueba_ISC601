<?php


namespace AppData\Model;


class Entrada
{
    private  $tabla="Entrada";
    private $id_empleado;
    private $fecha_entrada;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {

        $sql="insert into {$this->tabla} values('0',{$this->id_empleado},'{$this->fecha_entrada}')";
        $this->conexion->QuerySimple($sql);

    }
    function getAll(){

        $sql="SELECT *from entrada ";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }




}