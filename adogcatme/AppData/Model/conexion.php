<?php

namespace AppData\Model;
class conexion
{

    private $datos=array("server"=>"localhost","user"=>"root","password"=>"", "base"=>"adogcatme");

    private $conexion;

    function __construct()
    {
        $this->conexion=new \mysqli($this->datos["server"],$this->datos["user"],
            $this->datos["password"],$this->datos["base"]);
        $this->conexion->set_charset("utf8");
    }

    public function querysimple($sql)
    {
        $this->conexion->query($sql) or die (mysqli_error($this->conexion));
    }
    public function queryResultados($sql)
    {
        $datos=$this->conexion->query($sql) or die (mysqli_error($this->conexion));
        return $datos;
    }

    public function proc($a,$b,$c,$d,$e,$f,$g)
    {
        $sql="insert into animal(nombre,edad,color,id_raza,id_sexo,id_especie,img) values(?,?,?,?,?,?,?)";
        $stm=$this->conexion->prepare($sql) or die (mysqli_error($this->conexion));
        $stm->bind_param('sssssss',$a,$b,$c,$d,$e,$f,$g);
        $stm->execute();

    }

    public function tiposadd($c,$d)
    {
        $sql = "insert into {$this->tabla} values('0','{$this->nombre}',
         '{$this->edad}','{$this->color}','{$this->id_raza}','{$this->id_sexo}','{$this->id_especie}','{$this->img}')";
        $this->conexion->querysimple($sql);

        }

    public function proc2($a,$b,$c,$d,$e,$f,$g,$h)
    {
        $sql="update animal set nombre=?, edad=?, color=?, id_raza=?, id_sexo=?, id_especie=?, img=? where id_animal=?";
        $stm=$this->conexion->prepare($sql) or die (mysqli_error($this->conexion));
        $stm->bind_param('ssssssss',$a,$b,$c,$d,$e,$f,$g,$h);
        $stm->execute();

    }

    public function tiposup($a,$b,$c,$d,$e,$f,$g,$h)
    {
        $sql="update animal set nombre=?, edad=?, color=?, id_raza=?, id_sexo=?, id_especie=?, img=? where id_animal=?";
        $stm=$this->conexion->prepare($sql) or die (mysqli_error($this->conexion));
        $stm->bind_param('ssssssss',$a,$b,$c,$d,$e,$f,$g,$h);
        $stm->execute();

    }

    public function __destruct()
    {
        $this->conexion->close();
    }
}

