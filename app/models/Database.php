<?php


namespace App\models;


use Aura\SqlQuery\QueryFactory;
use PDO;

class Database
{
    private $pdo;
    private $queryFactory;

    function __construct(PDO $pdo, QueryFactory $queryFactory)
    {
        $this->pdo = $pdo;
        $this->queryFactory = $queryFactory;
    }

    function getAll($table, $limit = NULL)
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from($table)
            ->limit($limit);
        $stm = $this->pdo->prepare($select->getStatement());
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    function getOne($table, $id)
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from($table)
            ->where("id = :id")
            ->bindValue(":id", $id);
        $stm = $this->pdo->prepare($select->getStatement());
        $stm->execute($select->getBindValues());
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
}