<?php

namespace App\Models;

use App\Orm\Delete;
use App\Orm\Insert;
use Exception;
use App\Orm\Update;


class  GalleryCategory
{
    public int $id;
    public string $name;
    public string $image;
    public string $created;
    public string $updated;
    private array $galleryCategory = [
        1 => [
            'id' => 1,
            'name' => 'name1',
            'image' => 'image1',
        ],
        [
            'id' => 2,
            'name' => 'name2',
            'image' => 'image2',
        ],
        [
            'id' => 3,
            'name' => 'name3',
            'image' => 'image3',
        ],
        [
            'id' => 4,
            'name' => 'name4',
            'image' => 'image4',
        ]
    ];

    public function getAllGalleryCategory(): array
    {
        return $this->galleryCategory;
    }

    public function getOneGalleryCategory(int $id): array
    {
        if (!empty($this->galleryCategory[$id])) {
            return $this->galleryCategory[$id];
        }
        throw new Exception('id is absent');
    }

    public function save(array $data)
    {
        $update = new Insert();
        $update->setTableName('GalleryCategory');
        $update->setFields($data);
        $update->buildSql();
        $update->execute();
    }

    public function update(array $data)
    {
        $insert = new Update();
        $insert->setTableName('GalleryCategory');
        $insert->setData($data);
        $insert->buildSql();
        $insert->execute();
    }

    public function delete($id)
    {
        $delete = new Delete();
        $delete->setTableName('GalleryCategory');
        $delete->andWhere(['id', '=', $id]);
        $delete->execute();
    }

    public function toArray()
    {
        return get_class_vars(get_class($this));
    }
}
