<?php
//В массиве А(N) найти первый отрицательный элемент, предшествующий максимальному элементу, и последний положительный элемент,  стоящий за минимальным элементом.

$array = [2, -3, 4, 124, -4, 1, 44, 1, 444, 2, 21, -11];

$keysMaxMin = findKeyMaxMin($array);
echo findFirstNegative($array, $keysMaxMin[0]) . PHP_EOL;
echo findLastPositive($array, $keysMaxMin[1]) . PHP_EOL;

function findFirstNegative($array, $keyMax)
{
    for ($i = 0; $i < count($array); $i++){
        if ($array[$i] < 0 && $i < $keyMax){
            return $array[$i];
        }
    }
    return 'не найдены отрицательные элементы, предшествующие макс. элементу';
}

function findLastPositive($array, $keyMin)
{
    for ($i = 0; $i < count($array); $i++){
        if ($array[$i] > 0){
            $lastPositive = $array[$i];
            $key = $i;
        }
    }

    if (isset($lastPositive) && $key > $keyMin){
        return $lastPositive;
    }
    return 'не найдены положительные элементы, следующие за мин. элементом';
}

//поиск ключей макс/мин элементов
function findKeyMaxMin($array)
{   
    $max = $array[0];
    $min = $array[0];
    $indexMax = 0;
    $indexMin = 0;

    for ($i=0; $i < count($array); $i++) {
        if ($max < $array[$i]){
            $max = $array[$i];
            $indexMax = $i;
        }

        if ($min > $array[$i]){
            $min = $array[$i];
            $indexMin = $i;
        }
    }
    return [$indexMax, $indexMin];
}
