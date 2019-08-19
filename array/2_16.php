<?php
//В  массиве  А(N)  определить  максимальную  длину последовательности равных элементов. 

$array = [888, -3, 4, 124, -4, 1, 44, 44, 1, 444, 2, 2, 2, 2, 21, -11, 2];

$maxSequence = 1;
for ($i = 0; $i < count($array); $i++){
    $sequence = sequence($array, $i);
    if ($maxSequence < $sequence){
        $maxSequence = $sequence;
    }
}
echo $maxSequence;

function sequence($array, $key)
{   
    $sequence = 1;
    for ($i = $key + 1; $i < count($array); $i++){
        if($array[$i] === $array[$key]){
            $sequence++;
        }else{
            return $sequence;
        }
    }
    return $sequence;
}