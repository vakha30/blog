<?php


namespace App\controllers\admin;


use League\Plates\Engine;

class HomeController
{
    private $view;

    function __construct(Engine $view)
    {
        $this->view = $view;
    }

    function index() {
        echo $this->view->render("admin/index");
    }

}