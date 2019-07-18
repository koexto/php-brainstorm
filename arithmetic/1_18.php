<?php
//Два натуральных числа называют дружественными, если каждое из них равно сумме всех делителей другого. Найти все пары дружественных чисел, лежащих в диапазоне от N до M.

for ($number=5; $number <  300 ; $number++) {  
    if ($twoNumber = isFriends($number)){
        echo $number . ' - ' . $twoNumber . PHP_EOL;
    }
}

function isFriends($number){
    $sumOne = sumDivisors($number);
    $numberOne = $number;
    for ($numberTwo = $number+1; $numberTwo <  300; $numberTwo++){
        $sumTwo = sumDivisors($numberTwo);
        if ($sumOne === $numberTwo && $sumTwo === $numberOne){
            return $numberTwo;
        }
    }
    return false;
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