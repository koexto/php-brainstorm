<?php
//В  массив  А(N),  упорядоченный  по  возрастанию,  вставить   k  элементов, не нарушая его последовательности.
$array = [1, 1, 2, 3, 7, 27, 33, 33, 33, 45, 77];
$kElements = [-4, 1, 2, 88, 4, 44];

$changedArray = [1, 1, 2, 3, 7, 27, 33, 33, 33, 45, 77];

for ($i = 0; $i < count($kElements); $i++)
{
	$changedArray = addElement($changedArray, $kElements[$i]);
}

print_r($changedArray);

function addElement($array, $element)
{
	$insert = false;
	$cnt = count($array);
	for ($i = 0; $i < $cnt; $i++)
	{
		if ($element < $array[$i] && !$insert)
		{
			$changedArray[] = $element;
			$insert = true;
		}

		$changedArray[] = $array[$i];
		
		if (!$insert && $i === $cnt - 1)
			$changedArray[] = $element;
	}
	return $changedArray;
}