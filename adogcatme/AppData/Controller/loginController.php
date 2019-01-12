<?php
namespace AppData\Controller;
class loginController
{
    private $login;

    public function __construct()
        {
            $this->login= new \AppData\Model\Login();
        }
    public function index()
        {
            $datos1=$this->login->getAll();
            $datos[0]=$datos1;
            return $datos;   
        }
    public function verify()
        {
            $_SESSION["error_login"]="";

            if(isset($_POST)) {
                $this->login->set("nombre", $_POST["nombre"]);
                $this->login->set("pass", $_POST["pass"]);
                $datos = $this->login->comprobar();
                if (mysqli_num_rows($datos) > 0) {
                    $datos=mysqli_fetch_assoc($datos);
                    $_SESSION["nombre"]=$datos["nombre"];
                    header("Location:" . URL . "bienvenido");
                    echo($_SESSION["nombre"]);

                }
                else {
                    $_SESSION["error_login"] = "Los datos no coinciden con nuestros registros";
                    header("Location:" . URL . "login");
                }
            }
        }
        public function reset()
        {
            if(isset($_POST)) {
                $this->login->set("nombre", $_POST["user"]);
                $this->login->set("user", $_POST["name"]);
                $this->login->set("telefono", $_POST["numero"]);
                $datos = $this->login->recuperar();
                print_r(json_encode(mysqli_fetch_assoc($datos)));                                    
            }
            
        }

    public function logout()
        {
            session_destroy();
           // header("Location:".URL);
        }
}
