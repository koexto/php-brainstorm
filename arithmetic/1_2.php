<?php
//Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.
$initialNumber = (int)readline('Number: ');

for ($number=1000; $number < 10000 ; $number++) { 
    $sum = sum($number);
    if ($sum === $initialNumber) {
        $numbers[] = $number;
    }
}

var_dump($numbers);

function sum($number)
{
    while( $number >= 1 ){
    $sum += $number % 10;
        $number = $number / 10;
    }
    return $sum;
}

