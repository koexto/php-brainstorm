<?php
//Найти наибольший общий делитель (НОД) двух натуральных чисел N и M.
$n = readline('N: ');
$m = readline('M: ');

echo commonDivisor($n, $m);

function commonDivisor($n, $m)
{
    if ($n % $m === 0){
        return $m;
    }
    if ($m % $n === 0){
        return $n;
    }

    $divisor = (int)($n / 2);
    for ($divisor; $divisor >= 1; $divisor--) {
        if ($n % $divisor === 0){
            if ($m % $divisor === 0){
                return $divisor;
            }
        }
    }
}
