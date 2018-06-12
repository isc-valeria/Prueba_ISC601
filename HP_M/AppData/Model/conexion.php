<?php

namespace AppData\Model;


class conexion
{

<<<<<<< HEAD
    private $datos=array("server"=>"localhost","user"=>"root", "password"=>"123456", "db"=>"hotel");
=======

    private $datos=array("server"=>"localhost","user"=>"root", "password"=>"", "db"=>"hotel");

>>>>>>> 8403e78c041f34411f8c7793817aaf91fea14daf

    private $conexion;

    function __construct()
    {
        $this->conexion=new \mysqli($this->datos["server"],$this->datos["user"], $this->datos["password"],$this->datos["db"]);
        $this->conexion->set_charset("utf8");
    }

    public function QuerySimple($sql)
    {
        $this->conexion->query($sql) or die (mysqli_error($this->conexion));
    }
    public function QueryResultado($sql)
    {
        $datos=$this->conexion->query($sql) or die (mysqli_error($this->conexion));
        return $datos;
    }

    public function __destruct()
    {
        $this->conexion->close();
    }
}