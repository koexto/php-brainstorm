<?php
//Найти целое число в диапазоне от N до M с наибольшей суммой делителей.  
$prevSum = 0;
for ($number=1; $number < 10000; $number++) {
    $currenSum = sumDivisors($number);
    if ($prevSum < $currenSum){
        $prevSum = $currenSum;
        $numberGreaterSum = $number;
    }
}
echo $numberGreaterSum;



function sumDivisors($number)
{
    for ($divisor=1; $divisor <= $number / 2; $divisor++) {
        $remainder = $number % $divisor;
        if ($remainder === 0){
            $sum += $divisor;
        }
    }
    return $sum;
}