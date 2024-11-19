<?php
namespace App;
class SecondClass2 extends SecondClass
{
    public int $anotherInt;

    public function setAnotherInt(int $anotherInt): void
    {
        $this->anotherInt = $anotherInt;
    }

    public function getAnotherInt(): int
    {
        return $this->anotherInt + 1;
    }

    public function mathOpSecClass2(): int
    {
        return $this->getPow() - $this->anotherInt;
    }

    public function divQuantity(): int
    {
        return $this->quantity / $this->anotherInt;
    }
}

