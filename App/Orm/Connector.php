<?php

namespace App\Orm;

use PDO;

class Connector
{
    private array $config = [];
    private PDO $pdo;

    public function __construct()
    {
        $this->initConfig();
        $this->dbConnect();
    }

    private function initConfig(): void
    {
        $this->config = require __DIR__ . '/../../Config/dbCred.php';
    }

    private function getDns(): string
    {
        if (!$this->config['driver'] || $this->config['host' || $this->config['dbname']]) {
            throw new \Exception('Missing DNS data');
        }
        return $this->config['driver'] . ':host=' . $this->config['host'] . ';dbname=' . $this->config['db'];
    }

    private function dbConnect(): void
    {
        if (empty($this->config['user'])) {
            throw new \Exception('Missing DNS data');
        }
        $this->pdo = new PDO($this->getDns(), $this->config['user'], $this->config['password'], $options);
    }

    public function connect(): PDO
    {
        return $this->pdo;
    }
}
