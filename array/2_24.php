<?php
//Из  всех  участков массива А(N), сплошь состоящих из нулей, выбрать самый длинный и отметить индексы его начала и конца.
$array = [888, 0, 0, 124, -4, 0, 44, 44, 1, 0, 0, 0, 2, 2, 21, -11, 2];

$maxSequence = 0;

for ($i = 0; $i < count($array); $i++)
{
	if ($array[$i] === 0)
	{
		$sequenceOfZero = sequenceOfZero($array, $i);
		if ($maxSequence < $sequenceOfZero)
		{
			$maxSequence = $sequenceOfZero;
			$indexes = [$i, $i + $maxSequence - 1];
		}
	}
}

echo $maxSequence . PHP_EOL;
print_r($indexes);

function sequenceOfZero($array, $key)
{
	$sequenceOfZero = 1;
	for ($i = $key + 1; $i < count($array); $i++)
	{
		if ($array[$key] === $array[$i])
			$sequenceOfZero++;
		else
			return $sequenceOfZero;
	}
}