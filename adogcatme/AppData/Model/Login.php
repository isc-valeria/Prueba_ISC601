<?php
namespace AppData\Model;
class Login
{
    private $tabla="usuario";
    private $nombre, $pass,$user, $telefono;
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
    function getAll()
    {
        $sql="SELECT * from usuario";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
public function comprobar()
    {
        $sql="SELECT * FROM {$this->tabla} where nombre='{$this->nombre}' and pass='{$this->pass}'";
        $dato=$this->conexion->queryResultados($sql);
        return $dato;
    }
    public function recuperar()
    {
        $sql="SELECT pass FROM {$this->tabla} where nombre='{$this->nombre}' and user='{$this->user}' and telefono='{$this->telefono}'";
        $dato=$this->conexion->queryResultados($sql);
        return $dato;
    }

}