<?php
//Найти все меньшие N числа-палиндромы, которые при возведении в квадрат дают палиндром. Число называется палиндромом, если его запись читается одинаково с начала и с конца.
$initialNumber = readline('Number: ');

for ($number=0; $number < $initialNumber; $number++) {
    if (isPalindrome($number)){
        echo $number . PHP_EOL; 
    }
}

function isPalindrome($number){
    if ($number !== reverse($number)){
        return false;
    }
    if ($number**2 !== reverse($number**2)){
        return false;
    }
    return true;
}

function reverse($number)
{
    $reverse = 0;
    while ($number >= 1) {
        $reverse = $reverse*10 + $number % 10;
        $number /= 10;
    }
    return $reverse;
}
