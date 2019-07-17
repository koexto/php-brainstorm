<?php
//Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.
for ($number=1000; $number < 10000; $number++) { 
    if(isInclude($number)){
        echo $number.PHP_EOL;
    }
}

function isInclude($number){
    while ($number >= 1) {
        $d = $number % 10;
        if ($d!==0 && $d!==2 && $d!==3 && $d!==7){
            return false;
        }
        $number = $number / 10;
    }
    return true;
}
