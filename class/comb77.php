<?php
$string = '1234';
$deep = '3';
$combinations = array();

for ($i=0; $i <strlen($string) ; $i++) { 
    $combination = $string[$i];
    $string2 = substr($string, 0, $i) . substr($string, $i+1);
    echo "combination - $combination" . PHP_EOL;
    echo "string2 - $string2" . PHP_EOL;
    for ($k=0; $k < strlen($string2); $k++) { 
        $combination2 = $combination . $string2[$k];
        $string3 = substr($string2, 0, $k) . substr($string2, $k+1);
        echo "combination2 - $combination2" . PHP_EOL;
        echo "string3 - $string3" . PHP_EOL;
        for ($l=0; $l < strlen($string3); $l++) { 
            $combination3 = $combination2 . $string3[$l];
            echo $combination3 . PHP_EOL;
            $combinations[] = $combination3;
        }
    }
    

}
var_dump($combinations);