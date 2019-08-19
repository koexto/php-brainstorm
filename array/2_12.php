<?php
//В массиве А(N) найти наибольший из всех отрицательных элементов и наименьший из всех положительных.

$array = [2, -3, 4, 124, -4, 1, 44, 1, 444, 2, 21, -11];

for ($i = 0; $i < count($array); $i++){

    if ($array[$i] < 0) {
        if (!isset($maxFromNegative)) {
            $maxFromNegative = $array[$i];
        }
        if ($maxFromNegative < $array[$i]){
            $maxFromNegative = $array[$i];
        }
    }

    if ($array[$i] > 0){
        if (!isset($minFromPositive)){
            $minFromPositive = $array[$i];
        }
        if ($minFromPositive > $array[$i]){
            $minFromPositive = $array[$i];
        }
    }
}

echo "maxFromNegative = $maxFromNegative" . PHP_EOL;
echo "minFromPositive = $minFromPositive" . PHP_EOL;