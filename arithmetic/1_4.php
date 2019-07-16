<?php
//Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.



for ($number=1000; $number < 10000; $number+=2 ) { 
    $digits = split($number);
    if (isDecrease($digits) || isIncrease($digits)){
        $numbers[] = $number;
    }

}

var_dump($numbers);

function isDecrease($digits)
{
    for ($i=0; $i < count($digits) - 1; $i++) {
        if ($digits[$i+1] <= $digits[$i]){
            return false;
        }
    }
    return true;
}

function isIncrease($digits)
{
    for ($i=0; $i < count($digits) - 1; $i++) {
        if ($digits[$i+1] >= $digits[$i]){
            return false;
        }
    }
    return true;
}

function split($number)
{
    while( $number >= 1 ){
        $digits[] = $number % 10;
        $number = $number / 10;
    }
    return $digits;
}

