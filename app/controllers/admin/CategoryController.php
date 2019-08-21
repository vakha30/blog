<?php


namespace App\controllers\admin;


use App\models\Database;
use League\Plates\Engine;

class CategoryController
{
    private $view;
    private $db;

    function __construct(Engine $view, Database $db)
    {

        $this->view = $view;
        $this->db = $db;
    }

    function index()
    {
        $categorys = $this->db->getAll('category');
        echo $this->view->render('admin/category/index', ["categorys" => $categorys]);
    }

    function create()
    {
        echo $this->view->render("admin/category/create");
    }

    function store()
    {
        $data = [
            "title" => $_POST['title']
        ];
        $this->db->add('category', $data);
        header("Location: /admin/category");
    }

    function edit($id)
    {
        $category = $this->db->getOne('category', $id);
        echo $this->view->render("admin/category/edit", ["category" => $category]);
    }

    function update($id)
    {
        $data = [
            "title" => $_POST['title']
        ];
        $this->db->update('category', $id, $data);
        header("Location: /admin/category");
    }

    function delete($id)
    {
        $this->db->delete('category', $id);
        header("Location: /admin/category");
    }
}