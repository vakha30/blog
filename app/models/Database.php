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

    function add($table, $data)
    {
        $insert = $this->queryFactory->newInsert();
        $insert->into($table)
            ->cols($data);
        $stm = $this->pdo->prepare($insert->getStatement());
        $stm->execute($insert->getBindValues());
    }

    function update($table, $id, $data)
    {
        $update = $this->queryFactory->newUpdate();
        $update->table($table)
            ->cols($data)
            ->where("id = :id")
            ->bindValue(":id", $id);
        $stm = $this->pdo->prepare($update->getStatement());
        $stm->execute($update->getBindValues());

    }

    function delete($table, $id)
    {
        $delete = $this->queryFactory->newDelete();
        $delete->from($table)
            ->where("id = :id")
            ->bindValue(":id", $id);
        $stm = $this->pdo->prepare($delete->getStatement());
        $stm->execute($delete->getBindValues());
    }
}