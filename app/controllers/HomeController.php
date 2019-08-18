<?php


namespace App\controllers;


use App\models\Database;
use League\Plates\Engine;

class HomeController
{

    private $view;

    private $db;

    function __construct(Engine $view, Database $db)
    {
        $this->view = $view;
        $this->db = $db;
    }

    function index() {
        $posts = $this->db->getAll('posts');
        $categorys = $this->db->getAll('category');
        
        echo $this->view->render("home", ["posts" => $posts, "categorys" => $categorys]);
    }
}