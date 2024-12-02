<?php

namespace App\Models;

use Exception;

class PostCategory
{
    private array $postCategory = [
        1 => [
            'id' => 1,
            'title' => 'title 1',
            'text' => 'text 1',
            'postCategoryId' => 1,
        ],
        [
            'id' => 2,
            'title' => 'title 2',
            'text' => 'text 2',
            'postCategoryId' => 2,
        ],
        [
            'id' => 3,
            'title' => 'title 3',
            'text' => 'text 3',
            'postCategoryId' => 3,
        ],
        [
            'id' => 4,
            'title' => 'title 4',
            'text' => 'text 4',
            'postCategoryId' => 4,
        ],
    ];

    public function getAllPostCategory(): array
    {
        return $this->postCategory;
    }

    public function getOnePostCategory(int $id): array
    {
        if (!empty($this->postCategory[$id])) {
            return $this->postCategory[$id];
        }
        throw new Exception('id is absent');
    }
}