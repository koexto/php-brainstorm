<?php
//Выяснить, образуют ли цифры данного натурального числа N возрастающую оследовательность.
$number = (int)readline('Number: ');
$increase = 'yes';

$prev = $number % 10;
$number = $number / 10;
while ($number >= 1) {
    if($prev <= $number % 10){
        $increase = 'no';
    }
    $prev = $number % 10;
    $number = $number / 10;
}

echo $increase;
