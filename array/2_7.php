<?php
//В  массиве  А(N)  найти  номер  элемента,  сумма  которого  со  следующим за ним элементом максимальна, и номер элемента, сумма которого с предыдущим элементом минимальна. 

$array = [44, 3, 4, 124, 55, 1, 447, 1, 124, 2, 21, 11];

$minSum = $array[1] + $array[0];
$maxSum = $array[1] + $array[0];
$elementMaxSum = 0;
$elementMinSum = 1;

for ($i = 1; $i < count($array)-1; $i++){
    $sum = $array[$i] + $array[$i + 1];
    if ($maxSum < $sum){
        $maxSum = $sum;
        $elementMaxSum = $i;
    }
}

for ($i = 2; $i < count($array); $i++){
    $sum = $array[$i] + $array[$i - 1];
    if ($minSum > $sum){
        $minSum = $sum;
        $elementMinSum = $i;
    }
}

echo $elementMaxSum.PHP_EOL;
echo $elementMinSum.PHP_EOL;