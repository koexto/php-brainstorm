<?php
//Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой простых делителей.
$maxSum = 0;
for($number = 0; $number < 1000; $number++){
    $sumPrimeDivisors = sumPrimeDivisors($number);
    if($sumPrimeDivisors > $maxSum)
        $maxSum = $sumPrimeDivisors;
}
echo $maxSum;

function sumPrimeDivisors($number)
{
    if ($number === 0) return 0;
    if ($number === 1) return 1; 
    $sum = isPrimeNumber($number) ? 1 + $number : 1;

    for ($divisor=2; $divisor <= $number / 2; $divisor++) {
        $remainder = $number % $divisor;
        if ($remainder === 0 && isPrimeNumber($divisor)){
            $sum += $divisor;
        }
    }
    return $sum;
}

function isPrimeNumber($number){ 
    for ($divisor=2; $divisor <= $number / 2; $divisor++) { 
        $remainder = $number % $divisor;
        if ($remainder === 0){
            return false;
        }
    }
    return true;
}