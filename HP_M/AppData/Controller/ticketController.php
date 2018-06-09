<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 10:52 PM
 */

namespace AppData\Controller;


class ticketController
{
    private $registro_prendas;
    private $ropa;
    private $estado_prenda;
    private $tipo_tela;
    private $color;
    private $tratamiento;
    private $precio;
    private $tipo_prenda;

    public function __construct()
    {
        $this->registro_prendas= new \AppData\Model\Ticket();

        $this->ropa= new \AppData\Model\Prendas();
        $this->estado_prenda= new \AppData\Model\estadoorden();
        $this->tipo_tela = new \AppData\Model\Tipos_tela();
        $this->color = new \AppData\Model\Colores();
        $this->tratamiento = new \AppData\Model\Servicioslavanderia();
        $this->precio = new \AppData\Model\Precios();
        $this->tipo_prenda= new \AppData\Model\Tipos_prendas();
    }

    public function index()
    {
        $datos1=$this->registro_prendas->getAll();
        $datos2=$this->ropa->getAll();
        $datos3=$this->estado_prenda->getAll();
        $datos4=$this->tipo_tela->getAll();
        $datos5=$this->color->getAll();
        $datos6=$this->tratamiento->getAll();
        $datos7=$this->precio->getAll();
        $datos8=$this->tipo_prenda->getAll();
        $datos[1]=$datos1;
        $datos[2]=$datos2;
        $datos[3]=$datos3;
        $datos[4]=$datos4;
        $datos[5]=$datos5;
        $datos[6]=$datos6;
        $datos[7]=$datos7;
        $datos[8]=$datos8;
        return $datos;
    }

    public function crear(){
        //  echo "fsdfsdf";
        if(isset($_POST))
        {
            // echo "asdasdadasdasd";
            $this->tipo_prenda->set('id_tela', $_POST["tipotela"]);
            $this->tipo_prenda->set('id_tratamiento', $_POST["tratamiento"]);
            $this->tipo_prenda->set('id_color', $_POST["color"]);
            $this->tipo_prenda->set('id_ropa', $_POST["tiporopa"]);
            //$this->tipo_prenda->set('cantidad', $_POST["cantidadd"]);

            $this->tipo_prenda->add();
            $datos8=$this->tipo_prenda->getAll();

            $datos[8]=$datos8;

            $this->registro_prendas->set('fecha_entrega',$_POST["fecha_entre"]);
            $this->registro_prendas->set('fecha_recepcion',$_POST["fecha_recep"]);
            $this->registro_prendas->set('id_tipopren',$_POST["tipotela"]);
            $this->registro_prendas->set('id_estadop',$_POST["estadoprenda"]);


            $this->registro_prendas->add();
            $datos1=$this->registro_prendas->getAll();

            $datos[1]=$datos1;
            return $datos;
        }





    }