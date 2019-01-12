<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;


class especiesController
{
    private $especies;
    public function __construct()
    {
        $this->especies=new \AppData\Model\especies();
    }

    public function index()
    {
        $datos= $this->especies->getAll();
        return $datos;
       // echo "Hola desde mi controlador";
    }
    public function crear()
    {
        if($_POST)
        {
            $this->especies->set("especies_des",$_POST['especies_des']);
            $this->especies->add();
            header("Location:".URL."especies?msg=ok");
        }
    }
    public function eliminar($id){
          //print_r($id);
       $this->especies->delete($id[0]);
       header("Location:".URL."especies");
    }
    public function modificar($id){
        //print_r($id);
        $datos=$this->especies->edit($id[0]);
        return $datos;
    }
    public function update($id){
        //print_r($id);
        $this->especies->set("id_especie",$_POST['id_especie']);
        $this->especies->set("especies_des",$_POST['especies_des']);
        $this->especies->update();
        header("Location:".URL."especies");

    }
}



