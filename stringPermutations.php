<?php
/**
 * все варианты перестановок символов в строке
 *
 */

$test = "abcd"; //исходная строка
$count = strlen($test);
$arr = permutation($count); //массив шаблонов
$arrNew = permutStringBySample ($test, $arr); //массив измененных строк
print_r($arrNew);
/**
 * Функция создает массив строк, с элементами переставленными по заданному массиву шаблонов,
 * включая исходную строку
 * массив отсортирован по возрастанию
 * исходная строка принимается за шаблон 0123...n, где n = (длина строки - 1)
 * шаблоны для перестановок создаются перестановками исходного шаблона
 * например, для строки аб2з - исходный шаблон: 0123
 * шаблоны для перестановок:
 * 0132
 * 0321
 * 0231
 * ....
 * 3210
 *
 *
 * @param string $string строка, для которой делаем перестановки
 * @param array $arr массив с шаблонами перестановок, в данном случае полученный из функции permutation ()
 * @return array массив со всеми возможными перестановками символов строки
 */
function permutStringBySample ($string, $arr) {
    $arrNew = array();
    $arrString = array();
    //разбираем строку $string в массив
    $count = strlen($string);
    for ($i = 0; $i < $count; $i++) {
        $arrString[$i] = $string[$i];
    }
    //перебираем массив шаблонов построчно
    foreach ($arr as $value) {
        $count = strlen($value);
        $arrKey = array();
        $newArr = array();
        //разбираем строку с 1 вариантом перестановки в массив
        for ($i = 0; $i < $count; $i++) {
            $arrKey[$i] = $value[$i];
        }
        //$arrString - массив из символов исходной строки
        //$arrKey - массив из чисел - разобранная строка 1 варианта перестановки
        //нужно элементы $arrString поменять местами в порядке $arrKey
        for ($i = 0; $i < $count; $i++) {
            $newArr[$i] = $arrString[$arrKey[$i]];
        }
        //собираем новую строку, составленную в порядке $arrKey
        $newStr = implode("", $newArr);
        //записываем получившуюся строку в массив
        $arrNew[] = $newStr;
    }
    //сортировка по возрастанию
    sort($arrNew);
    return $arrNew;
}
/**
 * функция создает массив шаблонов, в которых заданы все варианты перестановок
 * для строки/массива с количеством элементов = $count
 * используется алгоритм Дейкстры
 * шаблоны состоят из чисел 0,1,3...$count-1
 *
 * @param int $count количество элементов, для которых вычисляются варианты перестановок
 * @return array массив всех возможных шаблонов с вариантами перестановок элементов
 */
function permutation($count) {
    $arr = array ();
    $str = "";
    for ($i = 0; $i < $count; $i++) {
        $str .= $i;
    }
    $strrev = strrev($str);
    $arr[] = $str;
    while ($str != $strrev) {
        for ($i = $count-2; $i >= 0; $i--) {
            if ($str[$i] < $str[$i+1]) {
                $min = $i+1;
                for ($j = $min; $j < $count; $j++) {
                    if ($str[$i] < $str[$j] && $str[$min] > $str[$j]) {
                        $min = $j;
                    }
                }
                list($str[$i], $str[$min]) = array($str[$min], $str[$i]);
                for ($m = $i+1; $m < $count; $m++) {
                    for ($n = $i+1; $n < $count; $n++) {
                        if ($str[$m] < $str[$n]) {
                            list($str[$m], $str[$n]) = array($str[$n], $str[$m]);
                        }
                    }
                }
                $arr[] = $str;
                break;
            }
        }
    }
    return $arr;
}
