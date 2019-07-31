<?php
//Среди заданной последовательности натуральных чисел n0 ,n1,...,nm найти сумму и количество тех чисел, которые равны сумме факториалов своих цифр.

for ($number=1; $number < 10000; $number++) { 
    if($number === sumFactorial($number)){
        $i++;
        $sum +=$number;
    }
}

echo 'Количество - ' . $i . '; Сумма - ' . $sum;

function sumFactorial($number)
{
    while( $number >= 1 ){
        $digit = $number % 10;
        factorial($digit);
        $sum += factorial($digit);
        $number = $number / 10;
    }
    return $sum;
}

function factorial($digit)
{
    if($digit === 0)
        return 1;

    $factorial = 1;
    for($i=1; $i<=$digit; $i++){
        $factorial *=$i;
    }
    return $factorial;
}