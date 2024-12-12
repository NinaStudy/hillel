<?php

namespace App\Orm;

use PDO;
use Exception;

class Insert
{
    private string $tableName;
    private array $fieldSet = [];
    private Connector $connector;
    private array $value = [];

    public function __construct()
    {
        $this->connector = new Connector();
    }

    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }

    public function setFields(array $fieldSet): void
    {
        $this->value = $fieldSet;
        $prev = [];
        foreach ($fieldSet as $field) {
            if (empty($prev)) {
                $prev = array_keys($field);
            }
            $this->fieldSet = array_keys($field);
            if (!empty(array_diff_key($this->fieldSet, $prev))) {
                throw new Exception('Key different');
            }
            $prev = $this->fieldSet;
        }
    }

    /**
     * @throws Exception
     */
    public function buildSql(): string
    {
        return 'INSERT INTO ' . $this->tableName . ' (' . implode(', ', $this->fieldSet) . ') VALUE ' . $this->getValues();
    }

    public function checkFloors(): bool
    {
        if (is_array($this->value[1])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @throws Exception
     */
    private function getValues()
    {
        $result = [];
        if (empty($this->value)) {
            throw new Exception ('Invalid value');
        }
        if ($this->checkFloors()) {
            foreach ($this->value as $elem) {
                $result[] = ' (' . implode(', ', $elem) . ')';
            }
        } else {
            $result[] = ' (' . implode(', ', $this->value) . ')';
        }
        return implode(',', $result);
    }
}