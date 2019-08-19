<?php
//В массиве А(N) найти последний четный положительный элемент,  кратный заданному числу р, заменить его индексом и поставить в  конец  массива.
$array = [888, -3, 4, 28, -4, 1, 44, 2, 28, 21, -11, 2];
$p = 7;

$key = lastPositive($array, $p);
$array[] = $array[$key];
$array[$key] = $key;

print_r($array);

function lastPositive($array, $p){
    for ($i = count($array) - 1; $i>=0; $i--){
        if ($array[$i] > 0 && $array[$i] % 2 === 0 && $array[$i] % $p === 0){
            return $i;
        }   
    }
}
