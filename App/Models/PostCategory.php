<?php

namespace App\Models;

use Exception;
use App\Orm\Delete;
use App\Orm\Insert;
use App\Orm\Update;

class PostCategory
{
    public int $id;
    public string $title;
    public string $text;
    public int $postCategoryId;
    public string $created;
    public string $updated;
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

    public function save(array $data)
    {
        $update = new Insert();
        $update->setTableName('PostCategory');
        $update->setFields($data);
        $update->buildSql();
        $update->execute();
    }

    public function update(array $data)
    {
        $insert = new Update();
        $insert->setTableName('PostCategory');
        $insert->setData($data);
        $insert->buildSql();
        $insert->execute();
    }

    public function delete($id)
    {
        $delete = new Delete();
        $delete->setTableName('PostCategory');
        $delete->andWhere(['id', '=', $id]);
        $delete->execute();

    }

    public function toArray()
    {
        return get_class_vars(get_class($this));
    }
}