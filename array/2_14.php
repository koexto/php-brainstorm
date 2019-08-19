<?php
/*Разделить заданный массив А(N) на два массива:  
*   а) массив положительных и отрицательных элементов;  
*   б) массив четных и нечетных элементов.
*/

$array = [888, -3, 4, 124, -4, 1, 44, 1, 444, 2, 21, -11];

for ($i = 0; $i < count($array); $i++){
    if ($array[$i] % 2 === 0){
        $even[] = $array[$i];
    }else{
        $odd[] = $array[$i];
    }

    if ($array[$i] < 0){
        $negative[] = $array[$i];
    }
    if ($array[$i] > 0){
        $positive[] = $array[$i];
    }
}

print_r($positive);
print_r($negative);
print_r($even);
print_r($odd);
