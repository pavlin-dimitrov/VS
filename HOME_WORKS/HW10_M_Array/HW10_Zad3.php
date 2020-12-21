<?php
$people = [
	[
		'Names' => 'Ivan Ivanov Petrov',
		'Height' => 1.80,
		'Weight' => 90,	
	],
		[
		'Names' => 'Petar Petrov Ivanov',
		'Height' => 1.75,
		'Weight' => 75,	
	],
		[
		'Names' => 'Georgi Georgiev Jivkov',
		'Height' => 1.92,
		'Weight' => 104,
	],
		[
		'Names' => 'Dragomir Petkov Dimitrov',
		'Height' => 1.68,
		'Weight' => 70,		
	],
		[
		'Names' => 'Dimitar Nikolaev Kolev',
		'Height' => 1.70,
		'Weight' => 67,	
	],
];
$count = count($people);
$average_h = 0;
$average_w = 0;
$bmi = 0;
$avg_bmi = 0;
?>

<table border="1">
	<thead>
		<tr>
			<th>NAME</th>
			<th>HEIGHT</th>
			<th>WEIGHT</th>
			<th>BMI</th>
		</tr>
	</thead>
	<tbody>
		
<?php
for ($i=0; $i < $count ; $i++) { 
		$bmi = $people[$i]['Weight']/($people[$i]['Height']*$people[$i]['Height']);
		$people[$i]['bmi'] = round($bmi, 2);

		echo "<tr>";
		$average_h += $people[$i]['Height'];
		$average_w += $people[$i]['Weight'];
		$avg_bmi += $people[$i]['bmi'];
	foreach ($people[$i] as $key => $value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>";
}
?>
		<tr>
			<td>Average height</td>
			<td colspan="5" style="text-align: center;"><?php echo $average_h/$count . " m." ?></td>
		</tr>
		<tr>
			<td>Average weight</td>
			<td colspan="5" style="text-align: center; "><?php echo $average_w/$count . " kg." ?></td>
		</tr>
		<tr>
			<td>Average BMI</td>
			<td colspan="5" style="text-align: center; "><?php echo $avg_bmi/$count; ?></td>
		</tr>
	</tbody>
</table>