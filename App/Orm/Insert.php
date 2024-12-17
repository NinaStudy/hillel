<?php

namespace App\Orm;

use PDO;
use Exception;
use App\Orm\Connector;

class Insert
{
    private string $tableName;
    private array $fieldSet = [];
    private PDO $connect;
    private array $value = [];

    public function __construct()
    {
        $this->connect = (new Connector())->connect();
    }

    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }

    public function setFields(array $fieldSet): void
    {
        $this->value = $fieldSet;
        $prev = [];

        if ($this->checkFloors()) {
            foreach ($fieldSet as $key => $items) {

                if (empty($prev)) {
                    $prev = array_keys($items);
                }
                $this->fieldSet = array_keys($items);
                if (!empty(array_diff_key($prev, $this->fieldSet))) {
                    throw new Exception('Key different');
                }
                $prev = $this->fieldSet;
            }
        } else {
            $this->fieldSet = array_keys($fieldSet);
        }
    }

    /**
     * @throws Exception
     */
    public function buildSql(): string
    {
        return 'INSERT INTO ' . $this->tableName . ' ( `' . implode("`, `", $this->fieldSet) . '`) VALUE ' . $this->getValues();
    }

    public function checkFloors(): bool
    {
        if (is_array($this->value[1])) {
            return true;
        } else {
            return false;
        }
    }

    public function execute()
    {
        $this->connect->query($this->buildSql());
    }

    /**
     * @throws Exception
     */
    private function getValues(): string
    {
        $result = [];
        if (empty($this->value)) {
            throw new Exception ('Invalid value');
        }
        if ($this->checkFloors()) {
            foreach ($this->value as $elem) {
                $result[] = ' (' . implode(', ', $this->map($elem)) . ')';
            }
        } else {
            $result[] = ' (' . implode(', ', $this->map($this->value)) . ')';
        }
        return implode(',', $result);
    }

    private function map(array $elem): array
    {
        return array_map(function ($item) {
            return "'" . $item . "'";
        }, $elem);
    }
}