<?php
//Преобразовать  числа  заданной  последовательности  натуральных   чисел  n0 ,n1,...,nm так, чтобы цифры каждого числа образовывали максимально возможные числа. 

for ($number = 1000; $number < 2000; $number++){
    changeNumber($number);
}

function changeNumber($number)
{
    echo $number . ' - ';
    $decrease = false;
    while (!$decrease){  
        $prev = $number % 10;
        $number = $number / 10;
        $bubble = bubble($number, $prev);
        $number = $bubble[0];
        $decrease = $bubble[1];
    }
    echo $number.PHP_EOL;
}




function bubble($number, $prev)
{
    $decrease = true;
    while ($number >= 1) {
        $digit = $number % 10;
        if($prev > $digit){
            $decrease = false;
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
    return [$bubbleNumber, $decrease];
}