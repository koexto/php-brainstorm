<?php
//Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.
//нужно чтобы все цифры входили в каждое число (без повторов)
for ($number=1000; $number < 10000; $number++) {
    $one    = isInclude($number, 0);
    $two    = isInclude($number, 2);
    $three  = isInclude($number, 3);
    $seven  = isInclude($number, 7);

    if($one && $two && $three && $seven){
        echo $number.PHP_EOL;
    }
}

function isInclude($number, $includeDigit){
    while ($number >= 1) {
        $digit = $number % 10;
        if ($digit === $includeDigit){
            return true;
        }
        $number = $number / 10;
    }
    return false;
}
