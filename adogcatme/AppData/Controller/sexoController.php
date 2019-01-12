<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;


class sexoController
{
    private $sexos;
    public function __construct()
    {
        $this->sexos=new \AppData\Model\sexo();
    }

    public function index()
    {
        $datos= $this->sexos->getAll();
        return $datos;
       // echo "Hola desde mi controlador";
    }
    public function crear()
    {
        if($_POST)
        {
            $this->sexos->set("sexo_des",$_POST['sexo_des']);
            $this->sexos->add();
            header("Location:".URL."sexo?msg=ok");
        }
    }
    public function eliminar($id){
          //print_r($id);
       $this->sexos->delete($id[0]);
       header("Location:".URL."sexo");
    }
    public function modificar($id){
        //print_r($id);
        $datos=$this->sexos->edit($id[0]);
        return $datos;
    }
    public function update($id){
        //print_r($id);
        $this->sexos->set("id_sexo",$_POST['id_sexo']);
        $this->sexos->set("sexo_des",$_POST['sexo_des']);
        $this->sexos->update();
        header("Location:".URL."sexo");

    }
}



