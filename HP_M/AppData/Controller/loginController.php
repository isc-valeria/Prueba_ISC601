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
        $this->login= new \AppData\Model\login();
    }

    public function index()
    {

    }

}