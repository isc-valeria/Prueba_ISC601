<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 19/06/2018
 * Time: 05:33 PM
 */

namespace AppData\Controller;


class settingsController
{
    private $settings;

    public function __construct()
    {
        $this->settings= new \AppData\Model\Settings();
    }

    public function index()
    {
        
    }
}