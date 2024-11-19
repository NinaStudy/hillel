<?php
namespace App;
class FirstClass2 extends FirstClass
{
    public int $price2;

    public function setPrice2(int $price2): void
    {
        $this->price2 = $price2;
    }

    public function getPrice2(): int
    {
        return $this->price2;
    }

    public function mathOpFirstClass2(): int
    {
        return $this->getPow() / $this->price2;
    }

    public function mulQuantity(): int
    {
        return $this->quantity * $this->price2;
    }
}


