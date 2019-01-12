<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;


class razasController
{
    private $razas;
    public function __construct()
    {
        $this->razas=new \AppData\Model\razas();
    }

    public function index()
    {
        $datos= $this->razas->getAll();
        return $datos;
       // echo "Hola desde mi controlador";
    }
    public function crear()
    {
        if($_POST)
        {
            $this->razas->set("raza_des",$_POST['raza_des']);
            $this->razas->add();
            header("Location:".URL."razas?msg=ok");
        }
    }
    public function eliminar($id){
          //print_r($id);
       $this->razas->delete($id[0]);
       header("Location:".URL."razas");
    }
    public function modificar($id){
        //print_r($id);
        $datos=$this->razas->edit($id[0]);
        return $datos;
    }
    public function update($id){
        //print_r($id);
        $this->razas->set("id_raza",$_POST['id_raza']);
        $this->razas->set("raza_des",$_POST['raza_des']);
        $this->razas->update();
        header("Location:".URL."razas");

    }
}



