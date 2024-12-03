<?php

namespace App\Core;

class Viewer
{
    private array $data = [];

    public function includePublicTemplate(string $partName = 'Main'): void
    {
        extract($this->data);
        include __DIR__ . '/../../Public/Templates/Public.php';
    }

    public function includeAdminTemplate(string $partName = 'Gallery'): void
    {
        extract($this->data);
        include __DIR__ . '/../../Public/Templates/Admin.php';
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }
}