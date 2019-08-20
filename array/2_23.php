<?php
//В массиве А(N) найти минимальное из чисел, встречающихся более одного раза.
$array = [888, -3, 4, 124, -4, 1, 44, 44, 1, 444, 2, 2, 2, 2, 21, -11, 2];

for ($i = 0; $i < count($array); $i++)
{
    if (!isUnique($array, $i))
    {
        if (!isset($minNoUnique))
            $minNoUnique = $array[$i];

        if ($minNoUnique > $array[$i])
            $minNoUnique = $array[$i];
    }
}

echo $minNoUnique;

function isUnique($array, $key)
{
    for ($i = 0; $i < count($array); $i++)
    {
        if ($array[$key] === $array[$i] && $key !== $i)
            return false;
    }
    return true;
}