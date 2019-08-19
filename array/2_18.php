<?php
//В массиве А(N) подсчитать количество различных элементов.
$array = [888, -3, 4, 124, -4, 1, 44, 44, 1, 444, 2, 2, 2, 2, 21, -11, 2];

$amount = 0;
for ($i = 0; $i < count($array); $i++){
    if (isDifferent($array, $i)){
        $amount++;
    }
}

echo $amount;

function isDifferent($array, $key)
{
    for ($i = 0; $i < count($array); $i++){
        if ($array[$key] === $array[$i] && $key !== $i){
            return false;
        }
    }
    return true;
}
