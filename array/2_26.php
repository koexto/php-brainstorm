<?php
//В  массив  А(N)  вставить  максимальный  элемент  после  каждого  четного отрицательного элемента.  
$array = [888, -3, 4, 124, -4, 1, -28, 44, 1, 4444, 2, 2, 21, -11, 2];

$max = $array[0];
$indexMax = 0;

for ($i = 0; $i < count($array); $i++)
{ 
	if ($max < $array[$i])
		$max = $array[$i];
}

for ($i = 0; $i < count($array); $i++)
{
	$changedArray[] = $array[$i];
	if ($array[$i] < 0 && $array[$i] % 2 === 0)
	{
		$changedArray[] = $max;
	}
}

print_r($changedArray);

