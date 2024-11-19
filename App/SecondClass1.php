<?php
namespace App;
class SecondClass1 extends SecondClass
{
    public int $someInt;

    public function setSomeInt(int $someInt): void
    {
        $this->someInt = $someInt;
    }

    public function getSomeInt(): int
    {
        return $this->someInt + 1;
    }

    public function mathOpSecClass1(): int
    {
        return $this->getPow() + $this->someInt;
    }

    public function divQuantity(): int
    {
        return $this->quantity / $this->someInt;
    }
}
