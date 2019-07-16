<?php
//Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.
for ($number=1000; $number < 10000 ; $number++) { 
    $digits = split($number);
    if (isDigits($digits)){
        $numbers[] = $number;
    }
}

var_dump($numbers);

function isDigits($digits)
{
    for ($i=0; $i < count($digits); $i++) { 
        if (!isDigit($digits[$i])){
            return false;
        }
    }
    return true;
}

function isDigit($digit)
{
    $digits = [0, 2, 3, 7];
    for ($i=0; $i < count($digits); $i++) { 
        if ($digit === $digits[$i]){
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