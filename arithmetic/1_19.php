<?php
$n = 5;
$m = 23;

echo nok($n, $m);

function nok($n, $m){
    if ($m % $n === 0){
        return $m;
    }
    
    $nok = $m;
    while ($nok % $n !== 0){
        $nok += $m;
    }
    return $nok;
}