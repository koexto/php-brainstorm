<?php
//Выяснить, есть ли в записи натурального числа N две одинаковые цифры.
$number = readline('Number: ');

if (isInclude($number)){
    echo 'yes';
}else{
    echo 'no';
}


function isInclude($number)
{
    while( $number >= 1 ){
        $digit = $number % 10;
        $number = $number / 10;
        if(isEqual($number, $digit)){
            return true;
        }
    }
    return false;
}
    
function isEqual($number, $prevDigit)
{
    while( $number >= 1 ){
        $digit = $number % 10;
        if ($prevDigit === $digit) {
            return true;
        }
        $number = $number / 10;
    }
    return false;
}


