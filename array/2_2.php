<?php
//Дан массив А(N). Получить массив В(N), i-элемент которого равен  среднему арифметическому первых i элементов массива  А.

$array = [2, 3, 4, 2, 4, 1, 44, 1, 55, 2, 12, 11];

for ($i=0; $i < count($array); $i++) { 
    $sum += $array[$i];
    $average = $sum / ($i + 1);
    $arrAverage[$i] = $average;
}

var_dump($arrAverage);