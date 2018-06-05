<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 10:52 PM
 */

namespace AppData\Controller;


class registro_prendasController
{

    private $registro_prendas;
    private $ropa;
    private $estado_prenda;
    private $tipo_tela;
    private $color;
    private $tratamiento;
    private $precio;

    public function __construct()
    {
        $this->registro_prendas= new \AppData\Model\Registro_prendas();

        $this->ropa= new \AppData\Model\Ropa();
        $this->estado_prenda= new \AppData\Model\estados_prendas();
        $this->tipo_tela = new \AppData\Model\Tipos_tela();
        $this->color = new \AppData\Model\Colores();
        $this->tratamiento = new \AppData\Model\Tratamientos();
        $this->precio = new \AppData\Model\Precios();

        $this->habitaciones= new \AppData\Model\Habitaciones();
        $this->tipo_ropa= new \AppData\Model\Ropa();
        $this->estado_prenda= new \AppData\Model\estados_prendas();



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
        $datos[1]=$datos1;
        $datos[2]=$datos2;
        $datos[3]=$datos3;
        $datos[4]=$datos4;
        $datos[5]=$datos5;
        $datos[6]=$datos6;
        $datos[7]=$datos7;
        return $datos;
    }

    public function crear(){
      //  echo "fsdfsdf";
        if(isset($_POST))
        {
           // echo "asdasdadasdasd";
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

}