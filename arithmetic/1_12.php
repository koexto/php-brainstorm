<?php
//Определить, является ли заданное целое число N простым.
$number = readline('Number: ');

if (isPrimeNumber($number)) {
    echo 'yes';
}else{
    echo 'no';
}

function isPrimeNumber($number){ 
    for ($divisor=2; $divisor <= $number / 2; $divisor++) { 
        $remainder = $number % $divisor;
        if ($remainder === 0){
            return false;
        }
    }
    return true;
}