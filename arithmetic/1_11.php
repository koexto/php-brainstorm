<?php
//Напечатать   те   элементы   последовательности   натуральных   чисел n0 ,n1,...,nm , которые делятся на сумму своих цифр.
for ($number=1; $number <=10000 ; $number++) { 
    if (isDivide($number)){
        echo $number . PHP_EOL;
    }
}

function isDivide($number)
{
    $remainder = $number % sum($number);
    if ($remainder === 0){
        return true;
    }
    return false;
}

function sum($number)
{
    while( $number >= 1 ){
        $sum += $number % 10;
        $number = $number / 10;
    }
    return $sum;
}