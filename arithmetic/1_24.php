<?php
//Напечатать натуральное число N : а) в двоичной системе счисления; б) в шестнадцатеричной системе счисления.  
$number = (int)readline('N: ');

echo sprintf('%b', toBase($number, 2)).PHP_EOL;
echo sprintf('%x', toBase($number, 16)).PHP_EOL;

function toBase($number, $base)
{
     while ($number >= 1) {
        $digit = $number % $base;

        if ($base === 2)
            $newNumber += 0b10**$i++ * $digit;
        if ($base === 16)
            $newNumber += 0x10**$i++ * $digit;

        $number = (int)($number / $base);
    }
    return $newNumber;  
}

