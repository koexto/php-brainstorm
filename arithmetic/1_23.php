<?php
//Дано целое число N. Преобразовать число так, чтобы его цифры следовали в порядке возрастания.  
$number = (int)readline('N: ');

//321
//p i
//1 2
//
$k=0;
$increase = false;
while ($k<5){
    $increase = true;
    $prev = $number % 10;
    $number = $number / 10;
    $i = 0;
    while ($number >= 1) {
        $digit = $number % 10;
        //echo $digit.PHP_EOL;
        if($prev <= $digit){
            $increase = false;
            $newNumber += 10**$i * $digit;
        }else{
            $newNumber += 10**$i * $prev;
            $prev = $digit;

        }

        $number = $number / 10;
        $i++;
    }
    $newNumber += 10**$i * $digit;
    echo 'newNumber='.$newNumber.PHP_EOL;
    $number = $newNumber;
    $k++;
}




