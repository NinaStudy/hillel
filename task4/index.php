<?php
/* 1. Создать функцию принимающую массив произвольной вложенности и определяющий
любой элемент номер которого передан параметром во всех вложенных массивах.
*/
$array = [1, 2, 5, 7, [125], '5',  [258, 356], 2, 'text', 5, 3.5, 76];
function findAnyElement(array $array, $element)
{
    $result = [];
array_walk_recursive($array, function ($value) use (&$result) {
    $result[] = $value;
});
if (isset($result[$element])){
    return $result[$element];
    }
}
var_dump(findAnyElement($array, 3));

/* Создать функцию которая считает все буквы b в переданной строке,
в случае если передается не строка функция должна возвращать false
*/
function countB($myString)
{
    if (is_string($myString)) {
        return substr_count($myString, 'b');
    }
    else {
        return false;
    }
}
var_dump(countB('fdgfhhbbbyhbb'));

// 3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
$myArray = [1, 2, 5, 7, 125, [258, 356], [2, 5, 76]];
function arrSum(array $myArray)
{
    $result = 0;
    foreach ($myArray as $value) {
        if (is_array($value)) {
          $result += arrSum($value);
        }
        if (is_numeric($value)) {
            $result += $value;
        }
    }
    return $result;
}
var_dump(arrSum($myArray));

/* 4. Создать функцию которая определит сколько квадратов меньшего размера можно
вписать в квадрат большего размера размер возвращать в float
*/

function countSmallInBigSquare($bigsq, $smallsq): float
{
        return pow($bigsq, 2)/pow($smallsq, 2);
}
var_dump(countSmallInBigSquare(10, 3));
