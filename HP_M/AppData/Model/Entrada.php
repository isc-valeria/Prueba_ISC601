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

        $sql="SELECT Entrada.id_entrada ,Entrada.fecha_entrada, empleados.codigo 
FROM Entrada,empleados WHERE Entrada.id_entrada=empleados.id_empleado  ";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_entrada='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }



}