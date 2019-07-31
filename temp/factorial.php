<?php

factorial(4);
//разобраться
function factorial($number)
{
    while ($number >=1){
        echo $number.PHP_EOL;
        factorial($number-1);    
    } 
}