<?php
//Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.
$number = (int)readline('Number: ');
$numbers = [];
for ($i=1; $i<10; $i++){
	for($k=0; $k<10; $k++){
		for($l=0; $l<10; $l++){
			for($m=0; $m<10; $m++){
				if (($i+$k+$l+$m) === $number){
					$numbers[]=$i*1000 + $k*100 + $l*10 + $m;
				}
			}
		}
	}
}
var_dump($numbers);