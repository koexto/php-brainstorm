<?php
function reverse($number)
{
    $reverse = 0;
    while ($number >= 1) {
        $reverse = $reverse*10 + $number % 10;
        $number /= 10;
    }
    return $reverse;
}