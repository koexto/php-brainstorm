<?php
//Найти среди натуральных чисел n, n+1,...,2n1 числа-близнецы, т. е. два таких простых числа, разность между которыми равна двум.  
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


for ($number = 1000; $number < 10000; $number++){
    if (isPrimeNumber($number)){
        //$prevPrimeNumber для первого случая не определена. Интерпретатор выводит замечание, но все работает. Допустимо ли такое?
        //или же лучше добавить проверку вида $prevPimeNumber = (!isset($prevPrimeNumber)) ? $number,
        //но тогда проверка будет происходить каждую итерацию цикла, что как-то избыточно
        isTwins($number, $prevPrimeNumber);
        $prevPrimeNumber = $number;
    }
}


function isTwins($number, $prevPrimeNumber)
{
    //if (!isset($prevPrimeNumber)) $prevPrimeNumber = $number;
    if ($number - 2 === $prevPrimeNumber){
        echo $prevPrimeNumber . ' - ' . $number . PHP_EOL;
    }
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
