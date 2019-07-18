<?php
//Натуральное число называют совершенным, если оно равно сумме всех своих делителей, не считая его самого. Например, 6=1+2+3. Найти все совершенные числа в диапазоне от N до M. 
for ($number=5; $number <  10000 ; $number++) { 
    if ($number === sumDivisors($number)){
        echo $number . PHP_EOL;
    }
}


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