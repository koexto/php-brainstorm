<?php
//Натуральное число N разложить на простые множители.
$number = (int)readline('Number: ');

while ($number != 1){
    $primeNumber = primeNumber($number);
    if($number % $primeNumber === 0){
        echo $primeNumber.PHP_EOL;
        $number /= $primeNumber;
    }
}

function primeNumber($number){ 
    for ($divisor=2; $divisor <= $number/2; $divisor++) { 
        $remainder = $number % $divisor;
        if ($remainder === 0){
            return $divisor;
        }
    }
    return $number;
}