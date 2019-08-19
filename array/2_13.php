<?php
//В  массиве  А(N)  найти  два  наименьших  элемента  и  два  наибольших элемента.

$array = [888, -3, 4, 124, -4, 1, 44, 1, 444, 2, 21, -11];

$arMaxMin = findMaxMin($array);
$prevMax = prevMax($array, $arMaxMin[0]);
$prevMin = prevMin($array, $arMaxMin[1]);

echo "$prevMax ; $arMaxMin[0]" . PHP_EOL;
echo "$prevMin ; $arMaxMin[1]" . PHP_EOL;

function prevMax($array, $max)
{   
    for ($i=0; $i < count($array); $i++) {
        if($array[$i] < $max){
            if (!isset($prevMax)){
                $prevMax = $array[$i];
            }
            if ($prevMax < $array[$i]){
                $prevMax = $array[$i];    
            }
        }
    }
    return $prevMax;
}

function prevMin($array, $min)
{
    for ($i=0; $i < count($array); $i++) {
        if($array[$i] > $min){
            if (!isset($prevMin)){
                $prevMin = $array[$i];
            }
            if ($prevMin > $array[$i]){
                $prevMin = $array[$i];    
            }
        }
    }
    return $prevMin;
}

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