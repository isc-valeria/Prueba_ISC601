<?php
namespace AppData\Controller;
class exaController
{
    private $user;
    public function __construct()
    {
        $this->user= new \AppData\Model\exa();    
    }
    public function index()
    {
        $datos1=$this->user->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function agregar()
    {
        if($_POST)
        {
        $nombre=$_FILES['imagen']['name'];
        $tmp=$_FILES['imagen']['tmp_name'];    
        //echo $nombre.'  '.$tmp ;
         $bytes=file_get_contents($tmp); 
            $this->user->set('titulo',$_POST["titulo"]);
            $this->user->set('fecha',$_POST["fecha"]);
            $this->user->set('img',$bytes);
            $this->user->set('descr',$_POST["descripcion"]);
            $this->user->add();
            header("Location:".URL."user");
        }

    }

      public function eliminar($id){
       $this->user->delete($id[0]);
       header("Location:".URL."user");
    }

    public function modificar($id){
        $datos=$this->user->edit($id[0]);        
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
        $nombre=$_FILES['imagen']['name'];
        $tmp=$_FILES['imagen']['tmp_name'];    
        //echo $nombre.'  '.$tmp ;
         $bytes=file_get_contents($tmp); 
            $this->user->set('id',$_POST["id"]);
            $this->user->set('titulo',$_POST["titulo"]);
            $this->user->set('fecha',$_POST["fecha"]);
            $this->user->set('img',$bytes);
            $this->user->set('descr',$_POST["descripcion"]);
            $this->user->update();
            header("Location:".URL."user");
        }
    }
    public function print_pdf()
    {
    }


}
