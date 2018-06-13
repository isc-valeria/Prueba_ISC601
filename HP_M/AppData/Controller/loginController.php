<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 12/06/2018
 * Time: 01:40 PM
 */

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
            session_destroy();
        }
    public function verify()
        {
            if(isset($_POST)) {
                $this->login->set("email", $_POST["email"]);
                $this->login->set("pass", $_POST["password"]);
                $datos = $this->login->verify();
                if (mysqli_num_rows($datos) > 0) {
                    $datos=mysqli_fetch_assoc($datos);
                    $_SESSION["username"]=$datos["email"];
                }
                else
                    $_SESSION["error_login"]="los datos no coinciden con nuestros registros";
                header("Location:".URL);
                exit();
            }

<<<<<<< HEAD
        }
    public function logout()
        {
            session_destroy();
            header("Location:".URL);
        }
=======
           $this->redireccionar();
        }

    }
    public function redireccionar()
    {
        header("Location:".URL);
    }
    public function logout()
    {
        session_destroy();

    }
>>>>>>> 82cc03a203a1aae2e430b9fb79ae9e33f3d9fe0e

}