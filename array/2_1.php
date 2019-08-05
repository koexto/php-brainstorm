<?php
//В    массиве  А(N)  найти:    а)  число  элементов,  предшествующих  первому отрицательному элементу;  б) сумму нечетных элементов массива, следующих за последним отрицательным элементом.

$array = [2, 3, 5, 1, 4, -1, 3, 3, -5, 1, 3, 2, 9];

calculateElements($array);

function calculateElements($array)
{
    for ($i=0; $i < count($array); $i++) {
        if ($array[$i] < 0){
            echo 'Число элементов до отрицательного элемента - ' . $i . PHP_EOL;
            echo 'Сумма нечетных элементов - ' . unevenSum($i, $array) . PHP_EOL;
            return;
        }
    }
    echo 0;
    return;
}

function unevenSum($i, $array)
{
    for ($k=$i+1; $k < count($array); $k++) {
        if ($array[$k] % 2 !== 0)
            $sum += $array[$k];
        if ($array[$k] < 0)
            $sum = 0;
    }
    return $sum;
}