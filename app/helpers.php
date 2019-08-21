<?php

use App\models\Database;

function dd($data)
{
    var_dump($data);
    die;
}

function getAllCategorys()
{
    global $container;
    $queryFactory = $container->get('Aura\SqlQuery\QueryFactory');
    $pdo = $container->get('PDO');
    $database = new Database($pdo, $queryFactory);
    return $database->getAll('category');
}

function getCategory($id) {
    global $container;
    $queryFactory = $container->get('Aura\SqlQuery\QueryFactory');
    $pdo = $container->get('PDO');
    $database = new Database($pdo, $queryFactory);
    return $database->getOne('category', $id);
}

function getUser($id)
{
    global $container;
    $queryFactory = $container->get('Aura\SqlQuery\QueryFactory');
    $pdo = $container->get('PDO');
    $database = new Database($pdo, $queryFactory);
    return $database->getOne('users', $id);
}

function isLoged()
{
    global $container;
    $auth = $container->get('Delight\Auth\Auth');
    return $auth->isLoggedIn();
}