<?php
//Среди натуральных чисел n0 ,n1,...,nm найти число с максимальной суммой делителей.

$maxSum = 0;
for($number = 1; $number < 1000; $number++){
    $sumDivisors = sumDivisors($number);
    if($sumDivisors > $maxSum)
        $maxSum = $sumDivisors;
}

echo $maxSum;

function sumDivisors($number)
{
    $sum = 1 + $number;
    for ($divisor=2; $divisor <= $number / 2; $divisor++) {
        $remainder = $number % $divisor;
        if ($remainder === 0){
            $sum += $divisor;
        }
    }
    return $sum;
}


