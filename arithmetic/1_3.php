<?php
//Выяснить, образуют ли цифры данного натурального числа N возрастающую оследовательность.
$number = (int)readline('Number: ');
$increase = 'yes';

$k = $number % 10;
$number = $number / 10;
while ($number >= 1) {
    if($k <= $number % 10){
        $increase = 'no';
    }
    $k = $number % 10;
    $number = $number / 10;
}

echo $increase;
