<?php

namespace App\Models;

use Exception;

class User
{
    private array $user = [
        1 => [
            'id' => 1,
            'name' => 'Name1',
            'surname' => 'Surname1',
            'email' => 'email1@email.com',
            'phone' => +380000000001,
        ],
        [
            'id' => 2,
            'name' => 'Name2',
            'surname' => 'Surname2',
            'email' => 'email2@email.com',
            'phone' => +380000000002,
        ],
        [
            'id' => 3,
            'name' => 'Name3',
            'surname' => 'Surname3',
            'email' => 'email3@email.com',
            'phone' => +380000000003,
        ],
        [
            'id' => 4,
            'name' => 'Name4',
            'surname' => 'Surname4',
            'email' => 'email4@email.com',
            'phone' => +380000000004,
        ],
    ];

    public function getAllUser(): array
    {
        return $this->user;
    }

    public function getOneUser(int $id): array
    {
        if (!empty($this->user[$id])) {
            return $this->user[$id];
        }
        throw new Exception('id is absent');
    }
}