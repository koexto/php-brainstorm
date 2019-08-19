<?php
//Определить,    есть  ли  среди  элементов  массива  А(N)  последовательность из k элементов, равных числу х.
$array = [888, -3, 4, 124, -4, 1, 44, 1, 444, 2, 21, -11];
$number = -34;

for ($i = 0; $i < count($array); $i++){
    if (sequence($array, $number, $i)){
        echo 'yes' . PHP_EOL;
    }
}

function sequence($array, $number, $key)
{   
    //первый элемент может быть отрицательным, а последующие нет, поэтому ислкючаем его из перебора и остальные элементы проверяем.
    $sequence = $array[$key];

    for ($i = $key+1; $i < count($array); $i++){
        if ($array[$i] < 0){
            return false;
        }

        //если длина последовательности больше длины проверяемого числа, дальнейший перебор не имеет смысла
        $sequence .= $array[$i];
        if (strlen($number) < strlen($sequence)){
            return false;
        }

        if ($number === intval($sequence)){
            return true;
        }
    }
}