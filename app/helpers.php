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
