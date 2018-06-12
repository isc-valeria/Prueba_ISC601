<?php


    namespace AppData\Model;


class login
{
     private $tabla="clientes";
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


    function verify()
    {
        $sql = "SELECT * FROM {$this->tabla} WHERE email={$this->email} and pass={$this->pass}";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }
}