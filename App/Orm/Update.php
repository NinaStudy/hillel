<?php

namespace App\Orm;

use PDO;
use Exception;
use App\Orm\Where;
use App\Orm\Connector;

class Update
{
    private string $tableName;
    private Update $where;
    private PDO $connect;
    private array $data = [];

    public function __construct()
    {
        $this->where = new Update();
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
        return 'UPDATE FROM ' . $this->tableName . ' SET ' . $this->getData() . $this->where->showWhere();
    }

    public function execute()
    {
        $this->connect->query($this->buildSql());
    }

    public function setData(array $values): void
    {
        $this->data = $values;
    }

    public function orWhere(array $condition): void
    {
        $this->where->orWhere($condition);
    }

    public function andWhere(array $condition): void
    {
        $this->where->andWhere($condition);
    }

    private function getData(): string
    {
        $result = [];
        foreach ($this->data as $field => $value) {
            $result[] = $field . ' = ' . is_numeric($value) ? $this->connect->quote($value) : $value;
        }
        return implode(', ', $result);
    }
}
