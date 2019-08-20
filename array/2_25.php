<?php
//В массив А(N) вставить после первого максимального элемента  k   минимальных элементов массива.

$array = [0, 0, 124, -4, 0, 44, 44, 124, 2, 2, 21, -11, 2];
$k = 4;

$max = $array[0];
$min = $array[0];
$indexMax = 0;

for ($i=0; $i < count($array); $i++)
{ 
    if ($max < $array[$i])
    {
        $max = $array[$i];
        $indexMax = $i;
    }
    if ($min > $array[$i])
        $min = $array[$i];
}

for ($i = 0; $i < count($array); $i++)
{
	$changedArray[] = $array[$i];
	if ($i === $indexMax)
	{
		for ($l = 0; $l < $k; $l++){
			$changedArray[] = $min;
		}
	}
}

print_r($changedArray);


