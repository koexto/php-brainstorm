<?php
//В  массиве  А(N)  максимальные  элементы,  являющиеся  четными  числами, заменить значениями их индексов.

$array = [2, 3, 4, 124, 4, 1, 447, 1, 124, 2, 21, 11];

$max = $array[0];
$max = maxEven($array, $max);

for ($i=0; $i < count($array); $i++) {
    if ($array[$i] === $max)
        $array[$i] = $i;
}

var_dump($array);

function maxEven($array, $max){
    for ($i=0; $i < count($array); $i++) { 
        if ($max < $array[$i] && $array[$i] % 2 === 0)
            $max = $array[$i];
    }
    return $max;
}