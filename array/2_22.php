<?php
//В массиве А(N) найти максимальный из элементов, встречающихся только один раз.
$array = [888, -3, 4, 124, -4, 1, 4444, 44, 1, 4444, 2, 2, 2, 2, 21, -11, 2];

for ($i = 0; $i < count($array); $i++)
{
    if (isUnique($array, $i))
    {
        if (!isset($maxUnique))
            $maxUnique = $array[$i];

        if ($maxUnique < $array[$i])
            $maxUnique = $array[$i];
    }
}

echo $maxUnique;

function isUnique($array, $key)
{
    for ($i = 0; $i < count($array); $i++)
    {
        if ($array[$key] === $array[$i] && $key !== $i)
            return false;
    }
    return true;
}