<?php
//По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.
$initialNumber = readline('Number: ');
$digits = split($initialNumber);

for ($i=count($digits) - 1, $j = 0; $i >= 0; $i--, $j++) { 
    $number += $digits[$j]*10**$i;
}
echo $number;

function split($number)
{
    while( $number >= 1 ){
        $digits[] = $number % 10;
        $number = $number / 10;
    }
    return $digits;
}