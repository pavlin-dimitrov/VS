<?php
$cars = [
	//0
	[
		'brand' => 'Volvo',
		'model' => 'V50',
		'year_of_prod' => '2004',
		'price' => 5000,
		'cars_sold' => 100000,	
	],
	//1
	[
		'brand' => 'BMW',
		'model' => 'M5',
		'year_of_prod' => '2010',
		'price' => 50000,
		'cars_sold' => 100000,	
	],
	//2
	[
		'brand' => 'Mercedes',
		'model' => 'E63',
		'year_of_prod' => '2010',
		'price' => 50000,
		'cars_sold' => 100000,	
	],	
];
$cars[1]['model'];
$cars[2]['year_of_prod'];
$cars[0]['brand'];

echo "Brand: " . $cars[1]['brand'] . " model is: " . $cars[1]['model'] . " was made is " . $cars[1]['year_of_prod'] . " with price: " . $cars[1]['price'] . " were sold " . $cars[1]['cars_sold'] . " cars for 1 year!";