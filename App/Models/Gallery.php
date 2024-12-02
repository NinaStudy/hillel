<?php

namespace App\Models;

use Exception;

class Gallery
{
    private array $gallery = [
        1 => [
            'id' => 1,
            'name' => 'name1',
            'image' => 'image1',
            'categoryName' => 'categoryName1',
            'categoryId' => 1,
        ],
        [
            'id' => 2,
            'name' => 'name2',
            'image' => 'image2',
            'categoryName' => 'categoryName2',
            'categoryId' => 2,
        ],
        [
            'id' => 3,
            'name' => 'name3',
            'image' => 'image3',
            'categoryName' => 'categoryName3',
            'categoryId' => 3,
        ],
        [
            'id' => 4,
            'name' => 'name4',
            'image' => 'image4',
            'categoryName' => 'categoryName4',
            'categoryId' => 4,
        ],
    ];

    public function getAllGallery(): array
    {
        return $this->gallery;
    }

    public function getOneGallery(int $id): array
    {
        if (!empty($this->gallery[$id])) {
            return $this->gallery[$id];
        }
        throw new Exception('id is absent');
    }
}