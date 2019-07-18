<?php
//Определить количество различных делителей целого числа N.
$number = readline('Number: ');

for ($divisor=2; $divisor <= $number / 2; $divisor++) {
    $remainder = $number % $divisor;
    if ($remainder === 0){
        $divisors++;
    }
}
echo $divisors+2;