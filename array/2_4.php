<?php
//В массиве А(N) найти количество пар одинаковых соседних элементов.

$array = [2, 3, 4, 2, 4, 1, 44, 1, 44, 2, 12, 11];

for ($i=0; $i < count($array); $i++) { 
    if (isIdentical($i, $array))
        $sum += 1;
}

echo $sum;

function isIdentical($i, $array)
{
    for ($k=$i + 1; $k < count($array); $k++) { 
        if ($array[$i] === $array[$k])
            return true;
    }
    return false;
}