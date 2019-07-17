<?php
//Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.
for ($number=1000; $number < 10000 ; $number++) {
    $digits = split($number);   
    if (noEqualDigits($digits)) {
        $numbers[] = $number;
    }  
}

var_dump($numbers);

function noEqualDigits($digits)
{
    for ($i=0; $i < count($digits); $i++) { 
        if (isEqual($digits, $i)){
            return false;
        }
    }
    return true;
}

function isEqual($digits, $i)
{
    for ($j=$i+1; $j < count($digits); $j++) {
        if ($digits[$i] === $digits[$j] ){
            return true;
        }
    }
    return false;
}

function split($number)
{
    while( $number >= 1 ){
        $digits[] = $number % 10;
        $number = $number / 10;
    }
    return $digits;
}