<?php
//В массиве А(N) поменять местами последний отрицательный элемент с максимальным элементом.  
$array = [2, 3, 4, 125, 4, 1, -447, 1, 124, -2, 21, 11];

$max = $array[0];

for ($i=0; $i < count($array); $i++) { 
    if ($max < $array[$i]){
        $max = $array[$i];
        $indexMax = $i;
    }
    if ($array[$i] < 0){
        $indexNegative = $i;
    }
}

$array[$indexMax] = $array[$indexNegative];
$array[$indexNegative] = $max;

var_dump($array);