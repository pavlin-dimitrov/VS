<?php
//Създаваме масив с произволни числа между 17 и 38, с дължина 90;
$arr = [];
$max_i = 1;
$min_i = 1;
for ($i=0; $i < 90; $i++) { 
	$value = rand(17, 38);
 	$arr[$i] = $value;
 	echo $arr[$i] . " ,";
}
echo "</br>";
echo "</br>";

// Изчисляваме средната аритметична стойност на масива;

echo "Average temp is: " . $avr = array_sum($arr)/count($arr);

echo "</br>";
echo "</br>";

// Сортираме данните в масива от най-голямо към най-малкол, отпечатваме 5-те най-големи стойности;

rsort($arr);
$top5 = array_slice($arr, 0, 5);
foreach ($top5 as $key => $val) {
	echo ' MAX t. '. $max_i . ' is: ' . "$val\n";
	$max_i++;
	echo "</br>";
}

echo "</br>";

// Сортираме данните в масива от най-малкол към най-голямо, отпечатваме 5-те най-малки стойности;

sort($arr);
$min5 = array_slice($arr, 0, 5);
foreach ($min5 as $key => $val) {
	echo ' MIN t. '. $min_i . ' is: ' . "$val\n";
	$min_i++;
	echo "</br>";
}