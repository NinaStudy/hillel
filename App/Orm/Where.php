<?php

namespace App\Orm;

class Where
{
    private $conditions = [];

    public function showWhere(): string
    {
        return ' WHERE ' . $this->getCondition();
    }

    public function orWhere(array $condition): void
    {
        $this->conditions [] = ['OR', $condition];
    }

    public function andWhere(array $condition): void
    {
        $this->conditions [] = ['AND', $condition];
    }

    private function getCondition(): string
    {
        $result = '';
        if (!empty($this->conditions)) {
            foreach ($this->conditions as $condition) {
                if (!empty($result)) {
                    $result .= ' ' . $condition[0] . ' ';
                }
            }
            $result .= '(' . implode(' ', $condition[1]) . ')';
        } else {
            $result .= 'TRUE';
        }
        return $result;
    }

    private function createCondition()
    {

    }
}