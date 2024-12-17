<?php

namespace App\Models;

use App\Orm\Delete;
use App\Orm\Insert;
use Exception;
use App\Orm\Update;

class Post
{

    public int $id;
    public string $title;
    public string $text;
    public int $userId;
    public int $postCategoryId;
    public string $created;
    public string $updated;


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

    public function getAllPost()
    {
        return $this->post;
    }

    public function getOnePost(int $id)
    {
        if (!empty($this->post[$id])) {
            return $this->post[$id];
        }
        throw new Exception('id is absent');
    }

    public function save(array $data)
    {
        $update = new Insert();
        $update->setTableName('Post');
        $update->setFields($data);
        $update->buildSql();
        $update->execute();
    }

    public function update(array $data)
    {
        $insert = new Update();
        $insert->setTableName('Post');
        $insert->setData($data);
        $insert->buildSql();
        $insert->execute();
    }

    public function delete($id)
    {
        $delete = new Delete();
        $delete->setTableName('Post');
        $delete->andWhere(['id', '=', $id]);
        $delete->execute();

    }

    public function toArray()
    {
        return get_class_vars(get_class($this));
    }
}