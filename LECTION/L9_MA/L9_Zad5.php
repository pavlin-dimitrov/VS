<?php
/*Създайте двумерен масив с инфо за 3 имена на ученици /5 ученика/, 4 оценки по предмета.
а/ Отпечатайте инфо, съдържащо се в масива в таблица.

б/ Изчислете средния успех на всеки уеник по съответния предмет.

в/ изчислете средния успех на учениците по съответния предмет.*/

$students = [
	[
		'student' => 'Student1',
		'result1' => 3,
		'result2' => 4,
		'result3' => 5,
		'result4' => 6,	
	],
		[
		'student' => 'Student2',
		'result1' => 3,
		'result2' => 5,
		'result3' => 5,
		'result4' => 6,		
	],
		[
		'student' => 'Student3',
		'result1' => 3,
		'result2' => 4,
		'result3' => 6,
		'result4' => 6,	
	],
		[
		'student' => 'Student4',
		'result1' => 3,
		'result2' => 4,
		'result3' => 4,
		'result4' => 6,		
	],
		[
		'student' => 'Student5',
		'result1' => 3,
		'result2' => 3,
		'result3' => 5,
		'result4' => 6,		
	],
];
$count = count($students);
$group_avg = 0;
?>

<table border="1">
	<thead>
		<tr>
			<th>STUDENT</th>
			<th>RESULT 1</th>
			<th>RESULT 2</th>
			<th>RESULT 3</th>
			<th>RESULT 4</th>
			<th>AVERAGE</th>
		</tr>
	</thead>
	<tbody>
		
<?php
for ($i=0; $i < $count ; $i++) { 
		$average =  ($students[$i]['result1']+ $students[$i]['result2']+ $students[$i]['result3']+ $students[$i]['result4'])/4;
		$students[$i]['average'] = $average;
		echo "<tr>";
		$group_avg += $students[$i]['average'];
	foreach ($students[$i] as $key => $value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>";
}
?>
		<tr>
			<td>Average for the group</td>
			<td colspan="5"><?php echo $group_avg/$count ?></td>
		</tr>
	</tbody>
</table>