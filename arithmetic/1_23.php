<?php
//Дано целое число N. Преобразовать число так, чтобы его цифры следовали в порядке возрастания.  
$number = (int)readline('N: ');

$k=0;
$increase = false;
while (!$increase){
    $increase = true;
    $prev = $number % 10;
    $number = $number / 10;
    echo 'Number='.$number.PHP_EOL;
    $i = 0;
    while ($number >= 1) {
        $digit = $number % 10;
        //echo $digit.PHP_EOL;
        if($prev < $digit){
            $increase = false;
            $newNumber += 10**$i * $digit;
            $last = $prev;
        }else{
            $newNumber += 10**$i * $prev;
            $prev = $digit;
            $last = $digit;
        }
        $number = $number / 10;
        $i++;
        echo $newNumber.PHP_EOL;
    }
    $newNumber += 10**$i * $last;
    echo 'newNumber='.$newNumber.PHP_EOL;
    $number = $newNumber;
    $newNumber = 0;
    $k++;
}



