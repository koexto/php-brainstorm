<?php
//Найти среди натуральных чисел n, n+1,...,2n1 числа-близнецы, т. е. два таких простых числа, разность между которыми равна двум.  

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
