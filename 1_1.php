<?php
//1.1 Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.
$number = readline('Number: ');
$count = 0;
while( $number > 1 ){
    if( $number % 10 < 5 ) {
    	$count++;
    }
    $number = $number / 10;
}
echo 'Count: '. $count . PHP_EOL;