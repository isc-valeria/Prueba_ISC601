<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */
namespace AppData\Model;
class animales
{
    private $tabla="animal";
    private  $nombre, $edad, $color, $raza, $sexo, $especie, $img;
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
        $sql="SELECT animal.id_animal, animal.nombre, animal.edad, animal.color, animal.img, razas.raza_des,
 					sexos.sexo_des, especies.especies_des
 					FROM animal,sexos,especies,razas 
 					WHERE animal.id_raza=razas.id_raza 
 					AND animal.id_sexo=sexos.id_sexo 
 					AND animal.id_especie=especies.id_especie
 					ORDER BY id_animal ASC";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;

    }
    
    function add()
    {
        $this->conexion->proc($this->nombre,$this->edad,$this->color,$this->id_raza,$this->id_sexo,$this->id_especie,$this->img);

    }
    function delete($id)
    {

        $sql="UPDATE animal SET estado=0 WHERE id_animal='{$id}'";
        $this->conexion->querysimple($sql);
    }
    function edit($id)
    {
        $sql="Select id_animal,nombre,edad,color,id_raza,id_sexo,id_especie from {$this->tabla} where id_animal='{$id}'";
        print_r($sql);
        $datos=$this->conexion->queryResultados($sql);
        return $datos;

    }
    function getOne($id)
    {
        $sql="SELECT * FROM animal where id_animal='{$id}'";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function getImg($id)
    {
        $sql="SELECT img FROM animal where id_animal='{$id}'";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function update(){
        $stm=$this->conexion->proc2($this->nombre,$this->edad,$this->color,$this->raza,$this->sexo,$this->especie,$this->img,$this->id_animal);
    }
    function grafica(){


    }
}