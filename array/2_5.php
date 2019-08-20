<?php
//В массиве А(N) найти максимальный и минимальный элементы и  переставить их местами.

$array = [2, 3, 4, 124, 4, 1, 44, 1, 44, 2, 21, 11];
$max = $array[0];
$min = $array[0];

for ($i=0; $i < count($array); $i++) { 
    if ($max < $array[$i]){
        $max = $array[$i];
        $indexMax = $i;
    }
    if ($min > $array[$i]){
        $min = $array[$i];
        $indexMin = $i;
    }
}

$array[$indexMax] = $min;
$array[$indexMin] = $max;

print_r($array);
