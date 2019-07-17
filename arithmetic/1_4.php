<?php
//Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.
for ($i=1000; $i < 10000; $i+=2 ) { 
    $increase = true;
    $decrease = true;
    $prev = $i % 10;
    $number = $i / 10;
    while ($number >= 1) {
        if($prev <= $number % 10){
            $increase = false;
        }
        if($prev >= $number % 10){
            $decrease = false;
        }
        $prev = $number % 10;
        $number = $number / 10;
    }
    if($increase || $decrease){
        echo $i.PHP_EOL;
    }
}



