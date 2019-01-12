<?php
namespace AppData\Controller;
use AppData\Model\especies;
use AppData\Model\razas;
use AppData\Model\sexo;

class ver_masController
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
    public function agregar(){

        if($_POST)
        {
            $nombre=$_FILES['imagen']['name'];
            $tmp=$_FILES['imagen']['tmp_name'];
            $bytes=file_get_contents($tmp);
            $this->tipos->set('nombre',$_POST["nombre"]);
            $this->tipos->set('edad',$_POST["edad"]);
            $this->tipos->set('color',$_POST["color"]);
            $this->tipos->set('id_raza',$_POST["id_raza"]);
            $this->tipos->set('id_sexo',$_POST["id_sexo"]);
            $this->tipos->set('id_especie',$_POST["id_especie"]);
            $this->tipos->set('img',$bytes);
            $this->tipos->add();
            print_r($_POST);
            header("Location:".URL."tipos");
        }else{

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


      public function eliminar($id){
       $this->tipos->delete($id[0]);
       header("Location:".URL."tipos");
    }

    public function modificar($id){
        $this->tipos->set('id',$id[0]);
        $datos1=$this->raza->getAll();
        $datos2=$this->sexo->getAll();
        $datos3=$this->especie->getAll();
        $datos4=$this->tipos->getone1();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;
        return $datos;
        print_r(json_encode(mysqli_fetch_assoc($datos)));
    }
    public function actualizar($id)
    {
        if($_POST)
        {

            $this->tipos->set('nombre',$_POST["nombre"]);
            $this->tipos->set('edad',$_POST["edad"]);
            $this->tipos->set('color',$_POST["color"]);
            $this->tipos->set('raza',$_POST["id_raza"]);
            $this->tipos->set('sexo',$_POST["id_sexo"]);
            $this->tipos->set('especie',$_POST["id_especie"]);

            $this->tipos->update();
            print_r($_POST);
            header("Location:".URL."tipos");
        }
    }
    function get($id){
        $datos=$this->tipos->getOne($id[0]);
        if(mysqli_num_rows($datos)>0){
            $datos=mysqli_fetch_assoc($datos);
        }
        echo json_encode($datos);
    }
    public function print_pdf()
    {
        $datos=$this->tipos->getAll();
        return $datos;
    }
}
