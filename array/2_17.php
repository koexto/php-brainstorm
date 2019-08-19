<?php
// В массиве А(N) подсчитать количество элементов, встречающихся  более одного раза.
$array = [888, -3, 4, 124, -4, 1, 44, 44, 1, 444, 2, 2, 2, 2, 21, -11, 2];

$amount = 0;
$changedArray = $array;

while (count($changedArray) > 1){
    $isMoreThenOne = isMoreThenOne($changedArray);
    if ($isMoreThenOne[0]){
        $amount++;
    }
    $changedArray = $isMoreThenOne[1];
}

echo $amount;

function isMoreThenOne($array)
{
    for ($i = 1; $i < count($array); $i++){
        if ($array[0] === $array[$i]){
            $result[0] = true;
        }else{
            $result[1][] = $array[$i];
        }
    }
    return $result;
}