<?php


// $car1 = [
// 	'brand' => 'Volvo',
// 	'model' => 'V50',
// 	'year_of_prod' => '2004',
// 	'price' => 5000,
// ];

// $car2 = [
// 	'brand' => 'BMW',
// 	'model' => 'M5',
// 	'year_of_prod' => '2010',
// 	'price' => 50000,
// ];

// $car3 = [
// 	'brand' => 'Mercedes',
// 	'model' => 'E63',
// 	'year_of_prod' => '2010',
// 	'price' => 50000,
// ];

$cars = [
	//0
	[
		'brand' => 'Volvo',
		'model' => 'V50',
		'year_of_prod' => '2004',
		'price' => 5000,	
	],
	//1
	[
		'brand' => 'BMW',
		'model' => 'M5',
		'year_of_prod' => '2010',
		'price' => 50000,	
	],
	//2
	[
		'brand' => 'Mercedes',
		'model' => 'E63',
		'year_of_prod' => '2010',
		'price' => 50000,	
	],	
];
$cars[1]['model'];
$cars[2]['year_of_prod'];
$cars[0]['brand'];

///////   FOREACH  ////////////

$num = 1;
// foreach ($cars as $key => $car) {
// 	echo "<pre>";
// 	var_dump($car);
// 	echo "</pre>";
// 	echo "car" . $num++ . "<br>";
// 	foreach ($car as $key => $value) {
// 		echo $value . '<br>';
// 	}
// }

///////   FOR  ////////////

$count = count($cars);
for ($i=0; $i < $count ; $i++) { 
	echo "<pre>";
	var_dump($cars[$i]);
	echo "</pre>";
	foreach ($cars[$i] as $key => $value) {
		echo $value . "</br>";
	}
}