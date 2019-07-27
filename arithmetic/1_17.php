<?php
//Найти наибольший общий делитель (НОД) двух натуральных чисел N и M.

$n = readline('N: ');
$m = readline('M: ');

$gcd = $m > $n
    ? $gcd = gcd($m, $n)
    : $gcd = gcd($n, $m);

echo $gcd;

function gcd($big, $small)
{
    while ($big % $small != 0){
        $remainder = $big % $small;
        $big = $small;
        $small = $remainder;
    }
    return $small;
}
