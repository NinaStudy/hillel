<?php
namespace App;
class FirstClass1 extends FirstClass
{
    public int $price;

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function mathOpFirstClass1(): int
    {
        return $this->getPow() * $this->price;
    }

    public function mulQuantity(): int
    {
        return $this->quantity * $this->price;
    }
}
