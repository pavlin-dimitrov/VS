<?php

function sum_arrays_elements($m = [], $n = []){
	$result = [];
	if (count($m) > count($n)) {
		for ($i=0; $i < count($n) ; $i++) { 
			$m[$i] = $m[$i] + $n[$i];
		}
		$result = $m;
	} else {
		for ($i=0; $i < count($m); $i++) { 
			$n[$i] = $m[$i] + $n[$i];
		}
		$result = $n;
	}
	echo '[';
	$count = count($result);
	for ($j=0; $j < $count  ; $j++) { 
		echo $result[$j] . ', ';
	}
	echo ']';
}

$a = [2,11,2,3,0,2,];
$b = [0,4,7,0,1];

sum_arrays_elements($a, $b);


