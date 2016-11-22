<?php
/**
 * подсчет количества возможных вариантов маршрута из точки А в точку Б в прямоугольной матрице
 * 
 * 
 */
//создаем матрицу, по которой будем перемещаться
$desk = array (['X', 'X', 'X', 'X'], ['X', 'X', 'X', 'X'], ['X', 'X', 'X', 'X'], ['X', 'X', 'X', 'X']);
$tracePoint = array (0, 0);
$res = trace ($tracePoint, $desk);
print $res;
/**
 * рекурсивно обходим все возможные варианты движения, и если попадаем на точку
 * с заданными координатами, увеличиваем стический счетчик на 1
 * 
 * @staticvar int $route счетчик 
 * @param array $tracePoint текущая точка маршрута
 * @param array $desk матрица по которой двигаемся
 * @return int $route количество посещений точки матрицы с заданными координатами
 */
function trace ($tracePoint, $desk) {
    static $route;
    $desk[$tracePoint[0]][$tracePoint[1]] = "*"; //отмечаем уже посещенную точку матрицы
    $newPoint = array ();
    $newPoint = move ($desk, $tracePoint[0], $tracePoint[1]); //расчет возможных ходов    
    foreach ($newPoint as $value) { //двигаемся по всем доступным направлениям
        if ($value[0] == 3 && $value[1] == 3) { //подсчитываем, сколько раз посетили точку с заданными координатами
            $route++;
        }        
        trace ($value, $desk);
    }
    return $route;
}

function move ($desk, $h, $w, $height = 3, $width = 3) {   
    $move = array ([$h+1, $w], [$h-1, $w], [$h, $w-1], [$h, $w+1]); //массив с вариантами движения
    $newMove = array ();    
    foreach ($move as $value) {        
        if ($value[0] >= 0 //проверяем, не выходим ли за границы матрицы
                && $value[0] <= $height 
                && $value[1] >= 0 
                && $value[1] <= $width 
                && $desk[$value[0]][$value[1]] != "*") { //отсеиваем уже посещенные точки матрицы                 
            $newMove[] = $value;
        }
    }    
    return $newMove;
}