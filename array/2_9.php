<?php
//В  массиве  А(N)  найти  максимальный  среди  четных  элементов  и  минимальный среди нечетных. 
$array = [44, 3, 4, 124, 55, 1, 447, 1, 124, 2, 21, 11];

for ($i=0; $i < count($array); $i++) {
    if ($array[$i] % 2 === 0){
        if (!isset($maxEven)) $maxEven = $array[$i];
        if ($maxEven < $array[$i]) $maxEven = $array[$i];
    }else{
        if (!isset($minUneven)) $minUneven = $array[$i];
        if ($minUneven > $array[$i]) $minUneven = $array[$i];
    }
}

echo 'maxEven - ' . $maxEven . PHP_EOL;
echo 'minUneven - ' . $minUneven . PHP_EOL;