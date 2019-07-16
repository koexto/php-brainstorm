<?php
//Выяснить, образуют ли цифры данного натурального числа N возрастающую оследовательность.
$initialNumber = (int)readline('Number: ');

$digits = split($initialNumber);
echo isOrder($digits);

function isOrder($digits)
{
    for ($i=0; $i < count($digits) - 1; $i++) {
        if ($digits[$i+1] >= $digits[$i]){
            return 'no';
        }
    }
    return 'yes';
}

function split($number)
{
    while( $number >= 1 ){
        $digits[] = $number % 10;
        $number = $number / 10;
    }
    return $digits;
}
