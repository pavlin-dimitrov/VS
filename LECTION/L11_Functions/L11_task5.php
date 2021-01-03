<?php
$a = 10;
$b = 15;

function sum($a, $b){
	$sum = $a + $b;
	echo $sum;
}

sum($a, $b);

function sum_return($a, $b){
	$sum = $a + $b;
	return $sum;
}

echo sum_return($a, $b);