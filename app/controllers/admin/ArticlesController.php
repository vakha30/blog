<?php


namespace App\controllers\admin;


use App\models\Database;
use League\Plates\Engine;

class ArticlesController
{
    private $view;
    private $db;

    function __construct(Engine $view , Database $db)
    {
        $this->view = $view;
        $this->db = $db;
    }

    function index()
    {
        $articles = $this->db->getAll('posts');
        echo $this->view->render("admin/articles/index", ["articles" => $articles]);
    }
}
