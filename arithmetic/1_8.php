<?php
//Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.
for ($number=1000; $number < 10000 ; $number++) {
     if (noEqualDigits($number)){
        echo $number.PHP_EOL;
     }
}



function noEqualDigits($number)
{
    while ($number >= 1){
        $digit = $number % 10;
        $number /= 10;
        if (isEqual($number, $digit)){
            return false;
        }
    }
    return true;
}

function isEqual($number, $prevDigit)
{
    while ($number >= 1) {
        $digit = $number % 10;
        if ($prevDigit === $digit){
            return true;
        }
        $number /= 10;
    }
    return false;
}