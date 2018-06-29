<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 26/06/2018
 * Time: 09:03 AM
 */

namespace AppData\Model;


class Usuarios
{
    private  $tabla="usuarios";
    private $id_usuario;
    private $email;
    private $pass;
    private $id_empleado;


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

        $sql="insert into {$this->tabla} values('0','{$this->email}','{$this->pass}','{$this->id_empleado}')";
        $this->conexion->QuerySimple($sql);

    }
    function getAll(){
        $sql="select *from {$this->tabla}";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update usuarios set email='{$this->email}',pass='{$this->pass}',
                id_empleado='{$this->id_empleado}'
                where id_usuario='{$this->id_usuario}'";
        $this->conexion->QuerySimple($sql);

    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_usuario='{$id}'";
        $this->conexion->QuerySimple($sql);

    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_usuario='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

}