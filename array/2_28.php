<?php
//Из  массива  А(N)  удалить  элементы,  стоящие  за  первым  максимальным элементом, количество цифр которых равно  k.
$array = [0, 0, 124, -4, 0, 44, 44, 124, 2, 2, 21, -11, 2];
$k = 2;

$indexMax = getIndexMax($array);
$changedArray = beforeMax($array, $indexMax);

for ($i = $indexMax + 1; $i < count($array); $i++)
{
	if (strlen(str_replace('-', '', $array[$i])) !== $k)
	{
		$changedArray[] = $array[$i];
	}
}

print_r($changedArray);

function getIndexMax($array)
{
	for ($i = 0; $i < count($array); $i++)
	{
		if ($max < $array[$i])
		{
			$max = $array[$i];
			$indexMax = $i;
		}
	}
	return $indexMax;
}

function beforeMax($array, $indexMax)
{
	for ($i = 0; $i <= $indexMax; $i++)
		$changedArray[] = $array[$i];

	return $changedArray;
}




