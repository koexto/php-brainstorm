<?php
//В массиве А(N) первый положительный элемент и последний отрицательный элемент переставить местами. 

$array = [-2, -3, 5, 1, 4, -1, 3, 3, -5, 1, 3, 2, 9];

var_dump(replacement($array));

function replacement($array)
{
    for ($i=0; $i < count($array); $i++) {
        if ($array[$i] > 0){
            $firstPositive = $array[$i];
            $indexLastNegative = lastNegative($i, $array);
            if ($indexLastNegative === NULL) return;
            $array[$i] = $array[$indexLastNegative];
            $array[$indexLastNegative] = $firstPositive;
            return $array;
        }
    }
    return;
}

function lastNegative($i, $array)
{
    for ($k=$i+1; $k < count($array); $k++) {
        if ($array[$k] < 0)
            $indexLastNegative = $k;
    }
    return $indexLastNegative;
}