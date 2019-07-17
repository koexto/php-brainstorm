<?php
//Дано  натуральное  число  N.  Определить,  является  ли  оно  автоморфным. Автоморфное число  равно последним разрядам квадрата этого числа. Например,  5 и 25,  6 и 36,  25 и 625.
$initialNumber = (int)readline('Number: ');

if (isAutoMorf($initialNumber)){
    echo 'yes';
}else{
    echo 'no';
}

function isAutoMorf($initialNumber)
{
    $k = 0;
    $number = $initialNumber**2;
    while ($number >= 1){
        $digit = $number % 10;
        $number /= 10;
        $numberPosition += $digit*10**$k;
        if ($numberPosition === $initialNumber){
            return true;
        }
        $k++;
    }
    return false;
}



