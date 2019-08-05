<?php
//В  массиве  А(N)  найти  максимальный  среди  четных  элементов  и  минимальный среди нечетных. 
$array = [44, 3, 4, 124, 55, 1, 447, 1, 124, 2, 21, 11];

minMaxElements($array);

function minMaxElements($array)
{
    for ($i=0; $i < count($array); $i++) {
        if ($array[$i] % 2 === 0){
            //if (!isset($maxEven)) $maxEven = $array[$i];
            //if ($maxEven < $array[$i]) $maxEven = $array[$i];
            echo maxEven();
        }else{
            echo minUneven();
        }
    }
}


function maxEven($i, $array)
{
    $maxEven = $array[$i];
    for($i = $i + 1; count($array), $i++){
        if ($array[$i] % 2 === 0){
            if ($maxEven < $array[$i])
                $maxEven = $array[$i];
        }

    }
    return $maxEven;
}

function minUneven($i, $array)
{
    $minUneven = $array[$i];
    for($i = $i + 1; count($array), $i++){
        if ($array[$i] % 2 !== 0){
            if ($minUneven > $array[$i])
                $minUneven = $array[$i];
        }

    }
    return $minUneven;
}
