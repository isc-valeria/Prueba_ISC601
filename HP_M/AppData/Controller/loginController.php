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
           // print_r($datos);

            header("Location:".URL);
            exit();
        }

    }
    public function logout()
    {
        session_destroy();
        ob_start();
        header("Location:".URL);

        ob_end_flush();
    }

}