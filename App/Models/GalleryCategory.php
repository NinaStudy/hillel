<?php

namespace App\Models;

use Exception;

class  GalleryCategory
{
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
}
