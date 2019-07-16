<?php
//Выяснить, есть ли в записи натурального числа N две одинаковые цифры.
$initialNumber = readline('Number: ');
$digits = split($initialNumber);
for ($i=0; $i < count($digits); $i++) { 
    if (isEqual($digits, $i)){
        echo 'yes';
        exit;
    }
}
echo 'no';

function isEqual($digits, $i)
{
    for ($j=$i+1; $j < count($digits); $j++) { 
        if ($digits[$i] === $digits[$j] ){
            return true;
        }
    }
    return false;
}

function split($number)
{
    while( $number >= 1 ){
        $digits[] = $number % 10;
        $number = $number / 10;
    }
    return $digits;
}