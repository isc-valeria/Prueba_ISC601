<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;


class inicioController
{
    private $tipos,$raza, $sexo,  $especie;
    public function __construct()
    {
        $this->tipos= new \AppData\Model\tipos();
        $this->raza=new \AppData\Model\razas();
        $this->sexo=new \AppData\Model\sexo();
        $this->especie=new \AppData\Model\especies();

    }
    public function index()
    {
        $datos1=$this->raza->getAll();
        $datos2=$this->sexo->getAll();
        $datos3=$this->especie->getAll();
        $datos4=$this->tipos->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;
        return $datos;
    }


}