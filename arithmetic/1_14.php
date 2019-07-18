<?php
//Парными простыми числами называются два простых числа, разность которых равна двум. Например, 3 и 5; 11 и 13. Найти 10 парных простых чисел.
$pairs = 0;
$number = 2;
$prevPrimeNumber = 2;
while ($pairs < 10){
    if(isPrimeNumber($number)){
        if($number - 2 === $prevPrimeNumber){
            echo $prevPrimeNumber . ' - ' . $number . PHP_EOL;
            $pairs++;
        }
        $prevPrimeNumber = $number;
    }
    $number++;
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