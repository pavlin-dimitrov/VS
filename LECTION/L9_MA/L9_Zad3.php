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
$count = count($cars);
$sum = 0;
$sum_profit = 0;
?>

<table border="1">
	<thead>
		<tr>
			<th>Brand</th>
			<th>Model</th>
			<th>Year</th>
			<th>Price</th>
			<th>SOLD</th>
			<th>Profit</th>
		</tr>
	</thead>
	<tbody>
		
<?php
for ($i=0; $i < $count ; $i++) { 
		$profit = $cars[$i]['price']* $cars[$i]['cars_sold'];
		$cars[$i]['profit'] = $profit;
		echo "<tr>";
		$sum += $cars[$i]['cars_sold'];
		$sum_profit += $cars[$i]['profit'];

	foreach ($cars[$i] as $key => $value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>";
}
?>
		<tr>
			<td>Total cars sold</td>
			<td colspan="5"><?php echo $sum ?></td>
		</tr>
		<tr>
			<td>Total Profit</td>
			<td colspan="5"><?php echo $sum_profit ?></td>
		</tr>
	</tbody>
</table>