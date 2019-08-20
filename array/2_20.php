<?php
//В  массиве  А(N)  выбрать  все  элементы,  встречающиеся  только  один раз.
$array = [888, -3, 4, 124, -4, 1, 44, 44, 1, 444, 2, 2, 2, 2, 21, -11, 2];

$amount = 0;
for ($i = 0; $i < count($array); $i++){
    if (isUnique($array, $i)){
        $uniqueElements[] = $array[$i];
    }
}

print_r($uniqueElements);

function isUnique($array, $key)
{
    for ($i = 0; $i < count($array); $i++){
        if ($array[$key] === $array[$i] && $key !== $i){
            return false;
        }
    }
    return true;
}