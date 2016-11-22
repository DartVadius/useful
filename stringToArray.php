<?php
function strToArr ($str) {
    $count = strlen($str);    
    $arr = array ();    
    for ($i = 0; $i < $count; $i++) {
        $arr[] = $str[$i];
    }
    return $arr;
}