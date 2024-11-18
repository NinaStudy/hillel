<?php
namespace App;
abstract class MyClass
{
    public int $quantity;
    public static string $name;

    public static function setName(string $name): void
    {
        self::$name = $name;
    }

    public static function getName(): string
    {
        return self::$name;
    }

    public abstract function setQuantity(int $quantity);

    public abstract function getPow();
}
