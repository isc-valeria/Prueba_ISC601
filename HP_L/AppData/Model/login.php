<?php


    namespace AppData\Model;


class login
{
     private $tabla="usuarios";
     private $id_usuario, $email, $pass, $id_tipouser, $id_persona;

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

    function getAll()
    {
        $sql="SELECT * FROM usuarios";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function add()
    {
        $sql="INSERT INTO {$this->tabla} VALUES ('','{$this->email}','{$this->pass}','{$this->id_tipouser}','{$this->id_persona}')";
        $datos=$this->conexion->QuerySimple($sql);

    }



}