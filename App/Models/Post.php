<?php

namespace App\Models;

use Exception;

class Post
{
    private array $post = [
        1 => [
            'id' => 1,
            'title' => 'title 1',
            'text' => 'text 1',
            'postCategoryName' => 'postCategoryName 1',
            'postCategoryId' => 1,
            'userId' => 1,
        ],
        [
            'id' => 2,
            'title' => 'title 2',
            'text' => 'text 2',
            'postCategoryName' => 'postCategoryName 2',
            'postCategoryId' => 2,
            'userId' => 2,
        ],
        [
            'id' => 3,
            'title' => 'title 3',
            'text' => 'text 3',
            'postCategoryName' => 'postCategoryName 3',
            'postCategoryId' => 3,
            'userId' => 3,
        ],
        [
            'id' => 4,
            'title' => 'title 4',
            'text' => 'text 4',
            'postCategoryName' => 'postCategoryName 4',
            'postCategoryId' => 4,
            'userId' => 4,
        ],
    ];

    public function getAllPost(): array
    {
        return $this->post;
    }

    public function getOnePost(int $id): array
    {
        if (!empty($this->post[$id])) {
            return $this->post[$id];
        }
        throw new Exception('id is absent');
    }
}