<?php
//1) Создать родительский (главный класс)
//Класс должен содержать 2 свойства
//Каждое свойство должно иметь геттеры и сеттеры
//должен содержать абстрактную функцию возведения в степень

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

//2) Создать 3 наследника родительского класса
//Каждый наследник должен содержать одно свойство
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет
//одно математическое действие с данными родителя и своими данными
//Один наследник не должен быть наследуемым
class FirstClass extends MyClass
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

    public function getPow(): int
    {
        return pow($this->quantity, 2);
    }
}

$objFirstClass = new FirstClass();
$objFirstClass->setColour('red');
var_dump($objFirstClass->getColour());
$objFirstClass->setQuantity(8);
var_dump($objFirstClass->getPow());
FirstClass::setname('Nina');
var_dump(FirstClass::getName());

class SecondClass extends MyClass
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
        return pow($this->quantity, 3);
    }
}

$objSecondClass = new SecondClass();
$objSecondClass->setColour('yellow');
var_dump($objSecondClass->getColour());
$objSecondClass->setQuantity(6);
var_dump($objSecondClass->getPow());

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

$objThirdClass = new ThirdClass();
$objThirdClass->setColour('blue');
var_dump($objThirdClass->getColour());
$objThirdClass->setQuantity(5);
var_dump($objThirdClass->getPow());

//3) Создать по 2 наследника от наследников первого уровня
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
//В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции
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

$objFirstClass1 = new FirstClass1();
$objFirstClass1->setPrice(3);
var_dump($objFirstClass1->getPrice());
$objFirstClass1->setQuantity(5);
var_dump($objFirstClass1->mulQuantity());
var_dump($objFirstClass1->mathOpFirstClass1());

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

$objFirstClass2 = new FirstClass2();
$objFirstClass2->setPrice2(5);
var_dump($objFirstClass2->getPrice2());
$objFirstClass2->setQuantity(5);
var_dump($objFirstClass2->mulQuantity());
var_dump($objFirstClass2->mathOpFirstClass2());

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

$objSecondClass1 = new SecondClass1();
$objSecondClass1->setSomeInt(125);
var_dump($objSecondClass1->getSomeInt());
$objSecondClass1->setQuantity(4);
var_dump($objSecondClass1->divQuantity());
var_dump($objSecondClass1->mathOpSecClass1());


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

$objSecondClass2 = new SecondClass2();
$objSecondClass2->setAnotherInt(8);
var_dump($objSecondClass2->getAnotherInt());
$objSecondClass2->setQuantity(3);
var_dump($objSecondClass2->divQuantity());
var_dump($objSecondClass2->mathOpSecClass2());

