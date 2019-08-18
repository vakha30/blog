<?php


namespace App\controllers;


use League\Plates\Engine;

class Controller
{
    private $view;

    function __construct(Engine $view)
    {
        $this->view = $view;
    }
}