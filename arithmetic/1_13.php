<?php
//Определить, является ли число 2n m симметричным, т. е. запись числа содержит четное количество цифр и совпадают его левая и правая половинки.
$number = (int)readline('Number: ');
if (reverse($number) === $number){
    echo 'yes';
}else{
    echo 'no';
}

function reverse($number)
{
    $reverse = 0;
    while ($number >= 1) {
        $reverse = $reverse*10 + $number % 10;
        $number /= 10;
        $i++;
    }
    if ($i % 2 === 0){
        return $reverse;
    }
    return false;
}