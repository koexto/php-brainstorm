<?php
//В  массиве  А(N)  все  четные  элементы  заменить  максимальным  элементом,  а нечетные минимальным.

$array = [2, 3, 4, 124, 4, 1, 44, 1, 44, 2, 21, 11];

$arMaxMin = findMaxMin($array);

for ($i = 0; $i < count($array); $i++){
    $array[$i] = ($array[$i] % 2 === 0 ? $arMaxMin[0] : $arMaxMin[1]);
}

var_dump($array);

function findMaxMin($array)
{   
    $max = $array[0];
    $min = $array[0];

    for ($i=0; $i < count($array); $i++) {
        if ($max < $array[$i]){
            $max = $array[$i];
        }

        if ($min > $array[$i]){
            $min = $array[$i];
        }
    }
    return [$max, $min];
}