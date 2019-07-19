<?php
//Даны натуральные числа N и M. Определить, являются ли они взаимно простыми числами. Взаимно простые числа не имеют общих делителей, кроме единицы. 
$n = (int)readline('N: ');
$m = (int)readline('M: ');

if (isDivisors($n, $m)){
    echo 'no';
}else{
    echo 'yes';
}


function isDivisors($n, $m)
{
    if ($n % $m === 0 || $m % $n === 0){
        return true;
    }

    for ($divisor=2; $divisor <= $n / 2; $divisor++) {
        $remainder = $n % $divisor;
        if ($remainder === 0){
            if ($m % $divisor === 0){
                echo $divisor.PHP_EOL;
                return true;
            }
        }
    }
    return false;
}