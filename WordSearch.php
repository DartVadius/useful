<?php
/**
 * https://www.codeeval.com/open_challenge_scores/?pkbid=65
 */
$test = "SEEDFSABC";
$count = strlen($test);
//строим матрицу, в которой будет происходить поиск 
//поиск в матрице происходит по (№ строки : № столбца)
$desk = array (['A', 'B', 'C', 'E'], ['S', 'F', 'C', 'S'], ['A', 'D', 'E', 'E']);
$word = array ();
$start = array ();
//разбираем строку, которую ищем, в массив
for ($i = 0; $i < $count; $i++) {
    $word[] = $test[$i];
}

//определяем стартовые точки в матрице
foreach ($desk as $str => $value) {
    foreach ($value as $column => $letter) {
        if ($word[0] == $letter) {
            $start[] = [$str, $column];
        }
    }
}
$k = 1;    
//запускаем поиск из каждой стартовой точки
foreach ($start as $tracePoint) {
    trace ($tracePoint, $word, $desk, $k);
}

if ($result == TRUE) {
    print "True\n";
} else {
    print "False\n";
}
unset ($result);
/**
 * поиск соответствия строки 
 * 
 * @global boolean $result флаг - если строка найдена = TRUE
 * @param array $tracePoint точка матрицы, относительно которй мы ищем возможные
 * ходы
 * @param array $word строка, которе мы ищем
 * @param array $desk матрица, в которой ищем
 * @param int $i ключ символа строки в массиве
 * @return boolean
 */
function trace ($tracePoint, $word, $desk, $i) {
    global $result;
    $desk[$tracePoint[0]][$tracePoint[1]] = "*"; //отмечаем уже посещенную точку матрицы
    $newPoint = array ();
    $newPoint = move ($desk, $word[$i], $tracePoint[0], $tracePoint[1]); //расчет возможных ходов
    if (empty($newPoint)) {
        return FALSE;
    }
    if ($i == count($word) - 1) {
        $result = TRUE;
    }
    $i++;       
    foreach ($newPoint as $value) { //запускаем поиск соответствия для всех возможных ходов
        print "letter $i, new iteratoin\n";
        trace ($value, $word, $desk, $i);            
    }    
}

/**
 * создаем массив с возможными вариантами движения из заданной точки
 * 
 * @param array $desk матрица, в которой отмечены посещенные точки
 * @param string $letter символ, для поиска соответсвия в возможных вариантах движения
 * @param int $h текущее положение в строке
 * @param int $w текущее положение в столбце
 * @param int $height количество строк в матрице, считаем от нуля
 * @param int $width количество столбцов в матрице, считаем от нуля
 * @return array $newMove массив с вариантами движения
 */
function move ($desk, $letter, $h, $w, $height = 2, $width = 3) {
    print_r($desk);
    print "letter $letter \n";
    $move = array ([$h+1, $w], [$h-1, $w], [$h, $w-1], [$h, $w+1]); //массив с вариантами движения
    $newMove = array ();    
    foreach ($move as $value) {        
        if ($value[0] >= 0 //проверяем, не выходим ли за границы матрицы
                && $value[0] <= $height 
                && $value[1] >= 0 
                && $value[1] <= $width 
                && $desk[$value[0]][$value[1]] != "*" //отсеиваем уже посещенные точки матрицы
                && $desk[$value[0]][$value[1]] == $letter) { //проверяем, есть ли в оставшихся вариантах нужный символ
            $newMove[] = $value;
        }
    }
    print_r($newMove);
    return $newMove;
}