<?php

namespace App\Orm;

use Exception;
use App\Orm\Where;
use App\Orm\Connector;
use PDO;

class Delete
{
    private string $tableName;
    private Where $where;
    private PDO $connect;

    public function __construct()
    {
        $this->where = new Where();
        $this->connect = (new Connector())->connect();
    }

    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }

    public function buildSql()
    {
        if (empty($this->tableName)) {
            throw new Exception('Table name is required');
        }
        return 'DELETE FROM ' . $this->tableName . $this->where->showWhere();
    }

    public function execute()
    {
        $this->connect->query($this->buildSql());
    }

    public function orWhere(array $condition): void
    {
        $this->where->orWhere($condition);
    }

    public function andWhere(array $condition): void
    {
        $this->where->andWhere($condition);
    }
}
