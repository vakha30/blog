<?php


namespace App\controllers\admin;


use App\models\Database;
use App\models\ImageManager;
use League\Plates\Engine;

class ArticlesController
{
    private $view;
    private $db;
    private $imageManager;

    function __construct(Engine $view , Database $db, ImageManager $imageManager)
    {
        $this->view = $view;
        $this->db = $db;
        $this->imageManager = $imageManager;
    }

    function index()
    {
        $articles = $this->db->getAll('posts');
        echo $this->view->render("admin/articles/index", ["articles" => $articles]);
    }

    function create()
    {
        $categorys = $this->db->getAll("category");
        echo $this->view->render("admin/articles/create", ["categorys" => $categorys]);

    }

    function store()
    {
        $image = $this->imageManager->uploadImage($_FILES['image']);
        $data = [
            "title" => $_POST['title'],
            "text" => $_POST['text'],
            "image" => $image,
            "date" => date("Y-m-d H:i:s"),
            "category_id" => $_POST['category_id'],
            "user_id" => "1"
        ];
        $this->db->add('posts', $data);
        header("Location: /admin/articles/create");
    }
}
