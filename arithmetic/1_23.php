<?php
//Дано целое число N. Преобразовать число так, чтобы его цифры следовали в порядке возрастания.  
$number = (int)readline('N: ');

$increase = false;
while (!$increase){  
    $prev = $number % 10;
    $number = $number / 10;
    $bubble = bubble($number, $prev);
    $number = $bubble[0];
    $increase = $bubble[1];
    echo $number.PHP_EOL;
}


function bubble($number, $prev)
{
    $increase = true;
    while ($number >= 1) {
        $digit = $number % 10;
        if($prev < $digit){
            $increase = false;
            $bubbleNumber += 10**$i++ * $digit;
            $firstDigit = $prev;
        }else{
            $bubbleNumber += 10**$i++ * $prev;
            $prev = $digit;
            $firstDigit = $digit;
        }
        $number = $number / 10;
    }
    $bubbleNumber += 10**$i * $firstDigit;
    return [$bubbleNumber, $increase];
}



