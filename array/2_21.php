<?php
//В массиве А(N) выбрать без повторений все элементы, встречающиеся более одного раза.
$array = [888, -3, 4, 124, -4, 1, 44, 44, 1, 444, 2, 2, 2, 2, 21, -11, 2];

$changedArray = $array;

while (count($changedArray) > 1)
{
    $isNoUnique = isNoUnique($changedArray);
    if (isset($isNoUnique[0]))
    {
        $noUniqueElements[] = $isNoUnique[0];
    }
    $changedArray = $isNoUnique[1];
}

print_r($noUniqueElements);

function isNoUnique($array)
{
    for ($i = 1; $i < count($array); $i++)
    {
        if ($array[0] === $array[$i])
            $result[0] = $array[0];
        else
            $result[1][] = $array[$i];
    }
    return $result;
}