<?php
namespace AppData\Controller;
class animalesController
{
    private $user,$tipos,$ubi;
    private $animales,$raza, $sexo,  $especie;
    public function __construct()
    {
        $this->animales= new \AppData\Model\animales();
        $this->raza=new \AppData\Model\razas();
        $this->sexo=new \AppData\Model\sexo();
        $this->especie=new \AppData\Model\especies();

    }
    public function index()
    {
        $datos1=$this->raza->getAll();
        $datos2=$this->sexo->getAll();
        $datos3=$this->especie->getAll();
        $datos4=$this->animales->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;
        return $datos;

    }
    public function agregar()
    {
        print_r($_POST);
        if($_POST)

        {
        $nombre=$_FILES['imagen']['name'];
        $tmp=$_FILES['imagen']['tmp_name'];
        $bytes=file_get_contents($tmp);
        $this->animales->set('nombre',$_POST["nombre"]);
        $this->animales->set('edad',$_POST["edad"]);
        $this->animales->set('color',$_POST["color"]);
        $this->animales->set('id_raza',$_POST["id_raza"]);
        $this->animales->set('id_sexo',$_POST["id_sexo"]);
        $this->animales->set('id_especie',$_POST["id_especie"]);
        $this->animales->set('img',$bytes);
        $this->animales->add();
        print_r($_POST);
        header("Location:".URL."animales");
        }
        else{

            $datos1=$this->raza->getAll();
            $datos2=$this->sexo->getAll();
            $datos3=$this->especie->getAll();
            $datos[0]=$datos1;
            $datos[1]=$datos2;
            $datos[2]=$datos3;
            return $datos;
        }

    }

    public function eliminar($id)
    { 
        $this->animales->delete($id[0]);
        $datos1=$this->animales->getAll();
        $datos[0]=$datos1;
        return $datos;   

    }

    public function modificar ($id) 
    {    
        $datos=$this->animales->edit($id[0]);
        print_r($datos);
        print_r(json_encode(mysqli_fetch_assoc($datos)));        
    }
    public function getimg ($id) 
    {    
        $datos=$this->animales->getImg($id[0]);
        while($row=mysqli_fetch_array($datos))
        {
            echo "
                <div class='col-sm'>"
                ?>
                    <img class='card-img-top' alt='Card image cap' style=' height:80px;' src='data:image/jpg; base64, <?php echo base64_encode($row[0]); ?>'/>
                <?php echo"                
                </div>";    
        }   
    }
    public function actualizar($id)
    {
        print_r($_POST);
        if($_POST)
        {
            $nombre=$_FILES['imagen']['name'];
            $tmp=$_FILES['imagen']['tmp_name'];
            $bytes=file_get_contents($tmp);
            $this->animales->set('id',$_POST["id"]);
            $this->animales->set('nombre',$_POST["nombre"]);
            $this->animales->set('edad',$_POST["edad"]);
            $this->animales->set('color',$_POST["color"]);
            $this->animales->set('id_raza',$_POST["id_raza"]);
            $this->animales->set('id_sexo',$_POST["id_sexo"]);
            $this->animales->set('id_especie',$_POST["id_especie"]);
            $this->animales->set('img',$bytes);
            $this->animales->update();
            header("Location:".URL."animales");

        }





    }
    public function print_pdf()
    {
        $datos=$this->animales->getAll();
        return $datos;
    }
    public function graficar()
    {
        $datos=$this->animales->grafica();
        return $datos;
    }

}
