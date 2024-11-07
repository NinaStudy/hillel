<?php
/*
 * task1 Отримати залишок від ділення 7 на 3
 */

$number1 = 7;
$number2 = 3;
$result = $number1 % $number2;

/*
 * task2 Отримати цілу частину ділення 7 и 7,15
 */
$number1 = 7;
$number2 = 7.15;
$result = intdiv($number1, $number2);

/*
 * task3 Отримати корінь из 25
 */
$number1 = 25;
$result = (sqrt($number1));

/*
 * task4 Отримати 4-е слово з фрази - Десять негритят пошли купаться в море
 */
$string = 'Десять негритят пошли купаться в море';
$divstring = (explode(' ',$string));
$word4 = $divstring[3];

/*
 * task5 Отримати 17-й символ із фрази - Десять негритят пошли купаться в море
 */
$string = 'Десять негритят пошли купаться в море';
$symbol17 = mb_substr($string, 16, 1);

/*
 * task6 Зробити великою кожну першу букву слів фрази - Десять негритят пошли купаться в море
 */
$string = 'Десять негритят пошли купаться в море';
$bigEveryFirstSymbol = mb_convert_case($string, MB_CASE_TITLE,);

/*
 * task7 Порахувати длину строки - Десять негритят пошли купаться в море
 */
$string = 'Десять негритят пошли купаться в море';
$stringLength = mb_strlen($string);

/*
 * task8 Чи вірно твердження true дорівнює 1
 */
$compare = true == 1;

/*
 * task9 Чи вірно твердження false тождественно 0
 */
$identical = false === 0;

/*
 * task10 Яка строка більше three - три
 */
$string1 = 'three';
$string2 = 'три';
$compare = strcmp($string1, $string2);
var_dump($compare);

$string1 = 'three';
$string2 = 'три';
$stringLength1 = mb_strlen($string1);
$stringLength2 = mb_strlen($string2);
$compare = $stringLength1 <=> $stringLength2;
var_dump($compare);

/*
 * task11 Яке число більше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
 */
 $number1 = 125*13+7;
 $number2 = 223+28*2;
 $compare = $number1 <=> $number2;
