<?php
namespace App;
final class ThirdClass extends MyClass
{
    public string $colour;

    public function setColour(string $colour): void
    {
        $this->colour = $colour;
    }

    public function getColour(): string
    {
        return 'The colour is ' . $this->colour;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getPow()
    {
        return pow($this->quantity, 5);
    }
}

