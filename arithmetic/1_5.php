<?php
//По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.
$number = readline('Number: ');

while($number >= 1){
    $reversNumber += $number % 10;
    $reversNumber *=10;
    $number = $number / 10;
}

echo $reversNumber/10;

