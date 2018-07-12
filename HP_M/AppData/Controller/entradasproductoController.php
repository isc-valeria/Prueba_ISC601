<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 20/06/2018
 * Time: 03:57 PM
 */

namespace AppData\Controller;


class entradasproductoController
{
    private $Entrada;

    public function __construct()
    {

        $this->Entrada=new \AppData\Model\Entradas();

       // $this->Salida=new \AppData\Model\Salida();
    }

    public function index()
    {

        $datos1=$this->Entrada->getAll();
        $datos[0]=$datos1;


        $datos2=$this->Salida->getAll();
        $datos[1]=$datos2;
        return $datos;
    }

    public function crear()
    {
        if($_POST)
        {
            $this->Entrada->set('id_entrada',$_POST["id_entrada"]);
            $this->Entrada->set('fecha_ent',$_POST["fecha_ent"]);
            $this->Entrada->set('cantidad_ent',$_POST["cantidad_ent"]);
            $this->Entrada->set('id_producto'),$_POST["id_producto"];
            $this->Entrada->add();
            $datos1=$this->Entrada->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }

}