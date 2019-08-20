<?php
//Из  массива  А(N)  удалить  все  элементы,  стоящие  между  первым  минимальным и последним максимальным элементами.

$array = [1, 3, 4, 124, 4, 1, 44, 1, 44, 2, 21, 124, 11];

$maxMinIndex = getMaxMinIndex($array);

if($maxMinIndex[0] < $maxMinIndex[1])
{
	$firsIndex = $maxMinIndex[0];
	$lastIndex = $maxMinIndex[1];
}
else
{
	$firsIndex = $maxMinIndex[1];
	$lastIndex = $maxMinIndex[0];
}

for ($i = $firsIndex + 1; $i < $lastIndex; $i++)
{
	unset($array[$i]);
}

print_r($array);

function getMaxMinIndex($array)
{
	$max = $array[0];
	$min = $array[0];

	for ($i=0; $i < count($array); $i++) { 
		if ($max <= $array[$i]){
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
