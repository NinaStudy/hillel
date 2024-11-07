<?php
//посчитать длину массива
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
var_dump(count($arr));


//переместить первые 4 элемента массива в конец массива
$arr2 = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$arrSplice=array_splice($arr2, 0,4);
var_dump(array_merge($arr2,$arrSplice));

//АБО
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$newarr = [];
foreach ($arr as $key => $value) {
    if ($key == 0 || $key == 1 || $key == 2 || $key == 3) {
        $newarr[]= $value;
        unset($arr[$key]);
    }
}
var_dump(array_merge($arr, $newarr));

//получить сумму 4,5,6 элемента
$arr3 = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$arr456 = array_slice($arr3, 3,3);
var_dump(array_sum($arr456));

// АБО

$sum456 = 0;
foreach ($arr3 as $k => $v) {
    if ($k == 3 || $k == 4 || $k == 5) {
        $sum456 += $arr3[$k];
    }
}
var_dump($sum456);


//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];
var_dump(array_diff($secondArr, $firstArr));


//найти все элементы которые присутствую в первом и отсутствуют во втором
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
    ];
var_dump(array_diff($firstArr, $secondArr));

    //найти все элементы значения которых совпадают
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];
var_dump(array_intersect($firstArr, $secondArr));

//найти все элементы значения которых отличается

$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];

$array1 = array_diff($firstArr, $secondArr);
$array2 = array_diff($secondArr, $firstArr);

var_dump(array_merge_recursive($array1, $array2));

//АБО
$diffArray = [];
foreach ($firstArr as $key=>$value) {
    if (!isset($secondArr[$key]) || $value != $secondArr[$key]) {
        $diffArray[] = $value;
    }
}
foreach ($secondArr as $key=>$value) {
    if (!isset($firstArr[$key]) || $value != $firstArr[$key]) {
        $diffArray[] = $value;
    }
}
var_dump($diffArray);

//получить все вторые элементы вложенных массивов
$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];

$newarray = [];
foreach ($firstArr as $key => $value) {
    if (is_array($value)) {
        $value = next($value);
        if($value) {
            $newarray[] = $value;
        }
    }
}
var_dump($newarray);

//получить общее количество элементов в массиве
$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];
var_dump(count ($firstArr,COUNT_RECURSIVE));

//получить сумму всех значений в массиве
$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];
function myArraySum(array $firstArr)
{
    $result = 0;
    foreach ($firstArr as $value) {
        if (is_array($value)) {
            $result = $result +  myArraySum($value);
        }
        if (is_numeric($value)) {
            $result = $result + $value;
        }
    }
    return $result;
}
var_dump(myArraySum($firstArr));