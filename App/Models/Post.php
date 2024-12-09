<?php

namespace App\Models;

use App\Orm\Insert;
use Exception;
use App\Orm\Insert as InsertOrm;

class Post
{
    private array $post = [
        1 => [
            'id' => 1,
            'title' => 'title 1',
            'text' => 'text 1',
            'postCategoryId' => 1,
            'userId' => 1,
            'created' => 1733748291,
            'updated' => 1733748291,
        ],
        [
            'id' => 2,
            'title' => 'title 2',
            'text' => 'text 2',
            'postCategoryId' => 2,
            'userId' => 2,
            'created' => 1733748291,
            'updated' => 1733748291,
        ],
        [
            'id' => 3,
            'title' => 'title 3',
            'text' => 'text 3',
            'postCategoryId' => 3,
            'userId' => 3,
            'created' => 1733748291,
            'updated' => 1733748291,
        ],
        [
            'id' => 4,
            'title' => 'title 4',
            'text' => 'text 4',
            'postCategoryId' => 4,
            'userId' => 4,
            'created' => 1733748291,
            'updated' => 1733748291,
        ],
    ];

    public function __construct()
    {
        $insert = new Insert();
        $insert->setTableName('Post');
    }

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